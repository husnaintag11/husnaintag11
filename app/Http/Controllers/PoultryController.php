<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoultryController extends Controller
{
    public function productlist($id){

        return view ('product',['nm'=>$id]);
    }

  public function addproduct($name){


    return view ('addproduct',['nm'=>$name]);
}

  public function updateproduct($id){

    return view('updateproduct',['nm'=>$id]);


}

}
