<?php 
namespace aqib08\LocationMap\Database\Seeders;

use Illuminate\Database\Seeder;
use aqib08\LocationMap\Models\CountryModel;
use aqib08\LocationMap\ReadCsv;
use Illuminate\Support\Facades\DB;
class CountriesSeeder extends Seeder
{
    public function run()
    {
        DB::statement('ALTER TABLE countries AUTO_INCREMENT = 0');
        $data = ReadCsv::read('countries.csv');
        CountryModel::insert($data);
    }
}
