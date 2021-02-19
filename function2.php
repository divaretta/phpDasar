<?php

 // date() untuk menampilkan tanggal dg format tertentu

 date_default_timezone_set("Asia/jakarta");
 echo date("l, d M Y");
 echo "<br>";
 echo date("H:i:s");
 echo "<br>";

 // detik yang sudah berlalu sejak 1 Januari 1970

 echo time();
 echo "<p>";

// detik ; menit ; 24 jam
 echo date("l, d M Y", time()+60*60*24*100);

 // kalo yg lalu pake - 

 // strtotime : string to time

 echo date ("l", strtotime("14 November 2001"));


?>