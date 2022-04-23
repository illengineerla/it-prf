<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Верстка.css">
    <style type="text/css">
        .menutext{
            text-shadow: 5px; font-size: 2em
        }
        .menutextmt{
            margin-left: 3%; padding-top: 0.5%; padding-bottom: 0.5%;
        }
        .menutextlogo{
            text-shadow: 5px; font-size: 3em
        }
        .flagright{
            background-color: #49DEFF; width: 125px; height: 40px;
        }
        .flag-1{
            background-color: #49DEFF; width: 125px; height: 40px; margin-left: 2%; opacity: 70%;
        }
        .flag-2{
            background-color: #FFE870; width: 125px; height: 40px; margin-left: 2%; opacity: 70%;
        }
        .boxes{
            /background-color: red;/
        }
        .box{
            background-color: #46B4C5; border-radius: 16px; width: 50%; margin-left: auto; margin-right: auto; padding: auto;
        }
        .boxtext1{
            text-shadow: 5px; font-size: 2em; color: #FFFFFF; margin-top: 20%;
        }
        .boxtext{
            text-shadow: 5px; font-size: 2em; color: #FFFFFF
        }

        .Head{
            height: 60%;
        }
        .Filt{
            background-color: rgba(53, 122, 152, 0.71);
            color: white;
            width: 15%;
            height: 90%;
            margin-left: 5%;
            border: 2px solid #00D1FF;
            border-radius: 16px;
        }
        .Block{
            width: 280px;
            height: 345px;
            color: white;
            margin-left: 3%;
            margin-top: 3%;
            border-radius: 16px;
            border: 2px solid #00D1FF;
        }

        .whiteblock{
            width: 75%;
            height: 60%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 5%;
            background-color: white;
        }
        .basket{
        margin-left: 10%;
        margin-top: 10px; 
        }
        .basketblock{
            height: 300px;
            width: 200px;
            background-color: #00D1FF;
            border-radius: 20px;
            position: absolute;
            top: 70px;
            left: 1220px;
            transition:0.5s;
            display: none;
        }
        .x{
            transition:0.5s;
        }
        .textkorz{
            margin-top: -30px;
            margin-left: 20px;
            background-color: #FFE870;
            border-radius:10px;
            width:65px;
        }
        .footer{
            background-color: #FFE870;
            height:250px;
            width: 100%;
            display: flex;
        }
        .footerinfo1{
            margin-right: 1100px;
        }
        .korz{
            margin-top: 20px;
            margin-left:400px ;
            background-color: #FFE870;
            height: 400px;
            width: 1000px;
            border-radius:20px;
        }
        .otstup{
            margin-left: 120px;
        }
    </style>
