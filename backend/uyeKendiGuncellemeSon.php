<?php
$sn = "localhost"; 
$un = "root";  
$ps = ""; 
$db = "rentasoha"; 
try{
    $db = new PDO("mysql:host=$sn;dbname=$db",$un,$ps);
   
    $db->exec("SET CHARSET UTF8");
    
}
catch(PDOException $e){
    die ("Hata var");
}

session_start();
include './functions.php';

$ad = temizle($_POST["adi"]);
$soyad = temizle($_POST["soyadi"]);
$eposta = temizle($_POST["eposta"]);
$dtarih = temizle($_POST["dtarih"]);
$dtarih = date("Y-m-d", strtotime($dtarih));  
$telefon = temizle($_POST["telefon"]);
$sifre = temizle($_POST["sifre"]);
$sifre = $sifre . "<585asffqxx*pll<<pqo>q</";
$sifre = hash('sha512',$sifre);


$sql = "UPDATE kullanici set adi = '{$ad}', sifre='{$sifre}' , soyadi = '{$soyad}' ,eposta = '{$eposta}',dogum_tar = '{$dtarih}',cep_tel = '{$telefon}' where eposta = '{$_SESSION['eposta']}'";
$stmt = $db->query($sql);
if($stmt ==TRUE){
    header("Refresh: 0; url=../index.php");
}
else{
    echo "Ekleme başarılı değil";
}
?>