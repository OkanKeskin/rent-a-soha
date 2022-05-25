<?php 



   if(isset($_GET["id"])){
        
        $sn="localhost";
        $un="root";
        $ps="";
        $db="rentasoha";
        
        $conn=new mysqli($sn,$un,$ps,$db);
        
        if($conn->error){
            echo "DB BAGLANTI HATASI";
        }

        $conn->set_charset("utf8");
        
        $arac_id = $_GET["id"];
        
        
      

        $sql  = "DELETE FROM arac where arac_id = {$arac_id}  ";

        $result = $conn -> query($sql);


        if($result==true){
    
       
       include '../bilgilerdogru.html';
       header("Refresh: 2; url=../zadmin/arac-guncelle.php");
    }
    
    else{
        include '../hatali_bilgi.html';
        header("Refresh: 2; url=../rezervasyonlarim.php");
       }
       
   

   
    }
   
   



   ?>