<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class ConsultorController extends Controller
{
	public function listar()
	{
		$user =  DB::table('cao_usuario')
					->join('permissao_sistema', 'permissao_sistema.co_usuario', '=', 'cao_usuario.co_usuario')
					->select(['cao_usuario.co_usuario', 'cao_usuario.no_usuario'])
					->wherein('permissao_sistema.co_tipo_usuario',[0,1,2])
					->where('permissao_sistema.co_sistema',1)
					->where('permissao_sistema.in_ativo','S')
					->get();

    	return view('consultor', compact('user'));
	}

	public function buscar_datos(Request $request){
		DB::select("SET lc_time_names = 'es_VE'");
		$datos = DB::table('datos_ganancia')
					->select(DB::raw('CONCAT(UPPER(LEFT(DATE_FORMAT(data_emissao,"%M de %Y"),1)),SUBSTR(DATE_FORMAT(data_emissao,"%M de %Y"),2)) as data_emissao2, data_emissao,no_usuario, co_usuario, ganancia_neta, costo_fijo, comision, beneficio'))
					->whereIn('co_usuario', $request->consultores)
					->whereDate('data_emissao','>=',$request->desde)
					->whereDate('data_emissao','<=',$request->hasta)
					->get();

		return response()->json($datos);
	}

	public function pizza(Request $request)
	{
			$datos = DB::table('datos_pizza')
					->select(DB::raw('name, sum(y) as y'))
					->whereIn('co_usuario', $request->consultores)
					->whereDate('data_emissao','>=',$request->desde)
					->whereDate('data_emissao','<=',$request->hasta)
					->groupBy('name')
					->get();

    	return response()->json($datos);
	}

	public function barra(Request $request)
	{
		//arreglo meses
		DB::select("SET lc_time_names = 'es_VE'");

		$meses = DB::table('meses')
					->select('*')
					->whereIn('co_usuario', $request->consultores)
					->whereDate('data_emissao2','>=',$request->desde)
					->whereDate('data_emissao2','<=',$request->hasta)
					->groupBy('data_emissao')
					->orderBy('data_emissao')
					->get();
		if(count($meses)==0){
			return json_encode(array("resultado"=>0));
		}	

		//sueldo promedio
		$salario = DB::table('cao_fatura')
					->join('cao_os', 'cao_fatura.co_os', '=', 'cao_os.co_os')
					->join('cao_usuario', 'cao_os.co_usuario', '=', 'cao_usuario.co_usuario')
					->join('cao_salario', 'cao_os.co_usuario', '=', 'cao_salario.co_usuario')
					->select(DB::raw('DISTINCT(cao_usuario.co_usuario) as usuario, cao_salario.brut_salario as salario'))
					->whereIn('cao_usuario.co_usuario', $request->consultores)
					->groupBy('cao_usuario.co_usuario')
					->orderBy('cao_usuario.co_usuario')
					->get();
		
		$sal_prom=0;
		foreach ($salario as $key => $v) {
			$sal_prom+=$v->salario;
		}
		$sal_prom=$sal_prom/count($request->consultores);
	
		//Meses de la consulta
		$arr_mes = array();
		$sw_mes=0;
		$primer_mes=''; 
		$ult_mes='';

		foreach ($meses as $key => $mes) {
			$arr_mes[] = $mes->mes;
			if($sw_mes==0)
				$primer_mes = $mes->fecha;

			$sw_mes=1;
			$ult_mes = $mes->fecha;
		}

		//Series de la grafica (series de colum)
		$arr_promedio = array();
		$sw = 0; 
		$nombre='';
		$arrChart = array();
		foreach ($request->consultores as $key => $usuario) {
			$arr_data = array();
			foreach ($meses as $key => $mes) {

				$datos = DB::table('datos_ganancia')
					->select(DB::raw('no_usuario  as name, co_usuario,data_emissao2,ROUND(sum(valor-total_imp_inc),2) as ganancia'))
					->where('co_usuario','=', $usuario)
					->where(DB::raw('DATE_FORMAT(data_emissao,"%Y-%m")'),'=',$mes->data_emissao)
					->groupBy('co_usuario')
					->get();
				if(count($datos)>0){
					$arr_data[] = $datos[0]->ganancia;
				}else{
					$arr_data[] = 0;
				}

				if($sw==0)
					$arr_promedio[] = $sal_prom;
				
			}
			$sw=1;
			$arrChart[] = array('type' => 'column',"name" => $usuario, "data" => $arr_data);
		}
		//Serie del promedio
		$arrChart[] = array('type' => 'spline',"name" => "Costo Fijo Promedio", "data" => $arr_promedio);	

    	return json_encode(array("data"=>$arrChart, "categoria"=>$arr_mes,"primero"=>$primer_mes, "ultimo"=>$ult_mes),JSON_NUMERIC_CHECK);
	}

}