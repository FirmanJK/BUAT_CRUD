<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',       // Merek mobil
        'model',       // Model mobil
        'year',        // Tahun produksi
        'price',       // Harga mobil
        'stock',       // Jumlah stok mobil
        'description', // Deskripsi mobil
    ];
}