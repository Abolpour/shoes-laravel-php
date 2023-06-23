<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\productbasket;
use App\Models\wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{

public function Delete($id)
{
$basket=productbasket::where('user_id','=',Auth::user()->id)
->where('id','=',$id)
->where('is_paying','=',0)->first();
if ($basket) {
$basket->delete();
return redirect()->back();
}
else {
  return 'not found';
}
}




    public function add($product_id,$shope_id){
      $Product=productbasket::where('user_id','=',Auth::user()->id)
      ->where('product_id','=',$product_id)
      ->where('shope_id','=',$shope_id)
      ->where('is_paying','=',0)
      ->first();
      if ($Product) {
        $Product->update(['count'=>$Product->count +1]);
      }else {
        productbasket::create([
          'product_id'=>$product_id,
          'shope_id'=>$shope_id,
          'count'=>1,
          'user_id'=>Auth::user()->id
                  ]);
        
      }
      



        return redirect()->back();
    }
  public function checkout($user_id)
  {
$baskets=productbasket::where('user_id','=',$user_id)->where('is_paying','=',0)->get();
$wallet=wallet::where('user_id','=',$user_id)->first();

$total=0;

foreach ($baskets as $basket)
 {
  $total += $basket->product()->price * $basket->count;
 }
  //inja null barmigardond walleto ba ezafe kardane isset($wallet->price) && error dorost shod
  if (isset($wallet->price) && $wallet->price >= $total)
   {
    $wallet->update(['price'=>$wallet->price-$total]); //baraye pakkardane basket bad az pardakht (update gheimat)
    foreach ($baskets as $basket)
    {
      $basket->update(['is_paying' => 1 ]);
    }
  }  else {
   return 'not found !!!';

  }



  return 'paying is done';



  }
}