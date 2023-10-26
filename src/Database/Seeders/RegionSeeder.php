<?php 
namespace aqib08\LocationMap\Database\Seeders;

use Illuminate\Database\Seeder;
use aqib08\LocationMap\Models\RegionModel;
use aqib08\LocationMap\ReadCsv;
use Illuminate\Support\Facades\DB;
class RegionSeeder extends Seeder
{
    public function run()
    {
        DB::statement('ALTER TABLE regions AUTO_INCREMENT = 0');
        $data = ReadCsv::read('regions.csv');
        // Seed data into your package's table
        RegionModel::insert($data);
    }
}
