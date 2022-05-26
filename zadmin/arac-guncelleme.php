<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Araç Güncelleme</title>
    <link rel="shortcut icon" type="image/png" href="../assets/logo.ico"/>
    <link rel="stylesheet" href="../css/panel.css">
    <link rel="stylesheet" href="../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script>
        function bildirimGüncelle(){
        alert("Araç Güncellendi");
        }
        function bildirimSil(){
        alert("Araç Silindi");
        }
        $(function(){
          $(".arac_bolumu_kartli_yapi").click(function(){
                $(a).html("<h3>Deneme</h3>");
                $(".arac_bolumu_kartli_yapi").append(a);
            })

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
            <h2 id="baslik">Araç Güncelle / Araç Adı: Jaguar ...</h2>
            <form class="row g-3 needs-validation m-2" novalidate>
                <div class="col-md-12">
                  <label for="validationCustom01" class="form-label">Araç Adı</label>
                  <input type="text" class="form-control" required>
                </div>
                <div class="col-md-12">
                  <label class="form-label">Araç Kategorisi</label>
                  <select class="form-select" required>
                    <option selected disabled value="">Kategoriler</option>
                    <option>Ekonomik Sınıf</option>
                    <option>Konfor Sınıf</option>
                    <option>Konfor Sınıf</option>
                    <option>Lüks Sınıf</option>
                    <option>Premium Sınıf</option>
                    <option>Prestij Sınıf</option>
                  </select>
                </div>
                <div class="col-md-12">
                    <label class="form-label">Araç Fotoğraf Linki</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="col-md-12">
                    <label class="form-label">Araç Kapı Sayısı</label>
                    <select class="form-select" required>
                      <option selected disabled value="">Kategoriler</option>
                      <option>3 Yetişkin</option>
                      <option>5 Yetişkins</option>
                    </select>
                  </div>
                  <div class="col-md-12">
                    <label class="form-label">Araç Bağaj Hacmi (kg)</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="col-md-12">
                    <label class="form-label">Airbag Sayısı</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="col-md-12">
                    <label class="form-label">Fren Sistemi</label>
                    <select class="form-select" required>
                        <option selected disabled value="">Fren Sistemi</option>
                        <option>ABS</option>
                        <option>ESP</option>
                        <option>Havalı</option>
                        <option>Hidrolik</option>
                      </select>
                </div>
                <div class="col-md-12">
                    <label class="form-label">Araç Yakıt Sistemi</label>
                    <select class="form-select" required>
                        <option selected disabled value="">Yakıt Sistemi</option>
                        <option>Benzin</option>
                        <option>Benzin/Gaz</option>
                        <option>Dizel</option>
                        <option>Gaz</option>
                      </select>
                </div>
                <div class="col-md-12">
                    <label class="form-label">Araç Şanzıman Sistemi</label>
                    <select class="form-select" required>
                        <option selected disabled value="">Şanzıman Sistemi</option>
                        <option>Otomatik</option>
                        <option>Manuel</option>
                      </select>
                </div>
                <div class="col-md-12 d-flex">
                  <button class="btn btn-success col-md-6" onclick="bildirimGüncelle()" type="submit">Araç Güncelle</button>
                  <button class="btn btn-danger col-md-6" onclick="bildirimSil()" type="submit">Araç Sil</button>
                </div>
              </form>
        </div>
    </div>
</body>
</html>