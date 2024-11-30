<?php

namespace App\Imports;

use App\Models\Produk;
use Maatwebsite\Excel\Concerns\ToModel;

class ProdukImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    protected $rowCount=0;
    public function model(array $row)
    {
        $this->rowCount++;
        if($this->rowCount>1 && isset($row[0])){
        return new Produk([
            'Id_produk' => $row[0],
            'Kategori' => $row[1],
            'Isi' => $row[2],
            'Ukuran' => $row[3],
            'Nama' => $row[4],
            'Deskripsi' => $row[5],
            'Expired' => $row[6],
            'Berat' => $row[7],
            'Stock' => $row[8],
            'Harga' => $row[9],

        ]);}
    }
}
