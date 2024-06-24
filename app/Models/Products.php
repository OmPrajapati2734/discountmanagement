<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 
use App\Models\club;
use App\Models\Discount;
class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    public $timestamps = false;
    protected $fillable = ['club_id','title','product_title','type']; 

    public function productrelation(){
        return $this->belongsTo(club::class,'club_id','id');
    } 

    public function productdiscount(){
        return $this->hasMany(Discount::class);
    }
}
