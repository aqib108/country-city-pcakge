<?php 
namespace aqib08\LocationMap\Models;

use Illuminate\Database\Eloquent\Model;

class CountryModel extends Model
{
    protected $table = 'countries'; // Replace with your actual table name

    protected $fillable = [
        'name',
        'region_id',
        'subregion_id',
        'phone_code',
        'latitude',
        'longitude'
    ];

}
