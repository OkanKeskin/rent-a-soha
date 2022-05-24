<?php
if(isset($_POST["gonder"])){

include "dbbaglan.php";

session_start();

$_SESSION['kul_id']= 1;


$sql = $conn->prepare("insert into rezervasyon(kul_id,teslim_alma_tarihi,teslim_etme_tarihi,arac_katagori,teslim_alma_ofisi,teslim_etme_ofisi,teslim_alma_saati,teslim_etme_saati) values (?,?,?,?,?,?,?,?)");


  $kul_id = $_SESSION['kul_id'];
  $arac_katagori = $_POST['arac_katagori'];
  $teslim_alma_ofisi = $_POST['teslim_alma_ofisi'];
  $teslim_etme_ofisi = $_POST['teslim_etme_ofisi'];
  $teslim_alma_tarihi = $_POST['teslim_alma_tarihi'];
  $teslim_etme_tarihi = $_POST['teslim_etme_tarihi'];
  $teslim_alma_saati = $_POST['teslim_alma_saati'];
  $teslim_etme_saati = $_POST['teslim_etme_saati'];

  
  $sql->execute();
  echo "Yükleniyor......";
  header('Refresh:5; url=../rezerve_olustur.html');
}
?>