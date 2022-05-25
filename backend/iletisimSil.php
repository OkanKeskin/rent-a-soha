<?php

include './dbbaglan.php';

$sql  = "DELETE FROM iletisim where mesaj_id= {$_GET['id']}";

$result = $conn -> query($sql);

if($result ==TRUE){
    header("Refresh: 1; url=../zadmin/iletisim.php");
}
else{
    echo "deneme";
}