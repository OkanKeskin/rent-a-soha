<?php
include './dbbaglan.php';
include './functions.php';

if(isset($_POST["gonder"])){
    $ad = temizle($_POST["adi"]);
    $soyad = temizle($_POST["sadi"]);
    $tc = temizle($_POST["tc"]);
    $dogumTar = temizle($_POST["dtarihi"]);
    $ceptel = temizle($_POST["ceptel"]);
    $eposta = temizle($_POST["eposta"]);
    $sifre = temizle($_POST["sifre"]);
    $sifreT = temizle($_POST["tsifre"]);
}

if($sifre == $sifreT){
    $sifre = $sifre . "<585asffqxx*pll<<pqo>q</";
    $sifre = hash('sha512',$sifre);
    $dogumTar = date("Y-m-d", strtotime($dogumTar));  
    $sql = "INSERT INTO kullanici (adi, soyadi, tc_no,dogum_tar,cep_tel,eposta,sifre,rol_id)
    VALUES (?, ?, ?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $rol_id = 0;
    $stmt->bind_param("sssssssi",$ad, $soyad, $tc,$dogumTar,$ceptel,$eposta,$sifre,$rol_id);
    $stmt->execute();
    if($stmt ==TRUE){
        echo "İşlem Başarılı";
    }
}