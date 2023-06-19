<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\productbasket;
use App\Models\shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
   
    
function Home(){
    $shops= shop::paginate(2);
    $shop=shop::orderByDesc('created_at')->limit(3)->get();
    $bestshops=shop::orderByDesc('counter')->limit(3)->get();
    $categories=Category::all();
    $user=User::all()->count();
$slidershops=shop::where('is_slide','=',1)->orderByDesc('updated_at')->get();

    return view('layout.Front.Index',[
        'shops'=>$shops,
          'shop'=>$shop,
'bestshops'=>$bestshops,
'categories'=>$categories,
'user'=>$user,
'slidershops'=>$slidershops
    
    ]);
}
function shop($id,request $request){
    $shop=shop::findorfail($id);
    $categories=Category::all();
    $baskets=null;
    if(Auth::user()){
        $baskets=productbasket::where('user_id','=',Auth::user()->id)->get();
    }
   
    if ($request->get('category')) {
        $products=Product::where('shope_id','=',$shop->id)->where('category_id','=',$request->get('category'))->get();
    }else {
        $products=Product::where('shope_id','=',$shop->id)->get();
    }
    
    shop::findorfail($id)
    ->update([
        'counter'=>$shop->counter+1
    ]);
    
   
   return view('layout.Front.shop',[
    'shop'=>$shop ,
     'products'=>$products,
     'categories'=>$categories,
     'baskets'=>$baskets
    ]);

}
public function search(Request $request){
$q=$request->get('q');

$shops=shop::where('title','like','%'.$q.'%')->get();

    return view('layout.Front.search',['shops'=>$shops]);
}
public function category($id){
   $category= category::find($id);
   $shop=shop::all();
    return view('layout.Front.category',['category'=>$category,'shop'=>$shop]);
}
}
