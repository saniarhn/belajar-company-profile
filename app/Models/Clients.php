<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $table="tbl_clients" ;
    protected $fillable = [
     
        'nama',
        'pekerjaan',
        'foto',
        'ulasan',
        'status',
    ];


}
