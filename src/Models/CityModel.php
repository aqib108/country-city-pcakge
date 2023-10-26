<?php 
namespace aqib08\LocationMap\Models;

use Illuminate\Database\Eloquent\Model;

class CityModel extends Model
{
    protected $table = 'cities'; // Replace with your actual table name

    protected $fillable = [
        'name',
        'state_id',
        'country_id',
        'latitude',
        'longitude'
    ];

}
