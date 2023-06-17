<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
route::get('/',[HomeController::class,'Home'])->name('home');
route::get('/shop/{id}',[HomeController::class,'shop'])->name('shop');

route::get('/Admin',[AdminController::class,'Admin'])->name('Admin')->middleware(['auth','auth.role.admin']);


Route::get('/Admin/Category/list',[AdminController::class,'CategoryList'])->name('Category-List')->middleware(['auth','auth.role.admin']);

Route::get('/Admin/Product/list',[AdminController::class,'ProductList'])->name('Product-List')->middleware(['auth','auth.role.admin']);

Route::get('/Admin/Shops/list',[AdminController::class,'ShopsList'])->name('Shops-List')->middleware(['auth','auth.role.admin']);

Route::get('/Admin/Users/list',[AdminController::class,'UsersList'])->name('Users-List')->middleware(['auth','auth.role.admin']);



Route::get('/Admin/Shops/Create',[AdminController::class,'ShopsCreate'])->name('Shops-Create')->middleware(['auth','auth.role.admin']);

Route::post('/Admin/Shops/insert',[AdminController::class,'Shopsinsert'])->name('Shops-insert')->middleware(['auth','auth.role.admin']);

Route::get('/Admin/Shops/Edit/{id}',[AdminController::class,'ShopsEdit'])->name('Shops-Edit')->middleware(['auth','auth.role.admin']);

Route::post('/Admin/Shops/Update',[AdminController::class,'ShopsUpdate'])->name('Shops-Update')->middleware(['auth','auth.role.admin']);

Route::get('/Admin/Shops/Delete/{id}',[AdminController::class,'ShopsDelete'])->name('Shops-Delete')->middleware(['auth','auth.role.admin']);



Route::get('/Admin/Category/Create',[AdminController::class,'CategoryCreate'])->name('Category-Create')->middleware(['auth','auth.role.admin']);

Route::post('/Admin/Category/insert',[AdminController::class,'Categoryinsert'])->name('Category-insert')->middleware(['auth','auth.role.admin']);

Route::get('/Admin/Category/Edit/{id}',[AdminController::class,'CategoryEdit'])->name('Category-Edit')->middleware(['auth','auth.role.admin']);

Route::post('/Admin/Category/Update',[AdminController::class,'CategoryUpdate'])->name('Category-Update')->middleware(['auth','auth.role.admin']);

Route::get('/Admin/Category/Delete/{id}',[AdminController::class,'CategoryDelete'])->name('Category-Delete')->middleware(['auth','auth.role.admin']);


Route::get('/Admin/Product/Create',[AdminController::class,'ProductCreate'])->name('Product-Create')->middleware(['auth','auth.role.admin']);

Route::post('/Admin/Product/insert',[AdminController::class,'Productinsert'])->name('Product-insert')->middleware(['auth','auth.role.admin']);

Route::get('/Admin/Product/Edit/{id}',[AdminController::class,'ProductEdit'])->name('Product-Edit')->middleware(['auth','auth.role.admin']);

Route::post('/Admin/Product/Update',[AdminController::class,'ProductUpdate'])->name('Product-Update')->middleware(['auth','auth.role.admin']);

Route::get('/Admin/Product/Delete/{id}',[AdminController::class,'ProductDelete'])->name('Product-Delete')->middleware(['auth','auth.role.admin']);


Route::get('/Admin/User/Create',[AdminController::class,'UserCreate'])->name('User-Create')->middleware(['auth','auth.role.admin']);

Route::post('/Admin/User/insert',[AdminController::class,'Userinsert'])->name('User-insert')->middleware(['auth','auth.role.admin']);

Route::get('/Admin/User/Edit/{id}',[AdminController::class,'UserEdit'])->name('User-Edit')->middleware(['auth','auth.role.admin']);

Route::post('/Admin/User/Update',[AdminController::class,'UserUpdate'])->name('User-Update')->middleware(['auth','auth.role.admin']);

Route::get('/Admin/User/Delete/{id}',[AdminController::class,'UserDelete'])->name('User-Delete')->middleware(['auth','auth.role.admin']);


Auth::routes();
Route::get('/Logout',[LogoutController::class,'logout'])->name('Logout');

