<?php

namespace Database\Seeders;
use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Region::create([
            "name"=>"Region Arica y Parinacota"
        ]);
        Region::create([
            "name"=>"Region de Tarapaca"
        ]);
        Region::create([
            "name"=>"Region de Antofagasta"
        ]);
        Region::create([
            "name"=>"Region de Atacama"
        ]);
    }
}
