<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function myuser(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function service(){
        return $this->belongsTo(Service::class,'service_id','id');
    }
    public function salon(){
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
