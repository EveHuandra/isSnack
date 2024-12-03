<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{

public function customer()
{
    return $this->belongsTo(Customer::class, 'Id_user', 'Id_user');
}

    use HasFactory;

    protected $fillable = ['Id_cart','Id_produk','Qty','Id_customer'];
    public $timestamps = false;
}
