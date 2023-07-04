<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function supplier(){
        
        return $this->belongsto(Supplier::class,'supplier_name','id');
    
        }
        public function customer(){
        
            return $this->belongsto(Customer::class);
        
            }
            public function purchase(){
            
                return $this->belongsto(Purchase::class);
           
                }
                public function sale(){
                    return $this->belongsTo(Sale::class);
                }
}
