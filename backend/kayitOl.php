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
    $ad = temizle($_POST["adi"]);
    $soyad = temizle($_POST["sadi"]);
    $tc = temizle($_POST["tc"]);
    $dogumTar = temizle($_POST["dtarihi"]);
    $ceptel = temizle($_POST["ceptel"]);
    $eposta = temizle($_POST["eposta"]);
    $sifre = temizle($_POST["sifre"]);
    $sifreT = temizle($_POST["tsifre"]);
}

    $query  = $db->query("SELECT * FROM kullanici WHERE eposta='$eposta'",PDO::FETCH_ASSOC);
   
    

if($sifre == $sifreT){
    $say = $query -> rowCount();

        if( $say > 0 ){
            echo "Daha önce kayıt yaptınız.";
            
        }
        else{
            $sifre = $sifre . "<585asffqxx*pll<<pqo>q</";
            $sifre = hash('sha512',$sifre);
            $dogumTar = date("Y-m-d", strtotime($dogumTar));  
            $sql = "INSERT INTO kullanici (adi, soyadi, tc_no,dogum_tar,cep_tel,eposta,sifre,rol_id)
            VALUES (?, ?, ?,?,?,?,?,?)";
            $stmt = $db->prepare($sql);
            $rol_id = 0;
            //$stmt->bind_param("sssssssi",$ad, $soyad, $tc,$dogumTar,$ceptel,$eposta,$sifre,$rol_id);
            $stmt->execute(array($ad, $soyad, $tc,$dogumTar,$ceptel,$eposta,$sifre,$rol_id));
            if($stmt ==TRUE){
                include '../uyeOlBasarili.html';
                header("Refresh: 5; url=../Giris.html");
            }
        }
}
