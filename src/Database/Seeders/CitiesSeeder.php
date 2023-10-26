<?php 
namespace aqib08\LocationMap\Database\Seeders;

use Illuminate\Database\Seeder;
use aqib08\LocationMap\Models\CityModel;
use aqib08\LocationMap\ReadCsv;
use Illuminate\Support\Facades\DB;
class CitiesSeeder extends Seeder
{
    protected $chunkSize = 1000;
    public function run()
    {
        DB::statement('ALTER TABLE cities AUTO_INCREMENT = 0');   
        $data = ReadCsv::read('cities.csv');
        foreach(array_chunk($data, $this->chunkSize) as $chunk) {
        CityModel::insert($chunk);
        }

    }
}
