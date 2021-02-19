<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna-baris{
            background-color: pink;
        }
    </style>
</head>
<body>
    <table border = "1" cellpadding = "10" cellspacing = "0">
    <?php for($baris = 1; $baris <= 5; $baris++ ): ?>
    
    <?php if($baris % 2 == 0):?>
    <tr class="warna-baris">
    <?php else:?>
    <tr>
    <?php endif; ?>
       
        <!-- titik dua ini adalah buka kurung dan tutupnya pake endfor  -->
        <?php for($kolom = 1; $kolom <= 5; $kolom++ ): ?>
        <td><?php echo"$baris, $kolom" ?></td>
        <?php endfor; ?>
    </tr>
    <?php endfor; ?>
    
    </table>
</body>
</html>