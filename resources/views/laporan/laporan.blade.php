<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Laporan Cart</title>
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
    <h2>Laporan fINAL</h2>
    <h2>PT. Snack</h2>
    <p><strong>Laporan Data Final</strong></p>
    <p>Periode: 2023-2024</p>
    <p>Tanggal Cetak: {{ date('d F Y') }}</p>
 </div>

 <table>
 <thead>
 <tr>
 </tr>
    <th>No. Resi Pesanan</th>   
    <th>Nama Produk</th>
    <th>Kuantitas Pesanan</th>
    <th>Total Harga Produk</th>
 </thead>
 <tbody>

    @foreach($data as $rows)
    <tr>
        <td>{{ $rows->no_resi_pesanan }}</td>
        <td>{{ $rows->nama_produk }}</td>
        <td>{{ $rows->kuantitas }}</td>
        <td>{{ $rows->total_harga_produk }}</td>
    </tr>
 @endforeach
 </tbody>
 </table>
</body>
</html>