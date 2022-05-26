<?php
include '../backend/dbbaglan.php';
session_start();
$sql = "SELECT * FROM kullanici where eposta = '{$_SESSION['eposta']}' ";

$result = $conn -> query($sql);

if($result->num_rows > 0 ){  




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<h2 id="baslik" style="text-align: center;">Bilgilerimi Güncelle</h2>

            <div class="row">
              <div class="veri-al col-12">
                <form class="row g-3 needs-validation m-2" action="../backend/uyeKendiGuncellemeSon.php" method="post" novalidate>
                  <?php 
              while ($row=$result->fetch_assoc()){
                  ?>
                  <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">Ad</label>
                    <input type="text" value="<?php echo $row["adi"] ?>" class="form-control" name="adi" required>
                  </div>
                  <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">Soyad</label>
                    <input type="text" class="form-control" value="<?php echo $row["soyadi"] ?>" name="soyadi" required>
                  </div>
                  <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">E-posta</label>
                    <input type="text" class="form-control" value="<?php echo $row["eposta"] ?>" name="eposta" required>
                  </div>
                  <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">Doğum Tarihi</label>
                    <input type="date" class="form-control" value="<?php echo $row["dogum_tar"] ?>" name="dtarih" required>
                  </div>
                  <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">Cep Telefonu</label>
                    <input type="text" class="form-control" value="<?php echo $row["cep_tel"] ?>" name="telefon" required>
                  </div>
                  <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">Şifre</label>
                    <input type="password" class="form-control" name="sifre" required>
                  </div>
                  
                  <div class="col-md-12">
                    <input class="btn btn-success col-md-12 kayit" id="gonder" type="submit" name="gonder">
                  </div>
                  <?php }} ?>
                </form>
                </div>
</body>
</html>

