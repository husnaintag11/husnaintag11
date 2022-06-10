<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function product()
    {
        $product=new Product;
        $product->id=001;
        $product->name="Acer E-15";
        $product->price=45000;
        return view('product.single',compact('product'));
    }
}
