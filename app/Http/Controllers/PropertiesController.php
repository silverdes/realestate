<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    //
    public function create()
    {
        # code...
        return Inertia::render('CreateProperty');
    }

    public function save(Request $request)
    {
        $petsAllowed = $request->boolean('pets');
        if($petsAllowed == false){
            $petsAllowed = '0';
        }else{
            $petsAllowed = '1';
        }
        Property::create([
            'estate_name' => $request->input('title'),
            'city_id' => $request->input('city'),
            'estate_type_id' => $request->input('estate_type'),
            'floor_space' =>  $request->input('floor_space'),
            'number_of_balconies' => $request->input('number_of_balconies'),
            'balconies_space' => $request->input('balconies_space'),
            'number_of_bedrooms' => $request->input('number_of_bedrooms'),
            'number_of_bathrooms' => $request->input('number_of_bathrooms'),
            'number_of_garages' => $request->input('number_of_garages'),
            'number_of_parking_spaces' => $request->input('number_of_parking'),
            'pets_allowed'=>$petsAllowed,
        ]);
        return redirect('/properties/create');
    }
}
