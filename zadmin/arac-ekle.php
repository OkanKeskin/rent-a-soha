<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Araç Ekle</title>
    <link rel="shortcut icon" type="image/png" href="../assets/logo.ico"/>
    <link rel="stylesheet" href="../css/panel.css">
    <link rel="stylesheet" href="../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script>
        $(function(){
            /*
          $(".kayit").click(function(){
            var adi = $("#arac-adi").val();
            $("#isim").text(adi);

            var foto = $("#foto").val();
            $("#img").attr("src",foto);

            var kat =$('#list').find(":selected").text();
            $("#kategori").text(kat)

            var kat =$('#kapiList').find(":selected").text();
            $("#kapiVal").text(kat)

            var kg = $("#kg").val();
            $("#hacim").text(kg + " Kg");

            var air = $("#air").val();
            $("#airbag").text(air + " Airbag");

            var kat =$('#fren').find(":selected").text();
            $("#frenSistem").text(kat)
            
            var kat =$('#yakit').find(":selected").text();
            $("#yakitSistem").text(kat)

            var kat =$('#sanziman').find(":selected").text();
            $("#sanzimanSistem").text(kat)
          })
        */
          var side = $("#side");
            var sidebar = $("#sidebar");
            var cross = $("#cross");
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
        <h5 style="margin-right: 10px;">Hoş Geldin</h5>
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
        <div class="container">
            <h2 id="baslik">Araç Ekle</h2>
            <div class="row">
              <div class="veri-al col-6">
                <form class="row g-3 needs-validation m-2" action="../backend/aracekleme.php" method="post" novalidate>
                  <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">Araç Adı</label>
                    <input type="text" class="form-control" id="arac-adi" name="adi" required>
                  </div>
                  <div class="col-md-12">
                    <label class="form-label">Araç Kategorisi</label>
                    <select class="form-select" required id="list" name="kategori">
                      <option selected disabled value="">Kategoriler</option>
                      <option value="Ekonomik Sınıf">Ekonomik Sınıf</option>
                      <option value="Konfor Sınıf">Konfor Sınıf</option>
                      <option value="Konfor Sınıf">Konfor Sınıf</option>
                      <option value="Lüks Sınıf">Lüks Sınıf</option>
                      <option value="Premium Sınıf">Premium Sınıf</option>
                      <option value="Prestij Sınıf">Prestij Sınıf</option>
                    </select>
                  </div>
                  <div class="col-md-12">
                      <label class="form-label">Araç Fotoğraf Linki</label>
                      <input type="text" class="form-control" id="foto" name="fotolink" required>
                  </div>
                  <div class="col-md-12">
                      <label class="form-label">Araç Kapı Sayısı</label>
                      <select class="form-select" id="kapiList" name="kapıSayisi" required>
                        <option selected disabled value="">Kategoriler</option>
                        <option value="3 Yetişkin">3 Yetişkin</option>
                        <option value="5 Yetişkin">5 Yetişkins</option>
                      </select>
                    </div>
                    <div class="col-md-12">
                      <label class="form-label">Araç Bağaj Hacmi (kg)</label>
                      <input type="number" class="form-control" id="kg" name="bagajHacmi" required>
                  </div>
                  <div class="col-md-12">
                      <label class="form-label">Airbag Sayısı</label>
                      <input type="number" class="form-control" id="air" name="airbagSayisi" required>
                  </div>
                  <div class="col-md-12">
                      <label class="form-label">Fren Sistemi</label>
                      <select class="form-select" id="fren" name="frenSistemi" required>
                          <option selected disabled value="">Fren Sistemi</option>
                          <option value="ABS">ABS</option>
                          <option value= "ESP">ESP</option>
                          <option value="Havalı">Havalı</option>
                          <option value="Hidrolik">Hidrolik</option>
                        </select>
                  </div>
                  <div class="col-md-12">
                      <label class="form-label">Araç Yakıt Sistemi</label>
                      <select class="form-select" id="yakit" name="yakitSistemi" required>
                          <option selected disabled value="">Yakıt Sistemi</option>
                          <option value="Benzin">Benzin</option>
                          <option value="Benzin/Gaz">Benzin/Gaz</option>
                          <option value="Dizel">Dizel</option>
                          <option value="Gaz">Gaz</option>
                        </select>
                  </div>
                  <div class="col-md-12">
                      <label class="form-label">Araç Şanzıman Sistemi</label>
                      <select class="form-select" required id="sanziman" name="sanziman">
                          <option selected disabled value="">Şanzıman Sistemi</option>
                          <option value="Otomatik">Otomatik</option>
                          <option value="Manuel">Manuel</option>
                        </select>
                  </div>
                  <div class="col-md-12">
                    <input class="btn btn-success col-md-12 kayit" id="gonder" type="submit" name="gonder">
                  </div>
                </form>
                </div>
                <div class="arac col-6">
                  <div class="arac_bolumu_kartli_yapi"  > 
                    <div class="card" >
                        <div class="card-header" >
                            <div class="arac_isim"> <h3 id="isim">Araç Adı</h3></div>
                            <div class="arac_sinif"> <p id="kategori">Araç Kategorisi</p></div>
                    </div>
                        <img class="card-img-top" id="img" src="../assets/f-citroen-c3.png" alt="resim">
                        <div class="card-body">
                        
                        <div  class="resim_alti_bilgi"> <!--RESİM ALTI BİLGİLENDİRME BAŞLANGIÇ-->
                                        <div class="item"><!--ARAÇ ÖZELLİKLERİ alt başlık BAŞLANGIÇ-->
                                            <b class="list-title">Araç Özellikleri</b>
                                            <ul   class="icon-list">
                                                <li>
                                                    <i class="fa fa-users"></i>
                                                    <span id="kapiVal"> 5 Yetişkin</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-suitcase-rolling"></i>
                                                    <span id="hacim">   2 Büyük Bavul</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-user-friends"></i>
                                                    <span id="airbag">Yolcu Airbag</span>
                                                </li>
                                                <li>
                                                    <i class="fa fa-automobile"></i>
                                                    <span id="frenSistem"> ABS</span>
                                                </li>
                                                <li>
                                                    <i class="fa fa-car"></i>
                                                    <span id="yakitSistem">Dizel/Benzin</span>
                                                </li>
                                                <li>
                                                    <i class="fa fa-automobile"></i>
                                                    <span id="sanzimanSistem">Otomatik</span>
                                                </li>
                            
                                            </ul>
                            
                                        </div> <!--ARAÇ ÖZELLİKLERİ alt başlık BİTİŞ-->
                                        </div><!--ARAÇ ÖZELLİKLERİ BİTİŞ-->
        
        
                                        <div class="kiralama_kosullari"> <!--KİRALAMA KOŞULLARI BAŞLANGIÇ-->
        
                                        <div class="item"><!--KİRALAMA KOŞULLARI alt başlık  BAŞLANGIÇ-->
                                            <b class="list-title">Kiralama Koşulları</b>
                                            <ul  class="icon-list">
                                            <li>
                                                <i class="fa fa-calendar"></i>
                                                <span>21 Yaş ve Üstü</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-user-alt"> </i>
                                                <span>Ehliyet Yaşı 1 ve Üzeri</span>
                                            </li>
                                            <li >
                                                <i class="far fa-credit-card"></i>
                                                <span>1 Kredi Kartı</span>
                                            </li>
                                            </ul>
                            
                                        </div><!--KİRALAMA KOŞULLARI alt başlık BİTİŞ-->
                                    </div> <!--KİRALAMA KOŞULLARI BİTİŞ-->
                                        </div><!--RESİM ALTI BİLGİLENDİRME BİTİŞ-->
                        
                        </div>
                    </div>
            </div>
            <!-- CİTROEN C3 BİTİŞ-->
              </div>
              </form>
        </div>
    </div>

    <script src="../js/panel.js"></script>
</body>
</html>