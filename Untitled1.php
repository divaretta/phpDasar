<?php 

$score = 85;

if($score >= 90 && $score <= 100) {
    echo "A";
} else if ($score >= 80 && $score < 90){
    echo "B";
} else if ($score >= 70 && $score < 80) {
    echo "C";
} else {
    echo "Tidak lulus ujian";
}

?>