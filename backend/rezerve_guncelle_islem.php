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
        $tat=date("Y-m-d", strtotime($_POST["teslim_alma_tarihi"]));  
        $tet=date("Y-m-d", strtotime($_POST["teslim_etme_tarihi"]));  
        $tas=date("H:i:s", strtotime($_POST["teslim_alma_saati"])); 
        $tes=date("H:i:s", strtotime($_POST["teslim_etme_saati"]));
        $rezid=$_SESSION["rez"];


        $sql  = "UPDATE rezervasyon SET teslim_alma_ofisi='".$tao."',teslim_etme_ofisi='".$teo."',rez_tar='".$tat."',teslim_etme_tarihi='".$tet."',teslim_alma_saati='".$tas."',teslim_etme_saati='".$tes."',rezervasyon_guncelleme_tarihi=DATE(NOW()) WHERE rez_id=".$rezid." ";

        $result = $conn -> query($sql);

        if($result==true){
            include '../rezerve_basarili.html';
            header("Refresh: 2; url=../rezervasyonlarim.php");
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