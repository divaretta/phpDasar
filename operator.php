<?php

// operator penggabung string (.)

$nama1 = "ana";
$nama2 = "ani";

echo $nama1 . "  " . $nama2;
echo "<p>";

// operator aritmatika
// + - * / %

$x = 10;
$y = 15;
echo "hasil dari $x + $y = "; 
echo $x + $y;
echo "<br>";

echo $x - $y; 
echo "<br>";

echo $x / $y; 
echo "<br>";

echo $x * $y; 

// operator assignment

// = , += , -= , *= , /= , %= , .=

$x = 1;
$x -= 5;
echo $x;
echo "<br>";

$x = 1;
$x = 5;
echo $x;
echo "<br>";

// kalo sama variabelnya, yang kebaca yang paling bawah

$nama = "diva";
$nama .= " ";
$nama .= "retta";
echo $nama;
echo "<br>";

// operator perbandingan tdk peduli tipe datanya apa yg penting nilainya sama
// < , > , <= , >= , == , !=

// var_dump digunakan untuk debugging

var_dump(1 == "1");
echo "<br>";

// operator identitas
// === , !===
// ngebaca tipe datanya


var_dump(1 === 3);


?>