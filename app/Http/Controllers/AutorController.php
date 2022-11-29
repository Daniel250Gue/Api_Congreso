<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Support\Facades\DB;



class AutorController extends Controller
{
    

public function Obtenerautor(){

    $sql = 'SELECT * FROM autor';
    $Autor = DB::select($sql);
    return $Autor;        
    //return Autor::all();


}


}
