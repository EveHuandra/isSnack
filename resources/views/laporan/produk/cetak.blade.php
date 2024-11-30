<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Laporan Produk</title>
 <style>
 body { 
        font-family: Arial, sans-serif; 
        margin: 20px;
        padding: 0;
    }
    .header-info { 
        margin-bottom: 20px; 
    }
    .header-info h2, .header-info p { 
        margin: 2px 0; 
    } 
    table { 
        width: 100%;
        border-collapse: collapse; 
        margin-top: 20px;
        table-layout: fixed; 
        
    }
    th, td { 
        padding: 12px; 
        text-align: left; 
        border: 1px solid #ddd; 
        word-wrap: break-word; 
    }
    th {
        background-color: #f2f2f2;
    }
    td {
        max-width: 200px; 
        overflow: hidden; 
        text-overflow: ellipsis;
        white-space: nowrap; 
    }
    .header-info h2 {
        font-size: 20px;
        font-weight: bold;
    }
    @media screen and (max-width: 600px) {
        table, th, td {
            font-size: 12px;
            padding: 6px;
        }
        th, td {
            display: block; 
            width: 100%;
        }
    }
 </style>
</head>
<body>
 <div class="header-info">
    <h2>Laporan Produk</h2>
    <h2>PT. Snack</h2>
    <p><strong>Laporan Data Produk</strong></p>
    <p>Periode: 2023-2024</p>
    <p>Tanggal Cetak: {{ date('d F Y') }}</p>
 </div>

 <table>
 <thead>
 <tr>
 </tr>
    <th>Id_produk</th>
    <th>Kategori</th>
    <th>Isi</th>
    <th>Ukuran </th>
    <th>Nama</th>
    <th>Deskripsi</th>
    <th>Expired</th>
    <th>Berat</th>
    <th>Stock</th>
    <th>Harga</th>

 </thead>
 <tbody>

    @foreach($data as $produk)
    <tr>
       <td>{{ $produk->Id_produk }}</td>
        <td>{{ $produk->Kategori }}</td>
        <td>{{ $produk->Isi }}</td>
        <td>{{ $produk->Ukuran }}</td>
        <td>{{ $produk->Nama }}</td>
        <td>{{ $produk->Deskripsi }}</td>
        <td>{{ $produk->Expired }}</td>
        <td>{{ $produk->Berat }}</td>
        <td>{{ $produk->Stock }}</td>
        <td>{{ $produk->Harga }}</td>

    </tr>
 @endforeach
 </tbody>
 </table>
</body>
</html>