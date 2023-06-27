<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name','price','category_id','shope_id','title'];

    public function shope(){
        return $this->belongsTo(shop::class)->first();
    }
    public function category(){
        return $this->belongsTo(Category::class)->first();
        
    }
    
    
}
