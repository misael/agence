<?php

use Illuminate\Database\Seeder;

class CaoSalarioTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cao_salario')->delete();
        
        \DB::table('cao_salario')->insert(array (
            0 => 
            array (
                'co_usuario' => 'edo.virgolim',
                'dt_alteracao' => '2003-11-05',
                'brut_salario' => 0,
                'liq_salario' => 0,
            ),
            1 => 
            array (
                'co_usuario' => 'carlos.arruda',
                'dt_alteracao' => '2007-09-11',
                'brut_salario' => 2683,
                'liq_salario' => 2300,
            ),
            2 => 
            array (
                'co_usuario' => 'anapaula.chiodaro',
                'dt_alteracao' => '2007-09-11',
                'brut_salario' => 2566,
                'liq_salario' => 2200,
            ),
            3 => 
            array (
                'co_usuario' => 'renato.pereira',
                'dt_alteracao' => '2007-09-10',
                'brut_salario' => 2566,
                'liq_salario' => 2200,
            ),
            4 => 
            array (
                'co_usuario' => 'fernanda.barbosa',
                'dt_alteracao' => '2007-09-13',
                'brut_salario' => 1750,
                'liq_salario' => 1500,
            ),
            5 => 
            array (
                'co_usuario' => 'carlos.carvalho',
                'dt_alteracao' => '2007-04-11',
                'brut_salario' => 2566,
                'liq_salario' => 2200,
            ),
        ));
        
        
    }
}
