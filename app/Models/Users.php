<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table="tbl_users" ;
    protected $fillable = [
     
        'username',
        'password',
        'profil',
    ];

    
    protected $hidden = [
        'password',
 
    ];
}
