<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maps extends Model
{
    protected $table="tbl_maps" ;
    protected $fillable = [
     
        'alamat',
       
    ];
}
