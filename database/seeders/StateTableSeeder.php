<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('state')->insert([
            [
                'id' => 1,
                'name' => 'Acre',
                'uf' => 'AC',
                'ibge' => 12,
                'country' => 1,
                'ddd' => '68'
            ],
            [
                'id' => 2,
                'name' => 'Alagoas',
                'uf' => 'AL',
                'ibge' => 27,
                'country' => 1,
                'ddd' => '82'
            ],
            [
                'id' => 3,
                'name' => 'Amazonas',
                'uf' => 'AM',
                'ibge' => 13,
                'country' => 1,
                'ddd' => '97,92'
            ],
            [
                'id' => 4,
                'name' => 'Amapá',
                'uf' => 'AP',
                'ibge' => 16,
                'country' => 1,
                'ddd' => '96'
            ],
            [
                'id' => 5,
                'name' => 'Bahia',
                'uf' => 'BA',
                'ibge' => 29,
                'country' => 1,
                'ddd' => '77,75,73,74,71'
            ],
            [
                'id' => 6,
                'name' => 'Ceará',
                'uf' => 'CE',
                'ibge' => 23,
                'country' => 1,
                'ddd' => '88,85'
            ],
            [
                'id' => 7,
                'name' => 'Distrito Federal',
                'uf' => 'DF',
                'ibge' => 53,
                'country' => 1,
                'ddd' => '61'
            ],
            [
                'id' => 8,
                'name' => 'Espírito Santo',
                'uf' => 'ES',
                'ibge' => 32,
                'country' => 1,
                'ddd' => '28,27'
            ],
            [
                'id' => 9,
                'name' => 'Goiás',
                'uf' => 'GO',
                'ibge' => 52,
                'country' => 1,
                'ddd' => '62,64,61'
            ],
            [
                'id' => 10,
                'name' => 'Maranhão',
                'uf' => 'MA',
                'ibge' => 21,
                'country' => 1,
                'ddd' => '99,98'
            ],
            [
                'id' => 11,
                'name' => 'Minas Gerais',
                'uf' => 'MG',
                'ibge' => 31,
                'country' => 1,
                'ddd' => '34,37,31,33,35,38,32'
            ],
            [
                'id' => 12,
                'name' => 'Mato Grosso do Sul',
                'uf' => 'MS',
                'ibge' => 50,
                'country' => 1,
                'ddd' => '67'
            ],
            [
                'id' => 13,
                'name' => 'Mato Grosso',
                'uf' => 'MT',
                'ibge' => 51,
                'country' => 1,
                'ddd' => '65,66'
            ],
            [
                'id' => 14,
                'name' => 'Pará',
                'uf' => 'PA',
                'ibge' => 15,
                'country' => 1,
                'ddd' => '91,94,93'
            ],
            [
                'id' => 15,
                'name' => 'Paraíba',
                'uf' => 'PB',
                'ibge' => 25,
                'country' => 1,
                'ddd' => '83'
            ],
            [
                'id' => 16,
                'name' => 'Pernambuco',
                'uf' => 'PE',
                'ibge' => 26,
                'country' => 1,
                'ddd' => '81,87'
            ],
            [
                'id' => 17,
                'name' => 'Piauí',
                'uf' => 'PI',
                'ibge' => 22,
                'country' => 1,
                'ddd' => '89,86'
            ],
            [
                'id' => 18,
                'name' => 'Paraná',
                'uf' => 'PR',
                'ibge' => 41,
                'country' => 1,
                'ddd' => '43,41,42,44,45,46'
            ],
            [
                'id' => 19,
                'name' => 'Rio de Janeiro',
                'uf' => 'RJ',
                'ibge' => 33,
                'country' => 1,
                'ddd' => '24,22,21'
            ],
            [
                'id' => 20,
                'name' => 'Rio Grande do Norte',
                'uf' => 'RN',
                'ibge' => 24,
                'country' => 1,
                'ddd' => '84'
            ],
            [
                'id' => 21,
                'name' => 'Rondônia',
                'uf' => 'RO',
                'ibge' => 11,
                'country' => 1,
                'ddd' => '69'
            ],
            [
                'id' => 22,
                'name' => 'Roraima',
                'uf' => 'RR',
                'ibge' => 14,
                'country' => 1,
                'ddd' => '95'
            ],
            [
                'id' => 23,
                'name' => 'Rio Grande do Sul',
                'uf' => 'RS',
                'ibge' => 43,
                'country' => 1,
                'ddd' => '53,54,55,51'
            ],
            [
                'id' => 24,
                'name' => 'Santa Catarina',
                'uf' => 'SC',
                'ibge' => 42,
                'country' => 1,
                'ddd' => '47,48,49'
            ],
            [
                'id' => 25,
                'name' => 'Sergipe',
                'uf' => 'SE',
                'ibge' => 28,
                'country' => 1,
                'ddd' => '79'
            ],
            [
                'id' => 26,
                'name' => 'São Paulo',
                'uf' => 'SP',
                'ibge' => 35,
                'country' => 1,
                'ddd' => '11,12,13,14,15,16,17,18,19'
            ],
            [
                'id' => 27,
                'name' => 'Tocantins',
                'uf' => 'TO',
                'ibge' => 17,
                'country' => 1,
                'ddd' => '63'
            ],
            [
                'id' => 99,
                'name' => 'Exterior',
                'uf' => 'EX',
                'ibge' => 99,
                'country' => null,
                'ddd' => null
            ]
        ]);
    }
}
