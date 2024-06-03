<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['code', 'status', 'user_id'];
    public function OrderItems(){
            return $this->hasMany(Orderitem::class);
    }
        public function users(){
             return $this->belongsTo(User::class);
        }
}
