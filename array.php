<?php 

// array : variable yg dapat memiliki banyak nilai
// elemen pd array boleh memiliki tipe data yg berbeda
// pasangan antara key(indeks, dimulai dari angka nol) dan value

$hari = "senin";
$hari2 = "selasa";

// membuat array
$hari = array("Senin", "Selasa", "Rabu");

$bulan = ["Januari", "Februari", "Maret"];
$arr = [123, "text", true];

var_dump ($arr);
echo "<p>";
print_r($bulan);

echo "<p>";

echo $bulan[1];

// menambahkan elemen baru pada array
$bulan[] = "maret";

// var dump agar tau tipe datanya
var_dump($bulan);

?>