<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productbasket extends Model
{
    use HasFactory;
    protected $fillable=['product_id','shope_id','count','user_id','basket_id','is_paying'];
    public function shop(){
        return $this->belongsTo(Shop::class)->first();
    }
    public function product(){
        return $this->belongsTo(Product::class)->first();
    }
}
