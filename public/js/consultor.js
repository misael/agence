toastr.options = {"newestOnTop": false, "progressBar": true, "positionClass": "toast-bottom-right","preventDuplicates": true, "showDuration": 1000};

$('#_desde,#_hasta').datepicker({
            clearDate :false,
            autoclose :true,
            language :'es',
            todayHighlight:true,
            orientation: 'auto top'
})
$("#_consultor").select2();
$("#_consultor span").eq(0).css("width","100%");
$('#_desde').val(fechaF(new Date()))
$('#_hasta').val(fechaF(new Date()))

$("#_consultor").on("change",function(){
  //$("#_buscar").trigger("click");
  var _sw=0;
  $("#_consultor option:selected").each(function(index){
     _sw=1;
  });  

  if (_sw==0){
    $("#_div_datos").html(''); 
    $("#div_pizza").hide(); 
    $("#_div_datos").hide();
  }
});

$("#_buscar").on("click", function(){
    var _desde =fechaYMD($("#_desde").val(),'-');
    var _hasta =fechaYMD($("#_hasta").val(),'-');
    var sw=0;
    $("#_div_datos").html(''); 
    if($("#_desde").val()=='' || $("#_hasta").val()==''){
      toastr.warning('La fecha no puede estar vacia');
      return false;
    }
    if(comparaFechas(_desde, _hasta)==-1){
      toastr.warning('Fecha final debe ser mayor a la inicial');
      return false;
    }
    $("#_consultor option:selected").each(function(index,val){
       sw=1;
    }); 
    if(sw==0){
      toastr.warning('Debe seleccionar un consultor');
      return false;
    }
    _listar();
  
 });

 function _listar(){
    var ruta = "buscar_datos/{desde}/{hasta}/{consultores}";
    var _res = '';
    var _cons = '';
    var _consultor = new Array();
    var _arr_con   = new Array();
    var _ganancia=0;
    var _costo=0;
    var _comision=0;
    var _beneficio=0;
    var _desde =fechaYMD($("#_desde").val(),'-');
    var _hasta =fechaYMD($("#_hasta").val(),'-');

    $("#_consultor option:selected").each(function(index,val){
       _arr_con[index] = $(this).attr('value');
    });  

    $.ajax({
    async: false,
        url: ruta,
        type: 'get',
        dataType: "json",
        data:{"desde":_desde, "hasta":_hasta,"consultores":_arr_con},
        success: function(data) {
          if(data.length>0)
          {
            $("#_div_datos").html(''); 
            $.each(data, function(i,v){
              if(_cons != v.no_usuario){
                _cons = v.no_usuario;
                _consultor.push(v.no_usuario);
              }
            });
             _res='';
            for (i in _consultor){
                _res +='<table class="table table-bordered table-striped ">';
                _res +='<thead><tr><th colspan="5" class="text-izq">'+_consultor[i]+'</th></tr>';
                _res +='<tr><th>Periodos</th><th>Ganancia Neta</th><th>Costo Fijo</th><th>Comision</th><th>Beneficio</th></tr></thead>';
                _res +='<tbody>';
             
                for (k in data){
                  if(data[k].no_usuario == _consultor[i]){
                    _class='';

                    _res += '<tr class="odd gradeX">';
          
                    _res += '<td width="30%">'+data[k].data_emissao2+'</td>';
                     if(parseInt(data[k].ganancia_neta)<0) _class=' text-danger';
                    _res += '<td width="17%" class="text-der '+_class+'">'+formatNum(parseInt(data[k].ganancia_neta),'2','.',',')+'</td>';
                    if(parseInt(data[k].costo_fijo)<0) _class=' text-danger';
                    _res += '<td width="18%" class="text-der '+_class+'"> -'+formatNum(parseInt(data[k].costo_fijo),'2','.',',')+'</td>';
                    if(parseInt(data[k].comision)<0) _class=' text-danger';
                    _res += '<td width="17%" class="text-der '+_class+'"> -'+formatNum(parseInt(data[k].comision),'2','.',',')+'</td>';
                    if(parseInt(data[k].beneficio)<0) _class=' text-danger';
                    _res += '<td width="18%" class="text-der '+_class+'">'+(_class==' text-danger'?'-':'')+formatNum(parseInt(data[k].beneficio),'2','.',',')+'</td>';
                    _res += '</tr>';
                    _class='';

                    _ganancia = (_ganancia+data[k].ganancia_neta);
                    _costo = (_costo+data[k].costo_fijo);
                    _comision = (_comision+data[k].comision);
                    _beneficio = (_beneficio+data[k].beneficio);
                  }

                }
                _res += '<tr class="odd gradeX">';
                _res += '<td width="30%"><strong>Saldo</strong></td>';
                _res += '<td width="17%" class="text-der in-progress"><strong>'+formatNum(parseInt(_ganancia),'2','.',',')+'</strong></td>';
                _res += '<td width="18%" class="text-der"><strong>'+formatNum(parseInt(_costo),'2','.',',')+'</strong></td>';
                _res += '<td width="17%" class="text-der"><strong>'+formatNum(parseInt(_comision),'2','.',',')+'</strong></td>';
                _res += '<td width="18%" class="text-der"><strong>'+formatNum(parseInt(_beneficio),'2','.',',')+'</strong></td>';
                _res += '</tr>';
            
                _res += '</tbody></table>';
                k=0;
                _ganancia=0;_costo=0; _comision=0;_beneficio=0;
            }
            $("#div_pizza").hide(); 
            $("#_div_datos").html(_res); 
            $("#_div_datos").show(); 

          }else{
            toastr.warning('No hay datos que mostrar');   
          }
        }
    });
 }



