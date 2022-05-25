<?php 
session_start();


   

         $sn="localhost";
         $un="root";
         $ps="";
         $db="rentasoha";
         
         $conn=new mysqli($sn,$un,$ps,$db);
         
         if($conn->error){
             echo "DB BAGLANTI HATASI";
         }
 
         $conn->set_charset("utf8");
         
         $arac_id = $_SESSION["arac_id"];
         
         
       
 
        
   $arac_adi=$_POST["arac_adi"];
   $kategori=$_POST["kategori"];
   $kapı_sayisi=$_POST["yolcu"];
   $airbag=$_POST["airbag"];
   $bagaj=$_POST["bagaj"];
   $fren=$_POST["fren"];
   $yakit=$_POST["yakit"];
   $sanziman=$_POST["sanziman"];
   $arac_foto=$_POST["arac_foto"];
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

   $sql="UPDATE arac SET arac_adi='{$arac_adi}',kat_id={$katId},kapı_sayisi={$kapı_sayisi},airbag_sayisi={$airbag},bagaj_hacmi={$bagaj},fren_sistemi='{$fren}',yakit_sistemi='{$yakit}',sanziman_sistemi='{$sanziman}',arac_foto='{$arac_foto}' where arac_id={$arac_id}";
 
         $result = $conn -> query($sql);

 
         if($result==true){
     
        
        include '../bilgilerdogru.html';
        header("Refresh: 2; url=../zadmin/arac-guncelle.php");
     }
     
     else{
     echo "adsd";
        }
        
    
 
    
     
    
   
   
   
   
 



   ?>