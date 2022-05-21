<?php
$sn="localhost";
$un="root";
$ps="";
$db="rentasoha";

$conn=new mysqli($sn,$un,$ps,$db);

if($conn->error){
    echo "DB BAGLANTI HATASI";
}


?>
