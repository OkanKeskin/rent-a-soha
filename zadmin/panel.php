<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Ana Sayfa</title>
    <link rel="shortcut icon" type="image/png" href="../assets/logo.ico"/>
    <link rel="stylesheet" href="../css/panel.css">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script>
        $(function(){
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
        <div class="a">
            <div class="kutu kutu1">
                <h2 style="text-align: center; margin-top: 30px;">Site Kullanıcıları</h2>
                <div class="aktif">
                    <h3>Aktif Kullanıcılar</h3>
                    <span>150</span>
                </div>
                <div class="aktif">
                    <h3>Günlük Ortalama Kullanıcı Sayısı</h3>
                    <span>250</span>
                </div>
                <div class="aktif">
                    <h3>Kullanıcı rezerve oranı</h3>
                    <span>%10</span>
                </div>
            </div>
            <div class="kutu kutu2">
                <h2 style="text-align: center; margin-top: 30px;">Site İletişim</h2>
                <div class="aktif">
                    <h3>Toplam Gelen Mesaj Sayısı</h3>
                    <span>1000</span>
                </div>
                <div class="aktif">
                    <h3>Günlük Ortalama Mesaj Sayısı</h3>
                    <span>5</span>
                </div>
                <div class="aktif">
                    <h3>Mesajlara Dönüt Süresi Ortalama</h3>
                    <span>1 saat</span>
                </div>
            </div>
            <div class="kutu kutu3">
                <h2 style="text-align: center; margin-top: 10px;">Son Mesaj</h2>
                <div class="aktif">
                    <h3 style="margin-bottom: 10px;"><span style="color: #02b8dd;">Kullanıcı Adı:</span> Okan Keskin</h3>
                    <h3 style="margin-bottom: 10px;"><span style="color: #02b8dd; width: 100%;">Kullanıcı E-Posta:</span><br>okannkeskn@gmail.com</h3>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. At quisquam deleniti neque vero repudiandae debitis veniam magnam porro cum. Recusandae ipsa officia odit, minima dignissimos minus exercitationem perspiciatis, qui ipsum quas, consequatur numquam nihil aperiam eum? Provident aperiam asperiores, libero illo accusamus voluptates repellat ipsum eius assumenda, quam excepturi deserunt earum! Culpa veniam cupiditate iste in est esse eveniet ducimus repellat deserunt. Labore doloremque, expedita accusantium maiores vero vel, soluta voluptates illum illo error rem fuga! Repellendus eum commodi impedit beatae, consectetur explicabo animi ab nemo minus totam autem sed repellat inventore sapiente, vero voluptatem illo deleniti dolores officia est.</span>
                </div>
            </div>
            <div class="kutu kutu4">
                <h2 style="text-align: center; margin-top: 30px;">Toplam Satış</h2>
                <div class="aktif">
                    <h3>Günlük Kiralama Cirosu</h3>
                    <span>1000$</span>
                </div>
                <div class="aktif">
                    <h3>Haftalık Büyüme</h3>
                    <span>%-5</span>
                </div>
                <div class="aktif">
                    <h3>Günlük Rezerve Edilen Araç Sayısı</h3>
                    <span>25</span>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/panel.js"></script>
</body>
</html>