//Grafica Pizza
$("#_torta").on("click", function(){
    var _desde =fechaYMD($("#_desde").val(),'-');
    var _hasta =fechaYMD($("#_hasta").val(),'-');
    var sw=0;
    $("#_div_datos").html(''); 
    if($("#_desde").val()=='' || $("#_hasta").val()==''){
      toastr.warning('La fecha no puede estar vacia');
      return false;
    }
    if(comparaFechas(_desde, _hasta)==-1){
      toastr.warning('Fecha final debe ser mayor a la inicial');
      return false;
    }
    $("#_consultor option:selected").each(function(index,val){
       sw=1;
    }); 
    if(sw==0){
      toastr.warning('Debe seleccionar un consultor');
      return false;
    }

    _torta();
  
 });
 function _torta(){
    var ruta = "pizza/{desde}/{hasta}/{consultores}";
    var _desde =fechaYMD($("#_desde").val(),'-');
    var _hasta =fechaYMD($("#_hasta").val(),'-');
    var _arr_con =new Array();
    var _datos;

    $("#_consultor option:selected").each(function(index,val){
       _arr_con[index] = $(this).attr('value');
    });  


  $.ajax({
    async: false,
        url: ruta,
        type: 'get',
        dataType: "json",
        data:{"desde":_desde, "hasta":_hasta,"consultores":_arr_con},
        success: function(_data) {
          if(_data.length>0)
          {

                 $('#_pizza').highcharts({
                      chart: {
                          type: 'pie',
                          options3d: {
                              enabled: true,
                              alpha: 45,
                              beta: 0
                          }
                      },
                      title: {
                          text: 'Ganancias Netas por Consultores'
                      },
                      tooltip: {
                          pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                      },
                      plotOptions: {
                          pie: {
                              allowPointSelect: true,
                              cursor: 'pointer',
                              depth: 35,
                              dataLabels: {
                                  enabled: true,
                                  format: '{point.name}: <b>{point.percentage:.1f}%</b>'
                              }
                          }
                      },
                      series: [{
                          type: 'pie',
                          name: 'Browser share',
                          data: _data
                      }]
                  });

          $("#_div_datos").hide(); 
          $("#div_pizza").show(); 

          }else{
            toastr.warning('No hay datos que mostrar');   
          }
        }
  });

}
//Grafica Barra
$("#_grafico").on("click", function(){
    var _desde =fechaYMD($("#_desde").val(),'-');
    var _hasta =fechaYMD($("#_hasta").val(),'-');
    var sw=0;
    $("#_div_datos").html(''); 
    if($("#_desde").val()=='' || $("#_hasta").val()==''){
      toastr.warning('La fecha no puede estar vacia');
      return false;
    }
    if(comparaFechas(_desde, _hasta)==-1){
      toastr.warning('Fecha final debe ser mayor a la inicial');
      return false;
    }
    $("#_consultor option:selected").each(function(index,val){
       sw=1;
    }); 
    if(sw==0){
      toastr.warning('Debe seleccionar un consultor');
      return false;
    }

    _barra();
  
 });
