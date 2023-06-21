<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\City;

class CitySeeder extends Seeder
{
    private $neuquenCities = [
        'San Patricio del Chañar',
        'El Labrador',
        'Centenario',
        'Neuquén'
    ];

    private $rioNegroCities = [
        'El Labrador',
        'Villa Manzano',
        'San Isidro',
        'Sargento Vidal',
        'Barda del Medio',
        'Contraalmirante Cordero',
        'Cinco Saltos',
        'Cipolletti'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->rioNegroCities as $cityName) {
            $city = new City();
            $city->id = Str::ulid();
            $city->name = $cityName;
            $city->province = 'Río Negro';
            $city->save();
        }

        foreach ($this->neuquenCities as $cityName) {
            $city = new City();
            $city->id = Str::ulid();
            $city->name = $cityName;
            $city->province = 'Neuquén';
            $city->save();
        }
    }
}
