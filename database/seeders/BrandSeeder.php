<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            ["name" => "Renault"],
            ["name" => "Fiat"],
            ["name" => "Wolkswagen"],
            ["name" => "Opel"],
            ["name" => "Hyundai"],
            ["name" => "Ford"],
            ["name" => "Toyoa"],
            ["name" => "Peugeout"],
            ["name" => "Honda"],
            ["name" => "Volvo"],
        ];

        DB::table('car_brands')->insert($brands);
    }
}
