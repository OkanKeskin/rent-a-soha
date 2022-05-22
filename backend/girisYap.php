<?php

include './dbbaglan.php';
include './functions.php';

if(isset($_POST["gonder"])){
    $eposta = $_POST["eposta"];
    $sifre =  $_POST["sifre"];

    $sifre = $sifre . "<585asffqxx*pll<<pqo>q</";
    $sifre = hash('sha512',$sifre);
    $sorgu = $conn->prepare("SELECT * FROM kullanici WHERE sifre = ? and eposta = ?");
    $de = $sorgu->bind_param("ss",$sifre,$eposta);
    $sorgu->execute();

    $cikti = $sorgu->fetch(PDO::FETCH_ASSOC);
    echo $cikti['adi'];
    // if($row){
    //     print $row['adi'] . "\t";
    // }
    // else{
    //     echo "yok";
    // }
    
    
    
}


