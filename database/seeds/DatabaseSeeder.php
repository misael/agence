<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('CaoUsuarioTableSeeder');
        $this->call('CaoFaturaTableSeeder');
        $this->call('CaoOsTableSeeder');
        $this->call('CaoSalarioTableSeeder');
        $this->call('TipoUsuarioTableSeeder');
        $this->call('PermissaoSistemaTableSeeder');
    }
}
