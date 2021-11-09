<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function inicio(){
        return view('welcome');
    }

    public function waaa(){
        return redirect('/');
    }
}