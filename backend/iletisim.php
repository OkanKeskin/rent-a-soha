
<?php
if(isset($_POST['mesaj']))
{
  include "dbbaglan.php";


	

	$sql = $conn->prepare("insert into iletisim (adi,soyadi,eposta,mesaj) values (?,?,?,?)");

  $sql->bind_param("ssss",$ad,$soyad,$email,$mesaj);

  $ad=$_POST['ad'];
	$soyad=$_POST['soyad'];
  $email=$_POST['email'];
	$mesaj=$_POST['mesaj'];
  
  $sql->execute();

  header('Refresh:0; url=../iletisim.php');
  

}
?>