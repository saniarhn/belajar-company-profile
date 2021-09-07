<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table="tbl_home" ;
    protected $fillable = [
     
        'judul',
        'subjudul',
        
        'foto',
        
        
    ];
}
