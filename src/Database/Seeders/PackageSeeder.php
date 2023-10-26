<?php

namespace aqib08\LocationMap\Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      $this->call(RegionSeeder::class);
      $this->call(SubRegionSeeder::class);
      $this->call(CountriesSeeder::class);
      $this->call(StateSeeder::class);
      $this->call(CitiesSeeder::class);
    }
}
