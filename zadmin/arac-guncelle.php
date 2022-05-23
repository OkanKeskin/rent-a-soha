<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Araç Güncelle</title>
    <link rel="shortcut icon" type="image/png" href="../assets/logo.ico"/>
    <link rel="stylesheet" href="../css/panel.css">
    <link rel="stylesheet" href="../css/tum_araclar.css">
    <link rel="stylesheet" href="../css/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script>
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
            <!-- TÜM araçlar BAŞLANGIÇ -->
<div class="tum_araclar">
    <!-- LUKS araçlar Başlangıç -->
    <div class="araclar_satir_ayrimi" style="margin-left: 0;"  >
        <!-- ROW BAŞLANGIÇ -->
        <div class="row" >
            <div class="col-6"  ><!-- Cols-1 BAŞLANGIÇ-->
                <a href="arac-guncelleme.html" style="text-decoration: none; color: initial;">
                    <!-- Jaguar I-PACE BAŞLANGIÇ-->
            <div class="arac_bolumu_kartli_yapi"  > 
                <div class="card" >
                    <div class="card-header" >
                        <div class="arac_isim"> <h3>Jaguar I-PACE</h3></div>
                        <div class="arac_sinif"> <p>Lüks Araç</p></div>
                </div>
                    <img class="card-img-top" src="../assets/g-jaguar-i-pace.png" alt="resim">
                    <div class="card-body">
                      <div  class="resim_alti_bilgi"> <!--RESİM ALTI BİLGİLENDİRME BAŞLANGIÇ-->
                        <!--ARAÇ ÖZELLİKLERİ BAŞLANGIÇ-->
                        <div class="item">
                            <b class="list-title">Araç Özellikleri</b>
                            <ul  class="icon-list">
                              <li>
                                  <i class="fa fa-users"></i>
                                  <span> 5 Yetişkin</span>
                              </li>
                              <li>
                                  <i class="fas fa-suitcase-rolling"></i>
                                  <span>   2 Büyük Bavul</span>
                              </li>
                              <li>
                                  <i class="fas fa-user-friends"></i>
                                  <span>Yolcu Airbag</span>
                              </li>
                              <li>
                                  <i class="fa fa-automobile"></i>
                                  <span> ABS</span>
                              </li>
                              <li>
                                  <i class="fa fa-car"></i>
                                  <span>Elektrik</span>
                              </li>
                              <li>
                                  <i class="fa fa-automobile"></i>
                                  <span>Otomatik</span>
                              </li>
          
                            </ul>
          
                        </div> <!--ARAÇ ÖZELLİKLERİ BİTİŞ-->
          
                        <!--KİRALAMA KOŞULLARI BAŞLANGIÇ-->
                        <div class="item">
                          <b class="list-title">Kiralama Koşulları</b>
                          <ul  class="icon-list">
                            <li>
                                <i class="fa fa-calendar"></i>
                                <span>27 Yaş ve Üstü</span>
                            </li>
                            <li>
                                <i class="fas fa-user-alt"> </i>
                                <span>Ehliyet Yaşı 3 ve Üzeri</span>
                            </li>
                            <li >
                                <i class="far fa-credit-card"></i>
                                <span>1 Kredi Kartı</span>
                            </li>
                          </ul>
                                    </div> <!--KİRALAMA KOŞULLARI BİTİŞ-->
                                      </div><!--RESİM ALTI BİLGİLENDİRME BİTİŞ-->
                                      <div class="button"> <!--BUTON BAŞLANGIÇ-->
                                          
                                        <a href="#" class="btn btn-danger">Rezerve et</a>
                                    </div><!--BUTON BİTİŞ-->
                    </div>
                  </div>
        </div>
                </a>
    
        </div><!-- Cols-1 bitiş-->
      <div class="col-6" > <!-- COL-2 BAŞLANGIÇ-->
    
        <!-- VOLVO XC60d BAŞLANGIÇ-->
        <div class="arac_bolumu_kartli_yapi"   > 
            <div class="card">
                <div class="card-header" >
                    <div class="arac_isim"> <h3>Volvo XC60d</h3></div>
                    <div class="arac_sinif"> <p>Lüks Araç</p></div>
                    
            </div>
                <img class="card-img-top" src="../assets/p-volvo-xc60d.png" alt="Card image cap">
                <div class="card-body">
                  
                  <div class="resim_alti_bilgi" > <!--RESİM ALTI BİLGİLENDİRME BAŞLANGIÇ-->
        <!--ARAÇ ÖZELLİKLERİ BAŞLANGIÇ-->
        <div class="item">
        <b class="list-title">Araç Özellikleri</b>
        <ul  class="icon-list">
          <li>
              <i class="fa fa-users"></i>
              <span> 5 Yetişkin</span>
          </li>
          <li>
              <i class="fas fa-suitcase-rolling"></i>
              <span>   3 Büyük Bavul</span>
          </li>
          <li>
              <i class="fas fa-user-friends"></i>
              <span>Yolcu Airbag</span>
          </li>
          <li>
              <i class="fa fa-automobile"></i>
              <span> ABS</span>
          </li>
          <li>
              <i class="fa fa-car"></i>
              <span>Dizel</span>
          </li>
          <li>
              <i class="fa fa-automobile"></i>
              <span>Otomatik</span>
          </li>
    
        </ul>
    
        </div> <!--ARAÇ ÖZELLİKLERİ BİTİŞ-->
    
        <!--KİRALAMA KOŞULLARI BAŞLANGIÇ-->
     <div class="item">
         <b class="list-title">Kiralama Koşulları</b>
        <ul class="icon-list">
         <li>
            <i class="fa fa-calendar"></i>
            <span>27 Yaş ve Üstü</span>
        </li>
        <li>
            <i class="fas fa-user-alt"> </i>
            <span>Ehliyet Yaşı 3 ve Üzeri</span>
        </li>
        <li >
            <i class="far fa-credit-card"></i>
            <span>1 Kredi Kartı</span>
        </li>
      </ul>
                </div> <!--KİRALAMA KOŞULLARI BİTİŞ-->
                  </div><!--RESİM ALTI BİLGİLENDİRME BİTİŞ-->
                  <div class="button"> <!--BUTON BAŞLANGIÇ-->
                                          
                    <a href="#" class="btn btn-danger">Rezerve et</a>
                </div><!--BUTON BİTİŞ-->
                </div>
              </div>
        </div>
        <!-- VOLVO XC60d BİTİŞ-->
        </div> <!-- COL-2 BİTİŞ-->
        <div class="tum_araclar">
            <!-- LUKS araçlar Başlangıç -->
            <div class="araclar_satir_ayrimi"  >
                <!-- ROW BAŞLANGIÇ -->
                <div class="row" >
                    <div class="col-6"  ><!-- Cols-1 BAŞLANGIÇ-->
                    <!-- Jaguar I-PACE BAŞLANGIÇ-->
                    <div class="arac_bolumu_kartli_yapi"  > 
                        <div class="card" >
                            <div class="card-header" >
                                <div class="arac_isim"> <h3>Jaguar I-PACE</h3></div>
                                <div class="arac_sinif"> <p>Lüks Araç</p></div>
                        </div>
                            <img class="card-img-top" src="../assets/g-jaguar-i-pace.png" alt="resim">
                            <div class="card-body">
                              <div  class="resim_alti_bilgi"> <!--RESİM ALTI BİLGİLENDİRME BAŞLANGIÇ-->
                                <!--ARAÇ ÖZELLİKLERİ BAŞLANGIÇ-->
                                <div class="item">
                                    <b class="list-title">Araç Özellikleri</b>
                                    <ul  class="icon-list">
                                      <li>
                                          <i class="fa fa-users"></i>
                                          <span> 5 Yetişkin</span>
                                      </li>
                                      <li>
                                          <i class="fas fa-suitcase-rolling"></i>
                                          <span>   2 Büyük Bavul</span>
                                      </li>
                                      <li>
                                          <i class="fas fa-user-friends"></i>
                                          <span>Yolcu Airbag</span>
                                      </li>
                                      <li>
                                          <i class="fa fa-automobile"></i>
                                          <span> ABS</span>
                                      </li>
                                      <li>
                                          <i class="fa fa-car"></i>
                                          <span>Elektrik</span>
                                      </li>
                                      <li>
                                          <i class="fa fa-automobile"></i>
                                          <span>Otomatik</span>
                                      </li>
                  
                                    </ul>
                  
                                </div> <!--ARAÇ ÖZELLİKLERİ BİTİŞ-->
                  
                                <!--KİRALAMA KOŞULLARI BAŞLANGIÇ-->
                                <div class="item">
                                  <b class="list-title">Kiralama Koşulları</b>
                                  <ul  class="icon-list">
                                    <li>
                                        <i class="fa fa-calendar"></i>
                                        <span>27 Yaş ve Üstü</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-user-alt"> </i>
                                        <span>Ehliyet Yaşı 3 ve Üzeri</span>
                                    </li>
                                    <li >
                                        <i class="far fa-credit-card"></i>
                                        <span>1 Kredi Kartı</span>
                                    </li>
                                  </ul>
                                            </div> <!--KİRALAMA KOŞULLARI BİTİŞ-->
                                              </div><!--RESİM ALTI BİLGİLENDİRME BİTİŞ-->
                                              <div class="button"> <!--BUTON BAŞLANGIÇ-->
                                                  
                                                <a href="#" class="btn btn-danger">Rezerve et</a>
                                            </div><!--BUTON BİTİŞ-->
                            </div>
                          </div>
                </div>
                <!-- Jaguar I-PACE BİTİŞ-->
                </div><!-- Cols-1 bitiş-->
              <div class="col-6" > <!-- COL-2 BAŞLANGIÇ-->
            
                <!-- VOLVO XC60d BAŞLANGIÇ-->
                <div class="arac_bolumu_kartli_yapi"   > 
                    <div class="card">
                        <div class="card-header" >
                            <div class="arac_isim"> <h3>Volvo XC60d</h3></div>
                            <div class="arac_sinif"> <p>Lüks Araç</p></div>
                            
                    </div>
                        <img class="card-img-top" src="../assets/p-volvo-xc60d.png" alt="Card image cap">
                        <div class="card-body">
                          
                          <div class="resim_alti_bilgi" > <!--RESİM ALTI BİLGİLENDİRME BAŞLANGIÇ-->
                <!--ARAÇ ÖZELLİKLERİ BAŞLANGIÇ-->
                <div class="item">
                <b class="list-title">Araç Özellikleri</b>
                <ul  class="icon-list">
                  <li>
                      <i class="fa fa-users"></i>
                      <span> 5 Yetişkin</span>
                  </li>
                  <li>
                      <i class="fas fa-suitcase-rolling"></i>
                      <span>   3 Büyük Bavul</span>
                  </li>
                  <li>
                      <i class="fas fa-user-friends"></i>
                      <span>Yolcu Airbag</span>
                  </li>
                  <li>
                      <i class="fa fa-automobile"></i>
                      <span> ABS</span>
                  </li>
                  <li>
                      <i class="fa fa-car"></i>
                      <span>Dizel</span>
                  </li>
                  <li>
                      <i class="fa fa-automobile"></i>
                      <span>Otomatik</span>
                  </li>
            
                </ul>
            
                </div> <!--ARAÇ ÖZELLİKLERİ BİTİŞ-->
            
                <!--KİRALAMA KOŞULLARI BAŞLANGIÇ-->
             <div class="item">
                 <b class="list-title">Kiralama Koşulları</b>
                <ul class="icon-list">
                 <li>
                    <i class="fa fa-calendar"></i>
                    <span>27 Yaş ve Üstü</span>
                </li>
                <li>
                    <i class="fas fa-user-alt"> </i>
                    <span>Ehliyet Yaşı 3 ve Üzeri</span>
                </li>
                <li >
                    <i class="far fa-credit-card"></i>
                    <span>1 Kredi Kartı</span>
                </li>
              </ul>
                        </div> <!--KİRALAMA KOŞULLARI BİTİŞ-->
                          </div><!--RESİM ALTI BİLGİLENDİRME BİTİŞ-->
                          <div class="button"> <!--BUTON BAŞLANGIÇ-->
                                                  
                            <a href="#" class="btn btn-danger">Rezerve et</a>
                        </div><!--BUTON BİTİŞ-->
                        </div>
                      </div>
                </div>
                <!-- VOLVO XC60d BİTİŞ-->
                </div> <!-- COL-2 BİTİŞ-->
                <div class="tum_araclar">
                    <!-- LUKS araçlar Başlangıç -->
                    <div class="araclar_satir_ayrimi"  >
                        <!-- ROW BAŞLANGIÇ -->
                        <div class="row" >
                            <div class="col-6"  ><!-- Cols-1 BAŞLANGIÇ-->
                            <!-- Jaguar I-PACE BAŞLANGIÇ-->
                            <div class="arac_bolumu_kartli_yapi"  > 
                                <div class="card" >
                                    <div class="card-header" >
                                        <div class="arac_isim"> <h3>Jaguar I-PACE</h3></div>
                                        <div class="arac_sinif"> <p>Lüks Araç</p></div>
                                </div>
                                    <img class="card-img-top" src="../assets/g-jaguar-i-pace.png" alt="resim">
                                    <div class="card-body">
                                      <div  class="resim_alti_bilgi"> <!--RESİM ALTI BİLGİLENDİRME BAŞLANGIÇ-->
                                        <!--ARAÇ ÖZELLİKLERİ BAŞLANGIÇ-->
                                        <div class="item">
                                            <b class="list-title">Araç Özellikleri</b>
                                            <ul  class="icon-list">
                                              <li>
                                                  <i class="fa fa-users"></i>
                                                  <span> 5 Yetişkin</span>
                                              </li>
                                              <li>
                                                  <i class="fas fa-suitcase-rolling"></i>
                                                  <span>   2 Büyük Bavul</span>
                                              </li>
                                              <li>
                                                  <i class="fas fa-user-friends"></i>
                                                  <span>Yolcu Airbag</span>
                                              </li>
                                              <li>
                                                  <i class="fa fa-automobile"></i>
                                                  <span> ABS</span>
                                              </li>
                                              <li>
                                                  <i class="fa fa-car"></i>
                                                  <span>Elektrik</span>
                                              </li>
                                              <li>
                                                  <i class="fa fa-automobile"></i>
                                                  <span>Otomatik</span>
                                              </li>
                          
                                            </ul>
                          
                                        </div> <!--ARAÇ ÖZELLİKLERİ BİTİŞ-->
                          
                                        <!--KİRALAMA KOŞULLARI BAŞLANGIÇ-->
                                        <div class="item">
                                          <b class="list-title">Kiralama Koşulları</b>
                                          <ul  class="icon-list">
                                            <li>
                                                <i class="fa fa-calendar"></i>
                                                <span>27 Yaş ve Üstü</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-user-alt"> </i>
                                                <span>Ehliyet Yaşı 3 ve Üzeri</span>
                                            </li>
                                            <li >
                                                <i class="far fa-credit-card"></i>
                                                <span>1 Kredi Kartı</span>
                                            </li>
                                          </ul>
                                                    </div> <!--KİRALAMA KOŞULLARI BİTİŞ-->
                                                      </div><!--RESİM ALTI BİLGİLENDİRME BİTİŞ-->
                                                      <div class="button"> <!--BUTON BAŞLANGIÇ-->
                                                          
                                                        <a href="#" class="btn btn-danger">Rezerve et</a>
                                                    </div><!--BUTON BİTİŞ-->
                                    </div>
                                  </div>
                        </div>
                        <!-- Jaguar I-PACE BİTİŞ-->
                        </div><!-- Cols-1 bitiş-->
                      <div class="col-6" > <!-- COL-2 BAŞLANGIÇ-->
                    
                        <!-- VOLVO XC60d BAŞLANGIÇ-->
                        <div class="arac_bolumu_kartli_yapi"   > 
                            <div class="card">
                                <div class="card-header" >
                                    <div class="arac_isim"> <h3>Volvo XC60d</h3></div>
                                    <div class="arac_sinif"> <p>Lüks Araç</p></div>
                                    
                            </div>
                                <img class="card-img-top" src="../assets/p-volvo-xc60d.png" alt="Card image cap">
                                <div class="card-body">
                                  
                                  <div class="resim_alti_bilgi" > <!--RESİM ALTI BİLGİLENDİRME BAŞLANGIÇ-->
                        <!--ARAÇ ÖZELLİKLERİ BAŞLANGIÇ-->
                        <div class="item">
                        <b class="list-title">Araç Özellikleri</b>
                        <ul  class="icon-list">
                          <li>
                              <i class="fa fa-users"></i>
                              <span> 5 Yetişkin</span>
                          </li>
                          <li>
                              <i class="fas fa-suitcase-rolling"></i>
                              <span>   3 Büyük Bavul</span>
                          </li>
                          <li>
                              <i class="fas fa-user-friends"></i>
                              <span>Yolcu Airbag</span>
                          </li>
                          <li>
                              <i class="fa fa-automobile"></i>
                              <span> ABS</span>
                          </li>
                          <li>
                              <i class="fa fa-car"></i>
                              <span>Dizel</span>
                          </li>
                          <li>
                              <i class="fa fa-automobile"></i>
                              <span>Otomatik</span>
                          </li>
                    
                        </ul>
                    
                        </div> <!--ARAÇ ÖZELLİKLERİ BİTİŞ-->
                    
                        <!--KİRALAMA KOŞULLARI BAŞLANGIÇ-->
                     <div class="item">
                         <b class="list-title">Kiralama Koşulları</b>
                        <ul class="icon-list">
                         <li>
                            <i class="fa fa-calendar"></i>
                            <span>27 Yaş ve Üstü</span>
                        </li>
                        <li>
                            <i class="fas fa-user-alt"> </i>
                            <span>Ehliyet Yaşı 3 ve Üzeri</span>
                        </li>
                        <li >
                            <i class="far fa-credit-card"></i>
                            <span>1 Kredi Kartı</span>
                        </li>
                      </ul>
                                </div> <!--KİRALAMA KOŞULLARI BİTİŞ-->
                                  </div><!--RESİM ALTI BİLGİLENDİRME BİTİŞ-->
                                  <div class="button"> <!--BUTON BAŞLANGIÇ-->
                                                          
                                    <a href="#" class="btn btn-danger">Rezerve et</a>
                                </div><!--BUTON BİTİŞ-->
                                </div>
                              </div>
                        </div>
                        <!-- VOLVO XC60d BİTİŞ-->
                        </div> <!-- COL-2 BİTİŞ-->
                        <div class="tum_araclar">
                            <!-- LUKS araçlar Başlangıç -->
                            <div class="araclar_satir_ayrimi"  >
                                <!-- ROW BAŞLANGIÇ -->
                                <div class="row" >
                                    <div class="col-6"  ><!-- Cols-1 BAŞLANGIÇ-->
                                    <!-- Jaguar I-PACE BAŞLANGIÇ-->
                                    <div class="arac_bolumu_kartli_yapi"  > 
                                        <div class="card" >
                                            <div class="card-header" >
                                                <div class="arac_isim"> <h3>Jaguar I-PACE</h3></div>
                                                <div class="arac_sinif"> <p>Lüks Araç</p></div>
                                        </div>
                                            <img class="card-img-top" src="../assets/g-jaguar-i-pace.png" alt="resim">
                                            <div class="card-body">
                                              <div  class="resim_alti_bilgi"> <!--RESİM ALTI BİLGİLENDİRME BAŞLANGIÇ-->
                                                <!--ARAÇ ÖZELLİKLERİ BAŞLANGIÇ-->
                                                <div class="item">
                                                    <b class="list-title">Araç Özellikleri</b>
                                                    <ul  class="icon-list">
                                                      <li>
                                                          <i class="fa fa-users"></i>
                                                          <span> 5 Yetişkin</span>
                                                      </li>
                                                      <li>
                                                          <i class="fas fa-suitcase-rolling"></i>
                                                          <span>   2 Büyük Bavul</span>
                                                      </li>
                                                      <li>
                                                          <i class="fas fa-user-friends"></i>
                                                          <span>Yolcu Airbag</span>
                                                      </li>
                                                      <li>
                                                          <i class="fa fa-automobile"></i>
                                                          <span> ABS</span>
                                                      </li>
                                                      <li>
                                                          <i class="fa fa-car"></i>
                                                          <span>Elektrik</span>
                                                      </li>
                                                      <li>
                                                          <i class="fa fa-automobile"></i>
                                                          <span>Otomatik</span>
                                                      </li>
                                  
                                                    </ul>
                                  
                                                </div> <!--ARAÇ ÖZELLİKLERİ BİTİŞ-->
                                  
                                                <!--KİRALAMA KOŞULLARI BAŞLANGIÇ-->
                                                <div class="item">
                                                  <b class="list-title">Kiralama Koşulları</b>
                                                  <ul  class="icon-list">
                                                    <li>
                                                        <i class="fa fa-calendar"></i>
                                                        <span>27 Yaş ve Üstü</span>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-user-alt"> </i>
                                                        <span>Ehliyet Yaşı 3 ve Üzeri</span>
                                                    </li>
                                                    <li >
                                                        <i class="far fa-credit-card"></i>
                                                        <span>1 Kredi Kartı</span>
                                                    </li>
                                                  </ul>
                                                            </div> <!--KİRALAMA KOŞULLARI BİTİŞ-->
                                                              </div><!--RESİM ALTI BİLGİLENDİRME BİTİŞ-->
                                                              <div class="button"> <!--BUTON BAŞLANGIÇ-->
                                                                  
                                                                <a href="#" class="btn btn-danger">Rezerve et</a>
                                                            </div><!--BUTON BİTİŞ-->
                                            </div>
                                          </div>
                                </div>
                                <!-- Jaguar I-PACE BİTİŞ-->
                                </div><!-- Cols-1 bitiş-->
                              <div class="col-6" > <!-- COL-2 BAŞLANGIÇ-->
                            
                                <!-- VOLVO XC60d BAŞLANGIÇ-->
                                <div class="arac_bolumu_kartli_yapi"   > 
                                    <div class="card">
                                        <div class="card-header" >
                                            <div class="arac_isim"> <h3>Volvo XC60d</h3></div>
                                            <div class="arac_sinif"> <p>Lüks Araç</p></div>
                                            
                                    </div>
                                        <img class="card-img-top" src="../assets/p-volvo-xc60d.png" alt="Card image cap">
                                        <div class="card-body">
                                          
                                          <div class="resim_alti_bilgi" > <!--RESİM ALTI BİLGİLENDİRME BAŞLANGIÇ-->
                                <!--ARAÇ ÖZELLİKLERİ BAŞLANGIÇ-->
                                <div class="item">
                                <b class="list-title">Araç Özellikleri</b>
                                <ul  class="icon-list">
                                  <li>
                                      <i class="fa fa-users"></i>
                                      <span> 5 Yetişkin</span>
                                  </li>
                                  <li>
                                      <i class="fas fa-suitcase-rolling"></i>
                                      <span>   3 Büyük Bavul</span>
                                  </li>
                                  <li>
                                      <i class="fas fa-user-friends"></i>
                                      <span>Yolcu Airbag</span>
                                  </li>
                                  <li>
                                      <i class="fa fa-automobile"></i>
                                      <span> ABS</span>
                                  </li>
                                  <li>
                                      <i class="fa fa-car"></i>
                                      <span>Dizel</span>
                                  </li>
                                  <li>
                                      <i class="fa fa-automobile"></i>
                                      <span>Otomatik</span>
                                  </li>
                            
                                </ul>
                            
                                </div> <!--ARAÇ ÖZELLİKLERİ BİTİŞ-->
                            
                                <!--KİRALAMA KOŞULLARI BAŞLANGIÇ-->
                             <div class="item">
                                 <b class="list-title">Kiralama Koşulları</b>
                                <ul class="icon-list">
                                 <li>
                                    <i class="fa fa-calendar"></i>
                                    <span>27 Yaş ve Üstü</span>
                                </li>
                                <li>
                                    <i class="fas fa-user-alt"> </i>
                                    <span>Ehliyet Yaşı 3 ve Üzeri</span>
                                </li>
                                <li >
                                    <i class="far fa-credit-card"></i>
                                    <span>1 Kredi Kartı</span>
                                </li>
                              </ul>
                                        </div> <!--KİRALAMA KOŞULLARI BİTİŞ-->
                                          </div><!--RESİM ALTI BİLGİLENDİRME BİTİŞ-->
                                          <div class="button"> <!--BUTON BAŞLANGIÇ-->
                                                                  
                                            <a href="#" class="btn btn-danger">Rezerve et</a>
                                        </div><!--BUTON BİTİŞ-->
                                        </div>
                                      </div>
                                </div>
                                <!-- VOLVO XC60d BİTİŞ-->
                                </div> <!-- COL-2 BİTİŞ-->
        </div>
    </div>






    <script src="../js/panel.js"></script>
</body>
</html>