<?php 
namespace aqib08\LocationMap\Models;

use Illuminate\Database\Eloquent\Model;

class StateModel extends Model
{
    protected $table = 'states'; // Replace with your actual table name

    protected $fillable = [
        'name',
        'country_id',
        'state_code',
        'latitude',
        'longitude'
    ];
}
