<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchasedetails extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function product(){
        
        return $this->belongsto(Product::class);
    
        }
    
}
