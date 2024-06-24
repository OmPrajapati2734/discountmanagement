<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class Discount extends Model
{
    use HasFactory;
    // use SoftDeletes; 

    protected $fillable = ['product_id','code','percentage','min_amount','expiry_date','status']; 


    public function discount(){
        return $this->belongsTo(Products::class,'id','product_id');
    }
}
