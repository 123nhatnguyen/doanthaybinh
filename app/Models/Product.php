<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['img','name', 'desc', 'price', 'quantity','category_id','views'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function OrderItems(){
        return $this->hasMany(OrderItem::class); //
    }
}
