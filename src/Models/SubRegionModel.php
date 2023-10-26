<?php 
namespace aqib08\LocationMap\Models;

use Illuminate\Database\Eloquent\Model;

class SubRegionModel extends Model
{
    protected $table = 'sub_regions'; // Replace with your actual table name

    protected $fillable = [
        'name',
        'region_id'
    ];
}
