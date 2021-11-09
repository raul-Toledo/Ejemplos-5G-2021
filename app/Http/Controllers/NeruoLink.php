<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NeruoLink extends Controller
{
    public function inicio(){
        return view('welcome');
    }

    public function parametro(){
        $arreglo = array("base"=>12, "altura" => 45);
        return view('parametros', $arreglo);
    }

    public function parametro2(){
        $base = 45;
        $altura = 651.25;
        $area =   $base *  $altura;
        $figura = "cuadrilatero";
        return view('parametros',[
            'base' => $base,
            'altura' => $altura,
            'area' => $area,
            'fig' => $figura
        ]);
    }

}