<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\shop;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    
function Home(){
    $shops= shop::paginate(4);
    $shop=shop::orderByDesc('created_at')->limit(4)->get();
    $bestshops=shop::orderByDesc('counter')->limit(4)->get();
    $categories=Category::all();
    $user=User::all()->count();
$slidershops=shop::where('is_slide','=',1)->orderByDesc('updated_at')->limit(2)->get();

    return view('layout.Front.Index',[
        'shops'=>$shops,
          'shop'=>$shop,
'bestshops'=>$bestshops,
'categories'=>$categories,
'user'=>$user,
'slidershops'=>$slidershops
    
    ]);
}
function shop($id){
    
    $shop=shop::findorfail($id);
    shop::findorfail($id)
    ->update([
        'counter'=>$shop->counter+1
    ]);
    $products=Product::where('shope_id','=',$shop->id)->get();
   
   return view('layout.Front.shop',['shop'=>$shop , 'products'=>$products]);

}
}
