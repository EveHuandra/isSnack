<?php

namespace App\Imports;

use App\Models\Cart;
use Maatwebsite\Excel\Concerns\ToModel;

class CartImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    protected $rowcount=0;
    public function model(array $row)
    {

        $this->rowcount++;
        if($this->rowcount>1){
            return new Cart([
             'Id_cart' => $row[0], //sesuaikan field dengan kolom di excel
             'Qty' => $row[1],
             'Id_produk' => $row[2],
             'Id_user' => $row[3],
             //tambahkan field lainnya
            ]
            );
        } else{
            return null;
    }

    }

}
