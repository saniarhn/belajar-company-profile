<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUS extends Model
{
    protected $table="tbl_contact_us" ;
    protected $fillable = [
     
       
        'alamat',
        'email',
        'nomor',
       
        
    ];
}
