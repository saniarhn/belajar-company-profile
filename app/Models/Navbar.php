<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navbar extends Model
{
    protected $table="tbl_navbar" ;
    protected $fillable = [
     
       
        'foto',
        'judul1',
        'judul2',
        'judul3',
        'judul4',
        'judul5',
        'judul6',
        
    ];

}
