<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppleController extends Controller
{
    public function ab($var1,$var2){


        return $var1.'------'.$var2;
    }
}
