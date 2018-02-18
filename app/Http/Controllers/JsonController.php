<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;

class JsonController extends Controller
{
    public function json(Request $request)
    {

        echo "<pre>";
        print_r($_FILES); //files
        echo "<pre>";
        print_r($_POST);

    }
}
