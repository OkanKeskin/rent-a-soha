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
    $eposta = $_POST["eposta"];
    $sifre =  $_POST["sifre"];

    $sifre = $sifre . "<585asffqxx*pll<<pqo>q</";

    $sifre = hash('sha512',$sifre);

    $query  = $db->query("SELECT * FROM kullanici WHERE eposta='$eposta' && sifre='$sifre'",PDO::FETCH_ASSOC);
   
    if ( $say = $query -> rowCount() ){

        if( $say > 0 ){
            session_start();
            $_SESSION['oturum']=true;
            $_SESSION['eposta']=$eposta;
            $_SESSION['sifre']=$sifre;
            
            include '../girisYapBasarili.html';
        header("Refresh: 4; url=../index.html");
            
        }
        else{
            echo "oturum açılmadı hata";
        }
    // if($row){
    //     print $row['adi'] . "\t";
    // }
    // else{
    //     echo "yok";
    // }
    
    
    
}

}