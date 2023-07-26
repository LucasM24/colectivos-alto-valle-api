<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{

    private $services = ['San Patricio del Chañar - Neuquén'];

    public function run(): void
    {
        foreach($this->services as $serviceName) {
            $service = new Service();
            $service->setName($serviceName);

            $service->save();
        }

    }
}
