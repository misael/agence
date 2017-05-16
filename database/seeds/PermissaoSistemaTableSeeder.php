<?php

use Illuminate\Database\Seeder;

class PermissaoSistemaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissao_sistema')->delete();
        
        \DB::table('permissao_sistema')->insert(array (
            0 => 
            array (
                'co_usuario' => 'rodrigo.vilela',
                'co_tipo_usuario' => 1,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            1 => 
            array (
                'co_usuario' => 'civio.couto',
                'co_tipo_usuario' => 17,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            2 => 
            array (
                'co_usuario' => 'michel.moura',
                'co_tipo_usuario' => 1,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '2004-07-05 19:39:43',
            ),
            3 => 
            array (
                'co_usuario' => 'roberto.medeiros',
                'co_tipo_usuario' => 2,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '2004-01-14 19:25:15',
            ),
            4 => 
            array (
                'co_usuario' => 'denis.santos',
                'co_tipo_usuario' => 18,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'co_usuario' => 'fabio.stevanelli',
                'co_tipo_usuario' => 2,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'co_usuario' => 'luiz.paulo',
                'co_tipo_usuario' => 1,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'co_usuario' => 'alessandro.yamada',
                'co_tipo_usuario' => 17,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            8 => 
            array (
                'co_usuario' => 'carlos.arruda',
                'co_tipo_usuario' => 0,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            9 => 
            array (
                'co_usuario' => 'pana.esquivel',
                'co_tipo_usuario' => 2,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '2004-06-21 18:13:14',
            ),
            10 => 
            array (
                'co_usuario' => 'gustavo.alvares',
                'co_tipo_usuario' => 5,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            11 => 
            array (
                'co_usuario' => 'daniel.braga',
                'co_tipo_usuario' => 2,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            12 => 
            array (
                'co_usuario' => 'rui.hayashi',
                'co_tipo_usuario' => 1,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            13 => 
            array (
                'co_usuario' => 'leonardo.aguiar',
                'co_tipo_usuario' => 2,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '2003-10-01 09:08:10',
            ),
            14 => 
            array (
                'co_usuario' => 'edo.virgolim',
                'co_tipo_usuario' => 9,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '2004-07-27 09:33:17',
            ),
            15 => 
            array (
                'co_usuario' => 'rodrigo.lopes',
                'co_tipo_usuario' => 2,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            16 => 
            array (
                'co_usuario' => 'luciano.silva',
                'co_tipo_usuario' => 2,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            17 => 
            array (
                'co_usuario' => 'kaleb.reis',
                'co_tipo_usuario' => 5,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '2004-07-05 19:38:40',
            ),
            18 => 
            array (
                'co_usuario' => 'joe.colombo',
                'co_tipo_usuario' => 1,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            19 => 
            array (
                'co_usuario' => 'gustavo.gomes',
                'co_tipo_usuario' => 17,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            20 => 
            array (
                'co_usuario' => 'levi.marques',
                'co_tipo_usuario' => 6,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            21 => 
            array (
                'co_usuario' => 'elvis.rocha',
                'co_tipo_usuario' => 2,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            22 => 
            array (
                'co_usuario' => 'daniel.bispo',
                'co_tipo_usuario' => 2,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '2003-10-27 16:54:24',
            ),
            23 => 
            array (
                'co_usuario' => 'patricia.bezerra',
                'co_tipo_usuario' => 8,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '2003-12-01 19:19:38',
            ),
            24 => 
            array (
                'co_usuario' => 'alan.scofield',
                'co_tipo_usuario' => 8,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '2004-03-17 17:53:23',
            ),
            25 => 
            array (
                'co_usuario' => 'beatriz.arruda',
                'co_tipo_usuario' => 0,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '2003-10-28 11:07:29',
            ),
            26 => 
            array (
                'co_usuario' => 'marcelo.moreto',
                'co_tipo_usuario' => 2,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '2004-03-17 17:53:52',
            ),
            27 => 
            array (
                'co_usuario' => 'amarildo.souza',
                'co_tipo_usuario' => 8,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '2004-05-03 19:02:01',
            ),
            28 => 
            array (
                'co_usuario' => 'gesian.bender',
                'co_tipo_usuario' => 2,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '2004-03-17 17:54:30',
            ),
            29 => 
            array (
                'co_usuario' => 'ricardo.martins',
                'co_tipo_usuario' => 1,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            30 => 
            array (
                'co_usuario' => 'jeferson.golfetto',
                'co_tipo_usuario' => 3,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '2004-06-15 21:54:55',
            ),
            31 => 
            array (
                'co_usuario' => 'nixon.santos',
                'co_tipo_usuario' => 4,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            32 => 
            array (
                'co_usuario' => 'guilherme.marinho',
                'co_tipo_usuario' => 0,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            33 => 
            array (
                'co_usuario' => 'contato',
                'co_tipo_usuario' => 0,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            34 => 
            array (
                'co_usuario' => 'domicio.junior',
                'co_tipo_usuario' => 8,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            35 => 
            array (
                'co_usuario' => 'eduardo.botelho',
                'co_tipo_usuario' => 15,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            36 => 
            array (
                'co_usuario' => 'amanda.mendes',
                'co_tipo_usuario' => 10,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            37 => 
            array (
                'co_usuario' => 'lucas.marin',
                'co_tipo_usuario' => 4,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            38 => 
            array (
                'co_usuario' => 'janaina.vieira',
                'co_tipo_usuario' => 4,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            39 => 
            array (
                'co_usuario' => 'paulo.lima',
                'co_tipo_usuario' => 3,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '2004-07-20 17:09:30',
            ),
            40 => 
            array (
                'co_usuario' => 'breno.damasceno',
                'co_tipo_usuario' => 3,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            41 => 
            array (
                'co_usuario' => 'marco.malaquias',
                'co_tipo_usuario' => 13,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            42 => 
            array (
                'co_usuario' => 'lidnaldo.machado',
                'co_tipo_usuario' => 5,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '2004-08-03 09:58:32',
            ),
            43 => 
            array (
                'co_usuario' => 'luis.morales',
                'co_tipo_usuario' => 2,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            44 => 
            array (
                'co_usuario' => 'eder.lima',
                'co_tipo_usuario' => 4,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            45 => 
            array (
                'co_usuario' => 'rodrigo.moralles',
                'co_tipo_usuario' => 16,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            46 => 
            array (
                'co_usuario' => 'jesliel.rocha',
                'co_tipo_usuario' => 5,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            47 => 
            array (
                'co_usuario' => 'frederico.zapelini',
                'co_tipo_usuario' => 14,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            48 => 
            array (
                'co_usuario' => 'nivaldo.junior',
                'co_tipo_usuario' => 12,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            49 => 
            array (
                'co_usuario' => 'paulo.monteiro',
                'co_tipo_usuario' => 3,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            50 => 
            array (
                'co_usuario' => 'rodrigo.thome',
                'co_tipo_usuario' => 3,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            51 => 
            array (
                'co_usuario' => 'teste',
                'co_tipo_usuario' => 5,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '2004-10-04 13:33:31',
            ),
            52 => 
            array (
                'co_usuario' => 'teste',
                'co_tipo_usuario' => 0,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '2004-10-04 14:00:52',
            ),
            53 => 
            array (
                'co_usuario' => 'victor.rades',
                'co_tipo_usuario' => 3,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            54 => 
            array (
                'co_usuario' => 'teste1',
                'co_tipo_usuario' => 5,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '2004-10-04 14:44:05',
            ),
            55 => 
            array (
                'co_usuario' => 'teste1',
                'co_tipo_usuario' => 3,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '2004-10-04 15:36:29',
            ),
            56 => 
            array (
                'co_usuario' => 'teste1',
                'co_tipo_usuario' => 0,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '2004-10-04 16:27:29',
            ),
            57 => 
            array (
                'co_usuario' => 'niv',
                'co_tipo_usuario' => 3,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '2004-10-04 17:15:59',
            ),
            58 => 
            array (
                'co_usuario' => 'mauricio.costa',
                'co_tipo_usuario' => 2,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            59 => 
            array (
                'co_usuario' => 'novoteste',
                'co_tipo_usuario' => 2,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            60 => 
            array (
                'co_usuario' => 'teste.nivaldo',
                'co_tipo_usuario' => 2,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            61 => 
            array (
                'co_usuario' => 'teste.usuario',
                'co_tipo_usuario' => 2,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            62 => 
            array (
                'co_usuario' => 'lf.oliveira',
                'co_tipo_usuario' => 16,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            63 => 
            array (
                'co_usuario' => 'luciano.ribeiro',
                'co_tipo_usuario' => 3,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            64 => 
            array (
                'co_usuario' => 'rodrigo.oliveira',
                'co_tipo_usuario' => 5,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            65 => 
            array (
                'co_usuario' => 'cyntia.nakamura',
                'co_tipo_usuario' => 6,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            66 => 
            array (
                'co_usuario' => 'rodrigo.sousa',
                'co_tipo_usuario' => 15,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            67 => 
            array (
                'co_usuario' => 'thiago.jost',
                'co_tipo_usuario' => 4,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            68 => 
            array (
                'co_usuario' => 'carlos.carvalho',
                'co_tipo_usuario' => 1,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            69 => 
            array (
                'co_usuario' => 'marcio.lamego',
                'co_tipo_usuario' => 2,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            70 => 
            array (
                'co_usuario' => 'pedro.moretti',
                'co_tipo_usuario' => 5,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            71 => 
            array (
                'co_usuario' => 'carlos.viana',
                'co_tipo_usuario' => 2,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            72 => 
            array (
                'co_usuario' => 'cristiane.florio',
                'co_tipo_usuario' => 5,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            73 => 
            array (
                'co_usuario' => 'leandro.caracciolo',
                'co_tipo_usuario' => 10,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            74 => 
            array (
                'co_usuario' => 'ricardo.rubini',
                'co_tipo_usuario' => 15,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            75 => 
            array (
                'co_usuario' => 'edy.bruno',
                'co_tipo_usuario' => 2,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            76 => 
            array (
                'co_usuario' => 'teste.usu2',
                'co_tipo_usuario' => 2,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            77 => 
            array (
                'co_usuario' => 'julio.santos',
                'co_tipo_usuario' => 4,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            78 => 
            array (
                'co_usuario' => 'francisco.ogatha',
                'co_tipo_usuario' => 16,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            79 => 
            array (
                'co_usuario' => 'rodrigo.paulino',
                'co_tipo_usuario' => 5,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            80 => 
            array (
                'co_usuario' => 'glauco.sassaki',
                'co_tipo_usuario' => 9,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            81 => 
            array (
                'co_usuario' => 'rodrigo.areco',
                'co_tipo_usuario' => 12,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            82 => 
            array (
                'co_usuario' => 'marcio.paulino',
                'co_tipo_usuario' => 15,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            83 => 
            array (
                'co_usuario' => 'bruno.freitas',
                'co_tipo_usuario' => 1,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            84 => 
            array (
                'co_usuario' => 'jonatan.perim',
                'co_tipo_usuario' => 5,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            85 => 
            array (
                'co_usuario' => 'dimas.junior',
                'co_tipo_usuario' => 11,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            86 => 
            array (
                'co_usuario' => 'rodrigo.toledo',
                'co_tipo_usuario' => 13,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'contato',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            87 => 
            array (
                'co_usuario' => 'fernando.marinho',
                'co_tipo_usuario' => 1,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            88 => 
            array (
                'co_usuario' => 'camila.candido',
                'co_tipo_usuario' => 14,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            89 => 
            array (
                'co_usuario' => 'daniel.pires',
                'co_tipo_usuario' => 15,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            90 => 
            array (
                'co_usuario' => 'fabiano.pontes',
                'co_tipo_usuario' => 2,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            91 => 
            array (
                'co_usuario' => 'marcelo.madruga',
                'co_tipo_usuario' => 9,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            92 => 
            array (
                'co_usuario' => 'fabricio.silveira',
                'co_tipo_usuario' => 13,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            93 => 
            array (
                'co_usuario' => 'liana.duenha',
                'co_tipo_usuario' => 1,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            94 => 
            array (
                'co_usuario' => 'alex.wassano',
                'co_tipo_usuario' => 5,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            95 => 
            array (
                'co_usuario' => 'felipe.correa',
                'co_tipo_usuario' => 16,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'contato',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            96 => 
            array (
                'co_usuario' => 'og.menezes',
                'co_tipo_usuario' => 5,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            97 => 
            array (
                'co_usuario' => 'michele.freitas',
                'co_tipo_usuario' => 14,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            98 => 
            array (
                'co_usuario' => 'felipe.chahad',
                'co_tipo_usuario' => 2,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            99 => 
            array (
                'co_usuario' => 'paulo.moacir',
                'co_tipo_usuario' => 11,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            100 => 
            array (
                'co_usuario' => 'eric.shibayama',
                'co_tipo_usuario' => 14,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            101 => 
            array (
                'co_usuario' => 'wagner.alves',
                'co_tipo_usuario' => 15,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            102 => 
            array (
                'co_usuario' => 'abner.silva',
                'co_tipo_usuario' => 9,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            103 => 
            array (
                'co_usuario' => 'wilfried.schooneman',
                'co_tipo_usuario' => 2,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            104 => 
            array (
                'co_usuario' => 'jefferson.silva',
                'co_tipo_usuario' => 16,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            105 => 
            array (
                'co_usuario' => 'anapaula.chiodaro',
                'co_tipo_usuario' => 2,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            106 => 
            array (
                'co_usuario' => 'marcel.sobral',
                'co_tipo_usuario' => 2,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            107 => 
            array (
                'co_usuario' => 'raphael.araujo',
                'co_tipo_usuario' => 13,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            108 => 
            array (
                'co_usuario' => 'helsen.rossi',
                'co_tipo_usuario' => 6,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            109 => 
            array (
                'co_usuario' => 'alessandro.gonzalez',
                'co_tipo_usuario' => 5,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            110 => 
            array (
                'co_usuario' => 'alexandre.rodrigues',
                'co_tipo_usuario' => 2,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            111 => 
            array (
                'co_usuario' => 'agence.ms',
                'co_tipo_usuario' => 1,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            112 => 
            array (
                'co_usuario' => 'tiago.stutz',
                'co_tipo_usuario' => 14,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            113 => 
            array (
                'co_usuario' => 'davys.fellipe',
                'co_tipo_usuario' => 14,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            114 => 
            array (
                'co_usuario' => 'fernando.cezar',
                'co_tipo_usuario' => 14,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'contato',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            115 => 
            array (
                'co_usuario' => 'ricardo.silva',
                'co_tipo_usuario' => 14,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            116 => 
            array (
                'co_usuario' => 'saulo.coelho',
                'co_tipo_usuario' => 16,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            117 => 
            array (
                'co_usuario' => 'rodrigo.soler',
                'co_tipo_usuario' => 14,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            118 => 
            array (
                'co_usuario' => 'heber.moreira',
                'co_tipo_usuario' => 15,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            119 => 
            array (
                'co_usuario' => 'ricardo.burile',
                'co_tipo_usuario' => 9,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'contato',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            120 => 
            array (
                'co_usuario' => 'moises.rovani',
                'co_tipo_usuario' => 15,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            121 => 
            array (
                'co_usuario' => 'rafael.sierra',
                'co_tipo_usuario' => 13,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            122 => 
            array (
                'co_usuario' => 'leonardo.silva',
                'co_tipo_usuario' => 14,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            123 => 
            array (
                'co_usuario' => 'marcelo.luz',
                'co_tipo_usuario' => 13,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            124 => 
            array (
                'co_usuario' => 'alfeu.vilela',
                'co_tipo_usuario' => 2,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            125 => 
            array (
                'co_usuario' => 'jonas.morais',
                'co_tipo_usuario' => 12,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'contato',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            126 => 
            array (
                'co_usuario' => 'aline.chastel',
                'co_tipo_usuario' => 1,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            127 => 
            array (
                'co_usuario' => 'marcio.oliveira',
                'co_tipo_usuario' => 10,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'contato',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            128 => 
            array (
                'co_usuario' => 'renato.pereira',
                'co_tipo_usuario' => 2,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            129 => 
            array (
                'co_usuario' => 'jesse.lucas',
                'co_tipo_usuario' => 13,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            130 => 
            array (
                'co_usuario' => 'gabriel.verta',
                'co_tipo_usuario' => 13,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            131 => 
            array (
                'co_usuario' => 'camilo.silveira',
                'co_tipo_usuario' => 9,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            132 => 
            array (
                'co_usuario' => 'evandro.santos',
                'co_tipo_usuario' => 16,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            133 => 
            array (
                'co_usuario' => 'fernanda.barbosa',
                'co_tipo_usuario' => 13,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            134 => 
            array (
                'co_usuario' => 'gustavo.buquio',
                'co_tipo_usuario' => 15,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'contato',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            135 => 
            array (
                'co_usuario' => 'luiz.cortez',
                'co_tipo_usuario' => 16,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            136 => 
            array (
                'co_usuario' => 'jefter.fontes',
                'co_tipo_usuario' => 5,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            137 => 
            array (
                'co_usuario' => 'ricardo.perez',
                'co_tipo_usuario' => 12,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            138 => 
            array (
                'co_usuario' => 'andre.bandera',
                'co_tipo_usuario' => 4,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'contato',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            139 => 
            array (
                'co_usuario' => 'vanessa.souza',
                'co_tipo_usuario' => 11,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'contato',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            140 => 
            array (
                'co_usuario' => 'rodrigo.miranda',
                'co_tipo_usuario' => 15,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            141 => 
            array (
                'co_usuario' => 'regiane.domingo',
                'co_tipo_usuario' => 5,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'contato',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            142 => 
            array (
                'co_usuario' => 'fabio.martins',
                'co_tipo_usuario' => 6,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            143 => 
            array (
                'co_usuario' => 'caio.salim',
                'co_tipo_usuario' => 9,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            144 => 
            array (
                'co_usuario' => 'rodrigo.sansao',
                'co_tipo_usuario' => 12,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            145 => 
            array (
                'co_usuario' => 'angelina.oshiro',
                'co_tipo_usuario' => 11,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            146 => 
            array (
                'co_usuario' => 'andre.tinchant',
                'co_tipo_usuario' => 14,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            147 => 
            array (
                'co_usuario' => 'ravi.rauber',
                'co_tipo_usuario' => 4,
                'co_sistema' => 1,
                'in_ativo' => 'N',
                'co_usuario_atualizacao' => 'contato',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            148 => 
            array (
                'co_usuario' => 'andrew.silva',
                'co_tipo_usuario' => 10,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'carlos.arruda',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            149 => 
            array (
                'co_usuario' => 'leandro.duprat',
                'co_tipo_usuario' => 12,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'contato',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
            150 => 
            array (
                'co_usuario' => 'silvio.maraes',
                'co_tipo_usuario' => 2,
                'co_sistema' => 1,
                'in_ativo' => 'S',
                'co_usuario_atualizacao' => 'contato',
                'dt_atualizacao' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}
