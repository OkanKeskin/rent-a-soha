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
    
        $rezid= $_SESSION["rez"];
        
      

        $sql  = "DELETE FROM rezervasyon where rez_id='".$rezid."' ";

        $result = $conn -> query($sql);


        if($result==true){
    
       
       include '../girisYapBasarili.html';
       header("Refresh: 2; url=../index.html");
    }
    
    else{
        include '../hatali_bilgi.html';
        header("Refresh: 2; url=../rezervasyonlarim.php");
       }
       
   

   
   
   
   



   ?>