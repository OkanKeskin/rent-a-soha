<?php
    include './backend/dbbaglan.php';
    session_start();
    $sql = "SELECT * FROM kullanici where eposta = '{$_SESSION['eposta']}' ";

    $result = $conn -> query($sql);

    if($result->num_rows > 0 ){         
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        html , body{
            height: 99%;
        }
        .container{
            margin: 20px 60px;
            background-color: rgb(101, 200, 200);
            display: flex;
            height: 95%;
        }
        .left{
            margin: 15px 25px;
            height: 95%;
            width: 450px;
            background-color: rgb(50, 96, 96);
            display: flex;
            flex-direction: column;
        }
        .foto{
            width: 300px;
            margin: 15px auto;
            height: 300px;
            border-radius: 50%;
            background: #000;
        }
        .left h1{
            color: white;
            margin: 15px auto;
        }
        .left h2{
            color: white;
            margin: 15px auto;
        }
        .left h3{
            color: white;
            margin: 15px auto;
        }
        .cikis{
            padding: 25px 35px;
            margin: 10px auto;
            background-color: red;
            border-radius: 10px;
            color: white;
            text-decoration: none;   
        }
        .cikis:hover{
            background-color: rgb(253, 53, 53);
        }
        .right{
            margin: 15px 25px;
            height: 95%;
            flex: 1;
            background-color: rgb(50, 96, 96);
            display: flex;
            flex-direction: column;
        }
        .right h1{
            color: white;
            margin: 15px auto;
        }
        .right .bilgiler{
            margin: 10px auto;
            width: 90%;
            height: 90%;
            background-color: rgb(38, 73, 73);
        }
        .bilgiler{
            display: flex;
            flex-direction: column;
        }
        .bilgiler .denenm{
            padding: 30px;
            display: flex;
            color: white;
        }
        .denenm h4{
            margin-left: 50px;
        }
        .denenm h4,label{
            font-size: x-large;
        }
        .guncelle{
            margin: 20px auto;
            margin-top:50px;
            padding: 25px;
            width: 600px;
            background-color: blue;
            color: white;
            text-decoration: none;
            text-align: center;
            border-radius: 10px;
        }
        .guncelle:hover{
            background-color: rgb(79, 79, 247);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
        <?php 
            while ($row=$result->fetch_assoc()){
                $rolId = $row["rol_id"];
                
                ?>
            <h1><?php echo $row["adi"] . " " .$row["soyadi"] ?></h1>
            <img src="./assets/user.png" alt="user" class="foto">
            <h2><?php if($rolId == 1){echo "ADMİN";}else{echo "Kullanıcı";}?></h2>
            <h3>En Son giriş tarihi : 11-12-1220</h3>
            <h3>Aktif kiralama : YOK</h3>
            <?php if($rolId == 1){?> 
                <a class="cikis" style="background-color: rgb(222, 222, 123);" href="./zadmin/panel.php">Admin Paneline Gir</a>
            <?php } ?> 
            <a class="cikis" href="./backend/cikisYap.php">Çıkış Yap</a>
        </div>
        <div class="right">
            
            <h1>Kullanıcı Bilgileri</h1>
            <div class="bilgiler">
                <div class="denenm" >
                    <label for="name">AD: </label>
                    <h4><?php echo $row["adi"] . " " .$row["soyadi"] ?></h4>
                </div>
                <div class="denenm" >
                    <label for="name">Eposta: </label>
                    <h4><?php echo $row["eposta"]?></h4>
                </div>
                <div class="denenm" >
                    <label for="name">Doğum Tarihi:  </label>
                    <h4><?php echo $row["dogum_tar"]?></h4>
                </div>
                <div class="denenm" >
                    <label for="name">Cep Telefonu: </label>
                    <h4><?php echo $row["cep_tel"]?></h4>
                </div>
                <div class="denenm" >
                    <label for="name">Şifre: </label>
                    <h4>*************</h4>
                </div>
                <a class="guncelle" href="./backend/uyeKendiGuncelleme.php">Bilgilerimi Güncelle</a>
            </div>
            <?php }} ?>
        </div>
    </div>
</body>
</html>