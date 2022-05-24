<?php 
session_start();
if(isset($_POST["rezno"])){

   
        $rezid=$_POST["rezno"];
        $soyad=$_POST["soyad"];
        
        $sn="localhost";
        $un="root";
        $ps="";
        $db="rentasoha";
        
        $conn=new mysqli($sn,$un,$ps,$db);
        
        if($conn->error){
            echo "DB BAGLANTI HATASI";
        }

        $conn->set_charset("utf8");
    
    
        $sql  = "SELECT*FROM rezervasyon as r inner join kullanici as k on r.kul_id=k.kul_id  where r.rez_id='".$rezid."' and k.soyadi='".$soyad."'";

        $result = $conn -> query($sql);

        if($result->num_rows > 0){
    
        $row=$result->fetch_assoc();

            
        $_SESSION["rez"]=$rezid;
        $_SESSION["adi"]=$row["adi"];
        $_SESSION["soy"]=$soyad;
        $_SESSION["rez_tar"]=$row["rez_tar"];
        $_SESSION["teslim_etme_tarihi"]=$row["teslim_etme_tarihi"];
        
        
       include '../girisYapBasarili.html';
       header("Refresh: 2; url=../rezerve_detay.php");
    }
    
    else{
        include '../hatali_bilgi.html';
        header("Refresh: 2; url=../rezervasyonlarim.php");
       }
       
   }

   else{
    include '../hatali_bilgi.html';
    header("Refresh: 2; url=../rezervasyonlarim.php");
   }
   
   
   



   ?>