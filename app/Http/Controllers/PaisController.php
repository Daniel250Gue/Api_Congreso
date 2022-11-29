<?php

namespace App\Http\Controllers;

use App\Models\Pais;

class PaisController extends Controller
{
    

public function ObtenerPais(){

    return Pais::all();


}


}
