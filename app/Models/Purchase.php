<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function product(){
        
    return $this->belongsto(Product::class);

    }
    public function supplier(){
        
        return $this->belongsto(Supplier::class);
    
        }
        public function User()
        {

            return $this->belongsto(User::class,'received_by','id');

            }
    
}
