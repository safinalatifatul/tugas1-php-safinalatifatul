<?php


echo"<h3>Program menghitung nilai Akhir</h3>";
echo"================================== <br />";
$namaLengkap = "Safina latifatul";
$kelas= "X RPL 1";

$nilaiHarian = 95 * 30 / 100;
$nilaiUTS = 95 * 30 / 100;
$nilaiUAS = 95 * 30 / 100;
$nilaiAkhir = $nilaiHarian + $nilaiUTS + $nilaiUAS;
$predikatNilai = 81;

echo"Nama:Safina Latifatul<br />";
echo"Kelas:X RPL 1<br />";
echo"nilaiHarian : $nilaiHarian<br/>";
echo"nilaiUTS : $nilaiUTS<br />";
echo"nilaiUAS : $nilaiUAS<br />";
echo"nilaiAkhir : $nilaiAkhir<br />";

if($nilaiAkhir >= 90 && $nilaiAkhir <=100){
    echo"Predikat nilaiAkhir = A+";
}else if($nilaiAkhir >= 85 && $nilaiAkhir <=89){
    echo"Predikat nilai = A";
}else if($nilaiAkhir >= 80 && $nilaiAkhir <=84){
    echo"Predikat nilai = B+";
}else if($nilaiAkhir >= 76 && $nilaiAkhir <= 79){
    echo"Predikat nilai = B";
}else if($nilaiAkhir >= 60 && $nilaiAkhir <= 75){
    echo"Predikat nIlai = C";
}else if($nilaiAkhir >= 40 && $nilaiAkhir <= 59){
    echo"Predikat nIlai = D";
}else if($nilaiAkhir >= 0 && $nilaiAkhir <= 39){
        echo"Predikat nIlai = E";
}


?>