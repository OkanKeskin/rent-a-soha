<?php
include "../backend/dbbaglan.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Araç Güncelle</title>
    <link rel="shortcut icon" type="image/png" href="../assets/logo.ico" />
    <link rel="stylesheet" href="../css/panel.css">
    <link rel="stylesheet" href="../css/tum_araclar.css">
    <link rel="stylesheet" href="../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script>
    $(function() {
        $(".arac_bolumu_kartli_yapi").click(function() {
            $(a).html("<h3>Deneme</h3>");
            $(".arac_bolumu_kartli_yapi").append(a);
        })

        var side = $("#side");
        var sidebar = $("#sidebar");
        var cross = $("#cross");
        sidebar.hide();
        cross.hide();
        side.click(function() {
            sidebar.slideToggle("slow", function() {
                side.hide();
                cross.show();
            })
        })

        cross.click(function() {
            sidebar.slideToggle("slow", function() {
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

            </ul>
            <a class="cikis" href="../index.html">Çıkış Yap</a>
        </div>
        <div class="button" id="side">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </div>
        <div class="cross" id="cross">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" style="color: #000000;" fill="currentColor"
                class="bi bi-x" viewBox="0 0 16 16">
                <path
                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
            </svg>
        </div>
        <div class="content">
            <!-- TÜM araçlar BAŞLANGIÇ -->
            <?php   
        
        


        $sql = "SELECT * FROM arac as a inner join arac_kategori as ktg on a.kat_id=ktg.kat_id ";

        $result = $conn -> query($sql);

        if($result->num_rows > 0 ){



        while ($row=$result->fetch_assoc()){

        ?>
            <div class="col-sm-4">
                <!-- Cols-1 BAŞLANGIÇ-->

                <!-- CİTROEN C3 BAŞLANGIÇ-->
                <div class="arac_bolumu_kartli_yapi">




                    <div class="card">
                        <div class="card-header">
                            <div class="arac_isim">
                                <h3><?php echo $row['arac_adi'] ;  ?></h3>
                            </div>
                            <div class="arac_sinif">
                                <p><?php echo $row['kat_adi'] ;  ?></p>
                            </div>

                        </div>
                        <img class="card-img-top" src="<?php echo $row['arac_foto'] ;?>" alt="resim"
                            style="max-width: 100%;">
                        <div class="card-body">

                            <div class="resim_alti_bilgi">
                                <!--RESİM ALTI BİLGİLENDİRME BAŞLANGIÇ-->

                                <div class="arac_ozellikleri">
                                    <!--ARAÇ ÖZELLİKLERİ BAŞLANGIÇ-->


                                    <div class="item">
                                        <!--ARAÇ ÖZELLİKLERİ alt başlık BAŞLANGIÇ-->
                                        <b class="list-title">Araç Özellikleri</b>
                                        <ul class="icon-list">
                                            <li>
                                                <i class="fa fa-users"></i>
                                                <span><?php echo $row['kapı_sayisi'] ;  ?> </span>
                                            </li>
                                            <li>
                                                <i class="fas fa-suitcase-rolling"></i>
                                                <span> <?php echo $row['airbag_sayisi'] ;  ?></span>
                                            </li>
                                            <li>
                                                <i class="fas fa-user-friends"></i>
                                                <span><?php echo $row['bagaj_hacmi'] ;  ?></span>
                                            </li>
                                            <li>
                                                <i class="fa fa-automobile"></i>
                                                <span><?php echo $row['fren_sistemi'] ;  ?></span>
                                            </li>
                                            <li>
                                                <i class="fa fa-car"></i>
                                                <span><?php echo $row['yakit_sistemi'] ;  ?></span>
                                            </li>
                                            <li>
                                                <i class="fa fa-automobile"></i>
                                                <span><?php echo $row['sanziman_sistemi'] ;  ?></span>
                                            </li>

                                        </ul>

                                    </div>
                                    <!--ARAÇ ÖZELLİKLERİ alt başlık BİTİŞ-->
                                </div>
                                <!--ARAÇ ÖZELLİKLERİ BİTİŞ-->


                                <div class="kiralama_kosullari">
                                    <!--KİRALAMA KOŞULLARI BAŞLANGIÇ-->

                                    <div class="item">
                                        <!--KİRALAMA KOŞULLARI alt başlık  BAŞLANGIÇ-->
                                        <b class="list-title">Kiralama Koşulları</b>
                                        <ul class="icon-list">
                                            <li>
                                                <i class="fa fa-calendar"></i>
                                                <span>21 Yaş ve Üstü</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-user-alt"> </i>
                                                <span>Ehliyet Yaşı 1 ve Üzeri</span>
                                            </li>
                                            <li>
                                                <i class="far fa-credit-card"></i>
                                                <span>1 Kredi Kartı</span>
                                            </li>



                                        </ul>

                                    </div>
                                    <!--KİRALAMA KOŞULLARI alt başlık BİTİŞ-->
                                </div>
                                <!--KİRALAMA KOŞULLARI BİTİŞ-->
                            </div>
                            <!--RESİM ALTI BİLGİLENDİRME BİTİŞ-->

                            <div class="button">
                                <!--BUTON BAŞLANGIÇ-->

                                <a href="rezerve_olustur.html" class="btn btn-danger">Rezerve et</a>
                            </div>
                            <!--BUTON BİTİŞ-->

                        </div>
                    </div>

                </div>






            </div>
            <!-- CİTROEN C3 BİTİŞ-->

        </div><!-- Cols-1 bitiş-->




        <?php }} ?>
    </div>
    </div>






    <script src="../js/panel.js"></script>
</body>

</html>