<?php

$path = 'counter.txt';

if (is_readable($path)) {
    $file  = fopen( $path, 'r' );
    $count = fgets( $file, 1000 );
    fclose($file);
    $count = abs( intval( $count ) ) + 1;
    echo $count;
}

//if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['increment'] == 'true') {
if (isset($_POST['increment']) && $_POST['increment'] == true) {
    $file = fopen($path, 'w');
    fwrite($file, $count);
    fclose($file);
}