<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;



class ConferenciasController extends Controller
{
    

public function VerConferecias(){

    $sql = 'SELECT * FROM Conferencista_Conferencia';
    $conferencia = DB::select($sql);
    return $conferencia;        
    //return Autor::all();


}


}
