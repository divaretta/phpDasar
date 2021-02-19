<?php 

// superglobal variable, berasal dari php dan juga global. tipe datanya array asosiatif
// $_GET untuk menampilkan data

// $_GET["nama"] = "diva";
var_dump($_GET);
$mahasiswa = [
    ["nama" => "Nana",
    "nim" => "08839483",
    "jurusan" => "Teknik Informatika", 
    "email" => "abc@yahoo.com" ],

    ["nama" => "Ana", 
    "nim" => "08859348", 
    "jurusan" => "Teknik Informatika", 
    "email" => "abc@yahoo.co.id" ],
    
    ["nama" => "Ani", 
    "nim" => "08823934", 
    "jurusan" => "Teknik Informatika", 
    "email" => "abc@yahoo.co.kr" ]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach($mahasiswa as $m):?>
    <li>
    <!-- ngirim data -->
    <a href="latihan3.php?nama=<?= $m["nama"] ?>
    &nim=<?= $m["nim"]?>&jurusan=<?= $m["jurusan"]?>
    &email=<?= $m["email"]?>">
    <?= $m["nama"];?>
    </li>

    <?php endforeach;?>
    </ul> 
</body>
</html>

