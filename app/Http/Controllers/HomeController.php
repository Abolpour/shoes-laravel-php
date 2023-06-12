<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\shop;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    
function Home(){
    $shops= shop::all();
    return view('layout.Front.Index',['shops'=>$shops]);
}
function shop($id){
    $shop=shop::findorfail($id);
    $products=Product::where('shope_id','=',$shop->id)->get();
   
   return view('layout.Front.shop',['shop'=>$shop , 'products'=>$products]);

}
}
