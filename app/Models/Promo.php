<?php

namespace App\Models;
use App\Models\Paket;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $table="tbl_promo" ;
    protected $fillable = [
       
        'idpaket',
   
        'harga_promo',
        'status',
       
        
    ];
    public function paket()
    {
        return $this->belongsTo('App\Models\Paket');
        
    }
}
