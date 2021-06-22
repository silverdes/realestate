<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable=[
        'estate_name',
        'city_id',
        'estate_type_id',
        'floor_space',
        'number_of_balconies',
        'balconies_space',
        'number_of_bedrooms',
        'number_of_bathrooms',
        'number_of_garages',
        'number_of_parking_spaces',
        'pets_allowed',
        'estate_description',
        'estate_status_id',
    ];
}
