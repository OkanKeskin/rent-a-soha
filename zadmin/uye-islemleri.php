<?php 

include "../backend/dbbaglan.php";


$sql = "SELECT * FROM kullanici";

$result = $conn -> query($sql);



?>i

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

            con.hide();
            up.hide();
            down.click(function(){
                numG.text(num.text())
                con.slideToggle("slow",function(){
                    con.show();
                    up.show();
                    down.hide();
                })
            })

            up.click(function(){
                con.slideToggle("slow",function(){
                    con.hide();
                    up.hide()
                    down.show();
                })
            })
            
            kay.click(function(){
                var yeti =$("#yeti").find(":selected").text();
                $("#yetii").text(yeti);

                var ad = $("#adsoy").val();
                $("#ads").text(ad);

                var epos = $("#epos").val();
                $("#epost").text(epos);
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
            </ul>
            <a class="cikis" href="../index.html">Çıkış Yap</a>
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
            <h1>Üye İşlemleri</h1>
            <div class="ust">
                <div class="searchs">
                    <label for="search">Üye Ara</label>
                    <input type="search" name="" id="search">
                </div>
                <div class="filter">
                    <a href="">Adminler</a>
                    <a href="">Kullanıcılar</a>
                </div>
            </div>
            <div class="alt">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Ad Soyad</th>
                        <th scope="col">Yetki Derecesi</th>
                        <th scope="col">E-Posta</th>
                        <th scope="col">Güncelle</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        if($result->num_rows > 0 ){
                            while ($row=$result->fetch_assoc()){
                    ?>
                      <tr>
                        <th scope="col" id="num" class="num"><?php echo $row["kul_id"] ?></th>
                        <th scope="col" id="ads"><?php echo $row["adi"] . " " . $row["soyadi"] ?></th>
                        <th scope="col" id="yetii"><?php echo $row["rol_id"] == 1 ? "Admin" : "Kullanıcı" ?></th>
                        <th scope="col" id="epost"><?php echo $row["eposta"] ?></th>
                        <th scope="col">
                            <svg id="down" class="down" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            <svg id="up" class="up" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-up" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 3.707 2.354 9.354a.5.5 0 1 1-.708-.708l6-6z"/>
                                <path fill-rule="evenodd" d="M7.646 6.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 7.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                            </svg>
                        </th>
                        <th class="con">
                            <div class="conn">
                                <table class="table con" id="con">
                                      <tr>
                                          <th scope="col" id="numG" class="m-0 numG"></th>
                                          <th scope="col"><input type="text" class="adsoy" id="adsoy" placeholder="Ad Soyad"></th>
                                          <th scope="col">123</th>
                                          <th scope="col">
                                              <select name="" id="yeti">
                                                  <option selected value="admin">Admin</option>
                                                  <option value="uye">Üye</option>
                                              </select>
                                          </th>
                                          <th scope="col"><input type="text" class="adsoy" id="epos" placeholder="E-Posta"></th>
                                          <th scope="col">
                                                <button class="btn btn-success" id="kay">Kaydet</button>
                                          </th>
                                      </tr>
                                </table>
                            </div>
                        </th>
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