<?php
if(isset($_POST["gonder"])){

  
  include "dbbaglan.php";

session_start();

$_SESSION['kul_id']= 4;
//$sql = "INSERT INTO rezervasyon(rez_id,kul_id,teslim_alma_tarihi,teslim_etme_tarihi,arac_id,teslim_alma_ofisi,teslim_etme_ofisi,teslim_alma_saati,teslim_etme_saati,fiyat,rezervasyon_olusturma_tarihi,rezervasyon_guncelleme_tarihi) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
//$stmt = $db->prepare($sql);
//$stmt->bind_param("sssssssi",$ad, $soyad, $tc,$dogumTar,$ceptel,$eposta,$sifre,$rol_id);


$sql = $conn->prepare("insert into rezervasyon(rez_id,kul_id,teslim_alma_tarihi,teslim_etme_tarihi,arac_id,teslim_alma_ofisi,teslim_etme_ofisi,teslim_alma_saati,teslim_etme_saati,fiyat,rezervasyon_olusturma_tarihi,rezervasyon_guncelleme_tarihi) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");

$sql->bind_param("iissiiississ",$rez_id,$kul_id,$teslim_alma_tarihi,$teslim_etme_tarihi,$arac_id,$teslim_alma_ofisi,$teslim_etme_ofisi,$teslim_alma_saati,$teslim_etme_saati,$fiyat,$rezervasyon_olusturma_tarihi,$rezervasyon_guncelleme_tarihi);

  $rez_id = rand(1,249);
  //echo($rez_id);
  $kul_id = 1;//$_SESSION['kul_id'];  

  $arac_id = $_POST['arac_id'];
  
  $teslim_alma_ofisi = $_POST['teslim_alma_ofisi'];
  $teslim_etme_ofisi = $_POST['teslim_etme_ofisi'];

  $teslim_alma_tarihi = $_POST['teslim_alma_tarihi'];
  $teslim_etme_tarihi = $_POST['teslim_etme_tarihi'];

  $teslim_alma_saati = $_POST['teslim_alma_saati'];
  $teslim_etme_saati = $_POST['teslim_etme_saati'];

  //Fiyat işlemleri
  $baslangicTarihi = strtotime($teslim_alma_tarihi); 
  $bitisTarihi = strtotime($teslim_etme_tarihi);
  $fark = ($bitisTarihi - $baslangicTarihi) / 86400;
  $fiyat = $fark*100*$arac_id;
  //echo($fiyat);

  $rezervasyon_olusturma_tarihi = date('Y/m/d');
  $rezervasyon_guncelleme_tarihi = $rezervasyon_olusturma_tarihi;
  //echo($rezervasyon_guncelleme_tarihi);

  //$stmt->execute(array($rez_id,$kul_id,$teslim_alma_tarihi,$teslim_etme_tarihi,$arac_id,$teslim_alma_ofisi,$teslim_etme_ofisi,$teslim_alma_saati,$teslim_etme_saati,$fiyat,$rezervasyon_olusturma_tarihi,$rezervasyon_guncelleme_tarihi));
  $sql->execute();
  echo "Yükleniyor......";
  //header('Refresh:5; url=../rezerve_olustur.html');
}
?>