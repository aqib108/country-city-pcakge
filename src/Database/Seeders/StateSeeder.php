<?php 
namespace aqib08\LocationMap\Database\Seeders;

use Illuminate\Database\Seeder;
use aqib08\LocationMap\Models\StateModel;
use aqib08\LocationMap\ReadCsv;
use Illuminate\Support\Facades\DB;
class StateSeeder extends Seeder
{
    protected $chunkSize = 1000;
    public function run()
    {
        DB::statement('ALTER TABLE states AUTO_INCREMENT = 0');
        $data = ReadCsv::read('states.csv');
        foreach(array_chunk($data, $this->chunkSize) as $chunk) {
            StateModel::insert($chunk);
        }
        
    }
}
