<?php

// untuk cetak teks
/* 
untuk lebih panjang
*/

echo "Hello World!";
echo "<p>";
echo 'Hello World!';

// petik satu jg bisa digunakan, hasilnya sama. tapi " lebih direkomendasikan

// header max ada 6

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- ctrl + slash  -->
<!-- php di dalam html -->
    <h1>Selamat Datang <?php echo "diva"?></h1> 

<!-- html di dalam php -->
    <?php echo"<h1> hi </h1>"?>

</body>
</html>
