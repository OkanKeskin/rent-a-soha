<?php 
    include '../backend/dbbaglan.php';
    $sql = "SELECT * FROM iletisim";

    $result = $conn -> query($sql);
    if(isset($_GET["id"])){
        $a = "SELECT * FROM iletisim WHERE mesaj_id = {$_GET['id']}";
        $results = $conn -> query($a);
        if($results->num_rows > 0){
            while ($rows=$results->fetch_assoc()){
                ?>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                </head>
                <body>
                    <script>
                        function deneem(){
                            <?php
                                if($rows['mesaj'] != ""){
                            ?>
                            alert("<?php echo $rows['mesaj']; ?>");
                            <?php }?>
                        }
                        deneem();
                        
                    </script>
                </body>
                </html>
                <?php
            }
        }

    }

    if($result->num_rows > 0 ){

?>


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
        <div class="content container">
            <h1 class="align-content-center">Gelen Mesajlar</h1>
            <table class="table">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Ad Soyad</th>
                      <th scope="col">E-Posta</th>
                      <th scope="col">Sil</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    while ($row=$result->fetch_assoc()){
                    ?>
                        <tr id="mesage">
                          <th scope="col" id="num" class="num"><?php echo $row["mesaj_id"]; ?></th>
                          <th scope="col"><?php echo $row["adi"] ." ".$row["soyadi"]; ?></th>
                          <th scope="col"><?php echo $row["eposta"]; ?></th>
                          <th scope="col">
                            <a style="background: rgb(194, 152, 152); color: white; padding: 5px; text-decoration: none;" href="./iletisim.php?id=<?php echo $row["mesaj_id"]?>">Mesajı Görüntüle</a>
                            <a style="background: rgb(194, 152, 152); color: white; padding: 5px; text-decoration: none;" href="../backend/iletisimSil.php?id=<?php echo $row["mesaj_id"]?>">Mesajı Sil</a>
                          </th>
                        </tr> 
                    <?php }} ?>
                  </tbody>
            </table>
            
        </div>
</body>
</html>