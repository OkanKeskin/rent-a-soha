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
include './functions.php';

if(isset($_POST["gonder"])){
    $adi = temizle($_POST["adi"]);
    $kategori = temizle($_POST["kategori"]);
    $fotolink = temizle($_POST["fotolink"]);
    $kapıSayisi = temizle($_POST["kapıSayisi"]);
    $bagajHacmi = temizle($_POST["bagajHacmi"]);
    $airbagSayisi = temizle($_POST["airbagSayisi"]);
    $frenSistemi = temizle($_POST["frenSistemi"]);
    $yakitSistemi = temizle($_POST["yakitSistemi"]);
    $sanziman = temizle($_POST["sanziman"]);
}
else{
    echo "veriler gel";
}

$sql = "INSERT INTO arac (arac_adi, kat_id, arac_foto,kapı_sayisi,airbag_sayisi,bagaj_hacmi,fren_sistemi,yakit_sistemi,sanziman_sistemi)
            VALUES (?, ?, ?,?,?,?,?,?,?)";
$stmt = $db->prepare($sql);
//$stmt->bind_param("sssssssi",$ad, $soyad, $tc,$dogumTar,$ceptel,$eposta,$sifre,$rol_id);
$katId = 0;
if($kategori == "Ekonomik Sınıf"){
    $katId = 1;
}
else if($kategori == "Konfor Sınıf"){
    $katId = 2;
}
else if($kategori == "Lüks Sınıf"){
    $katId = 3;
}
else if($kategori == "Premium Sınıf"){
    $katId = 4;
}
else if($kategori == "Prestij Sınıf"){
    $katId = 5;
}

$stmt->execute(array($adi, $katId, $fotolink,$kapıSayisi,$airbagSayisi,$bagajHacmi,$frenSistemi,$yakitSistemi,$sanziman));

if($stmt ==TRUE){
   include "../bilgilerdogru.html";
   header("Refresh: 2; url=../zadmin/arac-ekle.php");
   
}
else{
    echo "Ekleme başarılı değil";
}


?>

