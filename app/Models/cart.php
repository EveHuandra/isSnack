<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    protected $fillable = ['Id_cart','Id_produk','Qty','Deskripsi'];
    public $timestamps = false;
}
