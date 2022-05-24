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
</head>
<body>
    <header>
        <!-- <img style="border-radius: 30px;" src="../assets/logo2.png" alt=""> -->
        <h1 class="baslik">Admin Panel</h1>
        <h5 style="margin-right: 10px;">Hoş Geldin</h5>
    </header>
        <div class="container">
            <h2 id="baslik">Üye Güncelle Jaguar ...</h2>
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