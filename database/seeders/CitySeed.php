<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;
class CitySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
       $brasilStates = [
        "Acre",
    "Alagoas",
    "Amapá",
    "Amazonas",
    "Bahia",
    "Ceará",
    "Distrito Federal",
    "Espírito Santo",
    "Goiás",
    "Maranhão",
    "Mato Grosso",
    "Mato Grosso do Sul",
    "Minas Gerais",
    "Pará",
    "Paraíba",
    "Paraná",
    "Pernambuco",
    "Piauí",
    "Rio de Janeiro",
    "Rio Grande do Norte",
    "Rio Grande do Sul",
    "Rondônia",
    "Roraima",
    "Santa Catarina",
    "São Paulo",
    "Sergipe",
    "Tocantins"
    ];

     $angolaLuandaMunicipy = [
        "Luanda",
        "Belas",
        "Cazenga",
        "Viana",
        "Cacuaco",
       "Icolo e Bengo",
        "Quissama"
    ];
     $angolaBenguelaMunicipy = [
        "Balombo",
        "Baía Farta",
        "Benguela",
        "Bocoio",
        "Caimbambo",
       "Catumbela",
        "Chongoroi",
        "Cubal",
        "Ganda",
        "Lobito",
    ];

 
        foreach ($angolaLuandaMunicipy as $value) {
            City::create(["country_id"=>"1", "city"=> $value]);    
        }
        foreach ($angolaLuandaMunicipy as $value) {
            City::create(["country_id"=>"1", "city"=> $value]);    
        }
        foreach ($brasilStates as $value) {
            City::create(["country_id"=>"2", "city"=> $value]);    
        }
       
      
    }
}
