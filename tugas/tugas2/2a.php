<?php

$nama1 = "Bima";
$nama2 = "Prakoso";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "$nama1 $nama2<br>";
    }   else if ($i % 3 == 0) {
        echo "$nama1<br>";
    }   else if ($i % 5 == 0) {
        echo "$nama2<br>";
    }   else {
        echo $i . "<br>";
    }
}

?>