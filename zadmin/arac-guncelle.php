<?php
include "../backend/dbbaglan.php";
session_start();
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </div>
        <div class="cross" id="cross">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" style="color: #000000;" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
            </svg>
        </div>





        <div class="row">
            <?php

            $sql = "SELECT * FROM arac as a inner join arac_kategori as ktg on a.kat_id=ktg.kat_id ";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                     $_SESSION["arac_id"]=$row["arac_id"];  
            ?>
                    <div class="col-sm-6">
                        <!-- Cols-1 BAŞLANGIÇ-->
                       
                            <!-- CİTROEN C3 BAŞLANGIÇ-->
                            <div class="arac_bolumu_kartli_yapi">




                                <div class="card">
                                    <div class="card-header">

                                        <div class="arac_isim">
                                            <h3><?php echo $row['arac_adi'];  ?></h3>
                                        </div>
                                        <div class="arac_sinif">
                                            <p> <?php echo $row['kat_adi']; ?></p>
                                        </div>

                                    </div>
                                    <img class="card-img-top" src="<?php echo $row['arac_foto']; ?>" alt="resim" style="max-width: 100%;">
                                    <div class="card-body">

                                        <div class="resim_alti_bilgi">
                                            <!--RESİM ALTI BİLGİLENDİRME BAŞLANGIÇ-->

                                            <div class="arac_ozellikleri">
                                                <!--ARAÇ ÖZELLİKLERİ BAŞLANGIÇ-->


                                                <div class="item">
                                                    <!--ARAÇ ÖZELLİKLERİ alt başlık BAŞLANGIÇ-->
                                                    <b class="list-title">Araç Özellikleri</b>
                                                    <form action="../backend/arac_guncelle_bc.php" method="POST">
                                                        <table class="table table-striped">
                                                            <tr>
                                                                <td><i>Araç Adı: </i>
                                                                </td>
                                                                <td> <span> <input type="text" name="arac_adi" value="<?php echo $row['arac_adi'];  ?>"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <td><i>Kategori: </i></td>
                                                                <td><select class="form-select" style=" height:30px;width:100% ;" required id="list" name="kategori">
                                                                        <option value="<?php echo $row['kat_adi'];?>" selected disabled><?php echo $row['kat_adi'];  ?></option>
                                                                        <option value="Ekonomik Sınıf">Ekonomik Sınıf</option>
                                                                        <option value="Konfor Sınıf">Konfor Sınıf</option>
                                                                        
                                                                        <option value="Lüks Sınıf">Lüks Sınıf</option>
                                                                        <option value="Premium Sınıf">Premium Sınıf</option>
                                                                        <option value="Prestij Sınıf">Prestij Sınıf</option>
                                                                    </select></td>
                                                            </tr>

                                                            <tr>
                                                                <td> <i>Kişi Sayısı:</i></td>
                                                                <td><span>
                                                                        <select name="yolcu">
                                                                            <option value="<?php echo $row['kapı_sayisi'];  ?>" selected disabled><?php echo $row['kapı_sayisi'];  ?></option>
                                                                            <option value="4">4 Yetişkin</option>
                                                                            <option value="5">5 Yetişkin</option>
                                                                        </select>
                                                                    </span></td>
                                                            </tr>
                                                            <tr>
                                                                <td> <i>Airbag Sayısı: </i></td>
                                                                <td> <span> <input type="number" name="airbag" value="<?php echo $row['airbag_sayisi'] ;  ?>"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <td> <i>Bagaj Hacmi:</i></td>
                                                                <td><span><input type="number" name="bagaj" value="<?php echo $row['bagaj_hacmi'];  ?>"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <td><i>Fren:</i></td>
                                                                <td><span>
                                                                        <select name="fren">
                                                                            <option value="<?php echo $row['fren_sistemi'];  ?>" selected disabled><?php echo $row['fren_sistemi'];  ?></option>
                                                                            <option value="ABS">ABS</option>
                                                                            <option value="ESP">ESP</option>
                                                                            <option value="Havalı">Havalı</option>
                                                                            <option value="Hidrolik">Hidrolik</option>
                                                                        </select></span></td>
                                                            </tr>
                                                            <tr>
                                                                <td><i>Yakıt:</i></td>
                                                                <td>
                                                                    <span> <select name="yakit">
                                                                            <option value="<?php echo $row['yakit_sistemi'];  ?>" selected disabled><?php echo $row['yakit_sistemi'];  ?></option>
                                                                            <option value="Benzin">Benzin</option>
                                                                            <option value="Benzin/Gaz">Benzin/Gaz</option>
                                                                            <option value="Dizel">Dizel</option>
                                                                            <option value="Gaz">Gaz</option>
                                                                        </select> </span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td> <i>Şanszıman:</i></td>
                                                                <td><span> <select name="sanziman">

                                                                            <option value="<?php echo $row['sanziman_sistemi'];  ?>" selected disabled><?php echo $row['sanziman_sistemi'];  ?></option>
                                                                            <option value="Otomatik">Otomatik</option>
                                                                            <option value="Manuel">Manuel</option>
                                                                            <option value="Otomatik/Manuel">Otomatik/Manuel</option>
                                                                        </select>
                                                                    </span></td>
                                                            </tr>
                                                            <tr>
                                                                <td><i>Araç Fotoğraf Linki: </i></td>
                                                                <td> <span> <input type="text" name="arac_foto" value="<?php echo $row['arac_foto'] . " " . "Airbag";  ?>"></span></td>
                                                            </tr>
                                                        </table>
                                                    
                                                    <div class="button">
                                                <!--BUTON BAŞLANGIÇ-->
                                                <button type="submit" name="sil" class="btn btn-danger"><a id="sil" style="text-decoration:none; color: white;" href="../backend/arac_sil.php?id=<?php echo $row["arac_id"] ?>">Sil</a> </button>

                                              
                                             
                                                <input type="submit" value="gonder">

                                            </div>
                                                </form>





                                                         </div>
                                                            <!--ARAÇ ÖZELLİKLERİ alt başlık BİTİŞ-->
                                                </div>
                                                <!--ARAÇ ÖZELLİKLERİ BİTİŞ-->


                                              
                                            </div>
                                            <!--RESİM ALTI BİLGİLENDİRME BİTİŞ-->



                                            
                                            <!--BUTON BİTİŞ-->
                        
                    </div>
        </div>








    </div>
    <!-- CİTROEN C3 BİTİŞ-->

    </div><!-- Cols-1 bitiş-->













<?php }
            } ?>
</div>





<script src="../js/panel.js"></script>
</body>

</html>