<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;

    protected $fillable = ['Id_transaction', 'Id_produk', 'Quantity', 'No_resi', 'Harga', 'Date'];
}
