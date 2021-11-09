<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Pruebas extends Controller
{
    public function inicio(){
        return view('ciclos')
            ->with('x',5)
            ->with('y',7)
            ->with('cont',1);
    }

    public function area($base=10, $alt=151, $fig="defecto"){
        $area = $base * $alt;
        return view('parametros', [
            'base' => $base,
            'altura' => $alt,
            'area' => $area,
            'fig' => $fig
        ]);
    }

    public function chetos(){
        $base = 415;
        $altura = 5416;
        $area =   $base *  $altura / 2;
        $figura = "Triangulo";
        return view('parametros')
        ->with('base', $base)
        ->with('altura', $altura)
        ->with('area',$area)
        ->with('fig',$figura);
    }

}