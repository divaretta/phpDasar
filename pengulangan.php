<?php

// for

/*
for()
didalamnya ada 3
1. inisialisasi = nilai awal
2. kondisi terminasi = memberhentikan pengulangan
3. increment atau dicrement = menentukan pengulangannya maju atau mundur
*/

for ($i = 0; $i < 5; $i++){
    echo "Hello World! <br>";
}

// while
// kalo kondisinya true, lakukan yang di dalam curly bracket {}

$f = 0;
while($f < 5){
    echo "Hello!! <br>";
    $f++;
}

// do while
/* 
lakukan hal ini selama kondisinya true
jalankan dulu, baru cek kondisi
*/

$y = 0;
do {
    
    echo "Hello World? <br>";
    $y++;

} while($y < 5);

// cuma nampilin satu

?>