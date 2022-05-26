<?php 

include "../backend/dbbaglan.php";


$sql = "SELECT * FROM rezervasyon inner join kullanici on rezervasyon.kul_id = kullanici.kul_id";

$result = $conn -> query($sql);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Üye İşlemleri</title>
    <link rel="shortcut icon" type="image/png" href="../assets/logo.ico"/>
    <link rel="stylesheet" href="../css/panel.css">
    <link rel="stylesheet" href="../css/uye-islemleri.css">
    <link rel="stylesheet" href="../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script>
        $(function(){
            var side = $("#side");
            var sidebar = $("#sidebar");
            var cross = $("#cross");
            var down = $(".down");
            var up = $(".up");
            var con = $(".con");
            var num = $(".num");
            var numG = $(".numG");
            var kay = $("#kay");

            sidebar.hide();
            cross.hide();
            side.click(function(){
                sidebar.slideToggle("slow",function(){
                    side.hide();
                    cross.show();
                })
            })

            cross.click(function(){
                sidebar.slideToggle("slow",function(){
                    cross.hide();
                    side.show();
                })
            })

    

        })
    </script>
</head>
<body>
    <header>
        <!-- <img style="border-radius: 30px;" src="../assets/logo2.png" alt=""> -->
        <h1 class="baslik">Admin Panel</h1>
        <h5 style="margin-right: 10px;">Hoş Geldin Admin_adı</h5>
    </header>
    <div class="panel-container">
        <div class="selections" id="sidebar">
            <ul>
                <li><a href="arac-ekle.php">Araç Ekle</a></li>
                <li><a href="arac-guncelle.php">Araç Güncelle/Sil</a></li>
                <li><a href="uye-islemleri.php">Üye İşlemleri</a></li>
                <li><a href="iletisim.php">İletişim</a></li>
                <li><a href="rezervasyonlar.php">Rezervasyonlar</a></li>
            </ul>
            <a class="cikis" href="../index.php">Çıkış Yap</a>
        </div>
        <div class="button" id="side">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </div>
        <div class="cross" id="cross">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" style="color: #000000;" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
              </svg>
        </div>
        <div class="content">
            <h1>Rezervasyonlar</h1>
            <div class="alt">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Ad Soyad</th>
                        <th scope="col">Rezervasyon Tarihi</th>
                        <th scope="col">Teslim Tarihi</th>
                        <th scope="col">Fiyat</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        if($result->num_rows > 0 ){
                            while ($row=$result->fetch_assoc()){
                    ?>
                      <tr>
                        <th scope="col" id="num" class="num"><?php echo $row["rez_id"] ?></th>
                        <th scope="col" id="adi"><?php echo $row["adi"] . " " . $row["soyadi"] ?></th>
                        <th scope="col" id="yetii"><?php echo $row["teslim_alma_tarihi"]?></th>
                        <th scope="col" id="epost"><?php echo $row["teslim_etme_tarihi"] ?></th>
                        <th scope="col" id="epost"><?php echo $row["fiyat"] . " TL" ?></th>
                    </tr>
                    <?php }}?>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>



    <script src="../js/panel.js"></script>
</body>
</html>