<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show()
    {
        return view('welcome');
    }
}
