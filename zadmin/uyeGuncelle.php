<?php
include "../backend/dbbaglan.php";
session_start();
$_SESSION["uyeGuncelleId"] = $_GET["id"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Araç Güncelleme</title>
    <link rel="shortcut icon" type="image/png" href="../assets/logo.ico"/>
    <link rel="stylesheet" href="../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<body>
        <div class="container">
            <h2 id="baslik">Üye Güncelle Jaguar ...</h2>
            <form class="row g-3 needs-validation m-2" action="../backend/uyeGuncelleSon.php" method = "post">
                <div class="col-md-12">
                  <label class="form-label">Üye Yetkisi</label>
                  <select class="form-select" name="yetki" required>
                    <option value = "1">Admin</option>
                    <option value = "0">Kullanıcı</option>
                  </select>
                </div>
                <input type="submit" class="btn btn-success" value="Güncelle" name="gonder">
            </form>
        </div>
</body>
</html>