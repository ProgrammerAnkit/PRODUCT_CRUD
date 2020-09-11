<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\product;

class ProductController extends Controller
{
    public function index(){
        return view ('product.index');

    }
     
    public function create(){
   return view ('product.create');
}

//    public function store(){
//    product::create($request->all());
//  return redirect()->back();
// }
}
