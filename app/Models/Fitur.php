<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fitur extends Model
{
    protected $table="tbl_fitur" ;
    protected $fillable = [
     
        'jenis_fitur',
        'id_paket',
        'status',
    ];
}
