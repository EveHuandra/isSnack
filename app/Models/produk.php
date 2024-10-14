<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    protected $fillable = ['Id_produk','Kategori','Isi', 'Ukuran','Nama','Deskripsi','Expired', 'Berat', 'Stock', 'Harga'];
}
