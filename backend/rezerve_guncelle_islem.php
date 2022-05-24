<?php 
session_start();
if(isset($_POST["teslim_alma_ofisi"])){

   
        
        $sn="localhost";
        $un="root";
        $ps="";
        $db="rentasoha";
        
        $conn=new mysqli($sn,$un,$ps,$db);
        
        if($conn->error){
            echo "DB BAGLANTI HATASI";
        }


        $conn->set_charset("utf8");
        $tao=$_POST["teslim_alma_ofisi"];
        $teo=$_POST["teslim_etme_ofisi"];
        $tat=$_POST["teslim_alma_tarihi"];
        $tet=$_POST["teslim_etme_tarihi"];
    
        $sql  = "update rezervasyon set";

        $result = $conn -> query($sql);

        
    
        $row=$result->fetch_assoc();

           
        
      
    
   
       
   }

   else{
    include '../hatali_bilgi.html';
    header("Refresh: 2; url=../rezervasyonlarim.php");
   }
   
   
   



   ?>