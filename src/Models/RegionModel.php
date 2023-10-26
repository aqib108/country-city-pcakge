<?php 
namespace aqib08\LocationMap\Models;

use Illuminate\Database\Eloquent\Model;

class RegionModel extends Model
{
    protected $table = 'regions'; // Replace with your actual table name

    protected $fillable = [
        'name',
    ];
}
