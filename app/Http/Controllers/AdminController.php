<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\shop;
use App\Models\User;

 class AdminController extends Controller
{
    function Admin(){
        return view('Admin.panel');
    }
    public function CategoryList(){
        $categories=Category::all();
        
        return view('Admin.Category-list', ['categories'=>$categories]);
    }
    
    function ProductList(){
        $products=Product::all();
        
        return view('Admin.Product-list', ['products'=>$products]);
    }
   
 
    function UsersList(){
      $users=user::all();
        return view('Admin.User-list',['users'=>$users]);
}   
function ShopsList(){
    $shops=Shop::all();
    return view('Admin.Shops-list', ['shops' =>$shops]);
}
function ShopsCreate(){
    return view('Admin.Shops-Create');
}
function Shopsinsert(Request $request){
    $request->validate([
        
        'img'=>'required |mimes:png,jpg',
        
    ]);

    $title=$request->input('title');
    
    $address=$request->input('address');
    $img=time().'-'. $request->file('img')->getClientOriginalName();
    $request->file('img')->move(public_path('img'),$img);
    $is_slide=$request->input('is_slide');

   shop::Create([
    'title'=>$title,
    'address'=>$address,
    'img'=>$img,
    'is_slide'=>$is_slide
    ]);
       return redirect(route('Shops-List'));
       
}
function CategoryCreate(){
    return view('Admin.Category-Create');
}
function Categoryinsert(Request $request){
    Category::Create([
'name'=>$request->input('name'),
'description'=>$request->input('description')
]);
       
       return redirect(route('Category-List'));
      
}

function UserCreate(){
    return view('Admin.User-Create');
}
function Userinsert(Request $request){
    $request->validate([
       
        'user'=>'required| unique:users,user'
    ]);

    User::Create([
        'name'=>$request->input('name'),
        'password'=>$request->input('password')
        ]);
           
       
       return redirect(route('Users-List'));
      
}
function ProductCreate(){
    $categories=Category::all();
    $shops=shop::all();
    return view('Admin.Product-Create',[
        'categories'=>$categories ,
        'shops'=>$shops
    ]);
}
function Productinsert(Request $request){
    Product::Create([
        'id'=>$request->input('id'),
'name'=>$request->input('name'),
'price'=>$request->input('price'),
'category_id'=>$request->input('category'),
'shope_id'=>$request->input('shope')
]);
       
       return redirect(route('Product-List'));
      
}

public function ShopsEdit($id){
    $shope=Shop::findorfail($id);
    return view('Admin.Shops-Edit',['shope'=>$shope]);
}
public function ShopsUpdate(request $request){
    $is_slide=$request->input('is_slide');
    $title=$request->input('title');
    $address=$request->input('address');
    $img=time().'-'. $request->file('img')->getClientOriginalName();
    $request->file('img')->move(public_path('img'),$img);
    shop::findorfail($request->input('id'))
    ->update([
        'title'=>$title,
        'address'=>$address,
        'img'=>$img,
       'is_slide'=>$is_slide ??0

]);
       
       return redirect(route('Shops-List'));
}
public function ShopsDelete($id){
    shop::findorfail($id)->delete();

    return redirect(route('Shops-List'));
}

public function CategoryEdit($id){

    $Category=Category::findorfail($id);

    return view('Admin.Category-Edit',['category'=>$Category]);
}
public function CategoryUpdate(request $request){
    Category::findorfail($request->input('id'))
    ->update([
    'name'=>$request->input('name'),
'description'=>$request->input('description'),


]);
       
       return redirect(route('Category-List'));
}
public function CategoryDelete($id){
    Category::findorfail($id)->delete();

    return redirect(route('Category-List'));
}

public function UserEdit($id){

    $user=User::findorfail($id);
   
    return view('Admin.User-Edit',['user'=>$user]);
}

public function UserUpdate(request $request){
    
    user::findorfail($request->input('id'))
    
    ->update([
        
    'name'=>$request->input('name'),
'password'=>$request->input('password'),


]);
       
      return redirect(route('Users-List'));
}
public function UserDelete($id){
    User::findorfail($id)->delete();

    return redirect(route('Users-List'));
}

public function ProductEdit($id){

    $product=Product::findorfail($id);
    $categories=Category::all();
    $shops=shop::all();
   
    return view('Admin.Product-Edit',['Product'=>$product ,'categories'=>$categories, 'shops'=>$shops ]);
}

public function ProductUpdate(request $request){
    
    Product::find($request->input('id'))->update([
        'name'=>$request->input('name'),
        'price'=>$request->input('price'),
        'category_id'=>$request->input('category'),
        'shope_id'=>$request->input('shope')
    ]);
     
          return redirect(route('Product-List'));
}
public function ProductDelete($id){
    Product::findorfail($id)->delete();

    return redirect(route('Product-List'));
}
}