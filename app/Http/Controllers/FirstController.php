<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{


    function show($id){
        echo $id;
    }
    public function home(){
        return view('welcome');
    }
}
