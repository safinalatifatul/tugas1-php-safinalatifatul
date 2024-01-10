<?php

$harga_barang = 150000;
$jumalah_barang = 3;
$total_harga = $harga_barang * $jumalah_barang;


if($total_harga > 100000){
    $total_harga = $harga_barang * $jumalah_barang - 50000;
}else{
    $total_harga = $harga_barang * $jumalah_barang;
}

echo"<h1>====Program menghitung pembelian produk====</h1><br />";
echo"Nama barang:Printer lasterjet 1001<br />";
echo"Kode barang:P001 <br />";
echo"Kategori:Elektronik <br />";
echo"Harga barang:Rp.150000 <br />";
echo"Jumlah barang:3 <br />";
echo"Total harga: Rp.$total_harga<br />";
echo"Status:<span 
style ='color:green'>Sudah di bayar</span><br />";


//harga_barang
?>
