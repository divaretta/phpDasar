<?php 

// lingkup variabel
// variabel lokal
$x = 10;

// global
function tampilX() {
    global $x;
    echo $x;
}

tampilX();

?>