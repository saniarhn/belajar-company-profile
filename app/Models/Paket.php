<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table="tbl_paket" ;
    protected $fillable = [
     
        'nama_paket',
        'foto',
        'keterangan',
        'status',
        'harga_paket',
        
    ];

}
