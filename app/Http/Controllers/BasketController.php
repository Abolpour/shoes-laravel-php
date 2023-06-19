<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\productbasket;
use App\Models\wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public function add($product_id,$shope_id){
        productbasket::create([
'product_id'=>$product_id,
'shope_id'=>$shope_id,
'count'=>1,
'user_id'=>Auth::user()->id
        ]);
        return redirect()->back();
    }
  public function checkout($user_id){
$baskets=productbasket::where('user_id','=',$user_id)->get();
$wallet=wallet::where('user_id','=',$user_id)->get();
return '';
  }
}
