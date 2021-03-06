<?php

namespace Database\Seeders;
use App\Models\Comuna;
use Illuminate\Database\Seeder;

class ComunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comuna::create([
            "name"=>"Arica",
            "region_id"=>1
        ]);
        Comuna::create([
            "name"=>"Putre",
            "region_id"=>1
        ]);
        Comuna::create([
            "name"=>"General Lagos",
            "region_id"=>1
        ]);
        Comuna::create([
            "name"=>"Iquique",
            "region_id"=>2
        ]);
        Comuna::create([
            "name"=>"Huara",
            "region_id"=>2
        ]);
        Comuna::create([
            "name"=>"Pozo al monte",
            "region_id"=>2
        ]);
    }
}