function _barra(){
    var ruta = "barra/{desde}/{hasta}/{consultores}";
    var _desde =fechaYMD($("#_desde").val(),'-');
    var _hasta =fechaYMD($("#_hasta").val(),'-');
    var _arr_con =new Array();
    var _datos;

    $("#_consultor option:selected").each(function(index,val){
       _arr_con[index] = $(this).attr('value');
    });  


  $.ajax({
    async: false,
        url: ruta,
        type: 'get',
        dataType: "json",
        data:{"desde":_desde, "hasta":_hasta,"consultores":_arr_con},
        success: function(_data) {
      
          if(_data.resultado==0){
              toastr.warning('No hay datos que mostrar'); 
          }else{
            $('#_pizza').highcharts({
                chart: {
                    zoomType: 'xy'
                },
                title: {
                    text: 'Balance de ganancia de '+_data.primero+' a '+_data.ultimo
                },
                xAxis: [{
                    categories: _data.categoria
                }],
                yAxis: [{ // Primary yAxis
                    labels: {
                        format: '$R {value}',
                        style: {
                            color: Highcharts.getOptions().colors[1]
                        }
                    }
                }],

                series:_data.data
            });

          $("#_div_datos").hide(); 
          $("#div_pizza").show(); 
        }
       } 
    });
  
}

function formatNum(num,dec,sepMil,sepDec)
{
  var x=num;
  x=x.toString();
  x=x.replace(',','');
  x=parseFloat(x);

  if (!sepMil) sepMil='';
  if (!sepDec) sepDec='';

  if (!dec) dec=0;

  if (dec)
  {
    x = Math.round(x * Math.pow(10,dec)) / Math.pow(10,dec);
  }

  var v=x.toString();
  var a=v.split('.');

  if (a=='NaN') a[0]='0';
  var e=a[0];
  if (!e) e='0';
  var d;
  if (a[1]) d=a[1];
  else d='';
  while (d.length<dec) d=d+'0';

  var ne='';
  var c=0;
  for (var i=e.length-1;i>=0;i--)
  {
    if (c==3)
    {
      ne=sepMil+ne;
      c=0;
    }
    ne=e.substr(i,1)+ne;
    c++;
  }
  ne = ne.replace('-.','');
  ne = ne.replace('-.','');
  var res=ne + sepDec + d;
  res=res.replace('-,','-');
  return "R$ "+res;
}
function comparaFechas(d1,d2) //Valida si Fecha d1 es menor que d2
{
    if(!d1 || !d2) return 1;
    /*if (trim(d1)=='/  /') return 1;
    if (trim(d2)=='') return 1;
    if (trim(d2)=='/  /') return 1;*/
    var v = (fechaYMD(d2)-fechaYMD(d1));
 
    if(v>0) return 1
    if(v==0) return 0
    if(v<0) return -1
}
function compare_dates(fecha, fecha2)
{
    var xMonth=fecha.substring(3, 5);
    var xDay=fecha.substring(0, 2);
    var xYear=fecha.substring(6,10);
    var yMonth=fecha2.substring(3, 5);
    var yDay=fecha2.substring(0, 2);
    var yYear=fecha2.substring(6,10);

    if (xYear> yYear)
    {
        return(true)
    }
    else
    {
      if (xYear == yYear)
      {
        if (xMonth> yMonth)
        {
            return(true)
        }
        else
        {
          if (xMonth == yMonth)
          {
            if (xDay > yDay)
              return(true);
          else
              return(false);
      }
      else
        return(false);
}
}
else
    return(false);
}
}
function fechaF(fecha){
    var today = new Date(fecha);
    var dd = today.getDate();
    var mm = today.getMonth()+1;//January is 0!
    var yyyy = today.getFullYear();
    if(dd<10){dd='0'+dd}
    if(mm<10){mm='0'+mm}
    
    return dd+'/'+mm+'/'+yyyy;
 }
function fechaYMD(fecha,ope = '/'){
       var sep;

       if(fecha.search('/')!=-1) sep='/';
       if(fecha.search('-')!=-1) sep='-';

       var fe=fecha.split(sep);

       return fe[2]+ope+fe[1]+ope+fe[0];
}
