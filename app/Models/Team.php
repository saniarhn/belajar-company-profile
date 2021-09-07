<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table="tbl_team" ;
    protected $fillable = [
     
        'nama_team',
        'pekerjaan',
        'foto',
        'link',
        'status',
      
        
    ];
}
