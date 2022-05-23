<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin İletişim</title>
    <link rel="shortcut icon" type="image/png" href="../assets/logo.ico"/>
    <link rel="stylesheet" href="../css/panel.css">
    <link rel="stylesheet" href="../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script>
        $(function(){
            var side = $("#side");
            var sidebar = $("#sidebar");
            var cross = $("#cross");
            var delette = $("#delete");
            var acilir = $("#acilir");
            var down = $(".down");
            var up = $(".up");
            var message = $("#mesage");

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

            up.hide();
            acilir.hide();
            down.click(function(){
                acilir.slideToggle("slow",function(){
                    acilir.show();
                    up.show();
                    down.hide();
                })
            })

            up.click(function(){
                acilir.slideToggle("slow",function(){
                    acilir.hide();
                    up.hide()
                    down.show();
                })
            })
            
            delette.click(function(){
                acilir.remove();
                message.remove();
            })

        })
    </script>
    <style>
        #delete:hover{
            color: red;
        }
    </style>
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
        <div class="content container">
            <h1 class="align-content-center">Gelen Mesajlar</h1>
            <table class="table">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Ad Soyad</th>
                      <th scope="col">Kullanıcı Numarası</th>
                      <th scope="col">Mesaj Başlığı</th>
                      <th scope="col">E-Posta</th>
                      <th scope="col">Sil</th>
                    </tr>
                  </thead>
                  <tbody>
                        <tr id="mesage">
                          <th scope="col" id="num" class="num">1</th>
                          <th scope="col">Okan Keskin</th>
                          <th scope="col">123</th>
                          <th scope="col">Site Düzeni</th>
                          <th scope="col">okannkeskn@gmail.com</th>
                          <th scope="col">
                              <svg id="down" class="down" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                  <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                              </svg>
                              <svg id="up" class="up" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-up" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 3.707 2.354 9.354a.5.5 0 1 1-.708-.708l6-6z"/>
                                  <path fill-rule="evenodd" d="M7.646 6.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 7.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                              </svg>
                              <svg id="delete" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                              </svg>
                          </th>
                        </tr>
                        <tr id="acilir">
                            <th scope="col" id="num" class="num">1</th>
                            <th rowspan="5">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo id facilis vero, laudantium repellendus saepe numquam. Cum, id. Tenetur a nam excepturi ullam voluptatum doloremque numquam voluptatem neque ex vitae! Quaerat consectetur quam atque amet, soluta vel, ex nam assumenda est odit placeat impedit fugiat temporibus! Similique dolor impedit harum voluptas veniam, sit suscipit. Quae architecto temporibus asperiores rem praesentium corporis ducimus saepe? Quos, recusandae dolorem inventore sapiente quisquam fuga facere nulla dolore nobis! Consequuntur quam delectus, dicta quasi veritatis sequi distinctio illo debitis mollitia? Ex impedit eligendi eius, numquam ab, cum qui vitae exercitationem, amet nostrum error tempora obcaecati!</p>
                            </th>
                        </tr>
                  </tbody>
            </table>
        </div>
</body>
</html>