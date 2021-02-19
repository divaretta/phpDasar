<!-- array asosiatif -->

<?php
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

// memanggil Ani
echo $mahasiswa[2][0];

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
    <?php foreach($mahasiswa as $m):?>
    <ul>
        <li>Nama : <?= $m["nama"]?></li>
        <li>NIM : <?= $m["nim"]?></li>
        <li>Jurusan : <?= $m["jurusan"]?></li>
        <li>Email : <?= $m["email"]?></li>
    </ul>
    <?php endforeach;?>
</body>
</html>