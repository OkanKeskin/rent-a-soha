<?php
session_start();
include './/dbbaglan.php';
if(isset($_POST["gonder"])){
    $yetki = $_POST["yetki"];
    $yetkis = 0;
    if($yetki == "1"){
      $yetkis = 1;
    }
    echo "sda";
    //$sql  = "UPDATE kullanici SET rol_id = $yetki WHERE kul_id = $_SESSION['uyeGuncelleId']";

    $result = $conn -> query("UPDATE kullanici SET rol_id = $yetkis WHERE kul_id = {$_SESSION['uyeGuncelleId']}");
    if($result==true){
        header("Refresh: 0.5; url=../zadmin/uye-islemleri.php");
    }
}