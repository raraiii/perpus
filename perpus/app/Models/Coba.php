<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coba extends Model
{
    use HasFactory;
    
    protected $table = 'cobas';
    protected $fillable = ['kode_barang', 'nama', 'stok'];
}