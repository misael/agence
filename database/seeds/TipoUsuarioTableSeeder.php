<?php

use Illuminate\Database\Seeder;

class TipoUsuarioTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tipo_usuario')->delete();
        
        \DB::table('tipo_usuario')->insert(array (
            0 => 
            array (
                'co_tipo_usuario' => 0,
                'ds_tipo_usuario' => 'Administração',
                'co_sistema' => 2,
            ),
            1 => 
            array (
                'co_tipo_usuario' => 1,
                'ds_tipo_usuario' => 'Consulta',
                'co_sistema' => 2,
            ),
            2 => 
            array (
                'co_tipo_usuario' => 2,
                'ds_tipo_usuario' => 'Apoio',
                'co_sistema' => 2,
            ),
            3 => 
            array (
                'co_tipo_usuario' => 0,
                'ds_tipo_usuario' => 'Administração',
                'co_sistema' => 3,
            ),
            4 => 
            array (
                'co_tipo_usuario' => 1,
                'ds_tipo_usuario' => 'Consulta',
                'co_sistema' => 3,
            ),
            5 => 
            array (
                'co_tipo_usuario' => 2,
                'ds_tipo_usuario' => 'Apoio',
                'co_sistema' => 3,
            ),
            6 => 
            array (
                'co_tipo_usuario' => 0,
                'ds_tipo_usuario' => 'Gerente de Escritório',
                'co_sistema' => 1,
            ),
            7 => 
            array (
                'co_tipo_usuario' => 1,
                'ds_tipo_usuario' => 'Coordenador de TI',
                'co_sistema' => 1,
            ),
            8 => 
            array (
                'co_tipo_usuario' => 2,
                'ds_tipo_usuario' => 'Consultor de Negócios',
                'co_sistema' => 1,
            ),
            9 => 
            array (
                'co_tipo_usuario' => 4,
                'ds_tipo_usuario' => 'Estagiário I',
                'co_sistema' => 1,
            ),
            10 => 
            array (
                'co_tipo_usuario' => 5,
                'ds_tipo_usuario' => 'Estagiário II',
                'co_sistema' => 1,
            ),
            11 => 
            array (
                'co_tipo_usuario' => 6,
                'ds_tipo_usuario' => 'Estagiário III',
                'co_sistema' => 1,
            ),
            12 => 
            array (
                'co_tipo_usuario' => 9,
                'ds_tipo_usuario' => 'Designer I',
                'co_sistema' => 1,
            ),
            13 => 
            array (
                'co_tipo_usuario' => 10,
                'ds_tipo_usuario' => 'Designer II',
                'co_sistema' => 1,
            ),
            14 => 
            array (
                'co_tipo_usuario' => 11,
                'ds_tipo_usuario' => 'Analista Júnior I',
                'co_sistema' => 1,
            ),
            15 => 
            array (
                'co_tipo_usuario' => 12,
                'ds_tipo_usuario' => 'Analista Júnior II',
                'co_sistema' => 1,
            ),
            16 => 
            array (
                'co_tipo_usuario' => 13,
                'ds_tipo_usuario' => 'Analista Júnior III',
                'co_sistema' => 1,
            ),
            17 => 
            array (
                'co_tipo_usuario' => 14,
                'ds_tipo_usuario' => 'Analista Pleno I',
                'co_sistema' => 1,
            ),
            18 => 
            array (
                'co_tipo_usuario' => 15,
                'ds_tipo_usuario' => 'Analista Pleno II',
                'co_sistema' => 1,
            ),
            19 => 
            array (
                'co_tipo_usuario' => 16,
                'ds_tipo_usuario' => 'Analista Pleno III',
                'co_sistema' => 1,
            ),
            20 => 
            array (
                'co_tipo_usuario' => 17,
                'ds_tipo_usuario' => 'Analista Senior I',
                'co_sistema' => 1,
            ),
            21 => 
            array (
                'co_tipo_usuario' => 18,
                'ds_tipo_usuario' => 'Analista Senior II',
                'co_sistema' => 1,
            ),
            22 => 
            array (
                'co_tipo_usuario' => 19,
                'ds_tipo_usuario' => 'Analista Senior III',
                'co_sistema' => 1,
            ),
        ));
        
        
    }
}
