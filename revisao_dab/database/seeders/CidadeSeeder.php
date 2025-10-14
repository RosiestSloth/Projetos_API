<?php

namespace Database\Seeders;

use App\Models\Cidade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cidades = [
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 15,
            'nome' => 'Alta Floresta D\'Oeste'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 379,
            'nome' => 'Alto Alegre dos Parecis'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 403,
            'nome' => 'Alto Paraíso'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 346,
            'nome' => 'Alvorada D\'Oeste'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 23,
            'nome' => 'Ariquemes'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 452,
            'nome' => 'Buritis'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 31,
            'nome' => 'Cabixi'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 601,
            'nome' => 'Cacaulândia'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 49,
            'nome' => 'Cacoal'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 700,
            'nome' => 'Campo Novo de Rondônia'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 809,
            'nome' => 'Candeias do Jamari'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 908,
            'nome' => 'Castanheiras'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 56,
            'nome' => 'Cerejeiras'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 924,
            'nome' => 'Chupinguaia'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 64,
            'nome' => 'Colorado do Oeste'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 72,
            'nome' => 'Corumbiara'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 80,
            'nome' => 'Costa Marques'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 940,
            'nome' => 'Cujubim'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 98,
            'nome' => 'Espigão D\'Oeste'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 1005,
            'nome' => 'Governador Jorge Teixeira'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 106,
            'nome' => 'Guajará-Mirim'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 1104,
            'nome' => 'Itapuã do Oeste'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 114,
            'nome' => 'Jaru'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 122,
            'nome' => 'Ji-Paraná'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 130,
            'nome' => 'Machadinho D\'Oeste'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 1203,
            'nome' => 'Ministro Andreazza'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 1302,
            'nome' => 'Mirante da Serra'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 1401,
            'nome' => 'Monte Negro'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 148,
            'nome' => 'Nova Brasilândia D\'Oeste'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 338,
            'nome' => 'Nova Mamoré'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 1435,
            'nome' => 'Nova União'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 502,
            'nome' => 'Novo Horizonte do Oeste'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 155,
            'nome' => 'Ouro Preto do Oeste'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 1450,
            'nome' => 'Parecis'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 189,
            'nome' => 'Pimenta Bueno'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 1468,
            'nome' => 'Pimenteiras do Oeste'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 205,
            'nome' => 'Porto Velho'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 254,
            'nome' => 'Presidente Médici'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 1476,
            'nome' => 'Primavera de Rondônia'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 262,
            'nome' => 'Rio Crespo'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 288,
            'nome' => 'Rolim de Moura'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 296,
            'nome' => 'Santa Luzia D\'Oeste'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 1484,
            'nome' => 'São Felipe D\'Oeste'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 1492,
            'nome' => 'São Francisco do Guaporé'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 320,
            'nome' => 'São Miguel do Guaporé'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 1500,
            'nome' => 'Seringueiras'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 1559,
            'nome' => 'Teixeirópolis'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 1609,
            'nome' => 'Theobroma'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 1708,
            'nome' => 'Urupá'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 1757,
            'nome' => 'Vale do Anari'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 1807,
            'nome' => 'Vale do Paraíso'
        ],
        [
            'codigo_uf' => 11,
            'codigo_municipio' => 304,
            'nome' => 'Vilhena'
        ],
        [
            'codigo_uf' => 12,
            'codigo_municipio' => 13,
            'nome' => 'Acrelândia'
        ],
        [
            'codigo_uf' => 12,
            'codigo_municipio' => 54,
            'nome' => 'Assis Brasil'
        ],
        [
            'codigo_uf' => 12,
            'codigo_municipio' => 104,
            'nome' => 'Brasiléia'
        ],
        [
            'codigo_uf' => 12,
            'codigo_municipio' => 138,
            'nome' => 'Bujari'
        ],
        [
            'codigo_uf' => 12,
            'codigo_municipio' => 179,
            'nome' => 'Capixaba'
        ],
        [
            'codigo_uf' => 12,
            'codigo_municipio' => 203,
            'nome' => 'Cruzeiro do Sul'
        ],
        [
            'codigo_uf' => 12,
            'codigo_municipio' => 252,
            'nome' => 'Epitaciolândia'
        ],
        [
            'codigo_uf' => 12,
            'codigo_municipio' => 302,
            'nome' => 'Feijó'
        ],
        [
            'codigo_uf' => 12,
            'codigo_municipio' => 328,
            'nome' => 'Jordão'
        ],
        [
            'codigo_uf' => 12,
            'codigo_municipio' => 336,
            'nome' => 'Mâncio Lima'
        ],
        [
            'codigo_uf' => 12,
            'codigo_municipio' => 344,
            'nome' => 'Manoel Urbano'
        ],
        [
            'codigo_uf' => 12,
            'codigo_municipio' => 351,
            'nome' => 'Marechal Thaumaturgo'
        ],
        [
            'codigo_uf' => 12,
            'codigo_municipio' => 385,
            'nome' => 'Plácido de Castro'
        ],
        [
            'codigo_uf' => 12,
            'codigo_municipio' => 807,
            'nome' => 'Porto Acre'
        ],
        [
            'codigo_uf' => 12,
            'codigo_municipio' => 393,
            'nome' => 'Porto Walter'
        ],
        [
            'codigo_uf' => 12,
            'codigo_municipio' => 401,
            'nome' => 'Rio Branco'
        ],
        [
            'codigo_uf' => 12,
            'codigo_municipio' => 427,
            'nome' => 'Rodrigues Alves'
        ],
        [
            'codigo_uf' => 12,
            'codigo_municipio' => 435,
            'nome' => 'Santa Rosa do Purus'
        ],
        [
            'codigo_uf' => 12,
            'codigo_municipio' => 500,
            'nome' => 'Sena Madureira'
        ],
        [
            'codigo_uf' => 12,
            'codigo_municipio' => 450,
            'nome' => 'Senador Guiomard'
        ],
        [
            'codigo_uf' => 12,
            'codigo_municipio' => 609,
            'nome' => 'Tarauacá'
        ],
        [
            'codigo_uf' => 12,
            'codigo_municipio' => 708,
            'nome' => 'Xapuri'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 29,
            'nome' => 'Alvarães'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 60,
            'nome' => 'Amaturá'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 86,
            'nome' => 'Anamã'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 102,
            'nome' => 'Anori'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 144,
            'nome' => 'Apuí'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 201,
            'nome' => 'Atalaia do Norte'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 300,
            'nome' => 'Autazes'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 409,
            'nome' => 'Barcelos'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 508,
            'nome' => 'Barreirinha'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 607,
            'nome' => 'Benjamin Constant'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 631,
            'nome' => 'Beruri'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 680,
            'nome' => 'Boa Vista do Ramos'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 706,
            'nome' => 'Boca do Acre'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 805,
            'nome' => 'Borba'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 839,
            'nome' => 'Caapiranga'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 904,
            'nome' => 'Canutama'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 1001,
            'nome' => 'Carauari'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 1100,
            'nome' => 'Careiro'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 1159,
            'nome' => 'Careiro da Várzea'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 1209,
            'nome' => 'Coari'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 1308,
            'nome' => 'Codajás'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 1407,
            'nome' => 'Eirunepé'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 1506,
            'nome' => 'Envira'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 1605,
            'nome' => 'Fonte Boa'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 1654,
            'nome' => 'Guajará'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 1704,
            'nome' => 'Humaitá'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 1803,
            'nome' => 'Ipixuna'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 1852,
            'nome' => 'Iranduba'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 1902,
            'nome' => 'Itacoatiara'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 1951,
            'nome' => 'Itamarati'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 2009,
            'nome' => 'Itapiranga'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 2108,
            'nome' => 'Japurá'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 2207,
            'nome' => 'Juruá'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 2306,
            'nome' => 'Jutaí'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 2405,
            'nome' => 'Lábrea'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 2504,
            'nome' => 'Manacapuru'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 2553,
            'nome' => 'Manaquiri'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 2603,
            'nome' => 'Manaus'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 2702,
            'nome' => 'Manicoré'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 2801,
            'nome' => 'Maraã'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 2900,
            'nome' => 'Maués'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 3007,
            'nome' => 'Nhamundá'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 3106,
            'nome' => 'Nova Olinda do Norte'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 3205,
            'nome' => 'Novo Airão'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 3304,
            'nome' => 'Novo Aripuanã'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 3403,
            'nome' => 'Parintins'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 3502,
            'nome' => 'Pauini'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 3536,
            'nome' => 'Presidente Figueiredo'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 3569,
            'nome' => 'Rio Preto da Eva'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 3601,
            'nome' => 'Santa Isabel do Rio Negro'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 3700,
            'nome' => 'Santo Antônio do Içá'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 3809,
            'nome' => 'São Gabriel da Cachoeira'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 3908,
            'nome' => 'São Paulo de Olivença'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 3957,
            'nome' => 'São Sebastião do Uatumã'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 4005,
            'nome' => 'Silves'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 4062,
            'nome' => 'Tabatinga'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 4104,
            'nome' => 'Tapauá'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 4203,
            'nome' => 'Tefé'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 4237,
            'nome' => 'Tonantins'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 4260,
            'nome' => 'Uarini'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 4302,
            'nome' => 'Urucará'
        ],
        [
            'codigo_uf' => 13,
            'codigo_municipio' => 4401,
            'nome' => 'Urucurituba'
        ],
        [
            'codigo_uf' => 14,
            'codigo_municipio' => 50,
            'nome' => 'Alto Alegre'
        ],
        [
            'codigo_uf' => 14,
            'codigo_municipio' => 27,
            'nome' => 'Amajari'
        ],
        [
            'codigo_uf' => 14,
            'codigo_municipio' => 100,
            'nome' => 'Boa Vista'
        ],
        [
            'codigo_uf' => 14,
            'codigo_municipio' => 159,
            'nome' => 'Bonfim'
        ],
        [
            'codigo_uf' => 14,
            'codigo_municipio' => 175,
            'nome' => 'Cantá'
        ],
        [
            'codigo_uf' => 14,
            'codigo_municipio' => 209,
            'nome' => 'Caracaraí'
        ],
        [
            'codigo_uf' => 14,
            'codigo_municipio' => 233,
            'nome' => 'Caroebe'
        ],
        [
            'codigo_uf' => 14,
            'codigo_municipio' => 282,
            'nome' => 'Iracema'
        ],
        [
            'codigo_uf' => 14,
            'codigo_municipio' => 308,
            'nome' => 'Mucajaí'
        ],
        [
            'codigo_uf' => 14,
            'codigo_municipio' => 407,
            'nome' => 'Normandia'
        ],
        [
            'codigo_uf' => 14,
            'codigo_municipio' => 456,
            'nome' => 'Pacaraima'
        ],
        [
            'codigo_uf' => 14,
            'codigo_municipio' => 472,
            'nome' => 'Rorainópolis'
        ],
        [
            'codigo_uf' => 14,
            'codigo_municipio' => 506,
            'nome' => 'São João da Baliza'
        ],
        [
            'codigo_uf' => 14,
            'codigo_municipio' => 605,
            'nome' => 'São Luiz'
        ],
        [
            'codigo_uf' => 14,
            'codigo_municipio' => 704,
            'nome' => 'Uiramutã'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 107,
            'nome' => 'Abaetetuba'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 131,
            'nome' => 'Abel Figueiredo'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 206,
            'nome' => 'Acará'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 305,
            'nome' => 'Afuá'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 347,
            'nome' => 'Água Azul do Norte'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 404,
            'nome' => 'Alenquer'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 503,
            'nome' => 'Almeirim'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 602,
            'nome' => 'Altamira'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 701,
            'nome' => 'Anajás'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 800,
            'nome' => 'Ananindeua'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 859,
            'nome' => 'Anapu'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 909,
            'nome' => 'Augusto Corrêa'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 958,
            'nome' => 'Aurora do Pará'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 1006,
            'nome' => 'Aveiro'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 1105,
            'nome' => 'Bagre'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 1204,
            'nome' => 'Baião'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 1253,
            'nome' => 'Bannach'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 1303,
            'nome' => 'Barcarena'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 1402,
            'nome' => 'Belém'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 1451,
            'nome' => 'Belterra'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 1501,
            'nome' => 'Benevides'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 1576,
            'nome' => 'Bom Jesus do Tocantins'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 1600,
            'nome' => 'Bonito'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 1709,
            'nome' => 'Bragança'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 1725,
            'nome' => 'Brasil Novo'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 1758,
            'nome' => 'Brejo Grande do Araguaia'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 1782,
            'nome' => 'Breu Branco'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 1808,
            'nome' => 'Breves'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 1907,
            'nome' => 'Bujaru'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 2004,
            'nome' => 'Cachoeira do Arari'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 1956,
            'nome' => 'Cachoeira do Piriá'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 2103,
            'nome' => 'Cametá'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 2152,
            'nome' => 'Canaã dos Carajás'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 2202,
            'nome' => 'Capanema'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 2301,
            'nome' => 'Capitão Poço'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 2400,
            'nome' => 'Castanhal'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 2509,
            'nome' => 'Chaves'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 2608,
            'nome' => 'Colares'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 2707,
            'nome' => 'Conceição do Araguaia'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 2756,
            'nome' => 'Concórdia do Pará'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 2764,
            'nome' => 'Cumaru do Norte'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 2772,
            'nome' => 'Curionópolis'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 2806,
            'nome' => 'Curralinho'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 2855,
            'nome' => 'Curuá'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 2905,
            'nome' => 'Curuçá'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 2939,
            'nome' => 'Dom Eliseu'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 2954,
            'nome' => 'Eldorado do Carajás'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 3002,
            'nome' => 'Faro'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 3044,
            'nome' => 'Floresta do Araguaia'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 3077,
            'nome' => 'Garrafão do Norte'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 3093,
            'nome' => 'Goianésia do Pará'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 3101,
            'nome' => 'Gurupá'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 3200,
            'nome' => 'Igarapé-Açu'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 3309,
            'nome' => 'Igarapé-Miri'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 3408,
            'nome' => 'Inhangapi'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 3457,
            'nome' => 'Ipixuna do Pará'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 3507,
            'nome' => 'Irituia'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 3606,
            'nome' => 'Itaituba'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 3705,
            'nome' => 'Itupiranga'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 3754,
            'nome' => 'Jacareacanga'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 3804,
            'nome' => 'Jacundá'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 3903,
            'nome' => 'Juruti'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 4000,
            'nome' => 'Limoeiro do Ajuru'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 4059,
            'nome' => 'Mãe do Rio'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 4109,
            'nome' => 'Magalhães Barata'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 4208,
            'nome' => 'Marabá'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 4307,
            'nome' => 'Maracanã'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 4406,
            'nome' => 'Marapanim'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 4422,
            'nome' => 'Marituba'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 4455,
            'nome' => 'Medicilândia'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 4505,
            'nome' => 'Melgaço'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 4604,
            'nome' => 'Mocajuba'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 4703,
            'nome' => 'Moju'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 4752,
            'nome' => 'Mojuí dos Campos'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 4802,
            'nome' => 'Monte Alegre'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 4901,
            'nome' => 'Muaná'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 4950,
            'nome' => 'Nova Esperança do Piriá'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 4976,
            'nome' => 'Nova Ipixuna'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 5007,
            'nome' => 'Nova Timboteua'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 5031,
            'nome' => 'Novo Progresso'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 5064,
            'nome' => 'Novo Repartimento'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 5106,
            'nome' => 'Óbidos'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 5205,
            'nome' => 'Oeiras do Pará'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 5304,
            'nome' => 'Oriximiná'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 5403,
            'nome' => 'Ourém'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 5437,
            'nome' => 'Ourilândia do Norte'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 5486,
            'nome' => 'Pacajá'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 5494,
            'nome' => 'Palestina do Pará'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 5502,
            'nome' => 'Paragominas'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 5536,
            'nome' => 'Parauapebas'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 5551,
            'nome' => 'Pau D\'Arco'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 5601,
            'nome' => 'Peixe-Boi'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 5635,
            'nome' => 'Piçarra'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 5650,
            'nome' => 'Placas'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 5700,
            'nome' => 'Ponta de Pedras'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 5809,
            'nome' => 'Portel'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 5908,
            'nome' => 'Porto de Moz'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 6005,
            'nome' => 'Prainha'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 6104,
            'nome' => 'Primavera'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 6112,
            'nome' => 'Quatipuru'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 6138,
            'nome' => 'Redenção'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 6161,
            'nome' => 'Rio Maria'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 6187,
            'nome' => 'Rondon do Pará'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 6195,
            'nome' => 'Rurópolis'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 6203,
            'nome' => 'Salinópolis'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 6302,
            'nome' => 'Salvaterra'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 6351,
            'nome' => 'Santa Bárbara do Pará'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 6401,
            'nome' => 'Santa Cruz do Arari'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 6500,
            'nome' => 'Santa Izabel do Pará'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 6559,
            'nome' => 'Santa Luzia do Pará'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 6583,
            'nome' => 'Santa Maria das Barreiras'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 6609,
            'nome' => 'Santa Maria do Pará'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 6708,
            'nome' => 'Santana do Araguaia'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 6807,
            'nome' => 'Santarém'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 6906,
            'nome' => 'Santarém Novo'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 7003,
            'nome' => 'Santo Antônio do Tauá'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 7102,
            'nome' => 'São Caetano de Odivelas'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 7151,
            'nome' => 'São Domingos do Araguaia'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 7201,
            'nome' => 'São Domingos do Capim'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 7300,
            'nome' => 'São Félix do Xingu'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 7409,
            'nome' => 'São Francisco do Pará'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 7458,
            'nome' => 'São Geraldo do Araguaia'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 7466,
            'nome' => 'São João da Ponta'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 7474,
            'nome' => 'São João de Pirabas'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 7508,
            'nome' => 'São João do Araguaia'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 7607,
            'nome' => 'São Miguel do Guamá'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 7706,
            'nome' => 'São Sebastião da Boa Vista'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 7755,
            'nome' => 'Sapucaia'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 7805,
            'nome' => 'Senador José Porfírio'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 7904,
            'nome' => 'Soure'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 7953,
            'nome' => 'Tailândia'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 7961,
            'nome' => 'Terra Alta'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 7979,
            'nome' => 'Terra Santa'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 8001,
            'nome' => 'Tomé-Açu'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 8035,
            'nome' => 'Tracuateua'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 8050,
            'nome' => 'Trairão'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 8084,
            'nome' => 'Tucumã'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 8100,
            'nome' => 'Tucuruí'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 8126,
            'nome' => 'Ulianópolis'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 8159,
            'nome' => 'Uruará'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 8209,
            'nome' => 'Vigia'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 8308,
            'nome' => 'Viseu'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 8357,
            'nome' => 'Vitória do Xingu'
        ],
        [
            'codigo_uf' => 15,
            'codigo_municipio' => 8407,
            'nome' => 'Xinguara'
        ],
        [
            'codigo_uf' => 16,
            'codigo_municipio' => 105,
            'nome' => 'Amapá'
        ],
        [
            'codigo_uf' => 16,
            'codigo_municipio' => 204,
            'nome' => 'Calçoene'
        ],
        [
            'codigo_uf' => 16,
            'codigo_municipio' => 212,
            'nome' => 'Cutias'
        ],
        [
            'codigo_uf' => 16,
            'codigo_municipio' => 238,
            'nome' => 'Ferreira Gomes'
        ],
        [
            'codigo_uf' => 16,
            'codigo_municipio' => 253,
            'nome' => 'Itaubal'
        ],
        [
            'codigo_uf' => 16,
            'codigo_municipio' => 279,
            'nome' => 'Laranjal do Jari'
        ],
        [
            'codigo_uf' => 16,
            'codigo_municipio' => 303,
            'nome' => 'Macapá'
        ],
        [
            'codigo_uf' => 16,
            'codigo_municipio' => 402,
            'nome' => 'Mazagão'
        ],
        [
            'codigo_uf' => 16,
            'codigo_municipio' => 501,
            'nome' => 'Oiapoque'
        ],
        [
            'codigo_uf' => 16,
            'codigo_municipio' => 154,
            'nome' => 'Pedra Branca do Amapari'
        ],
        [
            'codigo_uf' => 16,
            'codigo_municipio' => 535,
            'nome' => 'Porto Grande'
        ],
        [
            'codigo_uf' => 16,
            'codigo_municipio' => 550,
            'nome' => 'Pracuúba'
        ],
        [
            'codigo_uf' => 16,
            'codigo_municipio' => 600,
            'nome' => 'Santana'
        ],
        [
            'codigo_uf' => 16,
            'codigo_municipio' => 55,
            'nome' => 'Serra do Navio'
        ],
        [
            'codigo_uf' => 16,
            'codigo_municipio' => 709,
            'nome' => 'Tartarugalzinho'
        ],
        [
            'codigo_uf' => 16,
            'codigo_municipio' => 808,
            'nome' => 'Vitória do Jari'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 251,
            'nome' => 'Abreulândia'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 301,
            'nome' => 'Aguiarnópolis'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 350,
            'nome' => 'Aliança do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 400,
            'nome' => 'Almas'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 707,
            'nome' => 'Alvorada'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 1002,
            'nome' => 'Ananás'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 1051,
            'nome' => 'Angico'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 1101,
            'nome' => 'Aparecida do Rio Negro'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 1309,
            'nome' => 'Aragominas'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 1903,
            'nome' => 'Araguacema'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 2000,
            'nome' => 'Araguaçu'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 2109,
            'nome' => 'Araguaína'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 2158,
            'nome' => 'Araguanã'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 2208,
            'nome' => 'Araguatins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 2307,
            'nome' => 'Arapoema'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 2406,
            'nome' => 'Arraias'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 2554,
            'nome' => 'Augustinópolis'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 2703,
            'nome' => 'Aurora do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 2901,
            'nome' => 'Axixá do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 3008,
            'nome' => 'Babaçulândia'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 3057,
            'nome' => 'Bandeirantes do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 3073,
            'nome' => 'Barra do Ouro'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 3107,
            'nome' => 'Barrolândia'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 3206,
            'nome' => 'Bernardo Sayão'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 3305,
            'nome' => 'Bom Jesus do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 3602,
            'nome' => 'Brasilândia do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 3701,
            'nome' => 'Brejinho de Nazaré'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 3800,
            'nome' => 'Buriti do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 3826,
            'nome' => 'Cachoeirinha'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 3842,
            'nome' => 'Campos Lindos'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 3867,
            'nome' => 'Cariri do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 3883,
            'nome' => 'Carmolândia'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 3891,
            'nome' => 'Carrasco Bonito'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 3909,
            'nome' => 'Caseara'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 4105,
            'nome' => 'Centenário'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 5102,
            'nome' => 'Chapada da Natividade'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 4600,
            'nome' => 'Chapada de Areia'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 5508,
            'nome' => 'Colinas do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 16703,
            'nome' => 'Colméia'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 5557,
            'nome' => 'Combinado'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 5607,
            'nome' => 'Conceição do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 6001,
            'nome' => 'Couto Magalhães'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 6100,
            'nome' => 'Cristalândia'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 6258,
            'nome' => 'Crixás do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 6506,
            'nome' => 'Darcinópolis'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 7009,
            'nome' => 'Dianópolis'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 7108,
            'nome' => 'Divinópolis do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 7207,
            'nome' => 'Dois Irmãos do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 7306,
            'nome' => 'Dueré'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 7405,
            'nome' => 'Esperantina'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 7553,
            'nome' => 'Fátima'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 7652,
            'nome' => 'Figueirópolis'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 7702,
            'nome' => 'Filadélfia'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 8205,
            'nome' => 'Formoso do Araguaia'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 8304,
            'nome' => 'Goianorte'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 9005,
            'nome' => 'Goiatins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 9302,
            'nome' => 'Guaraí'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 9500,
            'nome' => 'Gurupi'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 9807,
            'nome' => 'Ipueiras'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 10508,
            'nome' => 'Itacajá'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 10706,
            'nome' => 'Itaguatins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 10904,
            'nome' => 'Itapiratins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 11100,
            'nome' => 'Itaporã do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 11506,
            'nome' => 'Jaú do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 11803,
            'nome' => 'Juarina'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 11902,
            'nome' => 'Lagoa da Confusão'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 11951,
            'nome' => 'Lagoa do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 12009,
            'nome' => 'Lajeado'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 12157,
            'nome' => 'Lavandeira'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 12405,
            'nome' => 'Lizarda'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 12454,
            'nome' => 'Luzinópolis'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 12504,
            'nome' => 'Marianópolis do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 12702,
            'nome' => 'Mateiros'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 12801,
            'nome' => 'Maurilândia do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 13205,
            'nome' => 'Miracema do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 13304,
            'nome' => 'Miranorte'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 13601,
            'nome' => 'Monte do Carmo'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 13700,
            'nome' => 'Monte Santo do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 13957,
            'nome' => 'Muricilândia'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 14203,
            'nome' => 'Natividade'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 14302,
            'nome' => 'Nazaré'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 14880,
            'nome' => 'Nova Olinda'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 15002,
            'nome' => 'Nova Rosalândia'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 15101,
            'nome' => 'Novo Acordo'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 15150,
            'nome' => 'Novo Alegre'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 15259,
            'nome' => 'Novo Jardim'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 15507,
            'nome' => 'Oliveira de Fátima'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 21000,
            'nome' => 'Palmas'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 15705,
            'nome' => 'Palmeirante'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 13809,
            'nome' => 'Palmeiras do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 15754,
            'nome' => 'Palmeirópolis'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 16109,
            'nome' => 'Paraíso do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 16208,
            'nome' => 'Paranã'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 16307,
            'nome' => 'Pau D\'Arco'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 16505,
            'nome' => 'Pedro Afonso'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 16604,
            'nome' => 'Peixe'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 16653,
            'nome' => 'Pequizeiro'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 17008,
            'nome' => 'Pindorama do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 17206,
            'nome' => 'Piraquê'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 17503,
            'nome' => 'Pium'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 17800,
            'nome' => 'Ponte Alta do Bom Jesus'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 17909,
            'nome' => 'Ponte Alta do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 18006,
            'nome' => 'Porto Alegre do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 18204,
            'nome' => 'Porto Nacional'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 18303,
            'nome' => 'Praia Norte'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 18402,
            'nome' => 'Presidente Kennedy'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 18451,
            'nome' => 'Pugmil'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 18501,
            'nome' => 'Recursolândia'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 18550,
            'nome' => 'Riachinho'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 18659,
            'nome' => 'Rio da Conceição'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 18709,
            'nome' => 'Rio dos Bois'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 18758,
            'nome' => 'Rio Sono'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 18808,
            'nome' => 'Sampaio'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 18840,
            'nome' => 'Sandolândia'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 18865,
            'nome' => 'Santa Fé do Araguaia'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 18881,
            'nome' => 'Santa Maria do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 18899,
            'nome' => 'Santa Rita do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 18907,
            'nome' => 'Santa Rosa do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 19004,
            'nome' => 'Santa Tereza do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 20002,
            'nome' => 'Santa Terezinha do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 20101,
            'nome' => 'São Bento do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 20150,
            'nome' => 'São Félix do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 20200,
            'nome' => 'São Miguel do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 20259,
            'nome' => 'São Salvador do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 20309,
            'nome' => 'São Sebastião do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 20499,
            'nome' => 'São Valério'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 20655,
            'nome' => 'Silvanópolis'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 20804,
            'nome' => 'Sítio Novo do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 20853,
            'nome' => 'Sucupira'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 8254,
            'nome' => 'Tabocão'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 20903,
            'nome' => 'Taguatinga'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 20937,
            'nome' => 'Taipas do Tocantins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 20978,
            'nome' => 'Talismã'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 21109,
            'nome' => 'Tocantínia'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 21208,
            'nome' => 'Tocantinópolis'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 21257,
            'nome' => 'Tupirama'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 21307,
            'nome' => 'Tupiratins'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 22081,
            'nome' => 'Wanderlândia'
        ],
        [
            'codigo_uf' => 17,
            'codigo_municipio' => 22107,
            'nome' => 'Xambioá'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 55,
            'nome' => 'Açailândia'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 105,
            'nome' => 'Afonso Cunha'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 154,
            'nome' => 'Água Doce do Maranhão'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 204,
            'nome' => 'Alcântara'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 303,
            'nome' => 'Aldeias Altas'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 402,
            'nome' => 'Altamira do Maranhão'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 436,
            'nome' => 'Alto Alegre do Maranhão'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 477,
            'nome' => 'Alto Alegre do Pindaré'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 501,
            'nome' => 'Alto Parnaíba'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 550,
            'nome' => 'Amapá do Maranhão'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 600,
            'nome' => 'Amarante do Maranhão'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 709,
            'nome' => 'Anajatuba'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 808,
            'nome' => 'Anapurus'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 832,
            'nome' => 'Apicum-Açu'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 873,
            'nome' => 'Araguanã'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 907,
            'nome' => 'Araioses'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 956,
            'nome' => 'Arame'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 1004,
            'nome' => 'Arari'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 1103,
            'nome' => 'Axixá'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 1202,
            'nome' => 'Bacabal'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 1251,
            'nome' => 'Bacabeira'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 1301,
            'nome' => 'Bacuri'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 1350,
            'nome' => 'Bacurituba'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 1400,
            'nome' => 'Balsas'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 1509,
            'nome' => 'Barão de Grajaú'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 1608,
            'nome' => 'Barra do Corda'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 1707,
            'nome' => 'Barreirinhas'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 1772,
            'nome' => 'Bela Vista do Maranhão'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 1731,
            'nome' => 'Belágua'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 1806,
            'nome' => 'Benedito Leite'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 1905,
            'nome' => 'Bequimão'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 1939,
            'nome' => 'Bernardo do Mearim'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 1970,
            'nome' => 'Boa Vista do Gurupi'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 2002,
            'nome' => 'Bom Jardim'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 2036,
            'nome' => 'Bom Jesus das Selvas'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 2077,
            'nome' => 'Bom Lugar'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 2101,
            'nome' => 'Brejo'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 2150,
            'nome' => 'Brejo de Areia'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 2200,
            'nome' => 'Buriti'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 2309,
            'nome' => 'Buriti Bravo'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 2325,
            'nome' => 'Buriticupu'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 2358,
            'nome' => 'Buritirana'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 2374,
            'nome' => 'Cachoeira Grande'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 2408,
            'nome' => 'Cajapió'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 2507,
            'nome' => 'Cajari'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 2556,
            'nome' => 'Campestre do Maranhão'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 2606,
            'nome' => 'Cândido Mendes'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 2705,
            'nome' => 'Cantanhede'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 2754,
            'nome' => 'Capinzal do Norte'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 2804,
            'nome' => 'Carolina'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 2903,
            'nome' => 'Carutapera'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 3000,
            'nome' => 'Caxias'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 3109,
            'nome' => 'Cedral'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 3125,
            'nome' => 'Central do Maranhão'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 3158,
            'nome' => 'Centro do Guilherme'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 3174,
            'nome' => 'Centro Novo do Maranhão'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 3208,
            'nome' => 'Chapadinha'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 3257,
            'nome' => 'Cidelândia'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 3307,
            'nome' => 'Codó'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 3406,
            'nome' => 'Coelho Neto'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 3505,
            'nome' => 'Colinas'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 3554,
            'nome' => 'Conceição do Lago-Açu'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 3604,
            'nome' => 'Coroatá'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 3703,
            'nome' => 'Cururupu'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 3752,
            'nome' => 'Davinópolis'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 3802,
            'nome' => 'Dom Pedro'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 3901,
            'nome' => 'Duque Bacelar'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 4008,
            'nome' => 'Esperantinópolis'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 4057,
            'nome' => 'Estreito'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 4073,
            'nome' => 'Feira Nova do Maranhão'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 4081,
            'nome' => 'Fernando Falcão'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 4099,
            'nome' => 'Formosa da Serra Negra'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 4107,
            'nome' => 'Fortaleza dos Nogueiras'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 4206,
            'nome' => 'Fortuna'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 4305,
            'nome' => 'Godofredo Viana'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 4404,
            'nome' => 'Gonçalves Dias'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 4503,
            'nome' => 'Governador Archer'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 4552,
            'nome' => 'Governador Edison Lobão'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 4602,
            'nome' => 'Governador Eugênio Barros'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 4628,
            'nome' => 'Governador Luiz Rocha'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 4651,
            'nome' => 'Governador Newton Bello'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 4677,
            'nome' => 'Governador Nunes Freire'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 4701,
            'nome' => 'Graça Aranha'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 4800,
            'nome' => 'Grajaú'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 4909,
            'nome' => 'Guimarães'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 5005,
            'nome' => 'Humberto de Campos'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 5104,
            'nome' => 'Icatu'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 5153,
            'nome' => 'Igarapé do Meio'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 5203,
            'nome' => 'Igarapé Grande'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 5302,
            'nome' => 'Imperatriz'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 5351,
            'nome' => 'Itaipava do Grajaú'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 5401,
            'nome' => 'Itapecuru Mirim'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 5427,
            'nome' => 'Itinga do Maranhão'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 5450,
            'nome' => 'Jatobá'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 5476,
            'nome' => 'Jenipapo dos Vieiras'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 5500,
            'nome' => 'João Lisboa'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 5609,
            'nome' => 'Joselândia'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 5658,
            'nome' => 'Junco do Maranhão'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 5708,
            'nome' => 'Lago da Pedra'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 5807,
            'nome' => 'Lago do Junco'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 5948,
            'nome' => 'Lago dos Rodrigues'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 5906,
            'nome' => 'Lago Verde'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 5922,
            'nome' => 'Lagoa do Mato'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 5963,
            'nome' => 'Lagoa Grande do Maranhão'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 5989,
            'nome' => 'Lajeado Novo'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 6003,
            'nome' => 'Lima Campos'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 6102,
            'nome' => 'Loreto'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 6201,
            'nome' => 'Luís Domingues'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 6300,
            'nome' => 'Magalhães de Almeida'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 6326,
            'nome' => 'Maracaçumé'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 6359,
            'nome' => 'Marajá do Sena'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 6375,
            'nome' => 'Maranhãozinho'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 6409,
            'nome' => 'Mata Roma'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 6508,
            'nome' => 'Matinha'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 6607,
            'nome' => 'Matões'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 6631,
            'nome' => 'Matões do Norte'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 6672,
            'nome' => 'Milagres do Maranhão'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 6706,
            'nome' => 'Mirador'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 6755,
            'nome' => 'Miranda do Norte'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 6805,
            'nome' => 'Mirinzal'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 6904,
            'nome' => 'Monção'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 7001,
            'nome' => 'Montes Altos'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 7100,
            'nome' => 'Morros'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 7209,
            'nome' => 'Nina Rodrigues'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 7258,
            'nome' => 'Nova Colinas'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 7308,
            'nome' => 'Nova Iorque'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 7357,
            'nome' => 'Nova Olinda do Maranhão'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 7407,
            'nome' => 'Olho d\'Água das Cunhãs'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 7456,
            'nome' => 'Olinda Nova do Maranhão'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 7506,
            'nome' => 'Paço do Lumiar'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 7605,
            'nome' => 'Palmeirândia'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 7704,
            'nome' => 'Paraibano'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 7803,
            'nome' => 'Parnarama'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 7902,
            'nome' => 'Passagem Franca'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 8009,
            'nome' => 'Pastos Bons'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 8058,
            'nome' => 'Paulino Neves'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 8108,
            'nome' => 'Paulo Ramos'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 8207,
            'nome' => 'Pedreiras'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 8256,
            'nome' => 'Pedro do Rosário'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 8306,
            'nome' => 'Penalva'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 8405,
            'nome' => 'Peri Mirim'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 8454,
            'nome' => 'Peritoró'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 8504,
            'nome' => 'Pindaré-Mirim'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 8603,
            'nome' => 'Pinheiro'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 8702,
            'nome' => 'Pio XII'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 8801,
            'nome' => 'Pirapemas'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 8900,
            'nome' => 'Poção de Pedras'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 9007,
            'nome' => 'Porto Franco'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 9056,
            'nome' => 'Porto Rico do Maranhão'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 9106,
            'nome' => 'Presidente Dutra'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 9205,
            'nome' => 'Presidente Juscelino'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 9239,
            'nome' => 'Presidente Médici'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 9270,
            'nome' => 'Presidente Sarney'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 9304,
            'nome' => 'Presidente Vargas'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 9403,
            'nome' => 'Primeira Cruz'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 9452,
            'nome' => 'Raposa'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 9502,
            'nome' => 'Riachão'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 9551,
            'nome' => 'Ribamar Fiquene'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 9601,
            'nome' => 'Rosário'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 9700,
            'nome' => 'Sambaíba'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 9759,
            'nome' => 'Santa Filomena do Maranhão'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 9809,
            'nome' => 'Santa Helena'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 9908,
            'nome' => 'Santa Inês'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 10005,
            'nome' => 'Santa Luzia'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 10039,
            'nome' => 'Santa Luzia do Paruá'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 10104,
            'nome' => 'Santa Quitéria do Maranhão'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 10203,
            'nome' => 'Santa Rita'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 10237,
            'nome' => 'Santana do Maranhão'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 10278,
            'nome' => 'Santo Amaro do Maranhão'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 10302,
            'nome' => 'Santo Antônio dos Lopes'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 10401,
            'nome' => 'São Benedito do Rio Preto'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 10500,
            'nome' => 'São Bento'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 10609,
            'nome' => 'São Bernardo'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 10658,
            'nome' => 'São Domingos do Azeitão'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 10708,
            'nome' => 'São Domingos do Maranhão'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 10807,
            'nome' => 'São Félix de Balsas'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 10856,
            'nome' => 'São Francisco do Brejão'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 10906,
            'nome' => 'São Francisco do Maranhão'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 11003,
            'nome' => 'São João Batista'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 11029,
            'nome' => 'São João do Carú'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 11052,
            'nome' => 'São João do Paraíso'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 11078,
            'nome' => 'São João do Soter'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 11102,
            'nome' => 'São João dos Patos'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 11201,
            'nome' => 'São José de Ribamar'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 11250,
            'nome' => 'São José dos Basílios'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 11300,
            'nome' => 'São Luís'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 11409,
            'nome' => 'São Luís Gonzaga do Maranhão'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 11508,
            'nome' => 'São Mateus do Maranhão'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 11532,
            'nome' => 'São Pedro da Água Branca'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 11573,
            'nome' => 'São Pedro dos Crentes'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 11607,
            'nome' => 'São Raimundo das Mangabeiras'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 11631,
            'nome' => 'São Raimundo do Doca Bezerra'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 11672,
            'nome' => 'São Roberto'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 11706,
            'nome' => 'São Vicente Ferrer'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 11722,
            'nome' => 'Satubinha'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 11748,
            'nome' => 'Senador Alexandre Costa'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 11763,
            'nome' => 'Senador La Rocque'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 11789,
            'nome' => 'Serrano do Maranhão'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 11805,
            'nome' => 'Sítio Novo'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 11904,
            'nome' => 'Sucupira do Norte'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 11953,
            'nome' => 'Sucupira do Riachão'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 12001,
            'nome' => 'Tasso Fragoso'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 12100,
            'nome' => 'Timbiras'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 12209,
            'nome' => 'Timon'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 12233,
            'nome' => 'Trizidela do Vale'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 12274,
            'nome' => 'Tufilândia'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 12308,
            'nome' => 'Tuntum'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 12407,
            'nome' => 'Turiaçu'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 12456,
            'nome' => 'Turilândia'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 12506,
            'nome' => 'Tutóia'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 12605,
            'nome' => 'Urbano Santos'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 12704,
            'nome' => 'Vargem Grande'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 12803,
            'nome' => 'Viana'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 12852,
            'nome' => 'Vila Nova dos Martírios'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 12902,
            'nome' => 'Vitória do Mearim'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 13009,
            'nome' => 'Vitorino Freire'
        ],
        [
            'codigo_uf' => 21,
            'codigo_municipio' => 14007,
            'nome' => 'Zé Doca'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 53,
            'nome' => 'Acauã'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 103,
            'nome' => 'Agricolândia'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 202,
            'nome' => 'Água Branca'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 251,
            'nome' => 'Alagoinha do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 277,
            'nome' => 'Alegrete do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 301,
            'nome' => 'Alto Longá'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 400,
            'nome' => 'Altos'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 459,
            'nome' => 'Alvorada do Gurguéia'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 509,
            'nome' => 'Amarante'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 608,
            'nome' => 'Angical do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 707,
            'nome' => 'Anísio de Abreu'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 806,
            'nome' => 'Antônio Almeida'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 905,
            'nome' => 'Aroazes'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 954,
            'nome' => 'Aroeiras do Itaim'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 1002,
            'nome' => 'Arraial'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 1051,
            'nome' => 'Assunção do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 1101,
            'nome' => 'Avelino Lopes'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 1150,
            'nome' => 'Baixa Grande do Ribeiro'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 1176,
            'nome' => 'Barra D\'Alcântara'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 1200,
            'nome' => 'Barras'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 1309,
            'nome' => 'Barreiras do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 1408,
            'nome' => 'Barro Duro'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 1507,
            'nome' => 'Batalha'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 1556,
            'nome' => 'Bela Vista do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 1572,
            'nome' => 'Belém do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 1606,
            'nome' => 'Beneditinos'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 1705,
            'nome' => 'Bertolínia'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 1739,
            'nome' => 'Betânia do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 1770,
            'nome' => 'Boa Hora'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 1804,
            'nome' => 'Bocaina'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 1903,
            'nome' => 'Bom Jesus'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 1919,
            'nome' => 'Bom Princípio do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 1929,
            'nome' => 'Bonfim do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 1945,
            'nome' => 'Boqueirão do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 1960,
            'nome' => 'Brasileira'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 1988,
            'nome' => 'Brejo do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 2000,
            'nome' => 'Buriti dos Lopes'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 2026,
            'nome' => 'Buriti dos Montes'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 2059,
            'nome' => 'Cabeceiras do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 2075,
            'nome' => 'Cajazeiras do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 2083,
            'nome' => 'Cajueiro da Praia'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 2091,
            'nome' => 'Caldeirão Grande do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 2109,
            'nome' => 'Campinas do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 2117,
            'nome' => 'Campo Alegre do Fidalgo'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 2133,
            'nome' => 'Campo Grande do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 2174,
            'nome' => 'Campo Largo do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 2208,
            'nome' => 'Campo Maior'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 2251,
            'nome' => 'Canavieira'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 2307,
            'nome' => 'Canto do Buriti'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 2406,
            'nome' => 'Capitão de Campos'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 2455,
            'nome' => 'Capitão Gervásio Oliveira'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 2505,
            'nome' => 'Caracol'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 2539,
            'nome' => 'Caraúbas do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 2554,
            'nome' => 'Caridade do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 2604,
            'nome' => 'Castelo do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 2653,
            'nome' => 'Caxingó'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 2703,
            'nome' => 'Cocal'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 2711,
            'nome' => 'Cocal de Telha'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 2729,
            'nome' => 'Cocal dos Alves'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 2737,
            'nome' => 'Coivaras'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 2752,
            'nome' => 'Colônia do Gurguéia'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 2778,
            'nome' => 'Colônia do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 2802,
            'nome' => 'Conceição do Canindé'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 2851,
            'nome' => 'Coronel José Dias'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 2901,
            'nome' => 'Corrente'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 3008,
            'nome' => 'Cristalândia do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 3107,
            'nome' => 'Cristino Castro'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 3206,
            'nome' => 'Curimatá'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 3230,
            'nome' => 'Currais'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 3271,
            'nome' => 'Curral Novo do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 3255,
            'nome' => 'Curralinhos'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 3305,
            'nome' => 'Demerval Lobão'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 3354,
            'nome' => 'Dirceu Arcoverde'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 3404,
            'nome' => 'Dom Expedito Lopes'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 3453,
            'nome' => 'Dom Inocêncio'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 3420,
            'nome' => 'Domingos Mourão'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 3503,
            'nome' => 'Elesbão Veloso'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 3602,
            'nome' => 'Eliseu Martins'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 3701,
            'nome' => 'Esperantina'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 3750,
            'nome' => 'Fartura do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 3800,
            'nome' => 'Flores do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 3859,
            'nome' => 'Floresta do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 3909,
            'nome' => 'Floriano'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 4006,
            'nome' => 'Francinópolis'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 4105,
            'nome' => 'Francisco Ayres'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 4154,
            'nome' => 'Francisco Macedo'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 4204,
            'nome' => 'Francisco Santos'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 4303,
            'nome' => 'Fronteiras'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 4352,
            'nome' => 'Geminiano'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 4402,
            'nome' => 'Gilbués'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 4501,
            'nome' => 'Guadalupe'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 4550,
            'nome' => 'Guaribas'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 4600,
            'nome' => 'Hugo Napoleão'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 4659,
            'nome' => 'Ilha Grande'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 4709,
            'nome' => 'Inhuma'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 4808,
            'nome' => 'Ipiranga do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 4907,
            'nome' => 'Isaías Coelho'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 5003,
            'nome' => 'Itainópolis'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 5102,
            'nome' => 'Itaueira'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 5151,
            'nome' => 'Jacobina do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 5201,
            'nome' => 'Jaicós'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 5250,
            'nome' => 'Jardim do Mulato'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 5276,
            'nome' => 'Jatobá do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 5300,
            'nome' => 'Jerumenha'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 5359,
            'nome' => 'João Costa'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 5409,
            'nome' => 'Joaquim Pires'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 5458,
            'nome' => 'Joca Marques'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 5508,
            'nome' => 'José de Freitas'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 5516,
            'nome' => 'Juazeiro do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 5524,
            'nome' => 'Júlio Borges'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 5532,
            'nome' => 'Jurema'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 5557,
            'nome' => 'Lagoa Alegre'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 5573,
            'nome' => 'Lagoa de São Francisco'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 5565,
            'nome' => 'Lagoa do Barro do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 5581,
            'nome' => 'Lagoa do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 5599,
            'nome' => 'Lagoa do Sítio'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 5540,
            'nome' => 'Lagoinha do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 5607,
            'nome' => 'Landri Sales'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 5706,
            'nome' => 'Luís Correia'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 5805,
            'nome' => 'Luzilândia'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 5854,
            'nome' => 'Madeiro'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 5904,
            'nome' => 'Manoel Emídio'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 5953,
            'nome' => 'Marcolândia'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 6001,
            'nome' => 'Marcos Parente'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 6050,
            'nome' => 'Massapê do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 6100,
            'nome' => 'Matias Olímpio'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 6209,
            'nome' => 'Miguel Alves'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 6308,
            'nome' => 'Miguel Leão'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 6357,
            'nome' => 'Milton Brandão'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 6407,
            'nome' => 'Monsenhor Gil'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 6506,
            'nome' => 'Monsenhor Hipólito'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 6605,
            'nome' => 'Monte Alegre do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 6654,
            'nome' => 'Morro Cabeça no Tempo'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 6670,
            'nome' => 'Morro do Chapéu do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 6696,
            'nome' => 'Murici dos Portelas'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 6704,
            'nome' => 'Nazaré do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 6720,
            'nome' => 'Nazária'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 6753,
            'nome' => 'Nossa Senhora de Nazaré'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 6803,
            'nome' => 'Nossa Senhora dos Remédios'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 7959,
            'nome' => 'Nova Santa Rita'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 6902,
            'nome' => 'Novo Oriente do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 6951,
            'nome' => 'Novo Santo Antônio'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 7009,
            'nome' => 'Oeiras'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 7108,
            'nome' => 'Olho D\'Água do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 7207,
            'nome' => 'Padre Marcos'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 7306,
            'nome' => 'Paes Landim'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 7355,
            'nome' => 'Pajeú do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 7405,
            'nome' => 'Palmeira do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 7504,
            'nome' => 'Palmeirais'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 7553,
            'nome' => 'Paquetá'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 7603,
            'nome' => 'Parnaguá'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 7702,
            'nome' => 'Parnaíba'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 7751,
            'nome' => 'Passagem Franca do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 7777,
            'nome' => 'Patos do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 7793,
            'nome' => 'Pau D\'Arco do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 7801,
            'nome' => 'Paulistana'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 7850,
            'nome' => 'Pavussu'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 7900,
            'nome' => 'Pedro II'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 7934,
            'nome' => 'Pedro Laurentino'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 8007,
            'nome' => 'Picos'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 8106,
            'nome' => 'Pimenteiras'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 8205,
            'nome' => 'Pio IX'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 8304,
            'nome' => 'Piracuruca'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 8403,
            'nome' => 'Piripiri'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 8502,
            'nome' => 'Porto'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 8551,
            'nome' => 'Porto Alegre do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 8601,
            'nome' => 'Prata do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 8650,
            'nome' => 'Queimada Nova'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 8700,
            'nome' => 'Redenção do Gurguéia'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 8809,
            'nome' => 'Regeneração'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 8858,
            'nome' => 'Riacho Frio'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 8874,
            'nome' => 'Ribeira do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 8908,
            'nome' => 'Ribeiro Gonçalves'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 9005,
            'nome' => 'Rio Grande do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 9104,
            'nome' => 'Santa Cruz do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 9153,
            'nome' => 'Santa Cruz dos Milagres'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 9203,
            'nome' => 'Santa Filomena'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 9302,
            'nome' => 'Santa Luz'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 9377,
            'nome' => 'Santa Rosa do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 9351,
            'nome' => 'Santana do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 9401,
            'nome' => 'Santo Antônio de Lisboa'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 9450,
            'nome' => 'Santo Antônio dos Milagres'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 9500,
            'nome' => 'Santo Inácio do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 9559,
            'nome' => 'São Braz do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 9609,
            'nome' => 'São Félix do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 9658,
            'nome' => 'São Francisco de Assis do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 9708,
            'nome' => 'São Francisco do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 9757,
            'nome' => 'São Gonçalo do Gurguéia'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 9807,
            'nome' => 'São Gonçalo do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 9856,
            'nome' => 'São João da Canabrava'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 9872,
            'nome' => 'São João da Fronteira'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 9906,
            'nome' => 'São João da Serra'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 9955,
            'nome' => 'São João da Varjota'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 9971,
            'nome' => 'São João do Arraial'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 10003,
            'nome' => 'São João do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 10052,
            'nome' => 'São José do Divino'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 10102,
            'nome' => 'São José do Peixe'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 10201,
            'nome' => 'São José do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 10300,
            'nome' => 'São Julião'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 10359,
            'nome' => 'São Lourenço do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 10375,
            'nome' => 'São Luis do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 10383,
            'nome' => 'São Miguel da Baixa Grande'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 10391,
            'nome' => 'São Miguel do Fidalgo'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 10409,
            'nome' => 'São Miguel do Tapuio'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 10508,
            'nome' => 'São Pedro do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 10607,
            'nome' => 'São Raimundo Nonato'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 10623,
            'nome' => 'Sebastião Barros'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 10631,
            'nome' => 'Sebastião Leal'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 10656,
            'nome' => 'Sigefredo Pacheco'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 10706,
            'nome' => 'Simões'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 10805,
            'nome' => 'Simplício Mendes'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 10904,
            'nome' => 'Socorro do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 10938,
            'nome' => 'Sussuapara'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 10953,
            'nome' => 'Tamboril do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 10979,
            'nome' => 'Tanque do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 11001,
            'nome' => 'Teresina'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 11100,
            'nome' => 'União'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 11209,
            'nome' => 'Uruçuí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 11308,
            'nome' => 'Valença do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 11357,
            'nome' => 'Várzea Branca'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 11407,
            'nome' => 'Várzea Grande'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 11506,
            'nome' => 'Vera Mendes'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 11605,
            'nome' => 'Vila Nova do Piauí'
        ],
        [
            'codigo_uf' => 22,
            'codigo_municipio' => 11704,
            'nome' => 'Wall Ferraz'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 101,
            'nome' => 'Abaiara'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 150,
            'nome' => 'Acarape'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 200,
            'nome' => 'Acaraú'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 309,
            'nome' => 'Acopiara'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 408,
            'nome' => 'Aiuaba'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 507,
            'nome' => 'Alcântaras'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 606,
            'nome' => 'Altaneira'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 705,
            'nome' => 'Alto Santo'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 754,
            'nome' => 'Amontada'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 804,
            'nome' => 'Antonina do Norte'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 903,
            'nome' => 'Apuiarés'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 1000,
            'nome' => 'Aquiraz'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 1109,
            'nome' => 'Aracati'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 1208,
            'nome' => 'Aracoiaba'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 1257,
            'nome' => 'Ararendá'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 1307,
            'nome' => 'Araripe'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 1406,
            'nome' => 'Aratuba'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 1505,
            'nome' => 'Arneiroz'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 1604,
            'nome' => 'Assaré'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 1703,
            'nome' => 'Aurora'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 1802,
            'nome' => 'Baixio'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 1851,
            'nome' => 'Banabuiú'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 1901,
            'nome' => 'Barbalha'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 1950,
            'nome' => 'Barreira'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 2008,
            'nome' => 'Barro'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 2057,
            'nome' => 'Barroquinha'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 2107,
            'nome' => 'Baturité'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 2206,
            'nome' => 'Beberibe'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 2305,
            'nome' => 'Bela Cruz'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 2404,
            'nome' => 'Boa Viagem'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 2503,
            'nome' => 'Brejo Santo'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 2602,
            'nome' => 'Camocim'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 2701,
            'nome' => 'Campos Sales'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 2800,
            'nome' => 'Canindé'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 2909,
            'nome' => 'Capistrano'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 3006,
            'nome' => 'Caridade'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 3105,
            'nome' => 'Cariré'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 3204,
            'nome' => 'Caririaçu'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 3303,
            'nome' => 'Cariús'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 3402,
            'nome' => 'Carnaubal'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 3501,
            'nome' => 'Cascavel'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 3600,
            'nome' => 'Catarina'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 3659,
            'nome' => 'Catunda'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 3709,
            'nome' => 'Caucaia'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 3808,
            'nome' => 'Cedro'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 3907,
            'nome' => 'Chaval'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 3931,
            'nome' => 'Choró'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 3956,
            'nome' => 'Chorozinho'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 4004,
            'nome' => 'Coreaú'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 4103,
            'nome' => 'Crateús'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 4202,
            'nome' => 'Crato'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 4236,
            'nome' => 'Croatá'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 4251,
            'nome' => 'Cruz'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 4269,
            'nome' => 'Deputado Irapuan Pinheiro'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 4277,
            'nome' => 'Ereré'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 4285,
            'nome' => 'Eusébio'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 4301,
            'nome' => 'Farias Brito'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 4350,
            'nome' => 'Forquilha'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 4400,
            'nome' => 'Fortaleza'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 4459,
            'nome' => 'Fortim'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 4509,
            'nome' => 'Frecheirinha'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 4608,
            'nome' => 'General Sampaio'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 4657,
            'nome' => 'Graça'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 4707,
            'nome' => 'Granja'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 4806,
            'nome' => 'Granjeiro'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 4905,
            'nome' => 'Groaíras'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 4954,
            'nome' => 'Guaiúba'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 5001,
            'nome' => 'Guaraciaba do Norte'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 5100,
            'nome' => 'Guaramiranga'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 5209,
            'nome' => 'Hidrolândia'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 5233,
            'nome' => 'Horizonte'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 5266,
            'nome' => 'Ibaretama'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 5308,
            'nome' => 'Ibiapina'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 5332,
            'nome' => 'Ibicuitinga'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 5357,
            'nome' => 'Icapuí'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 5407,
            'nome' => 'Icó'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 5506,
            'nome' => 'Iguatu'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 5605,
            'nome' => 'Independência'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 5654,
            'nome' => 'Ipaporanga'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 5704,
            'nome' => 'Ipaumirim'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 5803,
            'nome' => 'Ipu'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 5902,
            'nome' => 'Ipueiras'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 6009,
            'nome' => 'Iracema'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 6108,
            'nome' => 'Irauçuba'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 6207,
            'nome' => 'Itaiçaba'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 6256,
            'nome' => 'Itaitinga'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 6306,
            'nome' => 'Itapajé'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 6405,
            'nome' => 'Itapipoca'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 6504,
            'nome' => 'Itapiúna'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 6553,
            'nome' => 'Itarema'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 6603,
            'nome' => 'Itatira'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 6702,
            'nome' => 'Jaguaretama'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 6801,
            'nome' => 'Jaguaribara'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 6900,
            'nome' => 'Jaguaribe'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 7007,
            'nome' => 'Jaguaruana'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 7106,
            'nome' => 'Jardim'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 7205,
            'nome' => 'Jati'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 7254,
            'nome' => 'Jijoca de Jericoacoara'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 7304,
            'nome' => 'Juazeiro do Norte'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 7403,
            'nome' => 'Jucás'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 7502,
            'nome' => 'Lavras da Mangabeira'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 7601,
            'nome' => 'Limoeiro do Norte'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 7635,
            'nome' => 'Madalena'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 7650,
            'nome' => 'Maracanaú'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 7700,
            'nome' => 'Maranguape'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 7809,
            'nome' => 'Marco'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 7908,
            'nome' => 'Martinópole'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 8005,
            'nome' => 'Massapê'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 8104,
            'nome' => 'Mauriti'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 8203,
            'nome' => 'Meruoca'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 8302,
            'nome' => 'Milagres'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 8351,
            'nome' => 'Milhã'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 8377,
            'nome' => 'Miraíma'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 8401,
            'nome' => 'Missão Velha'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 8500,
            'nome' => 'Mombaça'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 8609,
            'nome' => 'Monsenhor Tabosa'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 8708,
            'nome' => 'Morada Nova'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 8807,
            'nome' => 'Moraújo'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 8906,
            'nome' => 'Morrinhos'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 9003,
            'nome' => 'Mucambo'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 9102,
            'nome' => 'Mulungu'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 9201,
            'nome' => 'Nova Olinda'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 9300,
            'nome' => 'Nova Russas'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 9409,
            'nome' => 'Novo Oriente'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 9458,
            'nome' => 'Ocara'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 9508,
            'nome' => 'Orós'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 9607,
            'nome' => 'Pacajus'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 9706,
            'nome' => 'Pacatuba'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 9805,
            'nome' => 'Pacoti'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 9904,
            'nome' => 'Pacujá'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 10001,
            'nome' => 'Palhano'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 10100,
            'nome' => 'Palmácia'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 10209,
            'nome' => 'Paracuru'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 10258,
            'nome' => 'Paraipaba'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 10308,
            'nome' => 'Parambu'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 10407,
            'nome' => 'Paramoti'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 10506,
            'nome' => 'Pedra Branca'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 10605,
            'nome' => 'Penaforte'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 10704,
            'nome' => 'Pentecoste'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 10803,
            'nome' => 'Pereiro'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 10852,
            'nome' => 'Pindoretama'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 10902,
            'nome' => 'Piquet Carneiro'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 10951,
            'nome' => 'Pires Ferreira'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 11009,
            'nome' => 'Poranga'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 11108,
            'nome' => 'Porteiras'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 11207,
            'nome' => 'Potengi'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 11231,
            'nome' => 'Potiretama'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 11264,
            'nome' => 'Quiterianópolis'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 11306,
            'nome' => 'Quixadá'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 11355,
            'nome' => 'Quixelô'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 11405,
            'nome' => 'Quixeramobim'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 11504,
            'nome' => 'Quixeré'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 11603,
            'nome' => 'Redenção'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 11702,
            'nome' => 'Reriutaba'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 11801,
            'nome' => 'Russas'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 11900,
            'nome' => 'Saboeiro'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 11959,
            'nome' => 'Salitre'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 12205,
            'nome' => 'Santa Quitéria'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 12007,
            'nome' => 'Santana do Acaraú'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 12106,
            'nome' => 'Santana do Cariri'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 12304,
            'nome' => 'São Benedito'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 12403,
            'nome' => 'São Gonçalo do Amarante'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 12502,
            'nome' => 'São João do Jaguaribe'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 12601,
            'nome' => 'São Luís do Curu'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 12700,
            'nome' => 'Senador Pompeu'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 12809,
            'nome' => 'Senador Sá'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 12908,
            'nome' => 'Sobral'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 13005,
            'nome' => 'Solonópole'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 13104,
            'nome' => 'Tabuleiro do Norte'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 13203,
            'nome' => 'Tamboril'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 13252,
            'nome' => 'Tarrafas'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 13302,
            'nome' => 'Tauá'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 13351,
            'nome' => 'Tejuçuoca'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 13401,
            'nome' => 'Tianguá'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 13500,
            'nome' => 'Trairi'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 13559,
            'nome' => 'Tururu'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 13609,
            'nome' => 'Ubajara'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 13708,
            'nome' => 'Umari'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 13757,
            'nome' => 'Umirim'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 13807,
            'nome' => 'Uruburetama'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 13906,
            'nome' => 'Uruoca'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 13955,
            'nome' => 'Varjota'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 14003,
            'nome' => 'Várzea Alegre'
        ],
        [
            'codigo_uf' => 23,
            'codigo_municipio' => 14102,
            'nome' => 'Viçosa do Ceará'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 109,
            'nome' => 'Acari'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 208,
            'nome' => 'Açu'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 307,
            'nome' => 'Afonso Bezerra'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 406,
            'nome' => 'Água Nova'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 505,
            'nome' => 'Alexandria'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 604,
            'nome' => 'Almino Afonso'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 703,
            'nome' => 'Alto do Rodrigues'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 802,
            'nome' => 'Angicos'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 901,
            'nome' => 'Antônio Martins'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 1008,
            'nome' => 'Apodi'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 1107,
            'nome' => 'Areia Branca'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 1206,
            'nome' => 'Arês'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 1404,
            'nome' => 'Baía Formosa'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 1453,
            'nome' => 'Baraúna'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 1503,
            'nome' => 'Barcelona'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 1602,
            'nome' => 'Bento Fernandes'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 1651,
            'nome' => 'Bodó'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 1701,
            'nome' => 'Bom Jesus'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 1800,
            'nome' => 'Brejinho'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 1859,
            'nome' => 'Caiçara do Norte'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 1909,
            'nome' => 'Caiçara do Rio do Vento'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 2006,
            'nome' => 'Caicó'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 1305,
            'nome' => 'Campo Grande'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 2105,
            'nome' => 'Campo Redondo'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 2204,
            'nome' => 'Canguaretama'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 2303,
            'nome' => 'Caraúbas'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 2402,
            'nome' => 'Carnaúba dos Dantas'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 2501,
            'nome' => 'Carnaubais'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 2600,
            'nome' => 'Ceará-Mirim'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 2709,
            'nome' => 'Cerro Corá'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 2808,
            'nome' => 'Coronel Ezequiel'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 2907,
            'nome' => 'Coronel João Pessoa'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 3004,
            'nome' => 'Cruzeta'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 3103,
            'nome' => 'Currais Novos'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 3202,
            'nome' => 'Doutor Severiano'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 3301,
            'nome' => 'Encanto'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 3400,
            'nome' => 'Equador'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 3509,
            'nome' => 'Espírito Santo'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 3608,
            'nome' => 'Extremoz'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 3707,
            'nome' => 'Felipe Guerra'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 3756,
            'nome' => 'Fernando Pedroza'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 3806,
            'nome' => 'Florânia'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 3905,
            'nome' => 'Francisco Dantas'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 4002,
            'nome' => 'Frutuoso Gomes'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 4101,
            'nome' => 'Galinhos'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 4200,
            'nome' => 'Goianinha'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 4309,
            'nome' => 'Governador Dix-Sept Rosado'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 4408,
            'nome' => 'Grossos'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 4507,
            'nome' => 'Guamaré'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 4606,
            'nome' => 'Ielmo Marinho'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 4705,
            'nome' => 'Ipanguaçu'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 4804,
            'nome' => 'Ipueira'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 4853,
            'nome' => 'Itajá'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 4903,
            'nome' => 'Itaú'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 5009,
            'nome' => 'Jaçanã'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 5108,
            'nome' => 'Jandaíra'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 5207,
            'nome' => 'Janduís'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 5306,
            'nome' => 'Januário Cicco'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 5405,
            'nome' => 'Japi'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 5504,
            'nome' => 'Jardim de Angicos'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 5603,
            'nome' => 'Jardim de Piranhas'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 5702,
            'nome' => 'Jardim do Seridó'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 5801,
            'nome' => 'João Câmara'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 5900,
            'nome' => 'João Dias'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 6007,
            'nome' => 'José da Penha'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 6106,
            'nome' => 'Jucurutu'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 6155,
            'nome' => 'Jundiá'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 6205,
            'nome' => 'Lagoa d\'Anta'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 6304,
            'nome' => 'Lagoa de Pedras'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 6403,
            'nome' => 'Lagoa de Velhos'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 6502,
            'nome' => 'Lagoa Nova'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 6601,
            'nome' => 'Lagoa Salgada'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 6700,
            'nome' => 'Lajes'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 6809,
            'nome' => 'Lajes Pintadas'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 6908,
            'nome' => 'Lucrécia'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 7005,
            'nome' => 'Luís Gomes'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 7104,
            'nome' => 'Macaíba'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 7203,
            'nome' => 'Macau'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 7252,
            'nome' => 'Major Sales'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 7302,
            'nome' => 'Marcelino Vieira'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 7401,
            'nome' => 'Martins'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 7500,
            'nome' => 'Maxaranguape'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 7609,
            'nome' => 'Messias Targino'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 7708,
            'nome' => 'Montanhas'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 7807,
            'nome' => 'Monte Alegre'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 7906,
            'nome' => 'Monte das Gameleiras'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 8003,
            'nome' => 'Mossoró'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 8102,
            'nome' => 'Natal'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 8201,
            'nome' => 'Nísia Floresta'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 8300,
            'nome' => 'Nova Cruz'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 8409,
            'nome' => 'Olho d\'Água do Borges'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 8508,
            'nome' => 'Ouro Branco'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 8607,
            'nome' => 'Paraná'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 8706,
            'nome' => 'Paraú'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 8805,
            'nome' => 'Parazinho'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 8904,
            'nome' => 'Parelhas'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 3251,
            'nome' => 'Parnamirim'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 9100,
            'nome' => 'Passa e Fica'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 9209,
            'nome' => 'Passagem'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 9308,
            'nome' => 'Patu'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 9407,
            'nome' => 'Pau dos Ferros'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 9506,
            'nome' => 'Pedra Grande'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 9605,
            'nome' => 'Pedra Preta'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 9704,
            'nome' => 'Pedro Avelino'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 9803,
            'nome' => 'Pedro Velho'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 9902,
            'nome' => 'Pendências'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 10009,
            'nome' => 'Pilões'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 10108,
            'nome' => 'Poço Branco'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 10207,
            'nome' => 'Portalegre'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 10256,
            'nome' => 'Porto do Mangue'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 10405,
            'nome' => 'Pureza'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 10504,
            'nome' => 'Rafael Fernandes'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 10603,
            'nome' => 'Rafael Godeiro'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 10702,
            'nome' => 'Riacho da Cruz'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 10801,
            'nome' => 'Riacho de Santana'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 10900,
            'nome' => 'Riachuelo'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 8953,
            'nome' => 'Rio do Fogo'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 11007,
            'nome' => 'Rodolfo Fernandes'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 11106,
            'nome' => 'Ruy Barbosa'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 11205,
            'nome' => 'Santa Cruz'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 9332,
            'nome' => 'Santa Maria'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 11403,
            'nome' => 'Santana do Matos'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 11429,
            'nome' => 'Santana do Seridó'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 11502,
            'nome' => 'Santo Antônio'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 11601,
            'nome' => 'São Bento do Norte'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 11700,
            'nome' => 'São Bento do Trairí'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 11809,
            'nome' => 'São Fernando'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 11908,
            'nome' => 'São Francisco do Oeste'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 12005,
            'nome' => 'São Gonçalo do Amarante'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 12104,
            'nome' => 'São João do Sabugi'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 12203,
            'nome' => 'São José de Mipibu'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 12302,
            'nome' => 'São José do Campestre'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 12401,
            'nome' => 'São José do Seridó'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 12500,
            'nome' => 'São Miguel'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 12559,
            'nome' => 'São Miguel do Gostoso'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 12609,
            'nome' => 'São Paulo do Potengi'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 12708,
            'nome' => 'São Pedro'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 12807,
            'nome' => 'São Rafael'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 12906,
            'nome' => 'São Tomé'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 13003,
            'nome' => 'São Vicente'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 13102,
            'nome' => 'Senador Elói de Souza'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 13201,
            'nome' => 'Senador Georgino Avelino'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 10306,
            'nome' => 'Serra Caiada'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 13300,
            'nome' => 'Serra de São Bento'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 13359,
            'nome' => 'Serra do Mel'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 13409,
            'nome' => 'Serra Negra do Norte'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 13508,
            'nome' => 'Serrinha'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 13557,
            'nome' => 'Serrinha dos Pintos'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 13607,
            'nome' => 'Severiano Melo'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 13706,
            'nome' => 'Sítio Novo'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 13805,
            'nome' => 'Taboleiro Grande'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 13904,
            'nome' => 'Taipu'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 14001,
            'nome' => 'Tangará'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 14100,
            'nome' => 'Tenente Ananias'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 14159,
            'nome' => 'Tenente Laurentino Cruz'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 11056,
            'nome' => 'Tibau'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 14209,
            'nome' => 'Tibau do Sul'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 14308,
            'nome' => 'Timbaúba dos Batistas'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 14407,
            'nome' => 'Touros'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 14456,
            'nome' => 'Triunfo Potiguar'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 14506,
            'nome' => 'Umarizal'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 14605,
            'nome' => 'Upanema'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 14704,
            'nome' => 'Várzea'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 14753,
            'nome' => 'Venha-Ver'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 14803,
            'nome' => 'Vera Cruz'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 14902,
            'nome' => 'Viçosa'
        ],
        [
            'codigo_uf' => 24,
            'codigo_municipio' => 15008,
            'nome' => 'Vila Flor'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 106,
            'nome' => 'Água Branca'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 205,
            'nome' => 'Aguiar'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 304,
            'nome' => 'Alagoa Grande'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 403,
            'nome' => 'Alagoa Nova'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 502,
            'nome' => 'Alagoinha'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 536,
            'nome' => 'Alcantil'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 577,
            'nome' => 'Algodão de Jandaíra'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 601,
            'nome' => 'Alhandra'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 734,
            'nome' => 'Amparo'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 775,
            'nome' => 'Aparecida'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 809,
            'nome' => 'Araçagi'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 908,
            'nome' => 'Arara'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 1005,
            'nome' => 'Araruna'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 1104,
            'nome' => 'Areia'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 1153,
            'nome' => 'Areia de Baraúnas'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 1203,
            'nome' => 'Areial'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 1302,
            'nome' => 'Aroeiras'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 1351,
            'nome' => 'Assunção'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 1401,
            'nome' => 'Baía da Traição'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 1500,
            'nome' => 'Bananeiras'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 1534,
            'nome' => 'Baraúna'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 1609,
            'nome' => 'Barra de Santa Rosa'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 1575,
            'nome' => 'Barra de Santana'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 1708,
            'nome' => 'Barra de São Miguel'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 1807,
            'nome' => 'Bayeux'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 1906,
            'nome' => 'Belém'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 2003,
            'nome' => 'Belém do Brejo do Cruz'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 2052,
            'nome' => 'Bernardino Batista'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 2102,
            'nome' => 'Boa Ventura'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 2151,
            'nome' => 'Boa Vista'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 2201,
            'nome' => 'Bom Jesus'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 2300,
            'nome' => 'Bom Sucesso'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 2409,
            'nome' => 'Bonito de Santa Fé'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 2508,
            'nome' => 'Boqueirão'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 2706,
            'nome' => 'Borborema'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 2805,
            'nome' => 'Brejo do Cruz'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 2904,
            'nome' => 'Brejo dos Santos'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 3001,
            'nome' => 'Caaporã'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 3100,
            'nome' => 'Cabaceiras'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 3209,
            'nome' => 'Cabedelo'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 3308,
            'nome' => 'Cachoeira dos Índios'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 3407,
            'nome' => 'Cacimba de Areia'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 3506,
            'nome' => 'Cacimba de Dentro'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 3555,
            'nome' => 'Cacimbas'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 3605,
            'nome' => 'Caiçara'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 3704,
            'nome' => 'Cajazeiras'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 3753,
            'nome' => 'Cajazeirinhas'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 3803,
            'nome' => 'Caldas Brandão'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 3902,
            'nome' => 'Camalaú'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 4009,
            'nome' => 'Campina Grande'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 4033,
            'nome' => 'Capim'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 4074,
            'nome' => 'Caraúbas'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 4108,
            'nome' => 'Carrapateira'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 4157,
            'nome' => 'Casserengue'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 4207,
            'nome' => 'Catingueira'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 4306,
            'nome' => 'Catolé do Rocha'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 4355,
            'nome' => 'Caturité'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 4405,
            'nome' => 'Conceição'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 4504,
            'nome' => 'Condado'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 4603,
            'nome' => 'Conde'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 4702,
            'nome' => 'Congo'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 4801,
            'nome' => 'Coremas'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 4850,
            'nome' => 'Coxixola'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 4900,
            'nome' => 'Cruz do Espírito Santo'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 5006,
            'nome' => 'Cubati'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 5105,
            'nome' => 'Cuité'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 5238,
            'nome' => 'Cuité de Mamanguape'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 5204,
            'nome' => 'Cuitegi'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 5279,
            'nome' => 'Curral de Cima'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 5303,
            'nome' => 'Curral Velho'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 5352,
            'nome' => 'Damião'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 5402,
            'nome' => 'Desterro'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 5600,
            'nome' => 'Diamante'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 5709,
            'nome' => 'Dona Inês'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 5808,
            'nome' => 'Duas Estradas'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 5907,
            'nome' => 'Emas'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 6004,
            'nome' => 'Esperança'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 6103,
            'nome' => 'Fagundes'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 6202,
            'nome' => 'Frei Martinho'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 6251,
            'nome' => 'Gado Bravo'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 6301,
            'nome' => 'Guarabira'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 6400,
            'nome' => 'Gurinhém'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 6509,
            'nome' => 'Gurjão'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 6608,
            'nome' => 'Ibiara'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 2607,
            'nome' => 'Igaracy'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 6707,
            'nome' => 'Imaculada'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 6806,
            'nome' => 'Ingá'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 6905,
            'nome' => 'Itabaiana'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 7002,
            'nome' => 'Itaporanga'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 7101,
            'nome' => 'Itapororoca'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 7200,
            'nome' => 'Itatuba'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 7309,
            'nome' => 'Jacaraú'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 7408,
            'nome' => 'Jericó'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 7507,
            'nome' => 'João Pessoa'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 13653,
            'nome' => 'Joca Claudino'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 7606,
            'nome' => 'Juarez Távora'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 7705,
            'nome' => 'Juazeirinho'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 7804,
            'nome' => 'Junco do Seridó'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 7903,
            'nome' => 'Juripiranga'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 8000,
            'nome' => 'Juru'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 8109,
            'nome' => 'Lagoa'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 8208,
            'nome' => 'Lagoa de Dentro'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 8307,
            'nome' => 'Lagoa Seca'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 8406,
            'nome' => 'Lastro'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 8505,
            'nome' => 'Livramento'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 8554,
            'nome' => 'Logradouro'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 8604,
            'nome' => 'Lucena'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 8703,
            'nome' => 'Mãe d\'Água'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 8802,
            'nome' => 'Malta'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 8901,
            'nome' => 'Mamanguape'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 9008,
            'nome' => 'Manaíra'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 9057,
            'nome' => 'Marcação'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 9107,
            'nome' => 'Mari'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 9156,
            'nome' => 'Marizópolis'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 9206,
            'nome' => 'Massaranduba'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 9305,
            'nome' => 'Mataraca'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 9339,
            'nome' => 'Matinhas'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 9370,
            'nome' => 'Mato Grosso'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 9396,
            'nome' => 'Maturéia'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 9404,
            'nome' => 'Mogeiro'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 9503,
            'nome' => 'Montadas'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 9602,
            'nome' => 'Monte Horebe'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 9701,
            'nome' => 'Monteiro'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 9800,
            'nome' => 'Mulungu'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 9909,
            'nome' => 'Natuba'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 10006,
            'nome' => 'Nazarezinho'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 10105,
            'nome' => 'Nova Floresta'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 10204,
            'nome' => 'Nova Olinda'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 10303,
            'nome' => 'Nova Palmeira'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 10402,
            'nome' => 'Olho d\'Água'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 10501,
            'nome' => 'Olivedos'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 10600,
            'nome' => 'Ouro Velho'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 10659,
            'nome' => 'Parari'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 10709,
            'nome' => 'Passagem'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 10808,
            'nome' => 'Patos'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 10907,
            'nome' => 'Paulista'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 11004,
            'nome' => 'Pedra Branca'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 11103,
            'nome' => 'Pedra Lavrada'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 11202,
            'nome' => 'Pedras de Fogo'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 12721,
            'nome' => 'Pedro Régis'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 11301,
            'nome' => 'Piancó'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 11400,
            'nome' => 'Picuí'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 11509,
            'nome' => 'Pilar'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 11608,
            'nome' => 'Pilões'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 11707,
            'nome' => 'Pilõezinhos'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 11806,
            'nome' => 'Pirpirituba'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 11905,
            'nome' => 'Pitimbu'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 12002,
            'nome' => 'Pocinhos'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 12036,
            'nome' => 'Poço Dantas'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 12077,
            'nome' => 'Poço de José de Moura'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 12101,
            'nome' => 'Pombal'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 12200,
            'nome' => 'Prata'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 12309,
            'nome' => 'Princesa Isabel'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 12408,
            'nome' => 'Puxinanã'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 12507,
            'nome' => 'Queimadas'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 12606,
            'nome' => 'Quixaba'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 12705,
            'nome' => 'Remígio'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 12747,
            'nome' => 'Riachão'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 12754,
            'nome' => 'Riachão do Bacamarte'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 12762,
            'nome' => 'Riachão do Poço'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 12788,
            'nome' => 'Riacho de Santo Antônio'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 12804,
            'nome' => 'Riacho dos Cavalos'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 12903,
            'nome' => 'Rio Tinto'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 13000,
            'nome' => 'Salgadinho'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 13109,
            'nome' => 'Salgado de São Félix'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 13158,
            'nome' => 'Santa Cecília'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 13208,
            'nome' => 'Santa Cruz'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 13307,
            'nome' => 'Santa Helena'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 13356,
            'nome' => 'Santa Inês'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 13406,
            'nome' => 'Santa Luzia'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 13703,
            'nome' => 'Santa Rita'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 13802,
            'nome' => 'Santa Teresinha'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 13505,
            'nome' => 'Santana de Mangueira'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 13604,
            'nome' => 'Santana dos Garrotes'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 13851,
            'nome' => 'Santo André'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 13927,
            'nome' => 'São Bentinho'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 13901,
            'nome' => 'São Bento'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 13968,
            'nome' => 'São Domingos'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 13943,
            'nome' => 'São Domingos do Cariri'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 13984,
            'nome' => 'São Francisco'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 14008,
            'nome' => 'São João do Cariri'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 700,
            'nome' => 'São João do Rio do Peixe'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 14107,
            'nome' => 'São João do Tigre'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 14206,
            'nome' => 'São José da Lagoa Tapada'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 14305,
            'nome' => 'São José de Caiana'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 14404,
            'nome' => 'São José de Espinharas'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 14503,
            'nome' => 'São José de Piranhas'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 14552,
            'nome' => 'São José de Princesa'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 14602,
            'nome' => 'São José do Bonfim'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 14651,
            'nome' => 'São José do Brejo do Cruz'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 14701,
            'nome' => 'São José do Sabugi'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 14800,
            'nome' => 'São José dos Cordeiros'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 14453,
            'nome' => 'São José dos Ramos'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 14909,
            'nome' => 'São Mamede'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 15005,
            'nome' => 'São Miguel de Taipu'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 15104,
            'nome' => 'São Sebastião de Lagoa de Roça'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 15203,
            'nome' => 'São Sebastião do Umbuzeiro'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 15401,
            'nome' => 'São Vicente do Seridó'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 15302,
            'nome' => 'Sapé'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 15500,
            'nome' => 'Serra Branca'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 15609,
            'nome' => 'Serra da Raiz'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 15708,
            'nome' => 'Serra Grande'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 15807,
            'nome' => 'Serra Redonda'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 15906,
            'nome' => 'Serraria'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 15930,
            'nome' => 'Sertãozinho'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 15971,
            'nome' => 'Sobrado'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 16003,
            'nome' => 'Solânea'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 16102,
            'nome' => 'Soledade'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 16151,
            'nome' => 'Sossêgo'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 16201,
            'nome' => 'Sousa'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 16300,
            'nome' => 'Sumé'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 16409,
            'nome' => 'Tacima'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 16508,
            'nome' => 'Taperoá'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 16607,
            'nome' => 'Tavares'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 16706,
            'nome' => 'Teixeira'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 16755,
            'nome' => 'Tenório'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 16805,
            'nome' => 'Triunfo'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 16904,
            'nome' => 'Uiraúna'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 17001,
            'nome' => 'Umbuzeiro'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 17100,
            'nome' => 'Várzea'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 17209,
            'nome' => 'Vieirópolis'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 5501,
            'nome' => 'Vista Serrana'
        ],
        [
            'codigo_uf' => 25,
            'codigo_municipio' => 17407,
            'nome' => 'Zabelê'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 54,
            'nome' => 'Abreu e Lima'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 104,
            'nome' => 'Afogados da Ingazeira'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 203,
            'nome' => 'Afrânio'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 302,
            'nome' => 'Agrestina'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 401,
            'nome' => 'Água Preta'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 500,
            'nome' => 'Águas Belas'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 609,
            'nome' => 'Alagoinha'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 708,
            'nome' => 'Aliança'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 807,
            'nome' => 'Altinho'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 906,
            'nome' => 'Amaraji'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 1003,
            'nome' => 'Angelim'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 1052,
            'nome' => 'Araçoiaba'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 1102,
            'nome' => 'Araripina'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 1201,
            'nome' => 'Arcoverde'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 1300,
            'nome' => 'Barra de Guabiraba'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 1409,
            'nome' => 'Barreiros'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 1508,
            'nome' => 'Belém de Maria'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 1607,
            'nome' => 'Belém do São Francisco'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 1706,
            'nome' => 'Belo Jardim'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 1805,
            'nome' => 'Betânia'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 1904,
            'nome' => 'Bezerros'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 2001,
            'nome' => 'Bodocó'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 2100,
            'nome' => 'Bom Conselho'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 2209,
            'nome' => 'Bom Jardim'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 2308,
            'nome' => 'Bonito'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 2407,
            'nome' => 'Brejão'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 2506,
            'nome' => 'Brejinho'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 2605,
            'nome' => 'Brejo da Madre de Deus'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 2704,
            'nome' => 'Buenos Aires'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 2803,
            'nome' => 'Buíque'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 2902,
            'nome' => 'Cabo de Santo Agostinho'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 3009,
            'nome' => 'Cabrobó'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 3108,
            'nome' => 'Cachoeirinha'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 3207,
            'nome' => 'Caetés'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 3306,
            'nome' => 'Calçado'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 3405,
            'nome' => 'Calumbi'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 3454,
            'nome' => 'Camaragibe'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 3504,
            'nome' => 'Camocim de São Félix'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 3603,
            'nome' => 'Camutanga'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 3702,
            'nome' => 'Canhotinho'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 3801,
            'nome' => 'Capoeiras'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 3900,
            'nome' => 'Carnaíba'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 3926,
            'nome' => 'Carnaubeira da Penha'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 4007,
            'nome' => 'Carpina'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 4106,
            'nome' => 'Caruaru'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 4155,
            'nome' => 'Casinhas'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 4205,
            'nome' => 'Catende'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 4304,
            'nome' => 'Cedro'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 4403,
            'nome' => 'Chã de Alegria'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 4502,
            'nome' => 'Chã Grande'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 4601,
            'nome' => 'Condado'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 4700,
            'nome' => 'Correntes'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 4809,
            'nome' => 'Cortês'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 4908,
            'nome' => 'Cumaru'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 5004,
            'nome' => 'Cupira'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 5103,
            'nome' => 'Custódia'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 5152,
            'nome' => 'Dormentes'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 5202,
            'nome' => 'Escada'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 5301,
            'nome' => 'Exu'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 5400,
            'nome' => 'Feira Nova'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 5459,
            'nome' => 'Fernando de Noronha'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 5509,
            'nome' => 'Ferreiros'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 5608,
            'nome' => 'Flores'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 5707,
            'nome' => 'Floresta'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 5806,
            'nome' => 'Frei Miguelinho'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 5905,
            'nome' => 'Gameleira'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 6002,
            'nome' => 'Garanhuns'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 6101,
            'nome' => 'Glória do Goitá'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 6200,
            'nome' => 'Goiana'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 6309,
            'nome' => 'Granito'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 6408,
            'nome' => 'Gravatá'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 6507,
            'nome' => 'Iati'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 6606,
            'nome' => 'Ibimirim'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 6705,
            'nome' => 'Ibirajuba'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 6804,
            'nome' => 'Igarassu'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 6903,
            'nome' => 'Iguaracy'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 7604,
            'nome' => 'Ilha de Itamaracá'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 7000,
            'nome' => 'Inajá'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 7109,
            'nome' => 'Ingazeira'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 7208,
            'nome' => 'Ipojuca'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 7307,
            'nome' => 'Ipubi'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 7406,
            'nome' => 'Itacuruba'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 7505,
            'nome' => 'Itaíba'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 7653,
            'nome' => 'Itambé'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 7703,
            'nome' => 'Itapetim'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 7752,
            'nome' => 'Itapissuma'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 7802,
            'nome' => 'Itaquitinga'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 7901,
            'nome' => 'Jaboatão dos Guararapes'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 7950,
            'nome' => 'Jaqueira'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 8008,
            'nome' => 'Jataúba'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 8057,
            'nome' => 'Jatobá'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 8107,
            'nome' => 'João Alfredo'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 8206,
            'nome' => 'Joaquim Nabuco'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 8255,
            'nome' => 'Jucati'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 8305,
            'nome' => 'Jupi'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 8404,
            'nome' => 'Jurema'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 8503,
            'nome' => 'Lagoa de Itaenga'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 8453,
            'nome' => 'Lagoa do Carro'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 8602,
            'nome' => 'Lagoa do Ouro'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 8701,
            'nome' => 'Lagoa dos Gatos'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 8750,
            'nome' => 'Lagoa Grande'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 8800,
            'nome' => 'Lajedo'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 8909,
            'nome' => 'Limoeiro'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 9006,
            'nome' => 'Macaparana'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 9105,
            'nome' => 'Machados'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 9154,
            'nome' => 'Manari'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 9204,
            'nome' => 'Maraial'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 9303,
            'nome' => 'Mirandiba'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 14303,
            'nome' => 'Moreilândia'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 9402,
            'nome' => 'Moreno'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 9501,
            'nome' => 'Nazaré da Mata'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 9600,
            'nome' => 'Olinda'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 9709,
            'nome' => 'Orobó'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 9808,
            'nome' => 'Orocó'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 9907,
            'nome' => 'Ouricuri'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 10004,
            'nome' => 'Palmares'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 10103,
            'nome' => 'Palmeirina'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 10202,
            'nome' => 'Panelas'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 10301,
            'nome' => 'Paranatama'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 10400,
            'nome' => 'Parnamirim'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 10509,
            'nome' => 'Passira'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 10608,
            'nome' => 'Paudalho'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 10707,
            'nome' => 'Paulista'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 10806,
            'nome' => 'Pedra'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 10905,
            'nome' => 'Pesqueira'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 11002,
            'nome' => 'Petrolândia'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 11101,
            'nome' => 'Petrolina'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 11200,
            'nome' => 'Poção'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 11309,
            'nome' => 'Pombos'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 11408,
            'nome' => 'Primavera'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 11507,
            'nome' => 'Quipapá'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 11533,
            'nome' => 'Quixaba'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 11606,
            'nome' => 'Recife'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 11705,
            'nome' => 'Riacho das Almas'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 11804,
            'nome' => 'Ribeirão'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 11903,
            'nome' => 'Rio Formoso'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 12000,
            'nome' => 'Sairé'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 12109,
            'nome' => 'Salgadinho'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 12208,
            'nome' => 'Salgueiro'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 12307,
            'nome' => 'Saloá'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 12406,
            'nome' => 'Sanharó'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 12455,
            'nome' => 'Santa Cruz'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 12471,
            'nome' => 'Santa Cruz da Baixa Verde'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 12505,
            'nome' => 'Santa Cruz do Capibaribe'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 12554,
            'nome' => 'Santa Filomena'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 12604,
            'nome' => 'Santa Maria da Boa Vista'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 12703,
            'nome' => 'Santa Maria do Cambucá'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 12802,
            'nome' => 'Santa Terezinha'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 12901,
            'nome' => 'São Benedito do Sul'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 13008,
            'nome' => 'São Bento do Una'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 13107,
            'nome' => 'São Caitano'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 13206,
            'nome' => 'São João'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 13305,
            'nome' => 'São Joaquim do Monte'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 13404,
            'nome' => 'São José da Coroa Grande'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 13503,
            'nome' => 'São José do Belmonte'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 13602,
            'nome' => 'São José do Egito'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 13701,
            'nome' => 'São Lourenço da Mata'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 13800,
            'nome' => 'São Vicente Férrer'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 13909,
            'nome' => 'Serra Talhada'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 14006,
            'nome' => 'Serrita'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 14105,
            'nome' => 'Sertânia'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 14204,
            'nome' => 'Sirinhaém'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 14402,
            'nome' => 'Solidão'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 14501,
            'nome' => 'Surubim'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 14600,
            'nome' => 'Tabira'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 14709,
            'nome' => 'Tacaimbó'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 14808,
            'nome' => 'Tacaratu'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 14857,
            'nome' => 'Tamandaré'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 15003,
            'nome' => 'Taquaritinga do Norte'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 15102,
            'nome' => 'Terezinha'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 15201,
            'nome' => 'Terra Nova'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 15300,
            'nome' => 'Timbaúba'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 15409,
            'nome' => 'Toritama'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 15508,
            'nome' => 'Tracunhaém'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 15607,
            'nome' => 'Trindade'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 15706,
            'nome' => 'Triunfo'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 15805,
            'nome' => 'Tupanatinga'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 15904,
            'nome' => 'Tuparetama'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 16001,
            'nome' => 'Venturosa'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 16100,
            'nome' => 'Verdejante'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 16183,
            'nome' => 'Vertente do Lério'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 16209,
            'nome' => 'Vertentes'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 16308,
            'nome' => 'Vicência'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 16407,
            'nome' => 'Vitória de Santo Antão'
        ],
        [
            'codigo_uf' => 26,
            'codigo_municipio' => 16506,
            'nome' => 'Xexéu'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 102,
            'nome' => 'Água Branca'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 201,
            'nome' => 'Anadia'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 300,
            'nome' => 'Arapiraca'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 409,
            'nome' => 'Atalaia'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 508,
            'nome' => 'Barra de Santo Antônio'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 607,
            'nome' => 'Barra de São Miguel'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 706,
            'nome' => 'Batalha'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 805,
            'nome' => 'Belém'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 904,
            'nome' => 'Belo Monte'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 1001,
            'nome' => 'Boca da Mata'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 1100,
            'nome' => 'Branquinha'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 1209,
            'nome' => 'Cacimbinhas'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 1308,
            'nome' => 'Cajueiro'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 1357,
            'nome' => 'Campestre'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 1407,
            'nome' => 'Campo Alegre'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 1506,
            'nome' => 'Campo Grande'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 1605,
            'nome' => 'Canapi'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 1704,
            'nome' => 'Capela'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 1803,
            'nome' => 'Carneiros'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 1902,
            'nome' => 'Chã Preta'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 2009,
            'nome' => 'Coité do Nóia'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 2108,
            'nome' => 'Colônia Leopoldina'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 2207,
            'nome' => 'Coqueiro Seco'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 2306,
            'nome' => 'Coruripe'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 2355,
            'nome' => 'Craíbas'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 2405,
            'nome' => 'Delmiro Gouveia'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 2504,
            'nome' => 'Dois Riachos'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 2553,
            'nome' => 'Estrela de Alagoas'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 2603,
            'nome' => 'Feira Grande'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 2702,
            'nome' => 'Feliz Deserto'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 2801,
            'nome' => 'Flexeiras'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 2900,
            'nome' => 'Girau do Ponciano'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 3007,
            'nome' => 'Ibateguara'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 3106,
            'nome' => 'Igaci'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 3205,
            'nome' => 'Igreja Nova'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 3304,
            'nome' => 'Inhapi'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 3403,
            'nome' => 'Jacaré dos Homens'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 3502,
            'nome' => 'Jacuípe'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 3601,
            'nome' => 'Japaratinga'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 3700,
            'nome' => 'Jaramataia'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 3759,
            'nome' => 'Jequiá da Praia'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 3809,
            'nome' => 'Joaquim Gomes'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 3908,
            'nome' => 'Jundiá'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 4005,
            'nome' => 'Junqueiro'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 4104,
            'nome' => 'Lagoa da Canoa'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 4203,
            'nome' => 'Limoeiro de Anadia'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 4302,
            'nome' => 'Maceió'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 4401,
            'nome' => 'Major Isidoro'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 4906,
            'nome' => 'Mar Vermelho'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 4500,
            'nome' => 'Maragogi'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 4609,
            'nome' => 'Maravilha'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 4708,
            'nome' => 'Marechal Deodoro'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 4807,
            'nome' => 'Maribondo'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 5002,
            'nome' => 'Mata Grande'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 5101,
            'nome' => 'Matriz de Camaragibe'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 5200,
            'nome' => 'Messias'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 5309,
            'nome' => 'Minador do Negrão'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 5408,
            'nome' => 'Monteirópolis'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 5507,
            'nome' => 'Murici'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 5606,
            'nome' => 'Novo Lino'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 5705,
            'nome' => 'Olho d\'Água das Flores'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 5804,
            'nome' => 'Olho d\'Água do Casado'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 5903,
            'nome' => 'Olho d\'Água Grande'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 6000,
            'nome' => 'Olivença'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 6109,
            'nome' => 'Ouro Branco'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 6208,
            'nome' => 'Palestina'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 6307,
            'nome' => 'Palmeira dos Índios'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 6406,
            'nome' => 'Pão de Açúcar'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 6422,
            'nome' => 'Pariconha'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 6448,
            'nome' => 'Paripueira'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 6505,
            'nome' => 'Passo de Camaragibe'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 6604,
            'nome' => 'Paulo Jacinto'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 6703,
            'nome' => 'Penedo'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 6802,
            'nome' => 'Piaçabuçu'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 6901,
            'nome' => 'Pilar'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 7008,
            'nome' => 'Pindoba'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 7107,
            'nome' => 'Piranhas'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 7206,
            'nome' => 'Poço das Trincheiras'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 7305,
            'nome' => 'Porto Calvo'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 7404,
            'nome' => 'Porto de Pedras'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 7503,
            'nome' => 'Porto Real do Colégio'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 7602,
            'nome' => 'Quebrangulo'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 7701,
            'nome' => 'Rio Largo'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 7800,
            'nome' => 'Roteiro'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 7909,
            'nome' => 'Santa Luzia do Norte'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 8006,
            'nome' => 'Santana do Ipanema'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 8105,
            'nome' => 'Santana do Mundaú'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 8204,
            'nome' => 'São Brás'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 8303,
            'nome' => 'São José da Laje'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 8402,
            'nome' => 'São José da Tapera'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 8501,
            'nome' => 'São Luís do Quitunde'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 8600,
            'nome' => 'São Miguel dos Campos'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 8709,
            'nome' => 'São Miguel dos Milagres'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 8808,
            'nome' => 'São Sebastião'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 8907,
            'nome' => 'Satuba'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 8956,
            'nome' => 'Senador Rui Palmeira'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 9004,
            'nome' => 'Tanque d\'Arca'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 9103,
            'nome' => 'Taquarana'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 9152,
            'nome' => 'Teotônio Vilela'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 9202,
            'nome' => 'Traipu'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 9301,
            'nome' => 'União dos Palmares'
        ],
        [
            'codigo_uf' => 27,
            'codigo_municipio' => 9400,
            'nome' => 'Viçosa'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 100,
            'nome' => 'Amparo do São Francisco'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 209,
            'nome' => 'Aquidabã'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 308,
            'nome' => 'Aracaju'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 407,
            'nome' => 'Arauá'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 506,
            'nome' => 'Areia Branca'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 605,
            'nome' => 'Barra dos Coqueiros'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 670,
            'nome' => 'Boquim'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 704,
            'nome' => 'Brejo Grande'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 1009,
            'nome' => 'Campo do Brito'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 1108,
            'nome' => 'Canhoba'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 1207,
            'nome' => 'Canindé de São Francisco'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 1306,
            'nome' => 'Capela'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 1405,
            'nome' => 'Carira'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 1504,
            'nome' => 'Carmópolis'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 1603,
            'nome' => 'Cedro de São João'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 1702,
            'nome' => 'Cristinápolis'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 1900,
            'nome' => 'Cumbe'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 2007,
            'nome' => 'Divina Pastora'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 2106,
            'nome' => 'Estância'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 2205,
            'nome' => 'Feira Nova'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 2304,
            'nome' => 'Frei Paulo'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 2403,
            'nome' => 'Gararu'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 2502,
            'nome' => 'General Maynard'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 2601,
            'nome' => 'Gracho Cardoso'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 2700,
            'nome' => 'Ilha das Flores'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 2809,
            'nome' => 'Indiaroba'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 2908,
            'nome' => 'Itabaiana'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 3005,
            'nome' => 'Itabaianinha'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 3104,
            'nome' => 'Itabi'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 3203,
            'nome' => 'Itaporanga d\'Ajuda'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 3302,
            'nome' => 'Japaratuba'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 3401,
            'nome' => 'Japoatã'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 3500,
            'nome' => 'Lagarto'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 3609,
            'nome' => 'Laranjeiras'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 3708,
            'nome' => 'Macambira'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 3807,
            'nome' => 'Malhada dos Bois'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 3906,
            'nome' => 'Malhador'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 4003,
            'nome' => 'Maruim'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 4102,
            'nome' => 'Moita Bonita'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 4201,
            'nome' => 'Monte Alegre de Sergipe'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 4300,
            'nome' => 'Muribeca'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 4409,
            'nome' => 'Neópolis'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 4458,
            'nome' => 'Nossa Senhora Aparecida'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 4508,
            'nome' => 'Nossa Senhora da Glória'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 4607,
            'nome' => 'Nossa Senhora das Dores'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 4706,
            'nome' => 'Nossa Senhora de Lourdes'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 4805,
            'nome' => 'Nossa Senhora do Socorro'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 4904,
            'nome' => 'Pacatuba'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 5000,
            'nome' => 'Pedra Mole'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 5109,
            'nome' => 'Pedrinhas'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 5208,
            'nome' => 'Pinhão'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 5307,
            'nome' => 'Pirambu'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 5406,
            'nome' => 'Poço Redondo'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 5505,
            'nome' => 'Poço Verde'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 5604,
            'nome' => 'Porto da Folha'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 5703,
            'nome' => 'Propriá'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 5802,
            'nome' => 'Riachão do Dantas'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 5901,
            'nome' => 'Riachuelo'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 6008,
            'nome' => 'Ribeirópolis'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 6107,
            'nome' => 'Rosário do Catete'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 6206,
            'nome' => 'Salgado'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 6305,
            'nome' => 'Santa Luzia do Itanhy'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 6503,
            'nome' => 'Santa Rosa de Lima'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 6404,
            'nome' => 'Santana do São Francisco'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 6602,
            'nome' => 'Santo Amaro das Brotas'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 6701,
            'nome' => 'São Cristóvão'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 6800,
            'nome' => 'São Domingos'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 6909,
            'nome' => 'São Francisco'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 7006,
            'nome' => 'São Miguel do Aleixo'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 7105,
            'nome' => 'Simão Dias'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 7204,
            'nome' => 'Siriri'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 7303,
            'nome' => 'Telha'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 7402,
            'nome' => 'Tobias Barreto'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 7501,
            'nome' => 'Tomar do Geru'
        ],
        [
            'codigo_uf' => 28,
            'codigo_municipio' => 7600,
            'nome' => 'Umbaúba'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 108,
            'nome' => 'Abaíra'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 207,
            'nome' => 'Abaré'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 306,
            'nome' => 'Acajutiba'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 355,
            'nome' => 'Adustina'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 405,
            'nome' => 'Água Fria'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 603,
            'nome' => 'Aiquara'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 702,
            'nome' => 'Alagoinhas'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 801,
            'nome' => 'Alcobaça'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 900,
            'nome' => 'Almadina'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 1007,
            'nome' => 'Amargosa'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 1106,
            'nome' => 'Amélia Rodrigues'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 1155,
            'nome' => 'América Dourada'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 1205,
            'nome' => 'Anagé'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 1304,
            'nome' => 'Andaraí'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 1353,
            'nome' => 'Andorinha'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 1403,
            'nome' => 'Angical'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 1502,
            'nome' => 'Anguera'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 1601,
            'nome' => 'Antas'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 1700,
            'nome' => 'Antônio Cardoso'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 1809,
            'nome' => 'Antônio Gonçalves'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 1908,
            'nome' => 'Aporá'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 1957,
            'nome' => 'Apuarema'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 2054,
            'nome' => 'Araçás'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 2005,
            'nome' => 'Aracatu'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 2104,
            'nome' => 'Araci'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 2203,
            'nome' => 'Aramari'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 2252,
            'nome' => 'Arataca'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 2302,
            'nome' => 'Aratuípe'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 2401,
            'nome' => 'Aurelino Leal'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 2500,
            'nome' => 'Baianópolis'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 2609,
            'nome' => 'Baixa Grande'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 2658,
            'nome' => 'Banzaê'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 2708,
            'nome' => 'Barra'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 2807,
            'nome' => 'Barra da Estiva'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 2906,
            'nome' => 'Barra do Choça'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 3003,
            'nome' => 'Barra do Mendes'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 3102,
            'nome' => 'Barra do Rocha'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 3201,
            'nome' => 'Barreiras'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 3235,
            'nome' => 'Barro Alto'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 3300,
            'nome' => 'Barro Preto'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 3276,
            'nome' => 'Barrocas'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 3409,
            'nome' => 'Belmonte'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 3508,
            'nome' => 'Belo Campo'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 3607,
            'nome' => 'Biritinga'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 3706,
            'nome' => 'Boa Nova'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 3805,
            'nome' => 'Boa Vista do Tupim'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 3904,
            'nome' => 'Bom Jesus da Lapa'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 3953,
            'nome' => 'Bom Jesus da Serra'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 4001,
            'nome' => 'Boninal'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 4050,
            'nome' => 'Bonito'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 4100,
            'nome' => 'Boquira'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 4209,
            'nome' => 'Botuporã'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 4308,
            'nome' => 'Brejões'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 4407,
            'nome' => 'Brejolândia'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 4506,
            'nome' => 'Brotas de Macaúbas'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 4605,
            'nome' => 'Brumado'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 4704,
            'nome' => 'Buerarema'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 4753,
            'nome' => 'Buritirama'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 4803,
            'nome' => 'Caatiba'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 4852,
            'nome' => 'Cabaceiras do Paraguaçu'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 4902,
            'nome' => 'Cachoeira'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 5008,
            'nome' => 'Caculé'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 5107,
            'nome' => 'Caém'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 5156,
            'nome' => 'Caetanos'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 5206,
            'nome' => 'Caetité'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 5305,
            'nome' => 'Cafarnaum'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 5404,
            'nome' => 'Cairu'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 5503,
            'nome' => 'Caldeirão Grande'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 5602,
            'nome' => 'Camacan'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 5701,
            'nome' => 'Camaçari'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 5800,
            'nome' => 'Camamu'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 5909,
            'nome' => 'Campo Alegre de Lourdes'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 6006,
            'nome' => 'Campo Formoso'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 6105,
            'nome' => 'Canápolis'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 6204,
            'nome' => 'Canarana'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 6303,
            'nome' => 'Canavieiras'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 6402,
            'nome' => 'Candeal'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 6501,
            'nome' => 'Candeias'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 6600,
            'nome' => 'Candiba'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 6709,
            'nome' => 'Cândido Sales'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 6808,
            'nome' => 'Cansanção'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 6824,
            'nome' => 'Canudos'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 6857,
            'nome' => 'Capela do Alto Alegre'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 6873,
            'nome' => 'Capim Grosso'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 6899,
            'nome' => 'Caraíbas'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 6907,
            'nome' => 'Caravelas'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 7004,
            'nome' => 'Cardeal da Silva'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 7103,
            'nome' => 'Carinhanha'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 7202,
            'nome' => 'Casa Nova'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 7301,
            'nome' => 'Castro Alves'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 7400,
            'nome' => 'Catolândia'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 7509,
            'nome' => 'Catu'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 7558,
            'nome' => 'Caturama'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 7608,
            'nome' => 'Central'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 7707,
            'nome' => 'Chorrochó'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 7806,
            'nome' => 'Cícero Dantas'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 7905,
            'nome' => 'Cipó'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 8002,
            'nome' => 'Coaraci'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 8101,
            'nome' => 'Cocos'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 8200,
            'nome' => 'Conceição da Feira'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 8309,
            'nome' => 'Conceição do Almeida'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 8408,
            'nome' => 'Conceição do Coité'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 8507,
            'nome' => 'Conceição do Jacuípe'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 8606,
            'nome' => 'Conde'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 8705,
            'nome' => 'Condeúba'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 8804,
            'nome' => 'Contendas do Sincorá'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 8903,
            'nome' => 'Coração de Maria'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 9000,
            'nome' => 'Cordeiros'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 9109,
            'nome' => 'Coribe'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 9208,
            'nome' => 'Coronel João Sá'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 9307,
            'nome' => 'Correntina'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 9406,
            'nome' => 'Cotegipe'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 9505,
            'nome' => 'Cravolândia'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 9604,
            'nome' => 'Crisópolis'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 9703,
            'nome' => 'Cristópolis'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 9802,
            'nome' => 'Cruz das Almas'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 9901,
            'nome' => 'Curaçá'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 10008,
            'nome' => 'Dário Meira'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 10057,
            'nome' => 'Dias d\'Ávila'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 10107,
            'nome' => 'Dom Basílio'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 10206,
            'nome' => 'Dom Macedo Costa'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 10305,
            'nome' => 'Elísio Medrado'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 10404,
            'nome' => 'Encruzilhada'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 10503,
            'nome' => 'Entre Rios'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 504,
            'nome' => 'Érico Cardoso'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 10602,
            'nome' => 'Esplanada'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 10701,
            'nome' => 'Euclides da Cunha'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 10727,
            'nome' => 'Eunápolis'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 10750,
            'nome' => 'Fátima'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 10776,
            'nome' => 'Feira da Mata'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 10800,
            'nome' => 'Feira de Santana'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 10859,
            'nome' => 'Filadélfia'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 10909,
            'nome' => 'Firmino Alves'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 11006,
            'nome' => 'Floresta Azul'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 11105,
            'nome' => 'Formosa do Rio Preto'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 11204,
            'nome' => 'Gandu'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 11253,
            'nome' => 'Gavião'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 11303,
            'nome' => 'Gentio do Ouro'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 11402,
            'nome' => 'Glória'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 11501,
            'nome' => 'Gongogi'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 11600,
            'nome' => 'Governador Mangabeira'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 11659,
            'nome' => 'Guajeru'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 11709,
            'nome' => 'Guanambi'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 11808,
            'nome' => 'Guaratinga'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 11857,
            'nome' => 'Heliópolis'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 11907,
            'nome' => 'Iaçu'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 12004,
            'nome' => 'Ibiassucê'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 12103,
            'nome' => 'Ibicaraí'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 12202,
            'nome' => 'Ibicoara'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 12301,
            'nome' => 'Ibicuí'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 12400,
            'nome' => 'Ibipeba'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 12509,
            'nome' => 'Ibipitanga'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 12608,
            'nome' => 'Ibiquera'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 12707,
            'nome' => 'Ibirapitanga'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 12806,
            'nome' => 'Ibirapuã'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 12905,
            'nome' => 'Ibirataia'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 13002,
            'nome' => 'Ibitiara'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 13101,
            'nome' => 'Ibititá'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 13200,
            'nome' => 'Ibotirama'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 13309,
            'nome' => 'Ichu'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 13408,
            'nome' => 'Igaporã'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 13457,
            'nome' => 'Igrapiúna'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 13507,
            'nome' => 'Iguaí'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 13606,
            'nome' => 'Ilhéus'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 13705,
            'nome' => 'Inhambupe'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 13804,
            'nome' => 'Ipecaetá'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 13903,
            'nome' => 'Ipiaú'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 14000,
            'nome' => 'Ipirá'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 14109,
            'nome' => 'Ipupiara'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 14208,
            'nome' => 'Irajuba'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 14307,
            'nome' => 'Iramaia'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 14406,
            'nome' => 'Iraquara'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 14505,
            'nome' => 'Irará'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 14604,
            'nome' => 'Irecê'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 14653,
            'nome' => 'Itabela'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 14703,
            'nome' => 'Itaberaba'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 14802,
            'nome' => 'Itabuna'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 14901,
            'nome' => 'Itacaré'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 15007,
            'nome' => 'Itaeté'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 15106,
            'nome' => 'Itagi'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 15205,
            'nome' => 'Itagibá'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 15304,
            'nome' => 'Itagimirim'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 15353,
            'nome' => 'Itaguaçu da Bahia'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 15403,
            'nome' => 'Itaju do Colônia'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 15502,
            'nome' => 'Itajuípe'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 15601,
            'nome' => 'Itamaraju'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 15700,
            'nome' => 'Itamari'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 15809,
            'nome' => 'Itambé'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 15908,
            'nome' => 'Itanagra'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 16005,
            'nome' => 'Itanhém'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 16104,
            'nome' => 'Itaparica'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 16203,
            'nome' => 'Itapé'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 16302,
            'nome' => 'Itapebi'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 16401,
            'nome' => 'Itapetinga'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 16500,
            'nome' => 'Itapicuru'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 16609,
            'nome' => 'Itapitanga'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 16708,
            'nome' => 'Itaquara'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 16807,
            'nome' => 'Itarantim'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 16856,
            'nome' => 'Itatim'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 16906,
            'nome' => 'Itiruçu'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 17003,
            'nome' => 'Itiúba'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 17102,
            'nome' => 'Itororó'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 17201,
            'nome' => 'Ituaçu'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 17300,
            'nome' => 'Ituberá'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 17334,
            'nome' => 'Iuiu'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 17359,
            'nome' => 'Jaborandi'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 17409,
            'nome' => 'Jacaraci'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 17508,
            'nome' => 'Jacobina'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 17607,
            'nome' => 'Jaguaquara'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 17706,
            'nome' => 'Jaguarari'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 17805,
            'nome' => 'Jaguaripe'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 17904,
            'nome' => 'Jandaíra'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 18001,
            'nome' => 'Jequié'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 18100,
            'nome' => 'Jeremoabo'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 18209,
            'nome' => 'Jiquiriçá'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 18308,
            'nome' => 'Jitaúna'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 18357,
            'nome' => 'João Dourado'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 18407,
            'nome' => 'Juazeiro'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 18456,
            'nome' => 'Jucuruçu'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 18506,
            'nome' => 'Jussara'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 18555,
            'nome' => 'Jussari'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 18605,
            'nome' => 'Jussiape'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 18704,
            'nome' => 'Lafaiete Coutinho'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 18753,
            'nome' => 'Lagoa Real'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 18803,
            'nome' => 'Laje'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 18902,
            'nome' => 'Lajedão'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 19009,
            'nome' => 'Lajedinho'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 19058,
            'nome' => 'Lajedo do Tabocal'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 19108,
            'nome' => 'Lamarão'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 19157,
            'nome' => 'Lapão'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 19207,
            'nome' => 'Lauro de Freitas'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 19306,
            'nome' => 'Lençóis'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 19405,
            'nome' => 'Licínio de Almeida'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 19504,
            'nome' => 'Livramento de Nossa Senhora'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 19553,
            'nome' => 'Luís Eduardo Magalhães'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 19603,
            'nome' => 'Macajuba'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 19702,
            'nome' => 'Macarani'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 19801,
            'nome' => 'Macaúbas'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 19900,
            'nome' => 'Macururé'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 19926,
            'nome' => 'Madre de Deus'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 19959,
            'nome' => 'Maetinga'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 20007,
            'nome' => 'Maiquinique'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 20106,
            'nome' => 'Mairi'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 20205,
            'nome' => 'Malhada'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 20304,
            'nome' => 'Malhada de Pedras'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 20403,
            'nome' => 'Manoel Vitorino'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 20452,
            'nome' => 'Mansidão'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 20502,
            'nome' => 'Maracás'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 20601,
            'nome' => 'Maragogipe'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 20700,
            'nome' => 'Maraú'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 20809,
            'nome' => 'Marcionílio Souza'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 20908,
            'nome' => 'Mascote'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 21005,
            'nome' => 'Mata de São João'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 21054,
            'nome' => 'Matina'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 21104,
            'nome' => 'Medeiros Neto'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 21203,
            'nome' => 'Miguel Calmon'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 21302,
            'nome' => 'Milagres'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 21401,
            'nome' => 'Mirangaba'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 21450,
            'nome' => 'Mirante'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 21500,
            'nome' => 'Monte Santo'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 21609,
            'nome' => 'Morpará'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 21708,
            'nome' => 'Morro do Chapéu'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 21807,
            'nome' => 'Mortugaba'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 21906,
            'nome' => 'Mucugê'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 22003,
            'nome' => 'Mucuri'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 22052,
            'nome' => 'Mulungu do Morro'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 22102,
            'nome' => 'Mundo Novo'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 22201,
            'nome' => 'Muniz Ferreira'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 22250,
            'nome' => 'Muquém do São Francisco'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 22300,
            'nome' => 'Muritiba'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 22409,
            'nome' => 'Mutuípe'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 22508,
            'nome' => 'Nazaré'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 22607,
            'nome' => 'Nilo Peçanha'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 22656,
            'nome' => 'Nordestina'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 22706,
            'nome' => 'Nova Canaã'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 22730,
            'nome' => 'Nova Fátima'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 22755,
            'nome' => 'Nova Ibiá'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 22805,
            'nome' => 'Nova Itarana'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 22854,
            'nome' => 'Nova Redenção'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 22904,
            'nome' => 'Nova Soure'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 23001,
            'nome' => 'Nova Viçosa'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 23035,
            'nome' => 'Novo Horizonte'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 23050,
            'nome' => 'Novo Triunfo'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 23100,
            'nome' => 'Olindina'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 23209,
            'nome' => 'Oliveira dos Brejinhos'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 23308,
            'nome' => 'Ouriçangas'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 23357,
            'nome' => 'Ourolândia'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 23407,
            'nome' => 'Palmas de Monte Alto'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 23506,
            'nome' => 'Palmeiras'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 23605,
            'nome' => 'Paramirim'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 23704,
            'nome' => 'Paratinga'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 23803,
            'nome' => 'Paripiranga'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 23902,
            'nome' => 'Pau Brasil'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 24009,
            'nome' => 'Paulo Afonso'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 24058,
            'nome' => 'Pé de Serra'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 24108,
            'nome' => 'Pedrão'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 24207,
            'nome' => 'Pedro Alexandre'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 24306,
            'nome' => 'Piatã'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 24405,
            'nome' => 'Pilão Arcado'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 24504,
            'nome' => 'Pindaí'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 24603,
            'nome' => 'Pindobaçu'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 24652,
            'nome' => 'Pintadas'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 24678,
            'nome' => 'Piraí do Norte'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 24702,
            'nome' => 'Piripá'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 24801,
            'nome' => 'Piritiba'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 24900,
            'nome' => 'Planaltino'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 25006,
            'nome' => 'Planalto'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 25105,
            'nome' => 'Poções'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 25204,
            'nome' => 'Pojuca'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 25253,
            'nome' => 'Ponto Novo'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 25303,
            'nome' => 'Porto Seguro'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 25402,
            'nome' => 'Potiraguá'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 25501,
            'nome' => 'Prado'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 25600,
            'nome' => 'Presidente Dutra'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 25709,
            'nome' => 'Presidente Jânio Quadros'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 25758,
            'nome' => 'Presidente Tancredo Neves'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 25808,
            'nome' => 'Queimadas'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 25907,
            'nome' => 'Quijingue'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 25931,
            'nome' => 'Quixabeira'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 25956,
            'nome' => 'Rafael Jambeiro'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 26004,
            'nome' => 'Remanso'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 26103,
            'nome' => 'Retirolândia'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 26202,
            'nome' => 'Riachão das Neves'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 26301,
            'nome' => 'Riachão do Jacuípe'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 26400,
            'nome' => 'Riacho de Santana'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 26509,
            'nome' => 'Ribeira do Amparo'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 26608,
            'nome' => 'Ribeira do Pombal'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 26657,
            'nome' => 'Ribeirão do Largo'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 26707,
            'nome' => 'Rio de Contas'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 26806,
            'nome' => 'Rio do Antônio'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 26905,
            'nome' => 'Rio do Pires'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 27002,
            'nome' => 'Rio Real'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 27101,
            'nome' => 'Rodelas'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 27200,
            'nome' => 'Ruy Barbosa'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 27309,
            'nome' => 'Salinas da Margarida'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 27408,
            'nome' => 'Salvador'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 27507,
            'nome' => 'Santa Bárbara'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 27606,
            'nome' => 'Santa Brígida'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 27705,
            'nome' => 'Santa Cruz Cabrália'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 27804,
            'nome' => 'Santa Cruz da Vitória'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 27903,
            'nome' => 'Santa Inês'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 28059,
            'nome' => 'Santa Luzia'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 28109,
            'nome' => 'Santa Maria da Vitória'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 28406,
            'nome' => 'Santa Rita de Cássia'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 28505,
            'nome' => 'Santa Terezinha'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 28000,
            'nome' => 'Santaluz'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 28208,
            'nome' => 'Santana'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 28307,
            'nome' => 'Santanópolis'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 28604,
            'nome' => 'Santo Amaro'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 28703,
            'nome' => 'Santo Antônio de Jesus'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 28802,
            'nome' => 'Santo Estêvão'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 28901,
            'nome' => 'São Desidério'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 28950,
            'nome' => 'São Domingos'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 29107,
            'nome' => 'São Felipe'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 29008,
            'nome' => 'São Félix'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 29057,
            'nome' => 'São Félix do Coribe'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 29206,
            'nome' => 'São Francisco do Conde'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 29255,
            'nome' => 'São Gabriel'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 29305,
            'nome' => 'São Gonçalo dos Campos'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 29354,
            'nome' => 'São José da Vitória'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 29370,
            'nome' => 'São José do Jacuípe'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 29404,
            'nome' => 'São Miguel das Matas'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 29503,
            'nome' => 'São Sebastião do Passé'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 29602,
            'nome' => 'Sapeaçu'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 29701,
            'nome' => 'Sátiro Dias'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 29750,
            'nome' => 'Saubara'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 29800,
            'nome' => 'Saúde'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 29909,
            'nome' => 'Seabra'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 30006,
            'nome' => 'Sebastião Laranjeiras'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 30105,
            'nome' => 'Senhor do Bonfim'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 30204,
            'nome' => 'Sento Sé'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 30154,
            'nome' => 'Serra do Ramalho'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 30303,
            'nome' => 'Serra Dourada'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 30402,
            'nome' => 'Serra Preta'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 30501,
            'nome' => 'Serrinha'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 30600,
            'nome' => 'Serrolândia'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 30709,
            'nome' => 'Simões Filho'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 30758,
            'nome' => 'Sítio do Mato'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 30766,
            'nome' => 'Sítio do Quinto'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 30774,
            'nome' => 'Sobradinho'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 30808,
            'nome' => 'Souto Soares'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 30907,
            'nome' => 'Tabocas do Brejo Velho'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 31004,
            'nome' => 'Tanhaçu'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 31053,
            'nome' => 'Tanque Novo'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 31103,
            'nome' => 'Tanquinho'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 31202,
            'nome' => 'Taperoá'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 31301,
            'nome' => 'Tapiramutá'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 31350,
            'nome' => 'Teixeira de Freitas'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 31400,
            'nome' => 'Teodoro Sampaio'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 31509,
            'nome' => 'Teofilândia'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 31608,
            'nome' => 'Teolândia'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 31707,
            'nome' => 'Terra Nova'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 31806,
            'nome' => 'Tremedal'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 31905,
            'nome' => 'Tucano'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 32002,
            'nome' => 'Uauá'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 32101,
            'nome' => 'Ubaíra'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 32200,
            'nome' => 'Ubaitaba'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 32309,
            'nome' => 'Ubatã'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 32408,
            'nome' => 'Uibaí'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 32457,
            'nome' => 'Umburanas'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 32507,
            'nome' => 'Una'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 32606,
            'nome' => 'Urandi'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 32705,
            'nome' => 'Uruçuca'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 32804,
            'nome' => 'Utinga'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 32903,
            'nome' => 'Valença'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 33000,
            'nome' => 'Valente'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 33059,
            'nome' => 'Várzea da Roça'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 33109,
            'nome' => 'Várzea do Poço'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 33158,
            'nome' => 'Várzea Nova'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 33174,
            'nome' => 'Varzedo'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 33208,
            'nome' => 'Vera Cruz'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 33257,
            'nome' => 'Vereda'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 33307,
            'nome' => 'Vitória da Conquista'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 33406,
            'nome' => 'Wagner'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 33455,
            'nome' => 'Wanderley'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 33505,
            'nome' => 'Wenceslau Guimarães'
        ],
        [
            'codigo_uf' => 29,
            'codigo_municipio' => 33604,
            'nome' => 'Xique-Xique'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 104,
            'nome' => 'Abadia dos Dourados'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 203,
            'nome' => 'Abaeté'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 302,
            'nome' => 'Abre Campo'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 401,
            'nome' => 'Acaiaca'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 500,
            'nome' => 'Açucena'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 609,
            'nome' => 'Água Boa'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 708,
            'nome' => 'Água Comprida'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 807,
            'nome' => 'Aguanil'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 906,
            'nome' => 'Águas Formosas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 1003,
            'nome' => 'Águas Vermelhas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 1102,
            'nome' => 'Aimorés'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 1201,
            'nome' => 'Aiuruoca'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 1300,
            'nome' => 'Alagoa'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 1409,
            'nome' => 'Albertina'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 1508,
            'nome' => 'Além Paraíba'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 1607,
            'nome' => 'Alfenas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 1631,
            'nome' => 'Alfredo Vasconcelos'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 1706,
            'nome' => 'Almenara'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 1805,
            'nome' => 'Alpercata'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 1904,
            'nome' => 'Alpinópolis'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 2001,
            'nome' => 'Alterosa'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 2050,
            'nome' => 'Alto Caparaó'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 53509,
            'nome' => 'Alto Jequitibá'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 2100,
            'nome' => 'Alto Rio Doce'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 2209,
            'nome' => 'Alvarenga'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 2308,
            'nome' => 'Alvinópolis'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 2407,
            'nome' => 'Alvorada de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 2506,
            'nome' => 'Amparo do Serra'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 2605,
            'nome' => 'Andradas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 2803,
            'nome' => 'Andrelândia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 2852,
            'nome' => 'Angelândia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 2902,
            'nome' => 'Antônio Carlos'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 3009,
            'nome' => 'Antônio Dias'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 3108,
            'nome' => 'Antônio Prado de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 3207,
            'nome' => 'Araçaí'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 3306,
            'nome' => 'Aracitaba'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 3405,
            'nome' => 'Araçuaí'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 3504,
            'nome' => 'Araguari'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 3603,
            'nome' => 'Arantina'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 3702,
            'nome' => 'Araponga'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 3751,
            'nome' => 'Araporã'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 3801,
            'nome' => 'Arapuá'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 3900,
            'nome' => 'Araújos'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 4007,
            'nome' => 'Araxá'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 4106,
            'nome' => 'Arceburgo'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 4205,
            'nome' => 'Arcos'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 4304,
            'nome' => 'Areado'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 4403,
            'nome' => 'Argirita'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 4452,
            'nome' => 'Aricanduva'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 4502,
            'nome' => 'Arinos'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 4601,
            'nome' => 'Astolfo Dutra'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 4700,
            'nome' => 'Ataléia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 4809,
            'nome' => 'Augusto de Lima'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 4908,
            'nome' => 'Baependi'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 5004,
            'nome' => 'Baldim'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 5103,
            'nome' => 'Bambuí'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 5202,
            'nome' => 'Bandeira'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 5301,
            'nome' => 'Bandeira do Sul'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 5400,
            'nome' => 'Barão de Cocais'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 5509,
            'nome' => 'Barão de Monte Alto'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 5608,
            'nome' => 'Barbacena'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 5707,
            'nome' => 'Barra Longa'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 5905,
            'nome' => 'Barroso'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 6002,
            'nome' => 'Bela Vista de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 6101,
            'nome' => 'Belmiro Braga'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 6200,
            'nome' => 'Belo Horizonte'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 6309,
            'nome' => 'Belo Oriente'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 6408,
            'nome' => 'Belo Vale'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 6507,
            'nome' => 'Berilo'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 6655,
            'nome' => 'Berizal'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 6606,
            'nome' => 'Bertópolis'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 6705,
            'nome' => 'Betim'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 6804,
            'nome' => 'Bias Fortes'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 6903,
            'nome' => 'Bicas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 7000,
            'nome' => 'Biquinhas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 7109,
            'nome' => 'Boa Esperança'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 7208,
            'nome' => 'Bocaina de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 7307,
            'nome' => 'Bocaiúva'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 7406,
            'nome' => 'Bom Despacho'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 7505,
            'nome' => 'Bom Jardim de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 7604,
            'nome' => 'Bom Jesus da Penha'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 7703,
            'nome' => 'Bom Jesus do Amparo'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 7802,
            'nome' => 'Bom Jesus do Galho'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 7901,
            'nome' => 'Bom Repouso'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 8008,
            'nome' => 'Bom Sucesso'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 8107,
            'nome' => 'Bonfim'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 8206,
            'nome' => 'Bonfinópolis de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 8255,
            'nome' => 'Bonito de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 8305,
            'nome' => 'Borda da Mata'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 8404,
            'nome' => 'Botelhos'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 8503,
            'nome' => 'Botumirim'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 8701,
            'nome' => 'Brás Pires'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 8552,
            'nome' => 'Brasilândia de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 8602,
            'nome' => 'Brasília de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 8800,
            'nome' => 'Braúnas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 8909,
            'nome' => 'Brazópolis'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 9006,
            'nome' => 'Brumadinho'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 9105,
            'nome' => 'Bueno Brandão'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 9204,
            'nome' => 'Buenópolis'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 9253,
            'nome' => 'Bugre'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 9303,
            'nome' => 'Buritis'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 9402,
            'nome' => 'Buritizeiro'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 9451,
            'nome' => 'Cabeceira Grande'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 9501,
            'nome' => 'Cabo Verde'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 9600,
            'nome' => 'Cachoeira da Prata'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 9709,
            'nome' => 'Cachoeira de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 2704,
            'nome' => 'Cachoeira de Pajeú'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 9808,
            'nome' => 'Cachoeira Dourada'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 9907,
            'nome' => 'Caetanópolis'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 10004,
            'nome' => 'Caeté'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 10103,
            'nome' => 'Caiana'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 10202,
            'nome' => 'Cajuri'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 10301,
            'nome' => 'Caldas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 10400,
            'nome' => 'Camacho'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 10509,
            'nome' => 'Camanducaia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 10608,
            'nome' => 'Cambuí'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 10707,
            'nome' => 'Cambuquira'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 10806,
            'nome' => 'Campanário'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 10905,
            'nome' => 'Campanha'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 11002,
            'nome' => 'Campestre'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 11101,
            'nome' => 'Campina Verde'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 11150,
            'nome' => 'Campo Azul'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 11200,
            'nome' => 'Campo Belo'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 11309,
            'nome' => 'Campo do Meio'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 11408,
            'nome' => 'Campo Florido'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 11507,
            'nome' => 'Campos Altos'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 11606,
            'nome' => 'Campos Gerais'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 11903,
            'nome' => 'Cana Verde'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 11705,
            'nome' => 'Canaã'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 11804,
            'nome' => 'Canápolis'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 12000,
            'nome' => 'Candeias'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 12059,
            'nome' => 'Cantagalo'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 12109,
            'nome' => 'Caparaó'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 12208,
            'nome' => 'Capela Nova'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 12307,
            'nome' => 'Capelinha'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 12406,
            'nome' => 'Capetinga'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 12505,
            'nome' => 'Capim Branco'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 12604,
            'nome' => 'Capinópolis'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 12653,
            'nome' => 'Capitão Andrade'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 12703,
            'nome' => 'Capitão Enéas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 12802,
            'nome' => 'Capitólio'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 12901,
            'nome' => 'Caputira'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 13008,
            'nome' => 'Caraí'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 13107,
            'nome' => 'Caranaíba'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 13206,
            'nome' => 'Carandaí'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 13305,
            'nome' => 'Carangola'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 13404,
            'nome' => 'Caratinga'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 13503,
            'nome' => 'Carbonita'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 13602,
            'nome' => 'Careaçu'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 13701,
            'nome' => 'Carlos Chagas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 13800,
            'nome' => 'Carmésia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 13909,
            'nome' => 'Carmo da Cachoeira'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 14006,
            'nome' => 'Carmo da Mata'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 14105,
            'nome' => 'Carmo de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 14204,
            'nome' => 'Carmo do Cajuru'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 14303,
            'nome' => 'Carmo do Paranaíba'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 14402,
            'nome' => 'Carmo do Rio Claro'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 14501,
            'nome' => 'Carmópolis de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 14550,
            'nome' => 'Carneirinho'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 14600,
            'nome' => 'Carrancas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 14709,
            'nome' => 'Carvalhópolis'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 14808,
            'nome' => 'Carvalhos'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 14907,
            'nome' => 'Casa Grande'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 15003,
            'nome' => 'Cascalho Rico'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 15102,
            'nome' => 'Cássia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 15300,
            'nome' => 'Cataguases'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 15359,
            'nome' => 'Catas Altas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 15409,
            'nome' => 'Catas Altas da Noruega'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 15458,
            'nome' => 'Catuji'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 15474,
            'nome' => 'Catuti'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 15508,
            'nome' => 'Caxambu'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 15607,
            'nome' => 'Cedro do Abaeté'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 15706,
            'nome' => 'Central de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 15805,
            'nome' => 'Centralina'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 15904,
            'nome' => 'Chácara'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 16001,
            'nome' => 'Chalé'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 16100,
            'nome' => 'Chapada do Norte'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 16159,
            'nome' => 'Chapada Gaúcha'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 16209,
            'nome' => 'Chiador'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 16308,
            'nome' => 'Cipotânea'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 16407,
            'nome' => 'Claraval'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 16506,
            'nome' => 'Claro dos Poções'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 16605,
            'nome' => 'Cláudio'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 16704,
            'nome' => 'Coimbra'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 16803,
            'nome' => 'Coluna'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 16902,
            'nome' => 'Comendador Gomes'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 17009,
            'nome' => 'Comercinho'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 17108,
            'nome' => 'Conceição da Aparecida'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 15201,
            'nome' => 'Conceição da Barra de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 17306,
            'nome' => 'Conceição das Alagoas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 17207,
            'nome' => 'Conceição das Pedras'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 17405,
            'nome' => 'Conceição de Ipanema'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 17504,
            'nome' => 'Conceição do Mato Dentro'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 17603,
            'nome' => 'Conceição do Pará'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 17702,
            'nome' => 'Conceição do Rio Verde'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 17801,
            'nome' => 'Conceição dos Ouros'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 17836,
            'nome' => 'Cônego Marinho'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 17876,
            'nome' => 'Confins'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 17900,
            'nome' => 'Congonhal'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 18007,
            'nome' => 'Congonhas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 18106,
            'nome' => 'Congonhas do Norte'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 18205,
            'nome' => 'Conquista'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 18304,
            'nome' => 'Conselheiro Lafaiete'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 18403,
            'nome' => 'Conselheiro Pena'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 18502,
            'nome' => 'Consolação'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 18601,
            'nome' => 'Contagem'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 18700,
            'nome' => 'Coqueiral'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 18809,
            'nome' => 'Coração de Jesus'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 18908,
            'nome' => 'Cordisburgo'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 19005,
            'nome' => 'Cordislândia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 19104,
            'nome' => 'Corinto'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 19203,
            'nome' => 'Coroaci'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 19302,
            'nome' => 'Coromandel'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 19401,
            'nome' => 'Coronel Fabriciano'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 19500,
            'nome' => 'Coronel Murta'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 19609,
            'nome' => 'Coronel Pacheco'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 19708,
            'nome' => 'Coronel Xavier Chaves'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 19807,
            'nome' => 'Córrego Danta'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 19906,
            'nome' => 'Córrego do Bom Jesus'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 19955,
            'nome' => 'Córrego Fundo'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 20003,
            'nome' => 'Córrego Novo'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 20102,
            'nome' => 'Couto de Magalhães de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 20151,
            'nome' => 'Crisólita'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 20201,
            'nome' => 'Cristais'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 20300,
            'nome' => 'Cristália'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 20409,
            'nome' => 'Cristiano Otoni'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 20508,
            'nome' => 'Cristina'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 20607,
            'nome' => 'Crucilândia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 20706,
            'nome' => 'Cruzeiro da Fortaleza'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 20805,
            'nome' => 'Cruzília'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 20839,
            'nome' => 'Cuparaque'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 20870,
            'nome' => 'Curral de Dentro'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 20904,
            'nome' => 'Curvelo'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 21001,
            'nome' => 'Datas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 21100,
            'nome' => 'Delfim Moreira'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 21209,
            'nome' => 'Delfinópolis'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 21258,
            'nome' => 'Delta'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 21308,
            'nome' => 'Descoberto'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 21407,
            'nome' => 'Desterro de Entre Rios'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 21506,
            'nome' => 'Desterro do Melo'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 21605,
            'nome' => 'Diamantina'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 21704,
            'nome' => 'Diogo de Vasconcelos'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 21803,
            'nome' => 'Dionísio'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 21902,
            'nome' => 'Divinésia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 22009,
            'nome' => 'Divino'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 22108,
            'nome' => 'Divino das Laranjeiras'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 22207,
            'nome' => 'Divinolândia de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 22306,
            'nome' => 'Divinópolis'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 22355,
            'nome' => 'Divisa Alegre'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 22405,
            'nome' => 'Divisa Nova'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 22454,
            'nome' => 'Divisópolis'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 22470,
            'nome' => 'Dom Bosco'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 22504,
            'nome' => 'Dom Cavati'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 22603,
            'nome' => 'Dom Joaquim'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 22702,
            'nome' => 'Dom Silvério'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 22801,
            'nome' => 'Dom Viçoso'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 22900,
            'nome' => 'Dona Euzébia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 23007,
            'nome' => 'Dores de Campos'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 23106,
            'nome' => 'Dores de Guanhães'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 23205,
            'nome' => 'Dores do Indaiá'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 23304,
            'nome' => 'Dores do Turvo'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 23403,
            'nome' => 'Doresópolis'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 23502,
            'nome' => 'Douradoquara'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 23528,
            'nome' => 'Durandé'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 23601,
            'nome' => 'Elói Mendes'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 23700,
            'nome' => 'Engenheiro Caldas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 23809,
            'nome' => 'Engenheiro Navarro'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 23858,
            'nome' => 'Entre Folhas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 23908,
            'nome' => 'Entre Rios de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 24005,
            'nome' => 'Ervália'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 24104,
            'nome' => 'Esmeraldas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 24203,
            'nome' => 'Espera Feliz'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 24302,
            'nome' => 'Espinosa'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 24401,
            'nome' => 'Espírito Santo do Dourado'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 24500,
            'nome' => 'Estiva'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 24609,
            'nome' => 'Estrela Dalva'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 24708,
            'nome' => 'Estrela do Indaiá'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 24807,
            'nome' => 'Estrela do Sul'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 24906,
            'nome' => 'Eugenópolis'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 25002,
            'nome' => 'Ewbank da Câmara'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 25101,
            'nome' => 'Extrema'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 25200,
            'nome' => 'Fama'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 25309,
            'nome' => 'Faria Lemos'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 25408,
            'nome' => 'Felício dos Santos'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 25606,
            'nome' => 'Felisburgo'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 25705,
            'nome' => 'Felixlândia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 25804,
            'nome' => 'Fernandes Tourinho'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 25903,
            'nome' => 'Ferros'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 25952,
            'nome' => 'Fervedouro'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 26000,
            'nome' => 'Florestal'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 26109,
            'nome' => 'Formiga'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 26208,
            'nome' => 'Formoso'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 26307,
            'nome' => 'Fortaleza de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 26406,
            'nome' => 'Fortuna de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 26505,
            'nome' => 'Francisco Badaró'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 26604,
            'nome' => 'Francisco Dumont'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 26703,
            'nome' => 'Francisco Sá'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 26752,
            'nome' => 'Franciscópolis'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 26802,
            'nome' => 'Frei Gaspar'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 26901,
            'nome' => 'Frei Inocêncio'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 26950,
            'nome' => 'Frei Lagonegro'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 27008,
            'nome' => 'Fronteira'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 27057,
            'nome' => 'Fronteira dos Vales'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 27073,
            'nome' => 'Fruta de Leite'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 27107,
            'nome' => 'Frutal'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 27206,
            'nome' => 'Funilândia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 27305,
            'nome' => 'Galiléia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 27339,
            'nome' => 'Gameleiras'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 27354,
            'nome' => 'Glaucilândia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 27370,
            'nome' => 'Goiabeira'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 27388,
            'nome' => 'Goianá'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 27404,
            'nome' => 'Gonçalves'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 27503,
            'nome' => 'Gonzaga'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 27602,
            'nome' => 'Gouveia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 27701,
            'nome' => 'Governador Valadares'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 27800,
            'nome' => 'Grão Mogol'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 27909,
            'nome' => 'Grupiara'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 28006,
            'nome' => 'Guanhães'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 28105,
            'nome' => 'Guapé'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 28204,
            'nome' => 'Guaraciaba'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 28253,
            'nome' => 'Guaraciama'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 28303,
            'nome' => 'Guaranésia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 28402,
            'nome' => 'Guarani'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 28501,
            'nome' => 'Guarará'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 28600,
            'nome' => 'Guarda-Mor'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 28709,
            'nome' => 'Guaxupé'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 28808,
            'nome' => 'Guidoval'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 28907,
            'nome' => 'Guimarânia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 29004,
            'nome' => 'Guiricema'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 29103,
            'nome' => 'Gurinhatã'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 29202,
            'nome' => 'Heliodora'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 29301,
            'nome' => 'Iapu'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 29400,
            'nome' => 'Ibertioga'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 29509,
            'nome' => 'Ibiá'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 29608,
            'nome' => 'Ibiaí'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 29657,
            'nome' => 'Ibiracatu'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 29707,
            'nome' => 'Ibiraci'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 29806,
            'nome' => 'Ibirité'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 29905,
            'nome' => 'Ibitiúra de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 30002,
            'nome' => 'Ibituruna'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 30051,
            'nome' => 'Icaraí de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 30101,
            'nome' => 'Igarapé'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 30200,
            'nome' => 'Igaratinga'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 30309,
            'nome' => 'Iguatama'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 30408,
            'nome' => 'Ijaci'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 30507,
            'nome' => 'Ilicínea'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 30556,
            'nome' => 'Imbé de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 30606,
            'nome' => 'Inconfidentes'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 30655,
            'nome' => 'Indaiabira'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 30705,
            'nome' => 'Indianópolis'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 30804,
            'nome' => 'Ingaí'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 30903,
            'nome' => 'Inhapim'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 31000,
            'nome' => 'Inhaúma'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 31109,
            'nome' => 'Inimutaba'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 31158,
            'nome' => 'Ipaba'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 31208,
            'nome' => 'Ipanema'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 31307,
            'nome' => 'Ipatinga'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 31406,
            'nome' => 'Ipiaçu'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 31505,
            'nome' => 'Ipuiúna'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 31604,
            'nome' => 'Iraí de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 31703,
            'nome' => 'Itabira'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 31802,
            'nome' => 'Itabirinha'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 31901,
            'nome' => 'Itabirito'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 32008,
            'nome' => 'Itacambira'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 32107,
            'nome' => 'Itacarambi'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 32206,
            'nome' => 'Itaguara'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 32305,
            'nome' => 'Itaipé'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 32404,
            'nome' => 'Itajubá'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 32503,
            'nome' => 'Itamarandiba'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 32602,
            'nome' => 'Itamarati de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 32701,
            'nome' => 'Itambacuri'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 32800,
            'nome' => 'Itambé do Mato Dentro'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 32909,
            'nome' => 'Itamogi'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 33006,
            'nome' => 'Itamonte'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 33105,
            'nome' => 'Itanhandu'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 33204,
            'nome' => 'Itanhomi'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 33303,
            'nome' => 'Itaobim'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 33402,
            'nome' => 'Itapagipe'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 33501,
            'nome' => 'Itapecerica'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 33600,
            'nome' => 'Itapeva'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 33709,
            'nome' => 'Itatiaiuçu'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 33758,
            'nome' => 'Itaú de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 33808,
            'nome' => 'Itaúna'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 33907,
            'nome' => 'Itaverava'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 34004,
            'nome' => 'Itinga'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 34103,
            'nome' => 'Itueta'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 34202,
            'nome' => 'Ituiutaba'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 34301,
            'nome' => 'Itumirim'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 34400,
            'nome' => 'Iturama'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 34509,
            'nome' => 'Itutinga'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 34608,
            'nome' => 'Jaboticatubas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 34707,
            'nome' => 'Jacinto'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 34806,
            'nome' => 'Jacuí'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 34905,
            'nome' => 'Jacutinga'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 35001,
            'nome' => 'Jaguaraçu'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 35050,
            'nome' => 'Jaíba'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 35076,
            'nome' => 'Jampruca'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 35100,
            'nome' => 'Janaúba'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 35209,
            'nome' => 'Januária'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 35308,
            'nome' => 'Japaraíba'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 35357,
            'nome' => 'Japonvar'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 35407,
            'nome' => 'Jeceaba'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 35456,
            'nome' => 'Jenipapo de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 35506,
            'nome' => 'Jequeri'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 35605,
            'nome' => 'Jequitaí'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 35704,
            'nome' => 'Jequitibá'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 35803,
            'nome' => 'Jequitinhonha'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 35902,
            'nome' => 'Jesuânia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 36009,
            'nome' => 'Joaíma'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 36108,
            'nome' => 'Joanésia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 36207,
            'nome' => 'João Monlevade'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 36306,
            'nome' => 'João Pinheiro'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 36405,
            'nome' => 'Joaquim Felício'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 36504,
            'nome' => 'Jordânia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 36520,
            'nome' => 'José Gonçalves de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 36553,
            'nome' => 'José Raydan'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 36579,
            'nome' => 'Josenópolis'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 36652,
            'nome' => 'Juatuba'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 36702,
            'nome' => 'Juiz de Fora'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 36801,
            'nome' => 'Juramento'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 36900,
            'nome' => 'Juruaia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 36959,
            'nome' => 'Juvenília'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 37007,
            'nome' => 'Ladainha'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 37106,
            'nome' => 'Lagamar'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 37205,
            'nome' => 'Lagoa da Prata'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 37304,
            'nome' => 'Lagoa dos Patos'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 37403,
            'nome' => 'Lagoa Dourada'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 37502,
            'nome' => 'Lagoa Formosa'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 37536,
            'nome' => 'Lagoa Grande'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 37601,
            'nome' => 'Lagoa Santa'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 37700,
            'nome' => 'Lajinha'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 37809,
            'nome' => 'Lambari'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 37908,
            'nome' => 'Lamim'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 38005,
            'nome' => 'Laranjal'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 38104,
            'nome' => 'Lassance'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 38203,
            'nome' => 'Lavras'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 38302,
            'nome' => 'Leandro Ferreira'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 38351,
            'nome' => 'Leme do Prado'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 38401,
            'nome' => 'Leopoldina'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 38500,
            'nome' => 'Liberdade'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 38609,
            'nome' => 'Lima Duarte'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 38625,
            'nome' => 'Limeira do Oeste'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 38658,
            'nome' => 'Lontra'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 38674,
            'nome' => 'Luisburgo'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 38682,
            'nome' => 'Luislândia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 38708,
            'nome' => 'Luminárias'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 38807,
            'nome' => 'Luz'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 38906,
            'nome' => 'Machacalis'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 39003,
            'nome' => 'Machado'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 39102,
            'nome' => 'Madre de Deus de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 39201,
            'nome' => 'Malacacheta'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 39250,
            'nome' => 'Mamonas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 39300,
            'nome' => 'Manga'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 39409,
            'nome' => 'Manhuaçu'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 39508,
            'nome' => 'Manhumirim'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 39607,
            'nome' => 'Mantena'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 39805,
            'nome' => 'Mar de Espanha'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 39706,
            'nome' => 'Maravilhas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 39904,
            'nome' => 'Maria da Fé'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 40001,
            'nome' => 'Mariana'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 40100,
            'nome' => 'Marilac'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 40159,
            'nome' => 'Mário Campos'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 40209,
            'nome' => 'Maripá de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 40308,
            'nome' => 'Marliéria'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 40407,
            'nome' => 'Marmelópolis'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 40506,
            'nome' => 'Martinho Campos'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 40530,
            'nome' => 'Martins Soares'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 40555,
            'nome' => 'Mata Verde'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 40605,
            'nome' => 'Materlândia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 40704,
            'nome' => 'Mateus Leme'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 71501,
            'nome' => 'Mathias Lobato'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 40803,
            'nome' => 'Matias Barbosa'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 40852,
            'nome' => 'Matias Cardoso'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 40902,
            'nome' => 'Matipó'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 41009,
            'nome' => 'Mato Verde'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 41108,
            'nome' => 'Matozinhos'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 41207,
            'nome' => 'Matutina'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 41306,
            'nome' => 'Medeiros'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 41405,
            'nome' => 'Medina'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 41504,
            'nome' => 'Mendes Pimentel'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 41603,
            'nome' => 'Mercês'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 41702,
            'nome' => 'Mesquita'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 41801,
            'nome' => 'Minas Novas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 41900,
            'nome' => 'Minduri'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 42007,
            'nome' => 'Mirabela'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 42106,
            'nome' => 'Miradouro'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 42205,
            'nome' => 'Miraí'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 42254,
            'nome' => 'Miravânia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 42304,
            'nome' => 'Moeda'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 42403,
            'nome' => 'Moema'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 42502,
            'nome' => 'Monjolos'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 42601,
            'nome' => 'Monsenhor Paulo'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 42700,
            'nome' => 'Montalvânia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 42809,
            'nome' => 'Monte Alegre de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 42908,
            'nome' => 'Monte Azul'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 43005,
            'nome' => 'Monte Belo'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 43104,
            'nome' => 'Monte Carmelo'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 43153,
            'nome' => 'Monte Formoso'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 43203,
            'nome' => 'Monte Santo de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 43401,
            'nome' => 'Monte Sião'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 43302,
            'nome' => 'Montes Claros'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 43450,
            'nome' => 'Montezuma'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 43500,
            'nome' => 'Morada Nova de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 43609,
            'nome' => 'Morro da Garça'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 43708,
            'nome' => 'Morro do Pilar'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 43807,
            'nome' => 'Munhoz'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 43906,
            'nome' => 'Muriaé'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 44003,
            'nome' => 'Mutum'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 44102,
            'nome' => 'Muzambinho'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 44201,
            'nome' => 'Nacip Raydan'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 44300,
            'nome' => 'Nanuque'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 44359,
            'nome' => 'Naque'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 44375,
            'nome' => 'Natalândia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 44409,
            'nome' => 'Natércia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 44508,
            'nome' => 'Nazareno'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 44607,
            'nome' => 'Nepomuceno'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 44656,
            'nome' => 'Ninheira'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 44672,
            'nome' => 'Nova Belém'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 44706,
            'nome' => 'Nova Era'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 44805,
            'nome' => 'Nova Lima'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 44904,
            'nome' => 'Nova Módica'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 45000,
            'nome' => 'Nova Ponte'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 45059,
            'nome' => 'Nova Porteirinha'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 45109,
            'nome' => 'Nova Resende'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 45208,
            'nome' => 'Nova Serrana'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 36603,
            'nome' => 'Nova União'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 45307,
            'nome' => 'Novo Cruzeiro'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 45356,
            'nome' => 'Novo Oriente de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 45372,
            'nome' => 'Novorizonte'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 45406,
            'nome' => 'Olaria'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 45455,
            'nome' => 'Olhos-d\'Água'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 45505,
            'nome' => 'Olímpio Noronha'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 45604,
            'nome' => 'Oliveira'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 45703,
            'nome' => 'Oliveira Fortes'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 45802,
            'nome' => 'Onça de Pitangui'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 45851,
            'nome' => 'Oratórios'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 45877,
            'nome' => 'Orizânia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 45901,
            'nome' => 'Ouro Branco'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 46008,
            'nome' => 'Ouro Fino'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 46107,
            'nome' => 'Ouro Preto'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 46206,
            'nome' => 'Ouro Verde de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 46255,
            'nome' => 'Padre Carvalho'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 46305,
            'nome' => 'Padre Paraíso'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 46552,
            'nome' => 'Pai Pedro'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 46404,
            'nome' => 'Paineiras'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 46503,
            'nome' => 'Pains'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 46602,
            'nome' => 'Paiva'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 46701,
            'nome' => 'Palma'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 46750,
            'nome' => 'Palmópolis'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 46909,
            'nome' => 'Papagaios'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 47105,
            'nome' => 'Pará de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 47006,
            'nome' => 'Paracatu'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 47204,
            'nome' => 'Paraguaçu'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 47303,
            'nome' => 'Paraisópolis'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 47402,
            'nome' => 'Paraopeba'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 47600,
            'nome' => 'Passa Quatro'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 47709,
            'nome' => 'Passa Tempo'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 47808,
            'nome' => 'Passa Vinte'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 47501,
            'nome' => 'Passabém'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 47907,
            'nome' => 'Passos'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 47956,
            'nome' => 'Patis'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 48004,
            'nome' => 'Patos de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 48103,
            'nome' => 'Patrocínio'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 48202,
            'nome' => 'Patrocínio do Muriaé'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 48301,
            'nome' => 'Paula Cândido'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 48400,
            'nome' => 'Paulistas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 48509,
            'nome' => 'Pavão'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 48608,
            'nome' => 'Peçanha'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 48707,
            'nome' => 'Pedra Azul'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 48756,
            'nome' => 'Pedra Bonita'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 48806,
            'nome' => 'Pedra do Anta'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 48905,
            'nome' => 'Pedra do Indaiá'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 49002,
            'nome' => 'Pedra Dourada'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 49101,
            'nome' => 'Pedralva'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 49150,
            'nome' => 'Pedras de Maria da Cruz'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 49200,
            'nome' => 'Pedrinópolis'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 49309,
            'nome' => 'Pedro Leopoldo'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 49408,
            'nome' => 'Pedro Teixeira'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 49507,
            'nome' => 'Pequeri'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 49606,
            'nome' => 'Pequi'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 49705,
            'nome' => 'Perdigão'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 49804,
            'nome' => 'Perdizes'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 49903,
            'nome' => 'Perdões'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 49952,
            'nome' => 'Periquito'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 50000,
            'nome' => 'Pescador'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 50109,
            'nome' => 'Piau'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 50158,
            'nome' => 'Piedade de Caratinga'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 50208,
            'nome' => 'Piedade de Ponte Nova'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 50307,
            'nome' => 'Piedade do Rio Grande'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 50406,
            'nome' => 'Piedade dos Gerais'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 50505,
            'nome' => 'Pimenta'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 50539,
            'nome' => 'Pingo-d\'Água'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 50570,
            'nome' => 'Pintópolis'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 50604,
            'nome' => 'Piracema'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 50703,
            'nome' => 'Pirajuba'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 50802,
            'nome' => 'Piranga'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 50901,
            'nome' => 'Piranguçu'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 51008,
            'nome' => 'Piranguinho'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 51107,
            'nome' => 'Pirapetinga'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 51206,
            'nome' => 'Pirapora'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 51305,
            'nome' => 'Piraúba'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 51404,
            'nome' => 'Pitangui'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 51503,
            'nome' => 'Piumhi'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 51602,
            'nome' => 'Planura'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 51701,
            'nome' => 'Poço Fundo'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 51800,
            'nome' => 'Poços de Caldas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 51909,
            'nome' => 'Pocrane'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 52006,
            'nome' => 'Pompéu'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 52105,
            'nome' => 'Ponte Nova'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 52131,
            'nome' => 'Ponto Chique'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 52170,
            'nome' => 'Ponto dos Volantes'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 52204,
            'nome' => 'Porteirinha'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 52303,
            'nome' => 'Porto Firme'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 52402,
            'nome' => 'Poté'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 52501,
            'nome' => 'Pouso Alegre'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 52600,
            'nome' => 'Pouso Alto'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 52709,
            'nome' => 'Prados'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 52808,
            'nome' => 'Prata'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 52907,
            'nome' => 'Pratápolis'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 53004,
            'nome' => 'Pratinha'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 53103,
            'nome' => 'Presidente Bernardes'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 53202,
            'nome' => 'Presidente Juscelino'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 53301,
            'nome' => 'Presidente Kubitschek'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 53400,
            'nome' => 'Presidente Olegário'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 53608,
            'nome' => 'Prudente de Morais'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 53707,
            'nome' => 'Quartel Geral'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 53806,
            'nome' => 'Queluzito'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 53905,
            'nome' => 'Raposos'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 54002,
            'nome' => 'Raul Soares'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 54101,
            'nome' => 'Recreio'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 54150,
            'nome' => 'Reduto'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 54200,
            'nome' => 'Resende Costa'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 54309,
            'nome' => 'Resplendor'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 54408,
            'nome' => 'Ressaquinha'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 54457,
            'nome' => 'Riachinho'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 54507,
            'nome' => 'Riacho dos Machados'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 54606,
            'nome' => 'Ribeirão das Neves'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 54705,
            'nome' => 'Ribeirão Vermelho'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 54804,
            'nome' => 'Rio Acima'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 54903,
            'nome' => 'Rio Casca'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 55108,
            'nome' => 'Rio do Prado'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 55009,
            'nome' => 'Rio Doce'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 55207,
            'nome' => 'Rio Espera'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 55306,
            'nome' => 'Rio Manso'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 55405,
            'nome' => 'Rio Novo'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 55504,
            'nome' => 'Rio Paranaíba'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 55603,
            'nome' => 'Rio Pardo de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 55702,
            'nome' => 'Rio Piracicaba'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 55801,
            'nome' => 'Rio Pomba'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 55900,
            'nome' => 'Rio Preto'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 56007,
            'nome' => 'Rio Vermelho'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 56106,
            'nome' => 'Ritápolis'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 56205,
            'nome' => 'Rochedo de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 56304,
            'nome' => 'Rodeiro'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 56403,
            'nome' => 'Romaria'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 56452,
            'nome' => 'Rosário da Limeira'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 56502,
            'nome' => 'Rubelita'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 56601,
            'nome' => 'Rubim'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 56700,
            'nome' => 'Sabará'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 56809,
            'nome' => 'Sabinópolis'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 56908,
            'nome' => 'Sacramento'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 57005,
            'nome' => 'Salinas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 57104,
            'nome' => 'Salto da Divisa'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 57203,
            'nome' => 'Santa Bárbara'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 57252,
            'nome' => 'Santa Bárbara do Leste'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 57278,
            'nome' => 'Santa Bárbara do Monte Verde'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 57302,
            'nome' => 'Santa Bárbara do Tugúrio'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 57336,
            'nome' => 'Santa Cruz de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 57377,
            'nome' => 'Santa Cruz de Salinas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 57401,
            'nome' => 'Santa Cruz do Escalvado'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 57500,
            'nome' => 'Santa Efigênia de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 57609,
            'nome' => 'Santa Fé de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 57658,
            'nome' => 'Santa Helena de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 57708,
            'nome' => 'Santa Juliana'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 57807,
            'nome' => 'Santa Luzia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 57906,
            'nome' => 'Santa Margarida'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 58003,
            'nome' => 'Santa Maria de Itabira'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 58102,
            'nome' => 'Santa Maria do Salto'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 58201,
            'nome' => 'Santa Maria do Suaçuí'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 59209,
            'nome' => 'Santa Rita de Caldas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 59407,
            'nome' => 'Santa Rita de Ibitipoca'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 59308,
            'nome' => 'Santa Rita de Jacutinga'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 59357,
            'nome' => 'Santa Rita de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 59506,
            'nome' => 'Santa Rita do Itueto'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 59605,
            'nome' => 'Santa Rita do Sapucaí'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 59704,
            'nome' => 'Santa Rosa da Serra'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 59803,
            'nome' => 'Santa Vitória'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 58300,
            'nome' => 'Santana da Vargem'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 58409,
            'nome' => 'Santana de Cataguases'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 58508,
            'nome' => 'Santana de Pirapama'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 58607,
            'nome' => 'Santana do Deserto'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 58706,
            'nome' => 'Santana do Garambéu'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 58805,
            'nome' => 'Santana do Jacaré'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 58904,
            'nome' => 'Santana do Manhuaçu'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 58953,
            'nome' => 'Santana do Paraíso'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 59001,
            'nome' => 'Santana do Riacho'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 59100,
            'nome' => 'Santana dos Montes'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 59902,
            'nome' => 'Santo Antônio do Amparo'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 60009,
            'nome' => 'Santo Antônio do Aventureiro'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 60108,
            'nome' => 'Santo Antônio do Grama'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 60207,
            'nome' => 'Santo Antônio do Itambé'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 60306,
            'nome' => 'Santo Antônio do Jacinto'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 60405,
            'nome' => 'Santo Antônio do Monte'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 60454,
            'nome' => 'Santo Antônio do Retiro'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 60504,
            'nome' => 'Santo Antônio do Rio Abaixo'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 60603,
            'nome' => 'Santo Hipólito'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 60702,
            'nome' => 'Santos Dumont'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 60801,
            'nome' => 'São Bento Abade'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 60900,
            'nome' => 'São Brás do Suaçuí'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 60959,
            'nome' => 'São Domingos das Dores'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 61007,
            'nome' => 'São Domingos do Prata'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 61056,
            'nome' => 'São Félix de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 61106,
            'nome' => 'São Francisco'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 61205,
            'nome' => 'São Francisco de Paula'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 61304,
            'nome' => 'São Francisco de Sales'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 61403,
            'nome' => 'São Francisco do Glória'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 61502,
            'nome' => 'São Geraldo'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 61601,
            'nome' => 'São Geraldo da Piedade'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 61650,
            'nome' => 'São Geraldo do Baixio'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 61700,
            'nome' => 'São Gonçalo do Abaeté'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 61809,
            'nome' => 'São Gonçalo do Pará'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 61908,
            'nome' => 'São Gonçalo do Rio Abaixo'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 25507,
            'nome' => 'São Gonçalo do Rio Preto'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 62005,
            'nome' => 'São Gonçalo do Sapucaí'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 62104,
            'nome' => 'São Gotardo'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 62203,
            'nome' => 'São João Batista do Glória'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 62252,
            'nome' => 'São João da Lagoa'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 62302,
            'nome' => 'São João da Mata'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 62401,
            'nome' => 'São João da Ponte'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 62450,
            'nome' => 'São João das Missões'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 62500,
            'nome' => 'São João del Rei'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 62559,
            'nome' => 'São João do Manhuaçu'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 62575,
            'nome' => 'São João do Manteninha'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 62609,
            'nome' => 'São João do Oriente'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 62658,
            'nome' => 'São João do Pacuí'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 62708,
            'nome' => 'São João do Paraíso'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 62807,
            'nome' => 'São João Evangelista'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 62906,
            'nome' => 'São João Nepomuceno'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 62922,
            'nome' => 'São Joaquim de Bicas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 62948,
            'nome' => 'São José da Barra'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 62955,
            'nome' => 'São José da Lapa'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 63003,
            'nome' => 'São José da Safira'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 63102,
            'nome' => 'São José da Varginha'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 63201,
            'nome' => 'São José do Alegre'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 63300,
            'nome' => 'São José do Divino'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 63409,
            'nome' => 'São José do Goiabal'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 63508,
            'nome' => 'São José do Jacuri'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 63607,
            'nome' => 'São José do Mantimento'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 63706,
            'nome' => 'São Lourenço'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 63805,
            'nome' => 'São Miguel do Anta'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 63904,
            'nome' => 'São Pedro da União'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 64100,
            'nome' => 'São Pedro do Suaçuí'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 64001,
            'nome' => 'São Pedro dos Ferros'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 64209,
            'nome' => 'São Romão'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 64308,
            'nome' => 'São Roque de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 64407,
            'nome' => 'São Sebastião da Bela Vista'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 64431,
            'nome' => 'São Sebastião da Vargem Alegre'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 64472,
            'nome' => 'São Sebastião do Anta'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 64506,
            'nome' => 'São Sebastião do Maranhão'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 64605,
            'nome' => 'São Sebastião do Oeste'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 64704,
            'nome' => 'São Sebastião do Paraíso'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 64803,
            'nome' => 'São Sebastião do Rio Preto'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 64902,
            'nome' => 'São Sebastião do Rio Verde'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 65008,
            'nome' => 'São Tiago'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 65107,
            'nome' => 'São Tomás de Aquino'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 65206,
            'nome' => 'São Tomé das Letras'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 65305,
            'nome' => 'São Vicente de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 65404,
            'nome' => 'Sapucaí-Mirim'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 65503,
            'nome' => 'Sardoá'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 65537,
            'nome' => 'Sarzedo'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 65560,
            'nome' => 'Sem-Peixe'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 65578,
            'nome' => 'Senador Amaral'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 65602,
            'nome' => 'Senador Cortes'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 65701,
            'nome' => 'Senador Firmino'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 65800,
            'nome' => 'Senador José Bento'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 65909,
            'nome' => 'Senador Modestino Gonçalves'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 66006,
            'nome' => 'Senhora de Oliveira'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 66105,
            'nome' => 'Senhora do Porto'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 66204,
            'nome' => 'Senhora dos Remédios'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 66303,
            'nome' => 'Sericita'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 66402,
            'nome' => 'Seritinga'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 66501,
            'nome' => 'Serra Azul de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 66600,
            'nome' => 'Serra da Saudade'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 66808,
            'nome' => 'Serra do Salitre'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 66709,
            'nome' => 'Serra dos Aimorés'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 66907,
            'nome' => 'Serrania'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 66956,
            'nome' => 'Serranópolis de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 67004,
            'nome' => 'Serranos'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 67103,
            'nome' => 'Serro'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 67202,
            'nome' => 'Sete Lagoas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 65552,
            'nome' => 'Setubinha'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 67301,
            'nome' => 'Silveirânia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 67400,
            'nome' => 'Silvianópolis'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 67509,
            'nome' => 'Simão Pereira'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 67608,
            'nome' => 'Simonésia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 67707,
            'nome' => 'Sobrália'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 67806,
            'nome' => 'Soledade de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 67905,
            'nome' => 'Tabuleiro'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 68002,
            'nome' => 'Taiobeiras'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 68051,
            'nome' => 'Taparuba'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 68101,
            'nome' => 'Tapira'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 68200,
            'nome' => 'Tapiraí'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 68309,
            'nome' => 'Taquaraçu de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 68408,
            'nome' => 'Tarumirim'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 68507,
            'nome' => 'Teixeiras'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 68606,
            'nome' => 'Teófilo Otoni'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 68705,
            'nome' => 'Timóteo'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 68804,
            'nome' => 'Tiradentes'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 68903,
            'nome' => 'Tiros'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 69000,
            'nome' => 'Tocantins'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 69059,
            'nome' => 'Tocos do Moji'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 69109,
            'nome' => 'Toledo'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 69208,
            'nome' => 'Tombos'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 69307,
            'nome' => 'Três Corações'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 69356,
            'nome' => 'Três Marias'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 69406,
            'nome' => 'Três Pontas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 69505,
            'nome' => 'Tumiritinga'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 69604,
            'nome' => 'Tupaciguara'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 69703,
            'nome' => 'Turmalina'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 69802,
            'nome' => 'Turvolândia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 69901,
            'nome' => 'Ubá'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 70008,
            'nome' => 'Ubaí'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 70057,
            'nome' => 'Ubaporanga'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 70107,
            'nome' => 'Uberaba'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 70206,
            'nome' => 'Uberlândia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 70305,
            'nome' => 'Umburatiba'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 70404,
            'nome' => 'Unaí'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 70438,
            'nome' => 'União de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 70479,
            'nome' => 'Uruana de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 70503,
            'nome' => 'Urucânia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 70529,
            'nome' => 'Urucuia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 70578,
            'nome' => 'Vargem Alegre'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 70602,
            'nome' => 'Vargem Bonita'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 70651,
            'nome' => 'Vargem Grande do Rio Pardo'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 70701,
            'nome' => 'Varginha'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 70750,
            'nome' => 'Varjão de Minas'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 70800,
            'nome' => 'Várzea da Palma'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 70909,
            'nome' => 'Varzelândia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 71006,
            'nome' => 'Vazante'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 71030,
            'nome' => 'Verdelândia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 71071,
            'nome' => 'Veredinha'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 71105,
            'nome' => 'Veríssimo'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 71154,
            'nome' => 'Vermelho Novo'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 71204,
            'nome' => 'Vespasiano'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 71303,
            'nome' => 'Viçosa'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 71402,
            'nome' => 'Vieiras'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 71600,
            'nome' => 'Virgem da Lapa'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 71709,
            'nome' => 'Virgínia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 71808,
            'nome' => 'Virginópolis'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 71907,
            'nome' => 'Virgolândia'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 72004,
            'nome' => 'Visconde do Rio Branco'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 72103,
            'nome' => 'Volta Grande'
        ],
        [
            'codigo_uf' => 31,
            'codigo_municipio' => 72202,
            'nome' => 'Wenceslau Braz'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 102,
            'nome' => 'Afonso Cláudio'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 169,
            'nome' => 'Água Doce do Norte'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 136,
            'nome' => 'Águia Branca'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 201,
            'nome' => 'Alegre'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 300,
            'nome' => 'Alfredo Chaves'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 359,
            'nome' => 'Alto Rio Novo'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 409,
            'nome' => 'Anchieta'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 508,
            'nome' => 'Apiacá'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 607,
            'nome' => 'Aracruz'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 706,
            'nome' => 'Atílio Vivácqua'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 805,
            'nome' => 'Baixo Guandu'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 904,
            'nome' => 'Barra de São Francisco'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 1001,
            'nome' => 'Boa Esperança'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 1100,
            'nome' => 'Bom Jesus do Norte'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 1159,
            'nome' => 'Brejetuba'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 1209,
            'nome' => 'Cachoeiro de Itapemirim'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 1308,
            'nome' => 'Cariacica'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 1407,
            'nome' => 'Castelo'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 1506,
            'nome' => 'Colatina'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 1605,
            'nome' => 'Conceição da Barra'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 1704,
            'nome' => 'Conceição do Castelo'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 1803,
            'nome' => 'Divino de São Lourenço'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 1902,
            'nome' => 'Domingos Martins'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 2009,
            'nome' => 'Dores do Rio Preto'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 2108,
            'nome' => 'Ecoporanga'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 2207,
            'nome' => 'Fundão'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 2256,
            'nome' => 'Governador Lindenberg'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 2306,
            'nome' => 'Guaçuí'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 2405,
            'nome' => 'Guarapari'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 2454,
            'nome' => 'Ibatiba'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 2504,
            'nome' => 'Ibiraçu'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 2553,
            'nome' => 'Ibitirama'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 2603,
            'nome' => 'Iconha'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 2652,
            'nome' => 'Irupi'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 2702,
            'nome' => 'Itaguaçu'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 2801,
            'nome' => 'Itapemirim'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 2900,
            'nome' => 'Itarana'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 3007,
            'nome' => 'Iúna'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 3056,
            'nome' => 'Jaguaré'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 3106,
            'nome' => 'Jerônimo Monteiro'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 3130,
            'nome' => 'João Neiva'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 3163,
            'nome' => 'Laranja da Terra'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 3205,
            'nome' => 'Linhares'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 3304,
            'nome' => 'Mantenópolis'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 3320,
            'nome' => 'Marataízes'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 3346,
            'nome' => 'Marechal Floriano'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 3353,
            'nome' => 'Marilândia'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 3403,
            'nome' => 'Mimoso do Sul'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 3502,
            'nome' => 'Montanha'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 3601,
            'nome' => 'Mucurici'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 3700,
            'nome' => 'Muniz Freire'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 3809,
            'nome' => 'Muqui'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 3908,
            'nome' => 'Nova Venécia'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 4005,
            'nome' => 'Pancas'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 4054,
            'nome' => 'Pedro Canário'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 4104,
            'nome' => 'Pinheiros'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 4203,
            'nome' => 'Piúma'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 4252,
            'nome' => 'Ponto Belo'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 4302,
            'nome' => 'Presidente Kennedy'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 4351,
            'nome' => 'Rio Bananal'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 4401,
            'nome' => 'Rio Novo do Sul'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 4500,
            'nome' => 'Santa Leopoldina'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 4559,
            'nome' => 'Santa Maria de Jetibá'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 4609,
            'nome' => 'Santa Teresa'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 4658,
            'nome' => 'São Domingos do Norte'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 4708,
            'nome' => 'São Gabriel da Palha'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 4807,
            'nome' => 'São José do Calçado'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 4906,
            'nome' => 'São Mateus'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 4955,
            'nome' => 'São Roque do Canaã'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 5002,
            'nome' => 'Serra'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 5010,
            'nome' => 'Sooretama'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 5036,
            'nome' => 'Vargem Alta'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 5069,
            'nome' => 'Venda Nova do Imigrante'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 5101,
            'nome' => 'Viana'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 5150,
            'nome' => 'Vila Pavão'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 5176,
            'nome' => 'Vila Valério'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 5200,
            'nome' => 'Vila Velha'
        ],
        [
            'codigo_uf' => 32,
            'codigo_municipio' => 5309,
            'nome' => 'Vitória'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 100,
            'nome' => 'Angra dos Reis'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 159,
            'nome' => 'Aperibé'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 209,
            'nome' => 'Araruama'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 225,
            'nome' => 'Areal'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 233,
            'nome' => 'Armação dos Búzios'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 258,
            'nome' => 'Arraial do Cabo'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 308,
            'nome' => 'Barra do Piraí'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 407,
            'nome' => 'Barra Mansa'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 456,
            'nome' => 'Belford Roxo'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 506,
            'nome' => 'Bom Jardim'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 605,
            'nome' => 'Bom Jesus do Itabapoana'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 704,
            'nome' => 'Cabo Frio'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 803,
            'nome' => 'Cachoeiras de Macacu'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 902,
            'nome' => 'Cambuci'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 1009,
            'nome' => 'Campos dos Goytacazes'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 1108,
            'nome' => 'Cantagalo'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 936,
            'nome' => 'Carapebus'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 1157,
            'nome' => 'Cardoso Moreira'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 1207,
            'nome' => 'Carmo'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 1306,
            'nome' => 'Casimiro de Abreu'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 951,
            'nome' => 'Comendador Levy Gasparian'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 1405,
            'nome' => 'Conceição de Macabu'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 1504,
            'nome' => 'Cordeiro'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 1603,
            'nome' => 'Duas Barras'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 1702,
            'nome' => 'Duque de Caxias'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 1801,
            'nome' => 'Engenheiro Paulo de Frontin'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 1850,
            'nome' => 'Guapimirim'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 1876,
            'nome' => 'Iguaba Grande'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 1900,
            'nome' => 'Itaboraí'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 2007,
            'nome' => 'Itaguaí'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 2056,
            'nome' => 'Italva'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 2106,
            'nome' => 'Itaocara'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 2205,
            'nome' => 'Itaperuna'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 2254,
            'nome' => 'Itatiaia'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 2270,
            'nome' => 'Japeri'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 2304,
            'nome' => 'Laje do Muriaé'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 2403,
            'nome' => 'Macaé'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 2452,
            'nome' => 'Macuco'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 2502,
            'nome' => 'Magé'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 2601,
            'nome' => 'Mangaratiba'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 2700,
            'nome' => 'Maricá'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 2809,
            'nome' => 'Mendes'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 2858,
            'nome' => 'Mesquita'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 2908,
            'nome' => 'Miguel Pereira'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 3005,
            'nome' => 'Miracema'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 3104,
            'nome' => 'Natividade'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 3203,
            'nome' => 'Nilópolis'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 3302,
            'nome' => 'Niterói'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 3401,
            'nome' => 'Nova Friburgo'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 3500,
            'nome' => 'Nova Iguaçu'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 3609,
            'nome' => 'Paracambi'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 3708,
            'nome' => 'Paraíba do Sul'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 3807,
            'nome' => 'Paraty'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 3856,
            'nome' => 'Paty do Alferes'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 3906,
            'nome' => 'Petrópolis'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 3955,
            'nome' => 'Pinheiral'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 4003,
            'nome' => 'Piraí'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 4102,
            'nome' => 'Porciúncula'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 4110,
            'nome' => 'Porto Real'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 4128,
            'nome' => 'Quatis'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 4144,
            'nome' => 'Queimados'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 4151,
            'nome' => 'Quissamã'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 4201,
            'nome' => 'Resende'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 4300,
            'nome' => 'Rio Bonito'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 4409,
            'nome' => 'Rio Claro'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 4508,
            'nome' => 'Rio das Flores'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 4524,
            'nome' => 'Rio das Ostras'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 4557,
            'nome' => 'Rio de Janeiro'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 4607,
            'nome' => 'Santa Maria Madalena'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 4706,
            'nome' => 'Santo Antônio de Pádua'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 4805,
            'nome' => 'São Fidélis'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 4755,
            'nome' => 'São Francisco de Itabapoana'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 4904,
            'nome' => 'São Gonçalo'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 5000,
            'nome' => 'São João da Barra'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 5109,
            'nome' => 'São João de Meriti'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 5133,
            'nome' => 'São José de Ubá'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 5158,
            'nome' => 'São José do Vale do Rio Preto'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 5208,
            'nome' => 'São Pedro da Aldeia'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 5307,
            'nome' => 'São Sebastião do Alto'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 5406,
            'nome' => 'Sapucaia'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 5505,
            'nome' => 'Saquarema'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 5554,
            'nome' => 'Seropédica'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 5604,
            'nome' => 'Silva Jardim'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 5703,
            'nome' => 'Sumidouro'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 5752,
            'nome' => 'Tanguá'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 5802,
            'nome' => 'Teresópolis'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 5901,
            'nome' => 'Trajano de Moraes'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 6008,
            'nome' => 'Três Rios'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 6107,
            'nome' => 'Valença'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 6156,
            'nome' => 'Varre-Sai'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 6206,
            'nome' => 'Vassouras'
        ],
        [
            'codigo_uf' => 33,
            'codigo_municipio' => 6305,
            'nome' => 'Volta Redonda'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 105,
            'nome' => 'Adamantina'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 204,
            'nome' => 'Adolfo'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 303,
            'nome' => 'Aguaí'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 402,
            'nome' => 'Águas da Prata'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 501,
            'nome' => 'Águas de Lindóia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 550,
            'nome' => 'Águas de Santa Bárbara'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 600,
            'nome' => 'Águas de São Pedro'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 709,
            'nome' => 'Agudos'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 758,
            'nome' => 'Alambari'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 808,
            'nome' => 'Alfredo Marcondes'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 907,
            'nome' => 'Altair'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 1004,
            'nome' => 'Altinópolis'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 1103,
            'nome' => 'Alto Alegre'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 1152,
            'nome' => 'Alumínio'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 1202,
            'nome' => 'Álvares Florence'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 1301,
            'nome' => 'Álvares Machado'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 1400,
            'nome' => 'Álvaro de Carvalho'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 1509,
            'nome' => 'Alvinlândia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 1608,
            'nome' => 'Americana'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 1707,
            'nome' => 'Américo Brasiliense'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 1806,
            'nome' => 'Américo de Campos'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 1905,
            'nome' => 'Amparo'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 2002,
            'nome' => 'Analândia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 2101,
            'nome' => 'Andradina'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 2200,
            'nome' => 'Angatuba'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 2309,
            'nome' => 'Anhembi'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 2408,
            'nome' => 'Anhumas'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 2507,
            'nome' => 'Aparecida'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 2606,
            'nome' => 'Aparecida d\'Oeste'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 2705,
            'nome' => 'Apiaí'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 2754,
            'nome' => 'Araçariguama'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 2804,
            'nome' => 'Araçatuba'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 2903,
            'nome' => 'Araçoiaba da Serra'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 3000,
            'nome' => 'Aramina'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 3109,
            'nome' => 'Arandu'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 3158,
            'nome' => 'Arapeí'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 3208,
            'nome' => 'Araraquara'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 3307,
            'nome' => 'Araras'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 3356,
            'nome' => 'Arco-Íris'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 3406,
            'nome' => 'Arealva'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 3505,
            'nome' => 'Areias'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 3604,
            'nome' => 'Areiópolis'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 3703,
            'nome' => 'Ariranha'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 3802,
            'nome' => 'Artur Nogueira'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 3901,
            'nome' => 'Arujá'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 3950,
            'nome' => 'Aspásia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 4008,
            'nome' => 'Assis'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 4107,
            'nome' => 'Atibaia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 4206,
            'nome' => 'Auriflama'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 4305,
            'nome' => 'Avaí'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 4404,
            'nome' => 'Avanhandava'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 4503,
            'nome' => 'Avaré'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 4602,
            'nome' => 'Bady Bassitt'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 4701,
            'nome' => 'Balbinos'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 4800,
            'nome' => 'Bálsamo'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 4909,
            'nome' => 'Bananal'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 5005,
            'nome' => 'Barão de Antonina'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 5104,
            'nome' => 'Barbosa'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 5203,
            'nome' => 'Bariri'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 5302,
            'nome' => 'Barra Bonita'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 5351,
            'nome' => 'Barra do Chapéu'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 5401,
            'nome' => 'Barra do Turvo'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 5500,
            'nome' => 'Barretos'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 5609,
            'nome' => 'Barrinha'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 5708,
            'nome' => 'Barueri'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 5807,
            'nome' => 'Bastos'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 5906,
            'nome' => 'Batatais'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 6003,
            'nome' => 'Bauru'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 6102,
            'nome' => 'Bebedouro'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 6201,
            'nome' => 'Bento de Abreu'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 6300,
            'nome' => 'Bernardino de Campos'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 6359,
            'nome' => 'Bertioga'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 6409,
            'nome' => 'Bilac'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 6508,
            'nome' => 'Birigui'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 6607,
            'nome' => 'Biritiba Mirim'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 6706,
            'nome' => 'Boa Esperança do Sul'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 6805,
            'nome' => 'Bocaina'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 6904,
            'nome' => 'Bofete'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 7001,
            'nome' => 'Boituva'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 7100,
            'nome' => 'Bom Jesus dos Perdões'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 7159,
            'nome' => 'Bom Sucesso de Itararé'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 7209,
            'nome' => 'Borá'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 7308,
            'nome' => 'Boracéia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 7407,
            'nome' => 'Borborema'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 7456,
            'nome' => 'Borebi'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 7506,
            'nome' => 'Botucatu'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 7605,
            'nome' => 'Bragança Paulista'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 7704,
            'nome' => 'Braúna'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 7753,
            'nome' => 'Brejo Alegre'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 7803,
            'nome' => 'Brodowski'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 7902,
            'nome' => 'Brotas'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 8009,
            'nome' => 'Buri'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 8108,
            'nome' => 'Buritama'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 8207,
            'nome' => 'Buritizal'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 8306,
            'nome' => 'Cabrália Paulista'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 8405,
            'nome' => 'Cabreúva'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 8504,
            'nome' => 'Caçapava'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 8603,
            'nome' => 'Cachoeira Paulista'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 8702,
            'nome' => 'Caconde'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 8801,
            'nome' => 'Cafelândia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 8900,
            'nome' => 'Caiabu'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 9007,
            'nome' => 'Caieiras'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 9106,
            'nome' => 'Caiuá'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 9205,
            'nome' => 'Cajamar'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 9254,
            'nome' => 'Cajati'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 9304,
            'nome' => 'Cajobi'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 9403,
            'nome' => 'Cajuru'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 9452,
            'nome' => 'Campina do Monte Alegre'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 9502,
            'nome' => 'Campinas'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 9601,
            'nome' => 'Campo Limpo Paulista'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 9700,
            'nome' => 'Campos do Jordão'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 9809,
            'nome' => 'Campos Novos Paulista'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 9908,
            'nome' => 'Cananéia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 9957,
            'nome' => 'Canas'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 10005,
            'nome' => 'Cândido Mota'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 10104,
            'nome' => 'Cândido Rodrigues'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 10153,
            'nome' => 'Canitar'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 10203,
            'nome' => 'Capão Bonito'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 10302,
            'nome' => 'Capela do Alto'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 10401,
            'nome' => 'Capivari'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 10500,
            'nome' => 'Caraguatatuba'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 10609,
            'nome' => 'Carapicuíba'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 10708,
            'nome' => 'Cardoso'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 10807,
            'nome' => 'Casa Branca'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 10906,
            'nome' => 'Cássia dos Coqueiros'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 11003,
            'nome' => 'Castilho'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 11102,
            'nome' => 'Catanduva'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 11201,
            'nome' => 'Catiguá'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 11300,
            'nome' => 'Cedral'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 11409,
            'nome' => 'Cerqueira César'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 11508,
            'nome' => 'Cerquilho'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 11607,
            'nome' => 'Cesário Lange'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 11706,
            'nome' => 'Charqueada'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 57204,
            'nome' => 'Chavantes'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 11904,
            'nome' => 'Clementina'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 12001,
            'nome' => 'Colina'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 12100,
            'nome' => 'Colômbia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 12209,
            'nome' => 'Conchal'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 12308,
            'nome' => 'Conchas'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 12407,
            'nome' => 'Cordeirópolis'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 12506,
            'nome' => 'Coroados'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 12605,
            'nome' => 'Coronel Macedo'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 12704,
            'nome' => 'Corumbataí'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 12803,
            'nome' => 'Cosmópolis'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 12902,
            'nome' => 'Cosmorama'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 13009,
            'nome' => 'Cotia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 13108,
            'nome' => 'Cravinhos'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 13207,
            'nome' => 'Cristais Paulista'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 13306,
            'nome' => 'Cruzália'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 13405,
            'nome' => 'Cruzeiro'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 13504,
            'nome' => 'Cubatão'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 13603,
            'nome' => 'Cunha'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 13702,
            'nome' => 'Descalvado'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 13801,
            'nome' => 'Diadema'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 13850,
            'nome' => 'Dirce Reis'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 13900,
            'nome' => 'Divinolândia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 14007,
            'nome' => 'Dobrada'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 14106,
            'nome' => 'Dois Córregos'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 14205,
            'nome' => 'Dolcinópolis'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 14304,
            'nome' => 'Dourado'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 14403,
            'nome' => 'Dracena'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 14502,
            'nome' => 'Duartina'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 14601,
            'nome' => 'Dumont'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 14700,
            'nome' => 'Echaporã'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 14809,
            'nome' => 'Eldorado'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 14908,
            'nome' => 'Elias Fausto'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 14924,
            'nome' => 'Elisiário'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 14957,
            'nome' => 'Embaúba'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 15004,
            'nome' => 'Embu das Artes'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 15103,
            'nome' => 'Embu-Guaçu'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 15129,
            'nome' => 'Emilianópolis'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 15152,
            'nome' => 'Engenheiro Coelho'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 15186,
            'nome' => 'Espírito Santo do Pinhal'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 15194,
            'nome' => 'Espírito Santo do Turvo'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 57303,
            'nome' => 'Estiva Gerbi'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 15301,
            'nome' => 'Estrela do Norte'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 15202,
            'nome' => 'Estrela d\'Oeste'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 15350,
            'nome' => 'Euclides da Cunha Paulista'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 15400,
            'nome' => 'Fartura'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 15608,
            'nome' => 'Fernando Prestes'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 15509,
            'nome' => 'Fernandópolis'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 15657,
            'nome' => 'Fernão'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 15707,
            'nome' => 'Ferraz de Vasconcelos'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 15806,
            'nome' => 'Flora Rica'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 15905,
            'nome' => 'Floreal'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 16002,
            'nome' => 'Flórida Paulista'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 16101,
            'nome' => 'Florínea'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 16200,
            'nome' => 'Franca'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 16309,
            'nome' => 'Francisco Morato'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 16408,
            'nome' => 'Franco da Rocha'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 16507,
            'nome' => 'Gabriel Monteiro'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 16606,
            'nome' => 'Gália'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 16705,
            'nome' => 'Garça'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 16804,
            'nome' => 'Gastão Vidigal'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 16853,
            'nome' => 'Gavião Peixoto'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 16903,
            'nome' => 'General Salgado'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 17000,
            'nome' => 'Getulina'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 17109,
            'nome' => 'Glicério'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 17208,
            'nome' => 'Guaiçara'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 17307,
            'nome' => 'Guaimbê'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 17406,
            'nome' => 'Guaíra'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 17505,
            'nome' => 'Guapiaçu'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 17604,
            'nome' => 'Guapiara'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 17703,
            'nome' => 'Guará'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 17802,
            'nome' => 'Guaraçaí'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 17901,
            'nome' => 'Guaraci'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 18008,
            'nome' => 'Guarani d\'Oeste'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 18107,
            'nome' => 'Guarantã'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 18206,
            'nome' => 'Guararapes'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 18305,
            'nome' => 'Guararema'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 18404,
            'nome' => 'Guaratinguetá'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 18503,
            'nome' => 'Guareí'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 18602,
            'nome' => 'Guariba'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 18701,
            'nome' => 'Guarujá'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 18800,
            'nome' => 'Guarulhos'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 18859,
            'nome' => 'Guatapará'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 18909,
            'nome' => 'Guzolândia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 19006,
            'nome' => 'Herculândia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 19055,
            'nome' => 'Holambra'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 19071,
            'nome' => 'Hortolândia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 19105,
            'nome' => 'Iacanga'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 19204,
            'nome' => 'Iacri'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 19253,
            'nome' => 'Iaras'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 19303,
            'nome' => 'Ibaté'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 19402,
            'nome' => 'Ibirá'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 19501,
            'nome' => 'Ibirarema'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 19600,
            'nome' => 'Ibitinga'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 19709,
            'nome' => 'Ibiúna'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 19808,
            'nome' => 'Icém'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 19907,
            'nome' => 'Iepê'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 20004,
            'nome' => 'Igaraçu do Tietê'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 20103,
            'nome' => 'Igarapava'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 20202,
            'nome' => 'Igaratá'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 20301,
            'nome' => 'Iguape'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 20426,
            'nome' => 'Ilha Comprida'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 20442,
            'nome' => 'Ilha Solteira'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 20400,
            'nome' => 'Ilhabela'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 20509,
            'nome' => 'Indaiatuba'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 20608,
            'nome' => 'Indiana'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 20707,
            'nome' => 'Indiaporã'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 20806,
            'nome' => 'Inúbia Paulista'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 20905,
            'nome' => 'Ipaussu'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 21002,
            'nome' => 'Iperó'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 21101,
            'nome' => 'Ipeúna'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 21150,
            'nome' => 'Ipiguá'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 21200,
            'nome' => 'Iporanga'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 21309,
            'nome' => 'Ipuã'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 21408,
            'nome' => 'Iracemápolis'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 21507,
            'nome' => 'Irapuã'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 21606,
            'nome' => 'Irapuru'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 21705,
            'nome' => 'Itaberá'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 21804,
            'nome' => 'Itaí'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 21903,
            'nome' => 'Itajobi'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 22000,
            'nome' => 'Itaju'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 22109,
            'nome' => 'Itanhaém'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 22158,
            'nome' => 'Itaoca'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 22208,
            'nome' => 'Itapecerica da Serra'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 22307,
            'nome' => 'Itapetininga'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 22406,
            'nome' => 'Itapeva'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 22505,
            'nome' => 'Itapevi'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 22604,
            'nome' => 'Itapira'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 22653,
            'nome' => 'Itapirapuã Paulista'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 22703,
            'nome' => 'Itápolis'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 22802,
            'nome' => 'Itaporanga'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 22901,
            'nome' => 'Itapuí'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 23008,
            'nome' => 'Itapura'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 23107,
            'nome' => 'Itaquaquecetuba'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 23206,
            'nome' => 'Itararé'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 23305,
            'nome' => 'Itariri'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 23404,
            'nome' => 'Itatiba'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 23503,
            'nome' => 'Itatinga'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 23602,
            'nome' => 'Itirapina'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 23701,
            'nome' => 'Itirapuã'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 23800,
            'nome' => 'Itobi'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 23909,
            'nome' => 'Itu'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 24006,
            'nome' => 'Itupeva'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 24105,
            'nome' => 'Ituverava'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 24204,
            'nome' => 'Jaborandi'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 24303,
            'nome' => 'Jaboticabal'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 24402,
            'nome' => 'Jacareí'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 24501,
            'nome' => 'Jaci'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 24600,
            'nome' => 'Jacupiranga'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 24709,
            'nome' => 'Jaguariúna'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 24808,
            'nome' => 'Jales'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 24907,
            'nome' => 'Jambeiro'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 25003,
            'nome' => 'Jandira'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 25102,
            'nome' => 'Jardinópolis'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 25201,
            'nome' => 'Jarinu'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 25300,
            'nome' => 'Jaú'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 25409,
            'nome' => 'Jeriquara'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 25508,
            'nome' => 'Joanópolis'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 25607,
            'nome' => 'João Ramalho'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 25706,
            'nome' => 'José Bonifácio'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 25805,
            'nome' => 'Júlio Mesquita'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 25854,
            'nome' => 'Jumirim'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 25904,
            'nome' => 'Jundiaí'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 26001,
            'nome' => 'Junqueirópolis'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 26100,
            'nome' => 'Juquiá'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 26209,
            'nome' => 'Juquitiba'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 26308,
            'nome' => 'Lagoinha'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 26407,
            'nome' => 'Laranjal Paulista'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 26506,
            'nome' => 'Lavínia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 26605,
            'nome' => 'Lavrinhas'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 26704,
            'nome' => 'Leme'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 26803,
            'nome' => 'Lençóis Paulista'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 26902,
            'nome' => 'Limeira'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 27009,
            'nome' => 'Lindóia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 27108,
            'nome' => 'Lins'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 27207,
            'nome' => 'Lorena'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 27256,
            'nome' => 'Lourdes'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 27306,
            'nome' => 'Louveira'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 27405,
            'nome' => 'Lucélia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 27504,
            'nome' => 'Lucianópolis'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 27603,
            'nome' => 'Luís Antônio'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 27702,
            'nome' => 'Luiziânia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 27801,
            'nome' => 'Lupércio'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 27900,
            'nome' => 'Lutécia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 28007,
            'nome' => 'Macatuba'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 28106,
            'nome' => 'Macaubal'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 28205,
            'nome' => 'Macedônia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 28304,
            'nome' => 'Magda'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 28403,
            'nome' => 'Mairinque'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 28502,
            'nome' => 'Mairiporã'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 28601,
            'nome' => 'Manduri'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 28700,
            'nome' => 'Marabá Paulista'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 28809,
            'nome' => 'Maracaí'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 28858,
            'nome' => 'Marapoama'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 28908,
            'nome' => 'Mariápolis'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 29005,
            'nome' => 'Marília'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 29104,
            'nome' => 'Marinópolis'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 29203,
            'nome' => 'Martinópolis'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 29302,
            'nome' => 'Matão'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 29401,
            'nome' => 'Mauá'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 29500,
            'nome' => 'Mendonça'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 29609,
            'nome' => 'Meridiano'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 29658,
            'nome' => 'Mesópolis'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 29708,
            'nome' => 'Miguelópolis'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 29807,
            'nome' => 'Mineiros do Tietê'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 30003,
            'nome' => 'Mira Estrela'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 29906,
            'nome' => 'Miracatu'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 30102,
            'nome' => 'Mirandópolis'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 30201,
            'nome' => 'Mirante do Paranapanema'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 30300,
            'nome' => 'Mirassol'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 30409,
            'nome' => 'Mirassolândia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 30508,
            'nome' => 'Mococa'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 30607,
            'nome' => 'Mogi das Cruzes'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 30706,
            'nome' => 'Mogi Guaçu'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 30805,
            'nome' => 'Mogi Mirim'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 30904,
            'nome' => 'Mombuca'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 31001,
            'nome' => 'Monções'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 31100,
            'nome' => 'Mongaguá'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 31209,
            'nome' => 'Monte Alegre do Sul'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 31308,
            'nome' => 'Monte Alto'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 31407,
            'nome' => 'Monte Aprazível'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 31506,
            'nome' => 'Monte Azul Paulista'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 31605,
            'nome' => 'Monte Castelo'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 31803,
            'nome' => 'Monte Mor'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 31704,
            'nome' => 'Monteiro Lobato'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 31902,
            'nome' => 'Morro Agudo'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 32009,
            'nome' => 'Morungaba'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 32058,
            'nome' => 'Motuca'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 32108,
            'nome' => 'Murutinga do Sul'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 32157,
            'nome' => 'Nantes'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 32207,
            'nome' => 'Narandiba'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 32306,
            'nome' => 'Natividade da Serra'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 32405,
            'nome' => 'Nazaré Paulista'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 32504,
            'nome' => 'Neves Paulista'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 32603,
            'nome' => 'Nhandeara'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 32702,
            'nome' => 'Nipoã'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 32801,
            'nome' => 'Nova Aliança'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 32827,
            'nome' => 'Nova Campina'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 32843,
            'nome' => 'Nova Canaã Paulista'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 32868,
            'nome' => 'Nova Castilho'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 32900,
            'nome' => 'Nova Europa'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 33007,
            'nome' => 'Nova Granada'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 33106,
            'nome' => 'Nova Guataporanga'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 33205,
            'nome' => 'Nova Independência'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 33304,
            'nome' => 'Nova Luzitânia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 33403,
            'nome' => 'Nova Odessa'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 33254,
            'nome' => 'Novais'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 33502,
            'nome' => 'Novo Horizonte'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 33601,
            'nome' => 'Nuporanga'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 33700,
            'nome' => 'Ocauçu'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 33809,
            'nome' => 'Óleo'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 33908,
            'nome' => 'Olímpia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 34005,
            'nome' => 'Onda Verde'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 34104,
            'nome' => 'Oriente'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 34203,
            'nome' => 'Orindiúva'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 34302,
            'nome' => 'Orlândia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 34401,
            'nome' => 'Osasco'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 34500,
            'nome' => 'Oscar Bressane'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 34609,
            'nome' => 'Osvaldo Cruz'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 34708,
            'nome' => 'Ourinhos'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 34807,
            'nome' => 'Ouro Verde'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 34757,
            'nome' => 'Ouroeste'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 34906,
            'nome' => 'Pacaembu'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 35002,
            'nome' => 'Palestina'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 35101,
            'nome' => 'Palmares Paulista'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 35200,
            'nome' => 'Palmeira d\'Oeste'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 35309,
            'nome' => 'Palmital'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 35408,
            'nome' => 'Panorama'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 35507,
            'nome' => 'Paraguaçu Paulista'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 35606,
            'nome' => 'Paraibuna'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 35705,
            'nome' => 'Paraíso'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 35804,
            'nome' => 'Paranapanema'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 35903,
            'nome' => 'Paranapuã'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 36000,
            'nome' => 'Parapuã'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 36109,
            'nome' => 'Pardinho'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 36208,
            'nome' => 'Pariquera-Açu'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 36257,
            'nome' => 'Parisi'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 36307,
            'nome' => 'Patrocínio Paulista'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 36406,
            'nome' => 'Paulicéia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 36505,
            'nome' => 'Paulínia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 36570,
            'nome' => 'Paulistânia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 36604,
            'nome' => 'Paulo de Faria'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 36703,
            'nome' => 'Pederneiras'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 36802,
            'nome' => 'Pedra Bela'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 36901,
            'nome' => 'Pedranópolis'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 37008,
            'nome' => 'Pedregulho'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 37107,
            'nome' => 'Pedreira'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 37156,
            'nome' => 'Pedrinhas Paulista'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 37206,
            'nome' => 'Pedro de Toledo'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 37305,
            'nome' => 'Penápolis'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 37404,
            'nome' => 'Pereira Barreto'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 37503,
            'nome' => 'Pereiras'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 37602,
            'nome' => 'Peruíbe'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 37701,
            'nome' => 'Piacatu'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 37800,
            'nome' => 'Piedade'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 37909,
            'nome' => 'Pilar do Sul'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 38006,
            'nome' => 'Pindamonhangaba'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 38105,
            'nome' => 'Pindorama'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 38204,
            'nome' => 'Pinhalzinho'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 38303,
            'nome' => 'Piquerobi'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 38501,
            'nome' => 'Piquete'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 38600,
            'nome' => 'Piracaia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 38709,
            'nome' => 'Piracicaba'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 38808,
            'nome' => 'Piraju'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 38907,
            'nome' => 'Pirajuí'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 39004,
            'nome' => 'Pirangi'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 39103,
            'nome' => 'Pirapora do Bom Jesus'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 39202,
            'nome' => 'Pirapozinho'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 39301,
            'nome' => 'Pirassununga'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 39400,
            'nome' => 'Piratininga'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 39509,
            'nome' => 'Pitangueiras'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 39608,
            'nome' => 'Planalto'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 39707,
            'nome' => 'Platina'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 39806,
            'nome' => 'Poá'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 39905,
            'nome' => 'Poloni'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 40002,
            'nome' => 'Pompéia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 40101,
            'nome' => 'Pongaí'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 40200,
            'nome' => 'Pontal'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 40259,
            'nome' => 'Pontalinda'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 40309,
            'nome' => 'Pontes Gestal'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 40408,
            'nome' => 'Populina'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 40507,
            'nome' => 'Porangaba'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 40606,
            'nome' => 'Porto Feliz'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 40705,
            'nome' => 'Porto Ferreira'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 40754,
            'nome' => 'Potim'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 40804,
            'nome' => 'Potirendaba'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 40853,
            'nome' => 'Pracinha'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 40903,
            'nome' => 'Pradópolis'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 41000,
            'nome' => 'Praia Grande'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 41059,
            'nome' => 'Pratânia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 41109,
            'nome' => 'Presidente Alves'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 41208,
            'nome' => 'Presidente Bernardes'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 41307,
            'nome' => 'Presidente Epitácio'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 41406,
            'nome' => 'Presidente Prudente'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 41505,
            'nome' => 'Presidente Venceslau'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 41604,
            'nome' => 'Promissão'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 41653,
            'nome' => 'Quadra'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 41703,
            'nome' => 'Quatá'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 41802,
            'nome' => 'Queiroz'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 41901,
            'nome' => 'Queluz'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 42008,
            'nome' => 'Quintana'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 42107,
            'nome' => 'Rafard'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 42206,
            'nome' => 'Rancharia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 42305,
            'nome' => 'Redenção da Serra'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 42404,
            'nome' => 'Regente Feijó'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 42503,
            'nome' => 'Reginópolis'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 42602,
            'nome' => 'Registro'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 42701,
            'nome' => 'Restinga'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 42800,
            'nome' => 'Ribeira'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 42909,
            'nome' => 'Ribeirão Bonito'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 43006,
            'nome' => 'Ribeirão Branco'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 43105,
            'nome' => 'Ribeirão Corrente'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 43204,
            'nome' => 'Ribeirão do Sul'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 43238,
            'nome' => 'Ribeirão dos Índios'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 43253,
            'nome' => 'Ribeirão Grande'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 43303,
            'nome' => 'Ribeirão Pires'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 43402,
            'nome' => 'Ribeirão Preto'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 43600,
            'nome' => 'Rifaina'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 43709,
            'nome' => 'Rincão'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 43808,
            'nome' => 'Rinópolis'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 43907,
            'nome' => 'Rio Claro'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 44004,
            'nome' => 'Rio das Pedras'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 44103,
            'nome' => 'Rio Grande da Serra'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 44202,
            'nome' => 'Riolândia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 43501,
            'nome' => 'Riversul'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 44251,
            'nome' => 'Rosana'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 44301,
            'nome' => 'Roseira'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 44400,
            'nome' => 'Rubiácea'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 44509,
            'nome' => 'Rubinéia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 44608,
            'nome' => 'Sabino'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 44707,
            'nome' => 'Sagres'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 44806,
            'nome' => 'Sales'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 44905,
            'nome' => 'Sales Oliveira'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 45001,
            'nome' => 'Salesópolis'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 45100,
            'nome' => 'Salmourão'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 45159,
            'nome' => 'Saltinho'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 45209,
            'nome' => 'Salto'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 45308,
            'nome' => 'Salto de Pirapora'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 45407,
            'nome' => 'Salto Grande'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 45506,
            'nome' => 'Sandovalina'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 45605,
            'nome' => 'Santa Adélia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 45704,
            'nome' => 'Santa Albertina'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 45803,
            'nome' => 'Santa Bárbara d\'Oeste'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 46009,
            'nome' => 'Santa Branca'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 46108,
            'nome' => 'Santa Clara d\'Oeste'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 46207,
            'nome' => 'Santa Cruz da Conceição'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 46256,
            'nome' => 'Santa Cruz da Esperança'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 46306,
            'nome' => 'Santa Cruz das Palmeiras'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 46405,
            'nome' => 'Santa Cruz do Rio Pardo'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 46504,
            'nome' => 'Santa Ernestina'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 46603,
            'nome' => 'Santa Fé do Sul'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 46702,
            'nome' => 'Santa Gertrudes'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 46801,
            'nome' => 'Santa Isabel'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 46900,
            'nome' => 'Santa Lúcia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 47007,
            'nome' => 'Santa Maria da Serra'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 47106,
            'nome' => 'Santa Mercedes'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 47502,
            'nome' => 'Santa Rita do Passa Quatro'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 47403,
            'nome' => 'Santa Rita d\'Oeste'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 47601,
            'nome' => 'Santa Rosa de Viterbo'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 47650,
            'nome' => 'Santa Salete'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 47205,
            'nome' => 'Santana da Ponte Pensa'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 47304,
            'nome' => 'Santana de Parnaíba'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 47700,
            'nome' => 'Santo Anastácio'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 47809,
            'nome' => 'Santo André'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 47908,
            'nome' => 'Santo Antônio da Alegria'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 48005,
            'nome' => 'Santo Antônio de Posse'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 48054,
            'nome' => 'Santo Antônio do Aracanguá'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 48104,
            'nome' => 'Santo Antônio do Jardim'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 48203,
            'nome' => 'Santo Antônio do Pinhal'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 48302,
            'nome' => 'Santo Expedito'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 48401,
            'nome' => 'Santópolis do Aguapeí'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 48500,
            'nome' => 'Santos'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 48609,
            'nome' => 'São Bento do Sapucaí'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 48708,
            'nome' => 'São Bernardo do Campo'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 48807,
            'nome' => 'São Caetano do Sul'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 48906,
            'nome' => 'São Carlos'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 49003,
            'nome' => 'São Francisco'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 49102,
            'nome' => 'São João da Boa Vista'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 49201,
            'nome' => 'São João das Duas Pontes'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 49250,
            'nome' => 'São João de Iracema'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 49300,
            'nome' => 'São João do Pau d\'Alho'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 49409,
            'nome' => 'São Joaquim da Barra'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 49508,
            'nome' => 'São José da Bela Vista'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 49607,
            'nome' => 'São José do Barreiro'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 49706,
            'nome' => 'São José do Rio Pardo'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 49805,
            'nome' => 'São José do Rio Preto'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 49904,
            'nome' => 'São José dos Campos'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 49953,
            'nome' => 'São Lourenço da Serra'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 50001,
            'nome' => 'São Luiz do Paraitinga'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 50100,
            'nome' => 'São Manuel'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 50209,
            'nome' => 'São Miguel Arcanjo'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 50308,
            'nome' => 'São Paulo'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 50407,
            'nome' => 'São Pedro'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 50506,
            'nome' => 'São Pedro do Turvo'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 50605,
            'nome' => 'São Roque'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 50704,
            'nome' => 'São Sebastião'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 50803,
            'nome' => 'São Sebastião da Grama'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 50902,
            'nome' => 'São Simão'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 51009,
            'nome' => 'São Vicente'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 51108,
            'nome' => 'Sarapuí'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 51207,
            'nome' => 'Sarutaiá'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 51306,
            'nome' => 'Sebastianópolis do Sul'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 51405,
            'nome' => 'Serra Azul'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 51603,
            'nome' => 'Serra Negra'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 51504,
            'nome' => 'Serrana'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 51702,
            'nome' => 'Sertãozinho'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 51801,
            'nome' => 'Sete Barras'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 51900,
            'nome' => 'Severínia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 52007,
            'nome' => 'Silveiras'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 52106,
            'nome' => 'Socorro'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 52205,
            'nome' => 'Sorocaba'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 52304,
            'nome' => 'Sud Mennucci'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 52403,
            'nome' => 'Sumaré'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 52551,
            'nome' => 'Suzanápolis'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 52502,
            'nome' => 'Suzano'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 52601,
            'nome' => 'Tabapuã'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 52700,
            'nome' => 'Tabatinga'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 52809,
            'nome' => 'Taboão da Serra'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 52908,
            'nome' => 'Taciba'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 53005,
            'nome' => 'Taguaí'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 53104,
            'nome' => 'Taiaçu'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 53203,
            'nome' => 'Taiúva'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 53302,
            'nome' => 'Tambaú'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 53401,
            'nome' => 'Tanabi'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 53500,
            'nome' => 'Tapiraí'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 53609,
            'nome' => 'Tapiratiba'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 53658,
            'nome' => 'Taquaral'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 53708,
            'nome' => 'Taquaritinga'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 53807,
            'nome' => 'Taquarituba'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 53856,
            'nome' => 'Taquarivaí'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 53906,
            'nome' => 'Tarabai'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 53955,
            'nome' => 'Tarumã'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 54003,
            'nome' => 'Tatuí'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 54102,
            'nome' => 'Taubaté'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 54201,
            'nome' => 'Tejupá'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 54300,
            'nome' => 'Teodoro Sampaio'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 54409,
            'nome' => 'Terra Roxa'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 54508,
            'nome' => 'Tietê'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 54607,
            'nome' => 'Timburi'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 54656,
            'nome' => 'Torre de Pedra'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 54706,
            'nome' => 'Torrinha'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 54755,
            'nome' => 'Trabiju'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 54805,
            'nome' => 'Tremembé'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 54904,
            'nome' => 'Três Fronteiras'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 54953,
            'nome' => 'Tuiuti'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 55000,
            'nome' => 'Tupã'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 55109,
            'nome' => 'Tupi Paulista'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 55208,
            'nome' => 'Turiúba'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 55307,
            'nome' => 'Turmalina'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 55356,
            'nome' => 'Ubarana'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 55406,
            'nome' => 'Ubatuba'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 55505,
            'nome' => 'Ubirajara'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 55604,
            'nome' => 'Uchoa'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 55703,
            'nome' => 'União Paulista'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 55802,
            'nome' => 'Urânia'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 55901,
            'nome' => 'Uru'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 56008,
            'nome' => 'Urupês'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 56107,
            'nome' => 'Valentim Gentil'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 56206,
            'nome' => 'Valinhos'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 56305,
            'nome' => 'Valparaíso'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 56354,
            'nome' => 'Vargem'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 56404,
            'nome' => 'Vargem Grande do Sul'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 56453,
            'nome' => 'Vargem Grande Paulista'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 56503,
            'nome' => 'Várzea Paulista'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 56602,
            'nome' => 'Vera Cruz'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 56701,
            'nome' => 'Vinhedo'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 56800,
            'nome' => 'Viradouro'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 56909,
            'nome' => 'Vista Alegre do Alto'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 56958,
            'nome' => 'Vitória Brasil'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 57006,
            'nome' => 'Votorantim'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 57105,
            'nome' => 'Votuporanga'
        ],
        [
            'codigo_uf' => 35,
            'codigo_municipio' => 57154,
            'nome' => 'Zacarias'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 103,
            'nome' => 'Abatiá'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 202,
            'nome' => 'Adrianópolis'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 301,
            'nome' => 'Agudos do Sul'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 400,
            'nome' => 'Almirante Tamandaré'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 459,
            'nome' => 'Altamira do Paraná'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 28625,
            'nome' => 'Alto Paraíso'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 608,
            'nome' => 'Alto Paraná'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 707,
            'nome' => 'Alto Piquiri'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 509,
            'nome' => 'Altônia'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 806,
            'nome' => 'Alvorada do Sul'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 905,
            'nome' => 'Amaporã'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 1002,
            'nome' => 'Ampére'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 1051,
            'nome' => 'Anahy'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 1101,
            'nome' => 'Andirá'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 1150,
            'nome' => 'Ângulo'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 1200,
            'nome' => 'Antonina'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 1309,
            'nome' => 'Antônio Olinto'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 1408,
            'nome' => 'Apucarana'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 1507,
            'nome' => 'Arapongas'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 1606,
            'nome' => 'Arapoti'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 1655,
            'nome' => 'Arapuã'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 1705,
            'nome' => 'Araruna'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 1804,
            'nome' => 'Araucária'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 1853,
            'nome' => 'Ariranha do Ivaí'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 1903,
            'nome' => 'Assaí'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 2000,
            'nome' => 'Assis Chateaubriand'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 2109,
            'nome' => 'Astorga'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 2208,
            'nome' => 'Atalaia'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 2307,
            'nome' => 'Balsa Nova'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 2406,
            'nome' => 'Bandeirantes'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 2505,
            'nome' => 'Barbosa Ferraz'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 2703,
            'nome' => 'Barra do Jacaré'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 2604,
            'nome' => 'Barracão'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 2752,
            'nome' => 'Bela Vista da Caroba'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 2802,
            'nome' => 'Bela Vista do Paraíso'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 2901,
            'nome' => 'Bituruna'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 3008,
            'nome' => 'Boa Esperança'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 3024,
            'nome' => 'Boa Esperança do Iguaçu'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 3040,
            'nome' => 'Boa Ventura de São Roque'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 3057,
            'nome' => 'Boa Vista da Aparecida'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 3107,
            'nome' => 'Bocaiúva do Sul'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 3156,
            'nome' => 'Bom Jesus do Sul'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 3206,
            'nome' => 'Bom Sucesso'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 3222,
            'nome' => 'Bom Sucesso do Sul'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 3305,
            'nome' => 'Borrazópolis'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 3354,
            'nome' => 'Braganey'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 3370,
            'nome' => 'Brasilândia do Sul'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 3404,
            'nome' => 'Cafeara'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 3453,
            'nome' => 'Cafelândia'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 3479,
            'nome' => 'Cafezal do Sul'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 3503,
            'nome' => 'Califórnia'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 3602,
            'nome' => 'Cambará'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 3701,
            'nome' => 'Cambé'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 3800,
            'nome' => 'Cambira'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 3909,
            'nome' => 'Campina da Lagoa'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 3958,
            'nome' => 'Campina do Simão'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 4006,
            'nome' => 'Campina Grande do Sul'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 4055,
            'nome' => 'Campo Bonito'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 4105,
            'nome' => 'Campo do Tenente'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 4204,
            'nome' => 'Campo Largo'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 4253,
            'nome' => 'Campo Magro'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 4303,
            'nome' => 'Campo Mourão'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 4402,
            'nome' => 'Cândido de Abreu'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 4428,
            'nome' => 'Candói'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 4451,
            'nome' => 'Cantagalo'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 4501,
            'nome' => 'Capanema'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 4600,
            'nome' => 'Capitão Leônidas Marques'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 4659,
            'nome' => 'Carambeí'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 4709,
            'nome' => 'Carlópolis'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 4808,
            'nome' => 'Cascavel'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 4907,
            'nome' => 'Castro'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 5003,
            'nome' => 'Catanduvas'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 5102,
            'nome' => 'Centenário do Sul'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 5201,
            'nome' => 'Cerro Azul'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 5300,
            'nome' => 'Céu Azul'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 5409,
            'nome' => 'Chopinzinho'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 5508,
            'nome' => 'Cianorte'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 5607,
            'nome' => 'Cidade Gaúcha'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 5706,
            'nome' => 'Clevelândia'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 5805,
            'nome' => 'Colombo'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 5904,
            'nome' => 'Colorado'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 6001,
            'nome' => 'Congonhinhas'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 6100,
            'nome' => 'Conselheiro Mairinck'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 6209,
            'nome' => 'Contenda'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 6308,
            'nome' => 'Corbélia'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 6407,
            'nome' => 'Cornélio Procópio'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 6456,
            'nome' => 'Coronel Domingos Soares'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 6506,
            'nome' => 'Coronel Vivida'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 6555,
            'nome' => 'Corumbataí do Sul'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 6803,
            'nome' => 'Cruz Machado'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 6571,
            'nome' => 'Cruzeiro do Iguaçu'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 6605,
            'nome' => 'Cruzeiro do Oeste'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 6704,
            'nome' => 'Cruzeiro do Sul'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 6852,
            'nome' => 'Cruzmaltina'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 6902,
            'nome' => 'Curitiba'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 7009,
            'nome' => 'Curiúva'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 7108,
            'nome' => 'Diamante do Norte'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 7124,
            'nome' => 'Diamante do Sul'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 7157,
            'nome' => 'Diamante D\'Oeste'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 7207,
            'nome' => 'Dois Vizinhos'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 7256,
            'nome' => 'Douradina'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 7306,
            'nome' => 'Doutor Camargo'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 28633,
            'nome' => 'Doutor Ulysses'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 7405,
            'nome' => 'Enéas Marques'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 7504,
            'nome' => 'Engenheiro Beltrão'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 7538,
            'nome' => 'Entre Rios do Oeste'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 7520,
            'nome' => 'Esperança Nova'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 7546,
            'nome' => 'Espigão Alto do Iguaçu'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 7553,
            'nome' => 'Farol'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 7603,
            'nome' => 'Faxinal'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 7652,
            'nome' => 'Fazenda Rio Grande'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 7702,
            'nome' => 'Fênix'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 7736,
            'nome' => 'Fernandes Pinheiro'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 7751,
            'nome' => 'Figueira'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 7850,
            'nome' => 'Flor da Serra do Sul'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 7801,
            'nome' => 'Floraí'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 7900,
            'nome' => 'Floresta'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 8007,
            'nome' => 'Florestópolis'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 8106,
            'nome' => 'Flórida'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 8205,
            'nome' => 'Formosa do Oeste'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 8304,
            'nome' => 'Foz do Iguaçu'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 8452,
            'nome' => 'Foz do Jordão'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 8320,
            'nome' => 'Francisco Alves'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 8403,
            'nome' => 'Francisco Beltrão'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 8502,
            'nome' => 'General Carneiro'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 8551,
            'nome' => 'Godoy Moreira'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 8601,
            'nome' => 'Goioerê'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 8650,
            'nome' => 'Goioxim'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 8700,
            'nome' => 'Grandes Rios'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 8809,
            'nome' => 'Guaíra'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 8908,
            'nome' => 'Guairaçá'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 8957,
            'nome' => 'Guamiranga'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 9005,
            'nome' => 'Guapirama'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 9104,
            'nome' => 'Guaporema'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 9203,
            'nome' => 'Guaraci'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 9302,
            'nome' => 'Guaraniaçu'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 9401,
            'nome' => 'Guarapuava'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 9500,
            'nome' => 'Guaraqueçaba'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 9609,
            'nome' => 'Guaratuba'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 9658,
            'nome' => 'Honório Serpa'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 9708,
            'nome' => 'Ibaiti'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 9757,
            'nome' => 'Ibema'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 9807,
            'nome' => 'Ibiporã'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 9906,
            'nome' => 'Icaraíma'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 10003,
            'nome' => 'Iguaraçu'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 10052,
            'nome' => 'Iguatu'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 10078,
            'nome' => 'Imbaú'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 10102,
            'nome' => 'Imbituva'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 10201,
            'nome' => 'Inácio Martins'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 10300,
            'nome' => 'Inajá'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 10409,
            'nome' => 'Indianópolis'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 10508,
            'nome' => 'Ipiranga'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 10607,
            'nome' => 'Iporã'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 10656,
            'nome' => 'Iracema do Oeste'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 10706,
            'nome' => 'Irati'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 10805,
            'nome' => 'Iretama'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 10904,
            'nome' => 'Itaguajé'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 10953,
            'nome' => 'Itaipulândia'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 11001,
            'nome' => 'Itambaracá'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 11100,
            'nome' => 'Itambé'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 11209,
            'nome' => 'Itapejara d\'Oeste'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 11258,
            'nome' => 'Itaperuçu'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 11308,
            'nome' => 'Itaúna do Sul'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 11407,
            'nome' => 'Ivaí'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 11506,
            'nome' => 'Ivaiporã'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 11555,
            'nome' => 'Ivaté'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 11605,
            'nome' => 'Ivatuba'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 11704,
            'nome' => 'Jaboti'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 11803,
            'nome' => 'Jacarezinho'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 11902,
            'nome' => 'Jaguapitã'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 12009,
            'nome' => 'Jaguariaíva'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 12108,
            'nome' => 'Jandaia do Sul'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 12207,
            'nome' => 'Janiópolis'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 12306,
            'nome' => 'Japira'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 12405,
            'nome' => 'Japurá'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 12504,
            'nome' => 'Jardim Alegre'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 12603,
            'nome' => 'Jardim Olinda'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 12702,
            'nome' => 'Jataizinho'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 12751,
            'nome' => 'Jesuítas'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 12801,
            'nome' => 'Joaquim Távora'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 12900,
            'nome' => 'Jundiaí do Sul'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 12959,
            'nome' => 'Juranda'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 13007,
            'nome' => 'Jussara'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 13106,
            'nome' => 'Kaloré'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 13205,
            'nome' => 'Lapa'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 13254,
            'nome' => 'Laranjal'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 13304,
            'nome' => 'Laranjeiras do Sul'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 13403,
            'nome' => 'Leópolis'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 13429,
            'nome' => 'Lidianópolis'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 13452,
            'nome' => 'Lindoeste'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 13502,
            'nome' => 'Loanda'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 13601,
            'nome' => 'Lobato'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 13700,
            'nome' => 'Londrina'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 13734,
            'nome' => 'Luiziana'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 13759,
            'nome' => 'Lunardelli'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 13809,
            'nome' => 'Lupionópolis'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 13908,
            'nome' => 'Mallet'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 14005,
            'nome' => 'Mamborê'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 14104,
            'nome' => 'Mandaguaçu'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 14203,
            'nome' => 'Mandaguari'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 14302,
            'nome' => 'Mandirituba'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 14351,
            'nome' => 'Manfrinópolis'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 14401,
            'nome' => 'Mangueirinha'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 14500,
            'nome' => 'Manoel Ribas'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 14609,
            'nome' => 'Marechal Cândido Rondon'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 14708,
            'nome' => 'Maria Helena'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 14807,
            'nome' => 'Marialva'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 14906,
            'nome' => 'Marilândia do Sul'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 15002,
            'nome' => 'Marilena'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 15101,
            'nome' => 'Mariluz'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 15200,
            'nome' => 'Maringá'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 15309,
            'nome' => 'Mariópolis'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 15358,
            'nome' => 'Maripá'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 15408,
            'nome' => 'Marmeleiro'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 15457,
            'nome' => 'Marquinho'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 15507,
            'nome' => 'Marumbi'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 15606,
            'nome' => 'Matelândia'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 15705,
            'nome' => 'Matinhos'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 15739,
            'nome' => 'Mato Rico'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 15754,
            'nome' => 'Mauá da Serra'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 15804,
            'nome' => 'Medianeira'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 15853,
            'nome' => 'Mercedes'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 15903,
            'nome' => 'Mirador'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 16000,
            'nome' => 'Miraselva'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 16059,
            'nome' => 'Missal'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 16109,
            'nome' => 'Moreira Sales'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 16208,
            'nome' => 'Morretes'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 16307,
            'nome' => 'Munhoz de Melo'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 16406,
            'nome' => 'Nossa Senhora das Graças'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 16505,
            'nome' => 'Nova Aliança do Ivaí'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 16604,
            'nome' => 'Nova América da Colina'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 16703,
            'nome' => 'Nova Aurora'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 16802,
            'nome' => 'Nova Cantu'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 16901,
            'nome' => 'Nova Esperança'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 16950,
            'nome' => 'Nova Esperança do Sudoeste'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 17008,
            'nome' => 'Nova Fátima'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 17057,
            'nome' => 'Nova Laranjeiras'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 17107,
            'nome' => 'Nova Londrina'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 17206,
            'nome' => 'Nova Olímpia'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 17255,
            'nome' => 'Nova Prata do Iguaçu'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 17214,
            'nome' => 'Nova Santa Bárbara'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 17222,
            'nome' => 'Nova Santa Rosa'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 17271,
            'nome' => 'Nova Tebas'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 17297,
            'nome' => 'Novo Itacolomi'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 17305,
            'nome' => 'Ortigueira'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 17404,
            'nome' => 'Ourizona'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 17453,
            'nome' => 'Ouro Verde do Oeste'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 17503,
            'nome' => 'Paiçandu'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 17602,
            'nome' => 'Palmas'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 17701,
            'nome' => 'Palmeira'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 17800,
            'nome' => 'Palmital'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 17909,
            'nome' => 'Palotina'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 18006,
            'nome' => 'Paraíso do Norte'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 18105,
            'nome' => 'Paranacity'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 18204,
            'nome' => 'Paranaguá'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 18303,
            'nome' => 'Paranapoema'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 18402,
            'nome' => 'Paranavaí'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 18451,
            'nome' => 'Pato Bragado'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 18501,
            'nome' => 'Pato Branco'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 18600,
            'nome' => 'Paula Freitas'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 18709,
            'nome' => 'Paulo Frontin'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 18808,
            'nome' => 'Peabiru'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 18857,
            'nome' => 'Perobal'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 18907,
            'nome' => 'Pérola'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 19004,
            'nome' => 'Pérola d\'Oeste'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 19103,
            'nome' => 'Piên'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 19152,
            'nome' => 'Pinhais'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 19251,
            'nome' => 'Pinhal de São Bento'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 19202,
            'nome' => 'Pinhalão'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 19301,
            'nome' => 'Pinhão'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 19400,
            'nome' => 'Piraí do Sul'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 19509,
            'nome' => 'Piraquara'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 19608,
            'nome' => 'Pitanga'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 19657,
            'nome' => 'Pitangueiras'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 19707,
            'nome' => 'Planaltina do Paraná'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 19806,
            'nome' => 'Planalto'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 19905,
            'nome' => 'Ponta Grossa'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 19954,
            'nome' => 'Pontal do Paraná'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 20002,
            'nome' => 'Porecatu'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 20101,
            'nome' => 'Porto Amazonas'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 20150,
            'nome' => 'Porto Barreiro'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 20200,
            'nome' => 'Porto Rico'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 20309,
            'nome' => 'Porto Vitória'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 20333,
            'nome' => 'Prado Ferreira'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 20358,
            'nome' => 'Pranchita'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 20408,
            'nome' => 'Presidente Castelo Branco'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 20507,
            'nome' => 'Primeiro de Maio'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 20606,
            'nome' => 'Prudentópolis'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 20655,
            'nome' => 'Quarto Centenário'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 20705,
            'nome' => 'Quatiguá'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 20804,
            'nome' => 'Quatro Barras'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 20853,
            'nome' => 'Quatro Pontes'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 20903,
            'nome' => 'Quedas do Iguaçu'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 21000,
            'nome' => 'Querência do Norte'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 21109,
            'nome' => 'Quinta do Sol'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 21208,
            'nome' => 'Quitandinha'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 21257,
            'nome' => 'Ramilândia'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 21307,
            'nome' => 'Rancho Alegre'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 21356,
            'nome' => 'Rancho Alegre D\'Oeste'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 21406,
            'nome' => 'Realeza'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 21505,
            'nome' => 'Rebouças'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 21604,
            'nome' => 'Renascença'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 21703,
            'nome' => 'Reserva'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 21752,
            'nome' => 'Reserva do Iguaçu'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 21802,
            'nome' => 'Ribeirão Claro'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 21901,
            'nome' => 'Ribeirão do Pinhal'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 22008,
            'nome' => 'Rio Azul'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 22107,
            'nome' => 'Rio Bom'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 22156,
            'nome' => 'Rio Bonito do Iguaçu'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 22172,
            'nome' => 'Rio Branco do Ivaí'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 22206,
            'nome' => 'Rio Branco do Sul'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 22305,
            'nome' => 'Rio Negro'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 22404,
            'nome' => 'Rolândia'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 22503,
            'nome' => 'Roncador'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 22602,
            'nome' => 'Rondon'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 22651,
            'nome' => 'Rosário do Ivaí'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 22701,
            'nome' => 'Sabáudia'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 22800,
            'nome' => 'Salgado Filho'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 22909,
            'nome' => 'Salto do Itararé'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 23006,
            'nome' => 'Salto do Lontra'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 23105,
            'nome' => 'Santa Amélia'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 23204,
            'nome' => 'Santa Cecília do Pavão'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 23303,
            'nome' => 'Santa Cruz de Monte Castelo'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 23402,
            'nome' => 'Santa Fé'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 23501,
            'nome' => 'Santa Helena'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 23600,
            'nome' => 'Santa Inês'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 23709,
            'nome' => 'Santa Isabel do Ivaí'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 23808,
            'nome' => 'Santa Izabel do Oeste'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 23824,
            'nome' => 'Santa Lúcia'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 23857,
            'nome' => 'Santa Maria do Oeste'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 23907,
            'nome' => 'Santa Mariana'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 23956,
            'nome' => 'Santa Mônica'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 24020,
            'nome' => 'Santa Tereza do Oeste'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 24053,
            'nome' => 'Santa Terezinha de Itaipu'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 24004,
            'nome' => 'Santana do Itararé'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 24103,
            'nome' => 'Santo Antônio da Platina'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 24202,
            'nome' => 'Santo Antônio do Caiuá'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 24301,
            'nome' => 'Santo Antônio do Paraíso'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 24400,
            'nome' => 'Santo Antônio do Sudoeste'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 24509,
            'nome' => 'Santo Inácio'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 24608,
            'nome' => 'São Carlos do Ivaí'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 24707,
            'nome' => 'São Jerônimo da Serra'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 24806,
            'nome' => 'São João'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 24905,
            'nome' => 'São João do Caiuá'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 25001,
            'nome' => 'São João do Ivaí'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 25100,
            'nome' => 'São João do Triunfo'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 25308,
            'nome' => 'São Jorge do Ivaí'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 25357,
            'nome' => 'São Jorge do Patrocínio'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 25209,
            'nome' => 'São Jorge d\'Oeste'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 25407,
            'nome' => 'São José da Boa Vista'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 25456,
            'nome' => 'São José das Palmeiras'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 25506,
            'nome' => 'São José dos Pinhais'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 25555,
            'nome' => 'São Manoel do Paraná'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 25605,
            'nome' => 'São Mateus do Sul'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 25704,
            'nome' => 'São Miguel do Iguaçu'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 25753,
            'nome' => 'São Pedro do Iguaçu'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 25803,
            'nome' => 'São Pedro do Ivaí'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 25902,
            'nome' => 'São Pedro do Paraná'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 26009,
            'nome' => 'São Sebastião da Amoreira'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 26108,
            'nome' => 'São Tomé'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 26207,
            'nome' => 'Sapopema'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 26256,
            'nome' => 'Sarandi'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 26272,
            'nome' => 'Saudade do Iguaçu'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 26306,
            'nome' => 'Sengés'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 26355,
            'nome' => 'Serranópolis do Iguaçu'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 26405,
            'nome' => 'Sertaneja'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 26504,
            'nome' => 'Sertanópolis'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 26603,
            'nome' => 'Siqueira Campos'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 26652,
            'nome' => 'Sulina'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 26678,
            'nome' => 'Tamarana'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 26702,
            'nome' => 'Tamboara'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 26801,
            'nome' => 'Tapejara'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 26900,
            'nome' => 'Tapira'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 27007,
            'nome' => 'Teixeira Soares'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 27106,
            'nome' => 'Telêmaco Borba'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 27205,
            'nome' => 'Terra Boa'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 27304,
            'nome' => 'Terra Rica'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 27403,
            'nome' => 'Terra Roxa'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 27502,
            'nome' => 'Tibagi'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 27601,
            'nome' => 'Tijucas do Sul'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 27700,
            'nome' => 'Toledo'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 27809,
            'nome' => 'Tomazina'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 27858,
            'nome' => 'Três Barras do Paraná'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 27882,
            'nome' => 'Tunas do Paraná'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 27908,
            'nome' => 'Tuneiras do Oeste'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 27957,
            'nome' => 'Tupãssi'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 27965,
            'nome' => 'Turvo'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 28005,
            'nome' => 'Ubiratã'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 28104,
            'nome' => 'Umuarama'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 28203,
            'nome' => 'União da Vitória'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 28302,
            'nome' => 'Uniflor'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 28401,
            'nome' => 'Uraí'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 28534,
            'nome' => 'Ventania'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 28559,
            'nome' => 'Vera Cruz do Oeste'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 28609,
            'nome' => 'Verê'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 28658,
            'nome' => 'Virmond'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 28708,
            'nome' => 'Vitorino'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 28500,
            'nome' => 'Wenceslau Braz'
        ],
        [
            'codigo_uf' => 41,
            'codigo_municipio' => 28807,
            'nome' => 'Xambrê'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 51,
            'nome' => 'Abdon Batista'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 101,
            'nome' => 'Abelardo Luz'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 200,
            'nome' => 'Agrolândia'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 309,
            'nome' => 'Agronômica'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 408,
            'nome' => 'Água Doce'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 507,
            'nome' => 'Águas de Chapecó'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 556,
            'nome' => 'Águas Frias'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 606,
            'nome' => 'Águas Mornas'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 705,
            'nome' => 'Alfredo Wagner'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 754,
            'nome' => 'Alto Bela Vista'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 804,
            'nome' => 'Anchieta'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 903,
            'nome' => 'Angelina'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 1000,
            'nome' => 'Anita Garibaldi'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 1109,
            'nome' => 'Anitápolis'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 1208,
            'nome' => 'Antônio Carlos'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 1257,
            'nome' => 'Apiúna'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 1273,
            'nome' => 'Arabutã'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 1307,
            'nome' => 'Araquari'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 1406,
            'nome' => 'Araranguá'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 1505,
            'nome' => 'Armazém'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 1604,
            'nome' => 'Arroio Trinta'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 1653,
            'nome' => 'Arvoredo'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 1703,
            'nome' => 'Ascurra'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 1802,
            'nome' => 'Atalanta'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 1901,
            'nome' => 'Aurora'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 1950,
            'nome' => 'Balneário Arroio do Silva'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 2057,
            'nome' => 'Balneário Barra do Sul'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 2008,
            'nome' => 'Balneário Camboriú'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 2073,
            'nome' => 'Balneário Gaivota'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 12809,
            'nome' => 'Balneário Piçarras'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 20000,
            'nome' => 'Balneário Rincão'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 2081,
            'nome' => 'Bandeirante'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 2099,
            'nome' => 'Barra Bonita'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 2107,
            'nome' => 'Barra Velha'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 2131,
            'nome' => 'Bela Vista do Toldo'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 2156,
            'nome' => 'Belmonte'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 2206,
            'nome' => 'Benedito Novo'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 2305,
            'nome' => 'Biguaçu'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 2404,
            'nome' => 'Blumenau'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 2438,
            'nome' => 'Bocaina do Sul'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 2503,
            'nome' => 'Bom Jardim da Serra'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 2537,
            'nome' => 'Bom Jesus'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 2578,
            'nome' => 'Bom Jesus do Oeste'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 2602,
            'nome' => 'Bom Retiro'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 2453,
            'nome' => 'Bombinhas'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 2701,
            'nome' => 'Botuverá'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 2800,
            'nome' => 'Braço do Norte'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 2859,
            'nome' => 'Braço do Trombudo'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 2875,
            'nome' => 'Brunópolis'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 2909,
            'nome' => 'Brusque'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 3006,
            'nome' => 'Caçador'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 3105,
            'nome' => 'Caibi'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 3154,
            'nome' => 'Calmon'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 3204,
            'nome' => 'Camboriú'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 3303,
            'nome' => 'Campo Alegre'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 3402,
            'nome' => 'Campo Belo do Sul'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 3501,
            'nome' => 'Campo Erê'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 3600,
            'nome' => 'Campos Novos'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 3709,
            'nome' => 'Canelinha'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 3808,
            'nome' => 'Canoinhas'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 3253,
            'nome' => 'Capão Alto'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 3907,
            'nome' => 'Capinzal'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 3956,
            'nome' => 'Capivari de Baixo'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 4004,
            'nome' => 'Catanduvas'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 4103,
            'nome' => 'Caxambu do Sul'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 4152,
            'nome' => 'Celso Ramos'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 4178,
            'nome' => 'Cerro Negro'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 4194,
            'nome' => 'Chapadão do Lageado'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 4202,
            'nome' => 'Chapecó'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 4251,
            'nome' => 'Cocal do Sul'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 4301,
            'nome' => 'Concórdia'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 4350,
            'nome' => 'Cordilheira Alta'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 4400,
            'nome' => 'Coronel Freitas'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 4459,
            'nome' => 'Coronel Martins'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 4558,
            'nome' => 'Correia Pinto'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 4509,
            'nome' => 'Corupá'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 4608,
            'nome' => 'Criciúma'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 4707,
            'nome' => 'Cunha Porã'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 4756,
            'nome' => 'Cunhataí'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 4806,
            'nome' => 'Curitibanos'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 4905,
            'nome' => 'Descanso'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 5001,
            'nome' => 'Dionísio Cerqueira'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 5100,
            'nome' => 'Dona Emma'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 5159,
            'nome' => 'Doutor Pedrinho'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 5175,
            'nome' => 'Entre Rios'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 5191,
            'nome' => 'Ermo'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 5209,
            'nome' => 'Erval Velho'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 5308,
            'nome' => 'Faxinal dos Guedes'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 5357,
            'nome' => 'Flor do Sertão'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 5407,
            'nome' => 'Florianópolis'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 5431,
            'nome' => 'Formosa do Sul'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 5456,
            'nome' => 'Forquilhinha'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 5506,
            'nome' => 'Fraiburgo'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 5555,
            'nome' => 'Frei Rogério'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 5605,
            'nome' => 'Galvão'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 5704,
            'nome' => 'Garopaba'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 5803,
            'nome' => 'Garuva'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 5902,
            'nome' => 'Gaspar'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 6009,
            'nome' => 'Governador Celso Ramos'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 6108,
            'nome' => 'Grão-Pará'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 6207,
            'nome' => 'Gravatal'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 6306,
            'nome' => 'Guabiruba'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 6405,
            'nome' => 'Guaraciaba'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 6504,
            'nome' => 'Guaramirim'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 6603,
            'nome' => 'Guarujá do Sul'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 6652,
            'nome' => 'Guatambú'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 6702,
            'nome' => 'Herval d\'Oeste'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 6751,
            'nome' => 'Ibiam'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 6801,
            'nome' => 'Ibicaré'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 6900,
            'nome' => 'Ibirama'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 7007,
            'nome' => 'Içara'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 7106,
            'nome' => 'Ilhota'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 7205,
            'nome' => 'Imaruí'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 7304,
            'nome' => 'Imbituba'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 7403,
            'nome' => 'Imbuia'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 7502,
            'nome' => 'Indaial'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 7577,
            'nome' => 'Iomerê'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 7601,
            'nome' => 'Ipira'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 7650,
            'nome' => 'Iporã do Oeste'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 7684,
            'nome' => 'Ipuaçu'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 7700,
            'nome' => 'Ipumirim'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 7759,
            'nome' => 'Iraceminha'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 7809,
            'nome' => 'Irani'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 7858,
            'nome' => 'Irati'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 7908,
            'nome' => 'Irineópolis'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 8005,
            'nome' => 'Itá'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 8104,
            'nome' => 'Itaiópolis'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 8203,
            'nome' => 'Itajaí'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 8302,
            'nome' => 'Itapema'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 8401,
            'nome' => 'Itapiranga'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 8450,
            'nome' => 'Itapoá'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 8500,
            'nome' => 'Ituporanga'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 8609,
            'nome' => 'Jaborá'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 8708,
            'nome' => 'Jacinto Machado'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 8807,
            'nome' => 'Jaguaruna'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 8906,
            'nome' => 'Jaraguá do Sul'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 8955,
            'nome' => 'Jardinópolis'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 9003,
            'nome' => 'Joaçaba'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 9102,
            'nome' => 'Joinville'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 9151,
            'nome' => 'José Boiteux'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 9177,
            'nome' => 'Jupiá'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 9201,
            'nome' => 'Lacerdópolis'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 9300,
            'nome' => 'Lages'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 9409,
            'nome' => 'Laguna'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 9458,
            'nome' => 'Lajeado Grande'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 9508,
            'nome' => 'Laurentino'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 9607,
            'nome' => 'Lauro Müller'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 9706,
            'nome' => 'Lebon Régis'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 9805,
            'nome' => 'Leoberto Leal'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 9854,
            'nome' => 'Lindóia do Sul'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 9904,
            'nome' => 'Lontras'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 10001,
            'nome' => 'Luiz Alves'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 10035,
            'nome' => 'Luzerna'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 10050,
            'nome' => 'Macieira'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 10100,
            'nome' => 'Mafra'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 10209,
            'nome' => 'Major Gercino'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 10308,
            'nome' => 'Major Vieira'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 10407,
            'nome' => 'Maracajá'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 10506,
            'nome' => 'Maravilha'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 10555,
            'nome' => 'Marema'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 10605,
            'nome' => 'Massaranduba'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 10704,
            'nome' => 'Matos Costa'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 10803,
            'nome' => 'Meleiro'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 10852,
            'nome' => 'Mirim Doce'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 10902,
            'nome' => 'Modelo'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 11009,
            'nome' => 'Mondaí'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 11058,
            'nome' => 'Monte Carlo'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 11108,
            'nome' => 'Monte Castelo'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 11207,
            'nome' => 'Morro da Fumaça'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 11256,
            'nome' => 'Morro Grande'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 11306,
            'nome' => 'Navegantes'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 11405,
            'nome' => 'Nova Erechim'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 11454,
            'nome' => 'Nova Itaberaba'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 11504,
            'nome' => 'Nova Trento'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 11603,
            'nome' => 'Nova Veneza'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 11652,
            'nome' => 'Novo Horizonte'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 11702,
            'nome' => 'Orleans'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 11751,
            'nome' => 'Otacílio Costa'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 11801,
            'nome' => 'Ouro'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 11850,
            'nome' => 'Ouro Verde'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 11876,
            'nome' => 'Paial'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 11892,
            'nome' => 'Painel'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 11900,
            'nome' => 'Palhoça'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 12007,
            'nome' => 'Palma Sola'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 12056,
            'nome' => 'Palmeira'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 12106,
            'nome' => 'Palmitos'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 12205,
            'nome' => 'Papanduva'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 12239,
            'nome' => 'Paraíso'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 12254,
            'nome' => 'Passo de Torres'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 12270,
            'nome' => 'Passos Maia'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 12304,
            'nome' => 'Paulo Lopes'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 12403,
            'nome' => 'Pedras Grandes'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 12502,
            'nome' => 'Penha'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 12601,
            'nome' => 'Peritiba'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 12650,
            'nome' => 'Pescaria Brava'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 12700,
            'nome' => 'Petrolândia'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 12908,
            'nome' => 'Pinhalzinho'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 13005,
            'nome' => 'Pinheiro Preto'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 13104,
            'nome' => 'Piratuba'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 13153,
            'nome' => 'Planalto Alegre'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 13203,
            'nome' => 'Pomerode'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 13302,
            'nome' => 'Ponte Alta'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 13351,
            'nome' => 'Ponte Alta do Norte'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 13401,
            'nome' => 'Ponte Serrada'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 13500,
            'nome' => 'Porto Belo'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 13609,
            'nome' => 'Porto União'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 13708,
            'nome' => 'Pouso Redondo'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 13807,
            'nome' => 'Praia Grande'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 13906,
            'nome' => 'Presidente Castello Branco'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 14003,
            'nome' => 'Presidente Getúlio'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 14102,
            'nome' => 'Presidente Nereu'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 14151,
            'nome' => 'Princesa'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 14201,
            'nome' => 'Quilombo'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 14300,
            'nome' => 'Rancho Queimado'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 14409,
            'nome' => 'Rio das Antas'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 14508,
            'nome' => 'Rio do Campo'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 14607,
            'nome' => 'Rio do Oeste'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 14805,
            'nome' => 'Rio do Sul'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 14706,
            'nome' => 'Rio dos Cedros'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 14904,
            'nome' => 'Rio Fortuna'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 15000,
            'nome' => 'Rio Negrinho'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 15059,
            'nome' => 'Rio Rufino'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 15075,
            'nome' => 'Riqueza'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 15109,
            'nome' => 'Rodeio'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 15208,
            'nome' => 'Romelândia'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 15307,
            'nome' => 'Salete'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 15356,
            'nome' => 'Saltinho'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 15406,
            'nome' => 'Salto Veloso'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 15455,
            'nome' => 'Sangão'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 15505,
            'nome' => 'Santa Cecília'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 15554,
            'nome' => 'Santa Helena'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 15604,
            'nome' => 'Santa Rosa de Lima'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 15653,
            'nome' => 'Santa Rosa do Sul'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 15679,
            'nome' => 'Santa Terezinha'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 15687,
            'nome' => 'Santa Terezinha do Progresso'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 15695,
            'nome' => 'Santiago do Sul'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 15703,
            'nome' => 'Santo Amaro da Imperatriz'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 15802,
            'nome' => 'São Bento do Sul'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 15752,
            'nome' => 'São Bernardino'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 15901,
            'nome' => 'São Bonifácio'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 16008,
            'nome' => 'São Carlos'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 16057,
            'nome' => 'São Cristóvão do Sul'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 16107,
            'nome' => 'São Domingos'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 16206,
            'nome' => 'São Francisco do Sul'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 16305,
            'nome' => 'São João Batista'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 16354,
            'nome' => 'São João do Itaperiú'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 16255,
            'nome' => 'São João do Oeste'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 16404,
            'nome' => 'São João do Sul'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 16503,
            'nome' => 'São Joaquim'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 16602,
            'nome' => 'São José'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 16701,
            'nome' => 'São José do Cedro'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 16800,
            'nome' => 'São José do Cerrito'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 16909,
            'nome' => 'São Lourenço do Oeste'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 17006,
            'nome' => 'São Ludgero'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 17105,
            'nome' => 'São Martinho'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 17154,
            'nome' => 'São Miguel da Boa Vista'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 17204,
            'nome' => 'São Miguel do Oeste'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 17253,
            'nome' => 'São Pedro de Alcântara'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 17303,
            'nome' => 'Saudades'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 17402,
            'nome' => 'Schroeder'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 17501,
            'nome' => 'Seara'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 17550,
            'nome' => 'Serra Alta'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 17600,
            'nome' => 'Siderópolis'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 17709,
            'nome' => 'Sombrio'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 17758,
            'nome' => 'Sul Brasil'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 17808,
            'nome' => 'Taió'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 17907,
            'nome' => 'Tangará'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 17956,
            'nome' => 'Tigrinhos'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 18004,
            'nome' => 'Tijucas'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 18103,
            'nome' => 'Timbé do Sul'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 18202,
            'nome' => 'Timbó'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 18251,
            'nome' => 'Timbó Grande'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 18301,
            'nome' => 'Três Barras'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 18350,
            'nome' => 'Treviso'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 18400,
            'nome' => 'Treze de Maio'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 18509,
            'nome' => 'Treze Tílias'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 18608,
            'nome' => 'Trombudo Central'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 18707,
            'nome' => 'Tubarão'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 18756,
            'nome' => 'Tunápolis'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 18806,
            'nome' => 'Turvo'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 18855,
            'nome' => 'União do Oeste'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 18905,
            'nome' => 'Urubici'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 18954,
            'nome' => 'Urupema'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 19002,
            'nome' => 'Urussanga'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 19101,
            'nome' => 'Vargeão'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 19150,
            'nome' => 'Vargem'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 19176,
            'nome' => 'Vargem Bonita'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 19200,
            'nome' => 'Vidal Ramos'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 19309,
            'nome' => 'Videira'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 19358,
            'nome' => 'Vitor Meireles'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 19408,
            'nome' => 'Witmarsum'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 19507,
            'nome' => 'Xanxerê'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 19606,
            'nome' => 'Xavantina'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 19705,
            'nome' => 'Xaxim'
        ],
        [
            'codigo_uf' => 42,
            'codigo_municipio' => 19853,
            'nome' => 'Zortéa'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 34,
            'nome' => 'Aceguá'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 59,
            'nome' => 'Água Santa'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 109,
            'nome' => 'Agudo'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 208,
            'nome' => 'Ajuricaba'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 307,
            'nome' => 'Alecrim'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 406,
            'nome' => 'Alegrete'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 455,
            'nome' => 'Alegria'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 471,
            'nome' => 'Almirante Tamandaré do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 505,
            'nome' => 'Alpestre'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 554,
            'nome' => 'Alto Alegre'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 570,
            'nome' => 'Alto Feliz'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 604,
            'nome' => 'Alvorada'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 638,
            'nome' => 'Amaral Ferrador'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 646,
            'nome' => 'Ametista do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 661,
            'nome' => 'André da Rocha'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 703,
            'nome' => 'Anta Gorda'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 802,
            'nome' => 'Antônio Prado'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 851,
            'nome' => 'Arambaré'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 877,
            'nome' => 'Araricá'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 901,
            'nome' => 'Aratiba'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 1008,
            'nome' => 'Arroio do Meio'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 1073,
            'nome' => 'Arroio do Padre'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 1057,
            'nome' => 'Arroio do Sal'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 1206,
            'nome' => 'Arroio do Tigre'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 1107,
            'nome' => 'Arroio dos Ratos'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 1305,
            'nome' => 'Arroio Grande'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 1404,
            'nome' => 'Arvorezinha'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 1503,
            'nome' => 'Augusto Pestana'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 1552,
            'nome' => 'Áurea'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 1602,
            'nome' => 'Bagé'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 1636,
            'nome' => 'Balneário Pinhal'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 1651,
            'nome' => 'Barão'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 1701,
            'nome' => 'Barão de Cotegipe'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 1750,
            'nome' => 'Barão do Triunfo'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 1859,
            'nome' => 'Barra do Guarita'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 1875,
            'nome' => 'Barra do Quaraí'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 1909,
            'nome' => 'Barra do Ribeiro'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 1925,
            'nome' => 'Barra do Rio Azul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 1958,
            'nome' => 'Barra Funda'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 1800,
            'nome' => 'Barracão'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 2006,
            'nome' => 'Barros Cassal'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 2055,
            'nome' => 'Benjamin Constant do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 2105,
            'nome' => 'Bento Gonçalves'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 2154,
            'nome' => 'Boa Vista das Missões'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 2204,
            'nome' => 'Boa Vista do Buricá'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 2220,
            'nome' => 'Boa Vista do Cadeado'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 2238,
            'nome' => 'Boa Vista do Incra'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 2253,
            'nome' => 'Boa Vista do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 2303,
            'nome' => 'Bom Jesus'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 2352,
            'nome' => 'Bom Princípio'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 2378,
            'nome' => 'Bom Progresso'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 2402,
            'nome' => 'Bom Retiro do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 2451,
            'nome' => 'Boqueirão do Leão'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 2501,
            'nome' => 'Bossoroca'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 2584,
            'nome' => 'Bozano'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 2600,
            'nome' => 'Braga'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 2659,
            'nome' => 'Brochier'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 2709,
            'nome' => 'Butiá'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 2808,
            'nome' => 'Caçapava do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 2907,
            'nome' => 'Cacequi'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 3004,
            'nome' => 'Cachoeira do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 3103,
            'nome' => 'Cachoeirinha'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 3202,
            'nome' => 'Cacique Doble'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 3301,
            'nome' => 'Caibaté'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 3400,
            'nome' => 'Caiçara'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 3509,
            'nome' => 'Camaquã'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 3558,
            'nome' => 'Camargo'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 3608,
            'nome' => 'Cambará do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 3673,
            'nome' => 'Campestre da Serra'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 3707,
            'nome' => 'Campina das Missões'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 3806,
            'nome' => 'Campinas do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 3905,
            'nome' => 'Campo Bom'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 4002,
            'nome' => 'Campo Novo'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 4101,
            'nome' => 'Campos Borges'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 4200,
            'nome' => 'Candelária'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 4309,
            'nome' => 'Cândido Godói'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 4358,
            'nome' => 'Candiota'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 4408,
            'nome' => 'Canela'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 4507,
            'nome' => 'Canguçu'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 4606,
            'nome' => 'Canoas'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 4614,
            'nome' => 'Canudos do Vale'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 4622,
            'nome' => 'Capão Bonito do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 4630,
            'nome' => 'Capão da Canoa'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 4655,
            'nome' => 'Capão do Cipó'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 4663,
            'nome' => 'Capão do Leão'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 4689,
            'nome' => 'Capela de Santana'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 4697,
            'nome' => 'Capitão'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 4671,
            'nome' => 'Capivari do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 4713,
            'nome' => 'Caraá'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 4705,
            'nome' => 'Carazinho'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 4804,
            'nome' => 'Carlos Barbosa'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 4853,
            'nome' => 'Carlos Gomes'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 4903,
            'nome' => 'Casca'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 4952,
            'nome' => 'Caseiros'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 5009,
            'nome' => 'Catuípe'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 5108,
            'nome' => 'Caxias do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 5116,
            'nome' => 'Centenário'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 5124,
            'nome' => 'Cerrito'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 5132,
            'nome' => 'Cerro Branco'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 5157,
            'nome' => 'Cerro Grande'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 5173,
            'nome' => 'Cerro Grande do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 5207,
            'nome' => 'Cerro Largo'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 5306,
            'nome' => 'Chapada'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 5355,
            'nome' => 'Charqueadas'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 5371,
            'nome' => 'Charrua'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 5405,
            'nome' => 'Chiapetta'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 5439,
            'nome' => 'Chuí'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 5447,
            'nome' => 'Chuvisca'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 5454,
            'nome' => 'Cidreira'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 5504,
            'nome' => 'Ciríaco'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 5587,
            'nome' => 'Colinas'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 5603,
            'nome' => 'Colorado'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 5702,
            'nome' => 'Condor'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 5801,
            'nome' => 'Constantina'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 5835,
            'nome' => 'Coqueiro Baixo'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 5850,
            'nome' => 'Coqueiros do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 5871,
            'nome' => 'Coronel Barros'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 5900,
            'nome' => 'Coronel Bicaco'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 5934,
            'nome' => 'Coronel Pilar'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 5959,
            'nome' => 'Cotiporã'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 5975,
            'nome' => 'Coxilha'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 6007,
            'nome' => 'Crissiumal'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 6056,
            'nome' => 'Cristal'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 6072,
            'nome' => 'Cristal do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 6106,
            'nome' => 'Cruz Alta'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 6130,
            'nome' => 'Cruzaltense'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 6205,
            'nome' => 'Cruzeiro do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 6304,
            'nome' => 'David Canabarro'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 6320,
            'nome' => 'Derrubadas'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 6353,
            'nome' => 'Dezesseis de Novembro'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 6379,
            'nome' => 'Dilermando de Aguiar'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 6403,
            'nome' => 'Dois Irmãos'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 6429,
            'nome' => 'Dois Irmãos das Missões'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 6452,
            'nome' => 'Dois Lajeados'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 6502,
            'nome' => 'Dom Feliciano'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 6601,
            'nome' => 'Dom Pedrito'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 6551,
            'nome' => 'Dom Pedro de Alcântara'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 6700,
            'nome' => 'Dona Francisca'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 6734,
            'nome' => 'Doutor Maurício Cardoso'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 6759,
            'nome' => 'Doutor Ricardo'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 6767,
            'nome' => 'Eldorado do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 6809,
            'nome' => 'Encantado'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 6908,
            'nome' => 'Encruzilhada do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 6924,
            'nome' => 'Engenho Velho'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 6957,
            'nome' => 'Entre Rios do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 6932,
            'nome' => 'Entre-Ijuís'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 6973,
            'nome' => 'Erebango'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 7005,
            'nome' => 'Erechim'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 7054,
            'nome' => 'Ernestina'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 7203,
            'nome' => 'Erval Grande'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 7302,
            'nome' => 'Erval Seco'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 7401,
            'nome' => 'Esmeralda'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 7450,
            'nome' => 'Esperança do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 7500,
            'nome' => 'Espumoso'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 7559,
            'nome' => 'Estação'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 7609,
            'nome' => 'Estância Velha'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 7708,
            'nome' => 'Esteio'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 7807,
            'nome' => 'Estrela'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 7815,
            'nome' => 'Estrela Velha'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 7831,
            'nome' => 'Eugênio de Castro'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 7864,
            'nome' => 'Fagundes Varela'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 7906,
            'nome' => 'Farroupilha'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 8003,
            'nome' => 'Faxinal do Soturno'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 8052,
            'nome' => 'Faxinalzinho'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 8078,
            'nome' => 'Fazenda Vilanova'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 8102,
            'nome' => 'Feliz'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 8201,
            'nome' => 'Flores da Cunha'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 8250,
            'nome' => 'Floriano Peixoto'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 8300,
            'nome' => 'Fontoura Xavier'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 8409,
            'nome' => 'Formigueiro'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 8433,
            'nome' => 'Forquetinha'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 8458,
            'nome' => 'Fortaleza dos Valos'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 8508,
            'nome' => 'Frederico Westphalen'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 8607,
            'nome' => 'Garibaldi'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 8656,
            'nome' => 'Garruchos'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 8706,
            'nome' => 'Gaurama'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 8805,
            'nome' => 'General Câmara'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 8854,
            'nome' => 'Gentil'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 8904,
            'nome' => 'Getúlio Vargas'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 9001,
            'nome' => 'Giruá'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 9050,
            'nome' => 'Glorinha'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 9100,
            'nome' => 'Gramado'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 9126,
            'nome' => 'Gramado dos Loureiros'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 9159,
            'nome' => 'Gramado Xavier'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 9209,
            'nome' => 'Gravataí'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 9258,
            'nome' => 'Guabiju'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 9308,
            'nome' => 'Guaíba'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 9407,
            'nome' => 'Guaporé'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 9506,
            'nome' => 'Guarani das Missões'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 9555,
            'nome' => 'Harmonia'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 7104,
            'nome' => 'Herval'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 9571,
            'nome' => 'Herveiras'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 9605,
            'nome' => 'Horizontina'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 9654,
            'nome' => 'Hulha Negra'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 9704,
            'nome' => 'Humaitá'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 9753,
            'nome' => 'Ibarama'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 9803,
            'nome' => 'Ibiaçá'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 9902,
            'nome' => 'Ibiraiaras'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 9951,
            'nome' => 'Ibirapuitã'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 10009,
            'nome' => 'Ibirubá'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 10108,
            'nome' => 'Igrejinha'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 10207,
            'nome' => 'Ijuí'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 10306,
            'nome' => 'Ilópolis'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 10330,
            'nome' => 'Imbé'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 10363,
            'nome' => 'Imigrante'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 10405,
            'nome' => 'Independência'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 10413,
            'nome' => 'Inhacorá'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 10439,
            'nome' => 'Ipê'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 10462,
            'nome' => 'Ipiranga do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 10504,
            'nome' => 'Iraí'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 10538,
            'nome' => 'Itaara'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 10553,
            'nome' => 'Itacurubi'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 10579,
            'nome' => 'Itapuca'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 10603,
            'nome' => 'Itaqui'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 10652,
            'nome' => 'Itati'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 10702,
            'nome' => 'Itatiba do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 10751,
            'nome' => 'Ivorá'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 10801,
            'nome' => 'Ivoti'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 10850,
            'nome' => 'Jaboticaba'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 10876,
            'nome' => 'Jacuizinho'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 10900,
            'nome' => 'Jacutinga'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 11007,
            'nome' => 'Jaguarão'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 11106,
            'nome' => 'Jaguari'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 11122,
            'nome' => 'Jaquirana'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 11130,
            'nome' => 'Jari'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 11155,
            'nome' => 'Jóia'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 11205,
            'nome' => 'Júlio de Castilhos'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 11239,
            'nome' => 'Lagoa Bonita do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 11270,
            'nome' => 'Lagoa dos Três Cantos'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 11304,
            'nome' => 'Lagoa Vermelha'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 11254,
            'nome' => 'Lagoão'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 11403,
            'nome' => 'Lajeado'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 11429,
            'nome' => 'Lajeado do Bugre'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 11502,
            'nome' => 'Lavras do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 11601,
            'nome' => 'Liberato Salzano'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 11627,
            'nome' => 'Lindolfo Collor'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 11643,
            'nome' => 'Linha Nova'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 11718,
            'nome' => 'Maçambará'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 11700,
            'nome' => 'Machadinho'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 11734,
            'nome' => 'Mampituba'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 11759,
            'nome' => 'Manoel Viana'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 11775,
            'nome' => 'Maquiné'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 11791,
            'nome' => 'Maratá'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 11809,
            'nome' => 'Marau'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 11908,
            'nome' => 'Marcelino Ramos'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 11981,
            'nome' => 'Mariana Pimentel'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 12005,
            'nome' => 'Mariano Moro'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 12054,
            'nome' => 'Marques de Souza'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 12104,
            'nome' => 'Mata'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 12138,
            'nome' => 'Mato Castelhano'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 12153,
            'nome' => 'Mato Leitão'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 12179,
            'nome' => 'Mato Queimado'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 12203,
            'nome' => 'Maximiliano de Almeida'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 12252,
            'nome' => 'Minas do Leão'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 12302,
            'nome' => 'Miraguaí'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 12351,
            'nome' => 'Montauri'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 12377,
            'nome' => 'Monte Alegre dos Campos'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 12385,
            'nome' => 'Monte Belo do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 12401,
            'nome' => 'Montenegro'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 12427,
            'nome' => 'Mormaço'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 12443,
            'nome' => 'Morrinhos do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 12450,
            'nome' => 'Morro Redondo'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 12476,
            'nome' => 'Morro Reuter'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 12500,
            'nome' => 'Mostardas'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 12609,
            'nome' => 'Muçum'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 12617,
            'nome' => 'Muitos Capões'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 12625,
            'nome' => 'Muliterno'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 12658,
            'nome' => 'Não-Me-Toque'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 12674,
            'nome' => 'Nicolau Vergueiro'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 12708,
            'nome' => 'Nonoai'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 12757,
            'nome' => 'Nova Alvorada'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 12807,
            'nome' => 'Nova Araçá'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 12906,
            'nome' => 'Nova Bassano'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 12955,
            'nome' => 'Nova Boa Vista'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 13003,
            'nome' => 'Nova Bréscia'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 13011,
            'nome' => 'Nova Candelária'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 13037,
            'nome' => 'Nova Esperança do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 13060,
            'nome' => 'Nova Hartz'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 13086,
            'nome' => 'Nova Pádua'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 13102,
            'nome' => 'Nova Palma'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 13201,
            'nome' => 'Nova Petrópolis'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 13300,
            'nome' => 'Nova Prata'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 13334,
            'nome' => 'Nova Ramada'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 13359,
            'nome' => 'Nova Roma do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 13375,
            'nome' => 'Nova Santa Rita'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 13490,
            'nome' => 'Novo Barreiro'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 13391,
            'nome' => 'Novo Cabrais'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 13409,
            'nome' => 'Novo Hamburgo'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 13425,
            'nome' => 'Novo Machado'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 13441,
            'nome' => 'Novo Tiradentes'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 13466,
            'nome' => 'Novo Xingu'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 13508,
            'nome' => 'Osório'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 13607,
            'nome' => 'Paim Filho'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 13656,
            'nome' => 'Palmares do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 13706,
            'nome' => 'Palmeira das Missões'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 13805,
            'nome' => 'Palmitinho'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 13904,
            'nome' => 'Panambi'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 13953,
            'nome' => 'Pantano Grande'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 14001,
            'nome' => 'Paraí'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 14027,
            'nome' => 'Paraíso do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 14035,
            'nome' => 'Pareci Novo'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 14050,
            'nome' => 'Parobé'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 14068,
            'nome' => 'Passa Sete'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 14076,
            'nome' => 'Passo do Sobrado'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 14100,
            'nome' => 'Passo Fundo'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 14134,
            'nome' => 'Paulo Bento'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 14159,
            'nome' => 'Paverama'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 14175,
            'nome' => 'Pedras Altas'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 14209,
            'nome' => 'Pedro Osório'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 14308,
            'nome' => 'Pejuçara'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 14407,
            'nome' => 'Pelotas'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 14423,
            'nome' => 'Picada Café'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 14456,
            'nome' => 'Pinhal'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 14464,
            'nome' => 'Pinhal da Serra'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 14472,
            'nome' => 'Pinhal Grande'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 14498,
            'nome' => 'Pinheirinho do Vale'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 14506,
            'nome' => 'Pinheiro Machado'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 14548,
            'nome' => 'Pinto Bandeira'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 14555,
            'nome' => 'Pirapó'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 14605,
            'nome' => 'Piratini'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 14704,
            'nome' => 'Planalto'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 14753,
            'nome' => 'Poço das Antas'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 14779,
            'nome' => 'Pontão'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 14787,
            'nome' => 'Ponte Preta'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 14803,
            'nome' => 'Portão'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 14902,
            'nome' => 'Porto Alegre'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 15008,
            'nome' => 'Porto Lucena'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 15057,
            'nome' => 'Porto Mauá'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 15073,
            'nome' => 'Porto Vera Cruz'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 15107,
            'nome' => 'Porto Xavier'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 15131,
            'nome' => 'Pouso Novo'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 15149,
            'nome' => 'Presidente Lucena'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 15156,
            'nome' => 'Progresso'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 15172,
            'nome' => 'Protásio Alves'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 15206,
            'nome' => 'Putinga'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 15305,
            'nome' => 'Quaraí'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 15313,
            'nome' => 'Quatro Irmãos'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 15321,
            'nome' => 'Quevedos'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 15354,
            'nome' => 'Quinze de Novembro'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 15404,
            'nome' => 'Redentora'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 15453,
            'nome' => 'Relvado'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 15503,
            'nome' => 'Restinga Sêca'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 15552,
            'nome' => 'Rio dos Índios'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 15602,
            'nome' => 'Rio Grande'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 15701,
            'nome' => 'Rio Pardo'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 15750,
            'nome' => 'Riozinho'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 15800,
            'nome' => 'Roca Sales'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 15909,
            'nome' => 'Rodeio Bonito'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 15958,
            'nome' => 'Rolador'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 16006,
            'nome' => 'Rolante'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 16105,
            'nome' => 'Ronda Alta'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 16204,
            'nome' => 'Rondinha'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 16303,
            'nome' => 'Roque Gonzales'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 16402,
            'nome' => 'Rosário do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 16428,
            'nome' => 'Sagrada Família'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 16436,
            'nome' => 'Saldanha Marinho'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 16451,
            'nome' => 'Salto do Jacuí'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 16477,
            'nome' => 'Salvador das Missões'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 16501,
            'nome' => 'Salvador do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 16600,
            'nome' => 'Sananduva'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 16709,
            'nome' => 'Santa Bárbara do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 16733,
            'nome' => 'Santa Cecília do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 16758,
            'nome' => 'Santa Clara do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 16808,
            'nome' => 'Santa Cruz do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 16972,
            'nome' => 'Santa Margarida do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 16907,
            'nome' => 'Santa Maria'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 16956,
            'nome' => 'Santa Maria do Herval'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 17202,
            'nome' => 'Santa Rosa'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 17251,
            'nome' => 'Santa Tereza'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 17301,
            'nome' => 'Santa Vitória do Palmar'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 17004,
            'nome' => 'Santana da Boa Vista'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 17103,
            'nome' => 'Sant\'Ana do Livramento'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 17400,
            'nome' => 'Santiago'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 17509,
            'nome' => 'Santo Ângelo'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 17608,
            'nome' => 'Santo Antônio da Patrulha'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 17707,
            'nome' => 'Santo Antônio das Missões'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 17558,
            'nome' => 'Santo Antônio do Palma'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 17756,
            'nome' => 'Santo Antônio do Planalto'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 17806,
            'nome' => 'Santo Augusto'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 17905,
            'nome' => 'Santo Cristo'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 17954,
            'nome' => 'Santo Expedito do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 18002,
            'nome' => 'São Borja'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 18051,
            'nome' => 'São Domingos do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 18101,
            'nome' => 'São Francisco de Assis'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 18200,
            'nome' => 'São Francisco de Paula'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 18309,
            'nome' => 'São Gabriel'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 18408,
            'nome' => 'São Jerônimo'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 18424,
            'nome' => 'São João da Urtiga'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 18432,
            'nome' => 'São João do Polêsine'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 18440,
            'nome' => 'São Jorge'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 18457,
            'nome' => 'São José das Missões'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 18465,
            'nome' => 'São José do Herval'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 18481,
            'nome' => 'São José do Hortêncio'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 18499,
            'nome' => 'São José do Inhacorá'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 18507,
            'nome' => 'São José do Norte'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 18606,
            'nome' => 'São José do Ouro'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 18614,
            'nome' => 'São José do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 18622,
            'nome' => 'São José dos Ausentes'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 18705,
            'nome' => 'São Leopoldo'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 18804,
            'nome' => 'São Lourenço do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 18903,
            'nome' => 'São Luiz Gonzaga'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 19000,
            'nome' => 'São Marcos'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 19109,
            'nome' => 'São Martinho'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 19125,
            'nome' => 'São Martinho da Serra'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 19158,
            'nome' => 'São Miguel das Missões'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 19208,
            'nome' => 'São Nicolau'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 19307,
            'nome' => 'São Paulo das Missões'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 19356,
            'nome' => 'São Pedro da Serra'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 19364,
            'nome' => 'São Pedro das Missões'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 19372,
            'nome' => 'São Pedro do Butiá'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 19406,
            'nome' => 'São Pedro do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 19505,
            'nome' => 'São Sebastião do Caí'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 19604,
            'nome' => 'São Sepé'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 19703,
            'nome' => 'São Valentim'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 19711,
            'nome' => 'São Valentim do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 19737,
            'nome' => 'São Valério do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 19752,
            'nome' => 'São Vendelino'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 19802,
            'nome' => 'São Vicente do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 19901,
            'nome' => 'Sapiranga'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 20008,
            'nome' => 'Sapucaia do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 20107,
            'nome' => 'Sarandi'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 20206,
            'nome' => 'Seberi'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 20230,
            'nome' => 'Sede Nova'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 20263,
            'nome' => 'Segredo'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 20305,
            'nome' => 'Selbach'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 20321,
            'nome' => 'Senador Salgado Filho'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 20354,
            'nome' => 'Sentinela do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 20404,
            'nome' => 'Serafina Corrêa'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 20453,
            'nome' => 'Sério'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 20503,
            'nome' => 'Sertão'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 20552,
            'nome' => 'Sertão Santana'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 20578,
            'nome' => 'Sete de Setembro'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 20602,
            'nome' => 'Severiano de Almeida'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 20651,
            'nome' => 'Silveira Martins'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 20677,
            'nome' => 'Sinimbu'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 20701,
            'nome' => 'Sobradinho'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 20800,
            'nome' => 'Soledade'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 20859,
            'nome' => 'Tabaí'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 20909,
            'nome' => 'Tapejara'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 21006,
            'nome' => 'Tapera'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 21105,
            'nome' => 'Tapes'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 21204,
            'nome' => 'Taquara'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 21303,
            'nome' => 'Taquari'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 21329,
            'nome' => 'Taquaruçu do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 21352,
            'nome' => 'Tavares'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 21402,
            'nome' => 'Tenente Portela'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 21436,
            'nome' => 'Terra de Areia'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 21451,
            'nome' => 'Teutônia'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 21469,
            'nome' => 'Tio Hugo'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 21477,
            'nome' => 'Tiradentes do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 21493,
            'nome' => 'Toropi'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 21501,
            'nome' => 'Torres'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 21600,
            'nome' => 'Tramandaí'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 21626,
            'nome' => 'Travesseiro'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 21634,
            'nome' => 'Três Arroios'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 21667,
            'nome' => 'Três Cachoeiras'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 21709,
            'nome' => 'Três Coroas'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 21808,
            'nome' => 'Três de Maio'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 21832,
            'nome' => 'Três Forquilhas'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 21857,
            'nome' => 'Três Palmeiras'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 21907,
            'nome' => 'Três Passos'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 21956,
            'nome' => 'Trindade do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 22004,
            'nome' => 'Triunfo'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 22103,
            'nome' => 'Tucunduva'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 22152,
            'nome' => 'Tunas'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 22186,
            'nome' => 'Tupanci do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 22202,
            'nome' => 'Tupanciretã'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 22251,
            'nome' => 'Tupandi'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 22301,
            'nome' => 'Tuparendi'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 22327,
            'nome' => 'Turuçu'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 22343,
            'nome' => 'Ubiretama'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 22350,
            'nome' => 'União da Serra'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 22376,
            'nome' => 'Unistalda'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 22400,
            'nome' => 'Uruguaiana'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 22509,
            'nome' => 'Vacaria'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 22533,
            'nome' => 'Vale do Sol'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 22541,
            'nome' => 'Vale Real'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 22525,
            'nome' => 'Vale Verde'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 22558,
            'nome' => 'Vanini'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 22608,
            'nome' => 'Venâncio Aires'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 22707,
            'nome' => 'Vera Cruz'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 22806,
            'nome' => 'Veranópolis'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 22855,
            'nome' => 'Vespasiano Corrêa'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 22905,
            'nome' => 'Viadutos'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 23002,
            'nome' => 'Viamão'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 23101,
            'nome' => 'Vicente Dutra'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 23200,
            'nome' => 'Victor Graeff'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 23309,
            'nome' => 'Vila Flores'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 23358,
            'nome' => 'Vila Lângaro'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 23408,
            'nome' => 'Vila Maria'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 23457,
            'nome' => 'Vila Nova do Sul'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 23507,
            'nome' => 'Vista Alegre'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 23606,
            'nome' => 'Vista Alegre do Prata'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 23705,
            'nome' => 'Vista Gaúcha'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 23754,
            'nome' => 'Vitória das Missões'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 23770,
            'nome' => 'Westfália'
        ],
        [
            'codigo_uf' => 43,
            'codigo_municipio' => 23804,
            'nome' => 'Xangri-lá'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 203,
            'nome' => 'Água Clara'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 252,
            'nome' => 'Alcinópolis'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 609,
            'nome' => 'Amambai'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 708,
            'nome' => 'Anastácio'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 807,
            'nome' => 'Anaurilândia'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 856,
            'nome' => 'Angélica'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 906,
            'nome' => 'Antônio João'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 1003,
            'nome' => 'Aparecida do Taboado'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 1102,
            'nome' => 'Aquidauana'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 1243,
            'nome' => 'Aral Moreira'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 1508,
            'nome' => 'Bandeirantes'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 1904,
            'nome' => 'Bataguassu'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 2001,
            'nome' => 'Batayporã'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 2100,
            'nome' => 'Bela Vista'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 2159,
            'nome' => 'Bodoquena'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 2209,
            'nome' => 'Bonito'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 2308,
            'nome' => 'Brasilândia'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 2407,
            'nome' => 'Caarapó'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 2605,
            'nome' => 'Camapuã'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 2704,
            'nome' => 'Campo Grande'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 2803,
            'nome' => 'Caracol'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 2902,
            'nome' => 'Cassilândia'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 2951,
            'nome' => 'Chapadão do Sul'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 3108,
            'nome' => 'Corguinho'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 3157,
            'nome' => 'Coronel Sapucaia'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 3207,
            'nome' => 'Corumbá'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 3256,
            'nome' => 'Costa Rica'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 3306,
            'nome' => 'Coxim'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 3454,
            'nome' => 'Deodápolis'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 3488,
            'nome' => 'Dois Irmãos do Buriti'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 3504,
            'nome' => 'Douradina'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 3702,
            'nome' => 'Dourados'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 3751,
            'nome' => 'Eldorado'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 3801,
            'nome' => 'Fátima do Sul'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 3900,
            'nome' => 'Figueirão'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 4007,
            'nome' => 'Glória de Dourados'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 4106,
            'nome' => 'Guia Lopes da Laguna'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 4304,
            'nome' => 'Iguatemi'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 4403,
            'nome' => 'Inocência'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 4502,
            'nome' => 'Itaporã'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 4601,
            'nome' => 'Itaquiraí'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 4700,
            'nome' => 'Ivinhema'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 4809,
            'nome' => 'Japorã'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 4908,
            'nome' => 'Jaraguari'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 5004,
            'nome' => 'Jardim'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 5103,
            'nome' => 'Jateí'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 5152,
            'nome' => 'Juti'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 5202,
            'nome' => 'Ladário'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 5251,
            'nome' => 'Laguna Carapã'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 5400,
            'nome' => 'Maracaju'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 5608,
            'nome' => 'Miranda'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 5681,
            'nome' => 'Mundo Novo'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 5707,
            'nome' => 'Naviraí'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 5806,
            'nome' => 'Nioaque'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 6002,
            'nome' => 'Nova Alvorada do Sul'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 6200,
            'nome' => 'Nova Andradina'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 6259,
            'nome' => 'Novo Horizonte do Sul'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 6275,
            'nome' => 'Paraíso das Águas'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 6309,
            'nome' => 'Paranaíba'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 6358,
            'nome' => 'Paranhos'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 6408,
            'nome' => 'Pedro Gomes'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 6606,
            'nome' => 'Ponta Porã'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 6903,
            'nome' => 'Porto Murtinho'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 7109,
            'nome' => 'Ribas do Rio Pardo'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 7208,
            'nome' => 'Rio Brilhante'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 7307,
            'nome' => 'Rio Negro'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 7406,
            'nome' => 'Rio Verde de Mato Grosso'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 7505,
            'nome' => 'Rochedo'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 7554,
            'nome' => 'Santa Rita do Pardo'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 7695,
            'nome' => 'São Gabriel do Oeste'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 7802,
            'nome' => 'Selvíria'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 7703,
            'nome' => 'Sete Quedas'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 7901,
            'nome' => 'Sidrolândia'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 7935,
            'nome' => 'Sonora'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 7950,
            'nome' => 'Tacuru'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 7976,
            'nome' => 'Taquarussu'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 8008,
            'nome' => 'Terenos'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 8305,
            'nome' => 'Três Lagoas'
        ],
        [
            'codigo_uf' => 50,
            'codigo_municipio' => 8404,
            'nome' => 'Vicentina'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 102,
            'nome' => 'Acorizal'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 201,
            'nome' => 'Água Boa'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 250,
            'nome' => 'Alta Floresta'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 300,
            'nome' => 'Alto Araguaia'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 359,
            'nome' => 'Alto Boa Vista'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 409,
            'nome' => 'Alto Garças'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 508,
            'nome' => 'Alto Paraguai'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 607,
            'nome' => 'Alto Taquari'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 805,
            'nome' => 'Apiacás'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 1001,
            'nome' => 'Araguaiana'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 1209,
            'nome' => 'Araguainha'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 1258,
            'nome' => 'Araputanga'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 1308,
            'nome' => 'Arenápolis'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 1407,
            'nome' => 'Aripuanã'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 1605,
            'nome' => 'Barão de Melgaço'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 1704,
            'nome' => 'Barra do Bugres'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 1803,
            'nome' => 'Barra do Garças'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 1852,
            'nome' => 'Bom Jesus do Araguaia'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 1902,
            'nome' => 'Brasnorte'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 2504,
            'nome' => 'Cáceres'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 2603,
            'nome' => 'Campinápolis'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 2637,
            'nome' => 'Campo Novo do Parecis'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 2678,
            'nome' => 'Campo Verde'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 2686,
            'nome' => 'Campos de Júlio'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 2694,
            'nome' => 'Canabrava do Norte'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 2702,
            'nome' => 'Canarana'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 2793,
            'nome' => 'Carlinda'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 2850,
            'nome' => 'Castanheira'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 3007,
            'nome' => 'Chapada dos Guimarães'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 3056,
            'nome' => 'Cláudia'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 3106,
            'nome' => 'Cocalinho'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 3205,
            'nome' => 'Colíder'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 3254,
            'nome' => 'Colniza'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 3304,
            'nome' => 'Comodoro'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 3353,
            'nome' => 'Confresa'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 3361,
            'nome' => 'Conquista D\'Oeste'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 3379,
            'nome' => 'Cotriguaçu'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 3403,
            'nome' => 'Cuiabá'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 3437,
            'nome' => 'Curvelândia'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 3452,
            'nome' => 'Denise'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 3502,
            'nome' => 'Diamantino'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 3601,
            'nome' => 'Dom Aquino'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 3700,
            'nome' => 'Feliz Natal'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 3809,
            'nome' => 'Figueirópolis D\'Oeste'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 3858,
            'nome' => 'Gaúcha do Norte'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 3908,
            'nome' => 'General Carneiro'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 3957,
            'nome' => 'Glória D\'Oeste'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 4104,
            'nome' => 'Guarantã do Norte'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 4203,
            'nome' => 'Guiratinga'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 4500,
            'nome' => 'Indiavaí'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 4526,
            'nome' => 'Ipiranga do Norte'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 4542,
            'nome' => 'Itanhangá'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 4559,
            'nome' => 'Itaúba'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 4609,
            'nome' => 'Itiquira'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 4807,
            'nome' => 'Jaciara'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 4906,
            'nome' => 'Jangada'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 5002,
            'nome' => 'Jauru'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 5101,
            'nome' => 'Juara'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 5150,
            'nome' => 'Juína'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 5176,
            'nome' => 'Juruena'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 5200,
            'nome' => 'Juscimeira'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 5234,
            'nome' => 'Lambari D\'Oeste'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 5259,
            'nome' => 'Lucas do Rio Verde'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 5309,
            'nome' => 'Luciara'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 5580,
            'nome' => 'Marcelândia'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 5606,
            'nome' => 'Matupá'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 5622,
            'nome' => 'Mirassol d\'Oeste'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 5903,
            'nome' => 'Nobres'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 6000,
            'nome' => 'Nortelândia'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 6109,
            'nome' => 'Nossa Senhora do Livramento'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 6158,
            'nome' => 'Nova Bandeirantes'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 6208,
            'nome' => 'Nova Brasilândia'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 6216,
            'nome' => 'Nova Canaã do Norte'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 8808,
            'nome' => 'Nova Guarita'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 6182,
            'nome' => 'Nova Lacerda'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 8857,
            'nome' => 'Nova Marilândia'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 8907,
            'nome' => 'Nova Maringá'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 8956,
            'nome' => 'Nova Monte Verde'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 6224,
            'nome' => 'Nova Mutum'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 6174,
            'nome' => 'Nova Nazaré'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 6232,
            'nome' => 'Nova Olímpia'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 6190,
            'nome' => 'Nova Santa Helena'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 6240,
            'nome' => 'Nova Ubiratã'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 6257,
            'nome' => 'Nova Xavantina'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 6273,
            'nome' => 'Novo Horizonte do Norte'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 6265,
            'nome' => 'Novo Mundo'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 6315,
            'nome' => 'Novo Santo Antônio'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 6281,
            'nome' => 'Novo São Joaquim'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 6299,
            'nome' => 'Paranaíta'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 6307,
            'nome' => 'Paranatinga'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 6372,
            'nome' => 'Pedra Preta'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 6422,
            'nome' => 'Peixoto de Azevedo'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 6455,
            'nome' => 'Planalto da Serra'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 6505,
            'nome' => 'Poconé'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 6653,
            'nome' => 'Pontal do Araguaia'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 6703,
            'nome' => 'Ponte Branca'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 6752,
            'nome' => 'Pontes e Lacerda'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 6778,
            'nome' => 'Porto Alegre do Norte'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 6802,
            'nome' => 'Porto dos Gaúchos'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 6828,
            'nome' => 'Porto Esperidião'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 6851,
            'nome' => 'Porto Estrela'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 7008,
            'nome' => 'Poxoréu'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 7040,
            'nome' => 'Primavera do Leste'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 7065,
            'nome' => 'Querência'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 7156,
            'nome' => 'Reserva do Cabaçal'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 7180,
            'nome' => 'Ribeirão Cascalheira'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 7198,
            'nome' => 'Ribeirãozinho'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 7206,
            'nome' => 'Rio Branco'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 7578,
            'nome' => 'Rondolândia'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 7602,
            'nome' => 'Rondonópolis'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 7701,
            'nome' => 'Rosário Oeste'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 7750,
            'nome' => 'Salto do Céu'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 7248,
            'nome' => 'Santa Carmem'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 7743,
            'nome' => 'Santa Cruz do Xingu'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 7768,
            'nome' => 'Santa Rita do Trivelato'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 7776,
            'nome' => 'Santa Terezinha'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 7263,
            'nome' => 'Santo Afonso'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 7792,
            'nome' => 'Santo Antônio do Leste'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 7800,
            'nome' => 'Santo Antônio do Leverger'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 7859,
            'nome' => 'São Félix do Araguaia'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 7297,
            'nome' => 'São José do Povo'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 7305,
            'nome' => 'São José do Rio Claro'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 7354,
            'nome' => 'São José do Xingu'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 7107,
            'nome' => 'São José dos Quatro Marcos'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 7404,
            'nome' => 'São Pedro da Cipa'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 7875,
            'nome' => 'Sapezal'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 7883,
            'nome' => 'Serra Nova Dourada'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 7909,
            'nome' => 'Sinop'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 7925,
            'nome' => 'Sorriso'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 7941,
            'nome' => 'Tabaporã'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 7958,
            'nome' => 'Tangará da Serra'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 8006,
            'nome' => 'Tapurah'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 8055,
            'nome' => 'Terra Nova do Norte'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 8105,
            'nome' => 'Tesouro'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 8204,
            'nome' => 'Torixoréu'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 8303,
            'nome' => 'União do Sul'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 8352,
            'nome' => 'Vale de São Domingos'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 8402,
            'nome' => 'Várzea Grande'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 8501,
            'nome' => 'Vera'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 5507,
            'nome' => 'Vila Bela da Santíssima Trindade'
        ],
        [
            'codigo_uf' => 51,
            'codigo_municipio' => 8600,
            'nome' => 'Vila Rica'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 50,
            'nome' => 'Abadia de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 100,
            'nome' => 'Abadiânia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 134,
            'nome' => 'Acreúna'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 159,
            'nome' => 'Adelândia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 175,
            'nome' => 'Água Fria de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 209,
            'nome' => 'Água Limpa'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 258,
            'nome' => 'Águas Lindas de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 308,
            'nome' => 'Alexânia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 506,
            'nome' => 'Aloândia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 555,
            'nome' => 'Alto Horizonte'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 605,
            'nome' => 'Alto Paraíso de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 803,
            'nome' => 'Alvorada do Norte'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 829,
            'nome' => 'Amaralina'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 852,
            'nome' => 'Americano do Brasil'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 902,
            'nome' => 'Amorinópolis'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 1108,
            'nome' => 'Anápolis'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 1207,
            'nome' => 'Anhanguera'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 1306,
            'nome' => 'Anicuns'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 1405,
            'nome' => 'Aparecida de Goiânia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 1454,
            'nome' => 'Aparecida do Rio Doce'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 1504,
            'nome' => 'Aporé'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 1603,
            'nome' => 'Araçu'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 1702,
            'nome' => 'Aragarças'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 1801,
            'nome' => 'Aragoiânia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 2155,
            'nome' => 'Araguapaz'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 2353,
            'nome' => 'Arenópolis'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 2502,
            'nome' => 'Aruanã'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 2601,
            'nome' => 'Aurilândia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 2809,
            'nome' => 'Avelinópolis'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 3104,
            'nome' => 'Baliza'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 3203,
            'nome' => 'Barro Alto'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 3302,
            'nome' => 'Bela Vista de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 3401,
            'nome' => 'Bom Jardim de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 3500,
            'nome' => 'Bom Jesus de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 3559,
            'nome' => 'Bonfinópolis'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 3575,
            'nome' => 'Bonópolis'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 3609,
            'nome' => 'Brazabrantes'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 3807,
            'nome' => 'Britânia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 3906,
            'nome' => 'Buriti Alegre'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 3939,
            'nome' => 'Buriti de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 3962,
            'nome' => 'Buritinópolis'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 4003,
            'nome' => 'Cabeceiras'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 4102,
            'nome' => 'Cachoeira Alta'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 4201,
            'nome' => 'Cachoeira de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 4250,
            'nome' => 'Cachoeira Dourada'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 4300,
            'nome' => 'Caçu'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 4409,
            'nome' => 'Caiapônia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 4508,
            'nome' => 'Caldas Novas'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 4557,
            'nome' => 'Caldazinha'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 4607,
            'nome' => 'Campestre de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 4656,
            'nome' => 'Campinaçu'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 4706,
            'nome' => 'Campinorte'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 4805,
            'nome' => 'Campo Alegre de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 4854,
            'nome' => 'Campo Limpo de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 4904,
            'nome' => 'Campos Belos'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 4953,
            'nome' => 'Campos Verdes'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 5000,
            'nome' => 'Carmo do Rio Verde'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 5059,
            'nome' => 'Castelândia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 5109,
            'nome' => 'Catalão'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 5208,
            'nome' => 'Caturaí'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 5307,
            'nome' => 'Cavalcante'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 5406,
            'nome' => 'Ceres'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 5455,
            'nome' => 'Cezarina'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 5471,
            'nome' => 'Chapadão do Céu'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 5497,
            'nome' => 'Cidade Ocidental'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 5513,
            'nome' => 'Cocalzinho de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 5521,
            'nome' => 'Colinas do Sul'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 5703,
            'nome' => 'Córrego do Ouro'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 5802,
            'nome' => 'Corumbá de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 5901,
            'nome' => 'Corumbaíba'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 6206,
            'nome' => 'Cristalina'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 6305,
            'nome' => 'Cristianópolis'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 6404,
            'nome' => 'Crixás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 6503,
            'nome' => 'Cromínia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 6602,
            'nome' => 'Cumari'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 6701,
            'nome' => 'Damianópolis'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 6800,
            'nome' => 'Damolândia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 6909,
            'nome' => 'Davinópolis'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 7105,
            'nome' => 'Diorama'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 8301,
            'nome' => 'Divinópolis de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 7253,
            'nome' => 'Doverlândia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 7352,
            'nome' => 'Edealina'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 7402,
            'nome' => 'Edéia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 7501,
            'nome' => 'Estrela do Norte'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 7535,
            'nome' => 'Faina'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 7600,
            'nome' => 'Fazenda Nova'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 7808,
            'nome' => 'Firminópolis'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 7907,
            'nome' => 'Flores de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 8004,
            'nome' => 'Formosa'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 8103,
            'nome' => 'Formoso'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 8152,
            'nome' => 'Gameleira de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 8400,
            'nome' => 'Goianápolis'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 8509,
            'nome' => 'Goiandira'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 8608,
            'nome' => 'Goianésia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 8707,
            'nome' => 'Goiânia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 8806,
            'nome' => 'Goianira'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 8905,
            'nome' => 'Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 9101,
            'nome' => 'Goiatuba'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 9150,
            'nome' => 'Gouvelândia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 9200,
            'nome' => 'Guapó'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 9291,
            'nome' => 'Guaraíta'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 9408,
            'nome' => 'Guarani de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 9457,
            'nome' => 'Guarinos'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 9606,
            'nome' => 'Heitoraí'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 9705,
            'nome' => 'Hidrolândia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 9804,
            'nome' => 'Hidrolina'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 9903,
            'nome' => 'Iaciara'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 9937,
            'nome' => 'Inaciolândia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 9952,
            'nome' => 'Indiara'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 10000,
            'nome' => 'Inhumas'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 10109,
            'nome' => 'Ipameri'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 10158,
            'nome' => 'Ipiranga de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 10208,
            'nome' => 'Iporá'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 10307,
            'nome' => 'Israelândia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 10406,
            'nome' => 'Itaberaí'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 10562,
            'nome' => 'Itaguari'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 10604,
            'nome' => 'Itaguaru'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 10802,
            'nome' => 'Itajá'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 10901,
            'nome' => 'Itapaci'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 11008,
            'nome' => 'Itapirapuã'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 11206,
            'nome' => 'Itapuranga'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 11305,
            'nome' => 'Itarumã'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 11404,
            'nome' => 'Itauçu'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 11503,
            'nome' => 'Itumbiara'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 11602,
            'nome' => 'Ivolândia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 11701,
            'nome' => 'Jandaia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 11800,
            'nome' => 'Jaraguá'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 11909,
            'nome' => 'Jataí'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 12006,
            'nome' => 'Jaupaci'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 12055,
            'nome' => 'Jesúpolis'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 12105,
            'nome' => 'Joviânia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 12204,
            'nome' => 'Jussara'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 12253,
            'nome' => 'Lagoa Santa'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 12303,
            'nome' => 'Leopoldo de Bulhões'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 12501,
            'nome' => 'Luziânia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 12600,
            'nome' => 'Mairipotaba'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 12709,
            'nome' => 'Mambaí'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 12808,
            'nome' => 'Mara Rosa'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 12907,
            'nome' => 'Marzagão'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 12956,
            'nome' => 'Matrinchã'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 13004,
            'nome' => 'Maurilândia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 13053,
            'nome' => 'Mimoso de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 13087,
            'nome' => 'Minaçu'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 13103,
            'nome' => 'Mineiros'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 13400,
            'nome' => 'Moiporá'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 13509,
            'nome' => 'Monte Alegre de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 13707,
            'nome' => 'Montes Claros de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 13756,
            'nome' => 'Montividiu'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 13772,
            'nome' => 'Montividiu do Norte'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 13806,
            'nome' => 'Morrinhos'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 13855,
            'nome' => 'Morro Agudo de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 13905,
            'nome' => 'Mossâmedes'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 14002,
            'nome' => 'Mozarlândia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 14051,
            'nome' => 'Mundo Novo'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 14101,
            'nome' => 'Mutunópolis'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 14408,
            'nome' => 'Nazário'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 14507,
            'nome' => 'Nerópolis'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 14606,
            'nome' => 'Niquelândia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 14705,
            'nome' => 'Nova América'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 14804,
            'nome' => 'Nova Aurora'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 14838,
            'nome' => 'Nova Crixás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 14861,
            'nome' => 'Nova Glória'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 14879,
            'nome' => 'Nova Iguaçu de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 14903,
            'nome' => 'Nova Roma'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 15009,
            'nome' => 'Nova Veneza'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 15207,
            'nome' => 'Novo Brasil'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 15231,
            'nome' => 'Novo Gama'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 15256,
            'nome' => 'Novo Planalto'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 15306,
            'nome' => 'Orizona'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 15405,
            'nome' => 'Ouro Verde de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 15504,
            'nome' => 'Ouvidor'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 15603,
            'nome' => 'Padre Bernardo'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 15652,
            'nome' => 'Palestina de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 15702,
            'nome' => 'Palmeiras de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 15801,
            'nome' => 'Palmelo'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 15900,
            'nome' => 'Palminópolis'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 16007,
            'nome' => 'Panamá'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 16304,
            'nome' => 'Paranaiguara'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 16403,
            'nome' => 'Paraúna'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 16452,
            'nome' => 'Perolândia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 16809,
            'nome' => 'Petrolina de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 16908,
            'nome' => 'Pilar de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 17104,
            'nome' => 'Piracanjuba'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 17203,
            'nome' => 'Piranhas'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 17302,
            'nome' => 'Pirenópolis'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 17401,
            'nome' => 'Pires do Rio'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 17609,
            'nome' => 'Planaltina'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 17708,
            'nome' => 'Pontalina'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 18003,
            'nome' => 'Porangatu'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 18052,
            'nome' => 'Porteirão'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 18102,
            'nome' => 'Portelândia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 18300,
            'nome' => 'Posse'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 18391,
            'nome' => 'Professor Jamil'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 18508,
            'nome' => 'Quirinópolis'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 18607,
            'nome' => 'Rialma'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 18706,
            'nome' => 'Rianápolis'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 18789,
            'nome' => 'Rio Quente'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 18805,
            'nome' => 'Rio Verde'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 18904,
            'nome' => 'Rubiataba'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 19001,
            'nome' => 'Sanclerlândia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 19100,
            'nome' => 'Santa Bárbara de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 19209,
            'nome' => 'Santa Cruz de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 19258,
            'nome' => 'Santa Fé de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 19308,
            'nome' => 'Santa Helena de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 19357,
            'nome' => 'Santa Isabel'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 19407,
            'nome' => 'Santa Rita do Araguaia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 19456,
            'nome' => 'Santa Rita do Novo Destino'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 19506,
            'nome' => 'Santa Rosa de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 19605,
            'nome' => 'Santa Tereza de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 19704,
            'nome' => 'Santa Terezinha de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 19712,
            'nome' => 'Santo Antônio da Barra'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 19738,
            'nome' => 'Santo Antônio de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 19753,
            'nome' => 'Santo Antônio do Descoberto'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 19803,
            'nome' => 'São Domingos'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 19902,
            'nome' => 'São Francisco de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 20058,
            'nome' => 'São João da Paraúna'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 20009,
            'nome' => 'São João d\'Aliança'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 20108,
            'nome' => 'São Luís de Montes Belos'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 20157,
            'nome' => 'São Luiz do Norte'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 20207,
            'nome' => 'São Miguel do Araguaia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 20264,
            'nome' => 'São Miguel do Passa Quatro'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 20280,
            'nome' => 'São Patrício'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 20405,
            'nome' => 'São Simão'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 20454,
            'nome' => 'Senador Canedo'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 20504,
            'nome' => 'Serranópolis'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 20603,
            'nome' => 'Silvânia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 20686,
            'nome' => 'Simolândia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 20702,
            'nome' => 'Sítio d\'Abadia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 21007,
            'nome' => 'Taquaral de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 21080,
            'nome' => 'Teresina de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 21197,
            'nome' => 'Terezópolis de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 21304,
            'nome' => 'Três Ranchos'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 21403,
            'nome' => 'Trindade'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 21452,
            'nome' => 'Trombas'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 21502,
            'nome' => 'Turvânia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 21551,
            'nome' => 'Turvelândia'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 21577,
            'nome' => 'Uirapuru'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 21601,
            'nome' => 'Uruaçu'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 21700,
            'nome' => 'Uruana'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 21809,
            'nome' => 'Urutaí'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 21858,
            'nome' => 'Valparaíso de Goiás'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 21908,
            'nome' => 'Varjão'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 22005,
            'nome' => 'Vianópolis'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 22054,
            'nome' => 'Vicentinópolis'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 22203,
            'nome' => 'Vila Boa'
        ],
        [
            'codigo_uf' => 52,
            'codigo_municipio' => 22302,
            'nome' => 'Vila Propício'
        ],
        [
            'codigo_uf' => 53,
            'codigo_municipio' => 108,
            'nome' => 'Brasília'
        ],

        ];

        foreach ($cidades as $cidade) {
            Cidade::UpdateOrCreate($cidade, $cidade);
        }
    }
}
