<?php
$n=5;
function getName($n) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $n; $i++) {

        $index = rand(0, strlen($characters) - 1);

        $randomString .= $characters[$index];

    }

    return $randomString;

}
?>