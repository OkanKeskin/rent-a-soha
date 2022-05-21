<?php
include './dbbaglan.php';
include './functions.php';

if(isset($_POST["gonder"])){
    $ad = temizle($_POST["adi"]);
}


echo $ad;