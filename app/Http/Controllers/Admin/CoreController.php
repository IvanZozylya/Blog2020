<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


class CoreController extends Controller
{
//    function __construct()
//    {
//        $this->middleware('myMiddle');
//    }

    function getArticles()
    {
        echo "ALL";
    }

    function getArticle($id)
    {
        echo $id;
    }
}