</head>
<body>
    <?php 
        $host = "localhost";
        $user = "root";
        $pass = "";
        $base = "xakaton";

        $conn = mysqli_connect($host, $user, $pass, $base);
    ?>
    <div class="main" style="background-color: #5C93C6; height: 3000px; padding: 0">
        <div class="Shapka" style="background-color: #FFE870; height: 100px; padding-top: 0.5%; padding-bottom: 0.5%; display: flex">
                <div class="rounded-circle" style="background-image: url(img/logo.png); height: 80px; width: 80px; background-size: 100%; margin-left: 2%">
                    
                </div>
            <div>
                <label class="ms-4 menutextlogo">Cloud CL.</label>
            </div>

            <div class="menutextmt">
                <label class="menutext">Доставка</label>
            </div>

            <div class="menutextmt">
                <label class="menutext">Отзывы</label>
            </div>

            <div class="menutextmt">
                <label class="menutext">Помощь</label>
            </div>

            <div class="menutextmt">
                <label class="menutext">О нас</label>
            </div>

            <div class="menutextmt">
                <label class="menutext">Баллы: 200</label>
            </div>
            <div class="basket" style="background-image: url(img/basket1.png); width: 60px; height: 60px; background-size: 100%;"></div>
        </div>

        <div class="Head" style="= background-color: #5C93C6; background-image: url(unknown.png);background-size: 100%;">
            <div class="Flags" style="display: flex;">
                <div class="flagright"></div>
                <div class="flag-2"></div>
                <div class="flag-1"></div>
                <div class="flag-2"></div>
                <div class="flag-1"></div>
                <div class="flag-2"></div>
                <div class="flag-1"></div>
                <div class="flag-2"></div>
                <div class="flag-1"></div>
                <div class="flag-2"></div>
                <div class="flag-1"></div>
                <div class="flag-2"></div>
            </div>

        <div class="boxes col-12 d-flex">
            <div class="col-4 text-center">
                <div class="mt-5 box">
                    <h3 class="boxtext mt-5 py-1">Композиции</h3>
                </div>
                <div class="mt-5 box">
                    <h3 class="boxtext mt-5 py-1">Программа лояльности</h3>
                </div>
            </div>
            <div class="col-4 text-center">
                <div class="mt-5 box">
                    <h3 class="boxtext mt-5 py-1">События</h3>
                </div>
                <div class="mt-5 box">
                    <h3 class="boxtext mt-5 py-1">Хиты</h3>
                </div>
            </div>
            <div class="col-4 text-center">
                <div class="mt-5 box">
                    <h3 class="boxtext mt-5 py-1">Латексные шары</h3>
                </div>
                <div class="mt-5 box">
                    <h3 class="boxtext mt-5 py-1">Фолгированные шары</h3>
                </div>
            </div>
        </div>

        <div class="mt-5 text-center" style="background-color: #FFE870; height: 1.4%;">
        </div>
            <div class="Head" style="= background-color: #5C93C6;background-size: 100%;">
                <div class="Flags" style="display: flex;">
                    <div class="flagright"></div>
                    <div class="flag-2"></div>
                    <div class="flag-1"></div>
                    <div class="flag-2"></div>
                    <div class="flag-1"></div>
                    <div class="flag-2"></div>
                    <div class="flag-1"></div>
                    <div class="flag-2"></div>
                    <div class="flag-1"></div>
                    <div class="flag-2"></div>
                    <div class="flag-1"></div>
                    <div class="flag-2"></div>

            </div>
                <div class="korz py-2 px-2">
                    <div style="width: 80%; height: 100%">
                <?php
                  $id_tovar = $_POST['id'];
                  $query = "SELECT * FROM `tovar` WHERE `id` = '$id_tovar'";
                  $result = mysqli_query($conn , $query);
                  while($row = mysqli_fetch_row($result)){
                      $id_tov = $row[0];
                      $name = $row[1];
                      $img = $row[2];
                      $about1 = $row[5];
                      $kolvo = 1;
                      $price = $row[3];
                      $login = $_SESSION['login'];

                      $query3 = "SELECT * FROM `korzina` WHERE `id_tovar` = '$id_tov' AND `login` = '$login' ";
                      $result3 = mysqli_query($conn,$query3);
                      $num = mysqli_num_rows($result3);
                      $row2 = mysqli_fetch_row($result3);

                      if($num > 0){
                          $kolvo = $row2[5] + 1;
                          $query2 = "UPDATE `korzina` SET `kolvo`='$kolvo' WHERE `id_tovar` = '$id_tov' AND `login` ='$login' ";
                      }
                      else
                      {
                          $query2 = "INSERT INTO `korzina` (`id_tovar`,`name`,`img`,`about1`,`kolvo`,`price`,`login`) VALUES ('$id_tov','$name','$img','$about1','$kolvo','$price','$login')";
                      }
                      $result2 = mysqli_query($conn,$query2);
                  }
                  $login = $_SESSION['login'];
                  if ($_POST['plus'] == "+"){
                    $id_tov = $_POST['id_tov'];
                    $kolvo = $_POST['kolvo']+1;
                    $query2 = "UPDATE `korzina` SET `kolvo` = '$kolvo' WHERE `id_tovar` = '$id_tov' AND `login` = '$login'";
                    $result2 = mysqli_query($conn, $query2);
                  }
                  if ($_POST['minus'] == "-"){
                    $id_tov = $_POST['id_tov'];
                    if($_POST['kolvo'] == 1){
                        $query2 = "DELETE FROM `korzina` WHERE `id_tovar` = '$id_tov' AND `login` = '$login'";
                    }else{
                        $kolvo = $_POST['kolvo']-1;
                        $query2 = "UPDATE `korzina` SET `kolvo` = '$kolvo' WHERE `id_tovar` = '$id_tov' AND `login` = '$login'";
                    }
                    $result2 = mysqli_query($conn, $query2);
                  }
                ?>

                <?php
                    $login = $_SESSION['login'];
                    $query = "SELECT * FROM `korzina` WHERE `login` = '$login' "; 
                    $result = mysqli_query($conn,$query);
                    $i = 1;
                    while($row = mysqli_fetch_array($result)){
                ?>
                <div style="width: 80%; margin-right: auto; margin-left: auto; border: 2px solid black; margin-top: 2%; display: flex;">
                    <div style="width: 25%; border-right: 2px solid black">
                        <img src="<?php echo $row[2]; ?>" style="width: 80%; margin-left: 4%">
                    </div>
                    <div style="margin-left: 1%">
                        <h3><?php echo $row[3]; ?></h1>
                    <label><?php echo $row[4]; ?></label>
                    <br>
                    <label>Цена: <?php echo $row[6]; ?></label>
                    <br>
                    <div style="display: flex;">
                        <form method="POST" action="korzina.php">
                            <input type="hidden" name="kolvo" value="<?php echo $row[5]; ?>">
                            <input type="hidden" name="id_tov" value="<?php echo $row[1]; ?>">
                            <div>
                                <input type="submit" name="plus" value="+">
                            </div>
                        </form>
                        <label> <?php echo $row[5]; ?></label>
                        <form method="POST" action="korzina.php">
                            <input type="hidden" name="kolvo" value="<?php echo $row[5]; ?>">
                            <input type="hidden" name="id_tov" value="<?php echo $row[1]; ?>">
                            <div>
                                <input type="submit" name="minus" value="-">
                            </div>
                        </form>
                    </div>
                    
                    <button style="background: none; border: none; color: white"><p style="background-color: black; padding-top: 2%; padding-right: 2%; padding-bottom: 2%; padding-left: 2%">Удалить из корзины<p></button>
                    </div>
                    
                </div>
                <?
                    $sum=$row[5]*$row[6];
                    $summa+=$sum;
                    }
                ?>
                <div>
                    <label>Итоговая стоимость:</label>
                    <label><?echo $summa;?></label>
                    <div>
                        <form action="profile.php" method="post">
                            <input type="submit" name="zakaz" value="Оформить заказ">
                        </form>
                    </div>
                </div>
            </div>
                </div>
            </div>  
       </div>
       
    </div>
    <img src="img/Bombik.png" style="top:500px; left:0px; position: absolute; height:112px; ">
    <img src="img/Bombik.png" style="top:650px; left:0px; position: absolute; height:112px; ">
    <img src="img/Bombik.png" style="top:800px; left:0px; position: absolute; height:112px; ">
    <img src="img/Bombik.png" style="top:950px; left:0px; position: absolute; height:112px; ">
    <img src="img/Bombik.png" style="top:1100px; left:0px; position: absolute; height:112px; ">
    <img src="img/Bombik.png" style="top:1250px; left:0px; position: absolute; height:112px; ">


    <img src="img/Bombik.png" style="top:500px; left:1750px; position: absolute; height:112px; ">
    <img src="img/Bombik.png" style="top:650px; left:1750px; position: absolute; height:112px; ">
    <img src="img/Bombik.png" style="top:800px; left:1750px; position: absolute; height:112px; ">
    <img src="img/Bombik.png" style="top:950px; left:1750px; position: absolute; height:112px; ">
    <img src="img/Bombik.png" style="top:1100px; left:1750px; position: absolute; height:112px; ">
    <img src="img/Bombik.png" style="top:1250px; left:1750px; position: absolute; height:112px; ">

    <div class="basketblock">
        <div class="x">
            <img src="img/x.png" height="30" style="margin-left: 160px; margin-top:10px;">
        </div>
        <a href="korzina.html"><div class="textkorz">Корзина</div></a>
    </div>

    <script type="text/javascript">
        let basket=document.querySelector(".basket")
        let close=document.querySelector(".x")
        let basketblock=document.querySelector(".basketblock")

        basket.onclick=function(){
            basketblock.style.display="block"

        }
        close.onclick=function(){
            basketblock.style.display="none"
        }
    </script>
</body>
<footer>
    <div class="footer">
        <div class="footerinfo1">
            <h3>Контактная информация:</h3><br>
            <span>+7 914 293 85 19 - Менеджер</span><br>
            <span>+7 914 100 46 02 - Дизайнер</span><br>
            <span>+7 914 223 73 72 - Разработчик</span><br><br>
            <span>c 1 v e x#7308 - Менеджер</span><br>
            <span>Col.Хохлик#4632 - Дизайнер</span><br>
            <span>Pineapple#7842 - Разработчик</span>
        </div>
        <div class="footerinfo2">
            <h3>Создано командой <b>Mann Inc.</b></h3><br>
            <span>Менеджер - Алексеев Эрсан</span><br>
            <span>Дизайнер - Фелиферов Даниил</span><br>
            <span>Разработчик - Калинин Илья</span><br>
        </div>
    </div>
</footer>
</html>