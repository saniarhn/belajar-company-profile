<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelebihan extends Model
{
    protected $table="tbl_kelebihan" ;
    protected $fillable = [
     
        'kelebihan',
        'foto',
        'deskripsi',
        'status',
    ];

}
