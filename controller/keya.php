<?php
if (isset($_POST["k"])) {
    $k = $_POST["k"];
    include 'key.php';
    for ($f=1; $f<=$k; $f++)
    {
        $key1 = getName($n);
        $key2 = getName($n);
        $key3 = getName($n);
        $key = $key1."-".$key2."-".$key3;
        //echo $key."<br>";
    }
} else {
    $key = "";
}

?>