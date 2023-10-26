<?php 
namespace aqib08\LocationMap\Database\Seeders;

use Illuminate\Database\Seeder;
use aqib08\LocationMap\Models\SubRegionModel;
use aqib08\LocationMap\ReadCsv;
use Illuminate\Support\Facades\DB;
class SubRegionSeeder extends Seeder
{
    public function run()
    {
        DB::statement('ALTER TABLE sub_regions AUTO_INCREMENT = 0');
        $data = ReadCsv::read('subregions.csv');
        SubRegionModel::insert($data);
    }
}
