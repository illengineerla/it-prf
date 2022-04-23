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
            text-shadow: 5px; font-size: 2em;
            font-family: Montserrat;
        }
        .menutextmt{
            margin-left: 3%; padding-top: 0.5%; padding-bottom: 0.5%;
            text-shadow: 5px;
            font-family: Montserrat;
        }
        .menutextlogo{
            margin-top: 3%;
            text-shadow: 5px;
            font: italic bold 3em Calibri;
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
            background-color: #0D6573; border-radius: 16px; width: 50%; margin-left: auto; margin-right: auto; 
                    }
        .boxtext1{
            text-shadow: 5px; font-size: 2em; color: #FFFFFF;
            font-family: Montserrat;
        }
        .boxtext{
            text-shadow: 5px; font-size: 2em; color: #FFFFFF;
            font-family: Montserrat;
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
            margin-left: 3%;
            margin-top: 5%;

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
        margin-left: 30%;
        margin-top: 7px; 
        }
        .profile{
            margin-left: 5%;
            margin-top: 10px; 
        }
        .prof{
            width: 70%;
            height: 50%;
            background-color: #FFE870;
            border-radius: 16px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 5%;
            margin-bottom: 5%;
        }
        .avatar{
            margin-left: 3%;
            margin-top: 3%;
        }

        .footer{
            background-color: #FFE870;;
            height:250px;
            width: 100%;
            display: flex;
        }
        .footerinfo1{
            margin-right: 1100px;
        }
        .change{
            width: 15%;
            height: 5%;
            color: white;
            margin-top: 60%;
            margin-right: 5%;
        }
        .accept{
            width: 15%;
            height: 5%;
            color: white;
            margin-top:60%;
            margin-right: 10%;
        }
        .product-wrapper {
            display: block;
            width: 100%;
            float: left;
            transition: width .2s;
        }
        .product {
            display: block;
            position: relative;
            margin: 0 20px 20px 0;
            text-decoration: none;
            z-index: 0;
            height: 350px;
            margin-top: 13.5%;
            margin-left: 5%;
            border-radius: 16px;
            border: 2px solid #00D1FF;
        }
        .products {
            list-style: none;
            margin: 0 -20px 0 0;
            padding: 0;
        }

        @media only screen and (min-width: 450px) {
            .product-wrapper {
                width: 50%;
            }
        }

        @media only screen and (min-width: 768px) {
            .product-wrapper {
                width: 33.333%;
            }
        }

        @media only screen and (min-width: 1000px) {
            .product-wrapper {
                width: 21%;
            }
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
            <div class="basket" style="background-image: url(img/basket1.png); width: 60px; height: 60px; background-size: 100%;"></div>
            <?php 
                if ($_SESSION['login'] != ''){
            ?>
                <a class="profile" href="reg.php"><div style="background-image: url(img/profile.png); width: 60px; height: 60px; background-size: 100%"></div></a>
            <?php           
                }else{
            ?>
                <a class="profile" href="profile.php"><div style="background-image: url(<?php echo $_SESSION['img']; ?>); width: 60px; height: 60px; background-size: 100%"></div></a>
            <?php }?>
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
                <div class="BODY" style="display: flex;">
                    <div class="Filt mt-5 col-1">
                        <h4 class="text-center mt-2">Хиты и Новинки</h4>
                        <?php 
                            $query = "SELECT * FROM `class`";
                            $result = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_array($result)){
                        ?>
                        <form action="index.php" method="POST">
                            <input class="ms-2 text-white btn bg-transparent" style="font-size: 1.1em;" type="submit" name="class" value="<?php echo $row[1]; ?>">
                        </form>
                        <?php } ?>
                        <h4 class="text-center mt-3">Шары на событие</h4>
                        <?php 
                            $query = "SELECT * FROM `category`";
                            $result = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_array($result)){
                        ?>
                        <form action="index.php" method="POST">
                            <input class="ms-2 text-white btn bg-transparent" style="font-size: 1.1em;" type="submit" name="category" value="<?php echo $row[1]; ?>">
                        </form>
                        <?php } ?>
                        <h4 class="text-center mt-3">Кому</h4>
                        <?php 
                            $query = "SELECT * FROM `toworm`";
                            $result = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_array($result)){
                        ?>
                        <form action="index.php" method="POST">
                            <input class="ms-2 text-white btn bg-transparent" style="font-size: 1.1em;" type="submit" name="toworm" value="<?php echo $row[1]; ?>">
                        </form>
                        <?php } ?>
                        
                    </div>
                    <ul class="Bloks products">
                        <?php
                                $category = $_POST['category'];
                                $class = $_POST['class'];
                                $toworm = $_POST['toworm'];

                                if(($class == "Все товары") or ($category == "")){
                                    $query1 = "SELECT * FROM `tovar`";
                                }
                                else
                                {
                                    $query1 = "SELECT * FROM `tovar` WHERE `category` = '$category'";
                                }

                                $result1 = mysqli_query($conn, $query1);

                                while($row = mysqli_fetch_array($result1)){
                            ?>
                        <li class="LineUp product-wrapper" style="display: flex;">
                            <div class="product">
                                <div class="whiteblock" style="background-image: url(<?php echo $row[2]; ?>); background-size: 100%"></div>
                                <p class="text-center"><?php echo $row[1] ?></p>
                                <button class="text-light btn" style="background-color: #C962BF">Купить:  ...</button>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>

                </div>
            </div>  
	   </div>
	</div>

    <img src="img/Bombik.png" style="top:600px; left:0px; position: absolute; height:112px; ">
    <img src="img/Bombik.png" style="top:750px; left:0px; position: absolute; height:112px; ">
    <img src="img/Bombik.png" style="top:900px; left:0px; position: absolute; height:112px; ">
    <img src="img/Bombik.png" style="top:1050px; left:0px; position: absolute; height:112px; ">
    <img src="img/Bombik.png" style="top:1200px; left:0px; position: absolute; height:112px; ">
    <img src="img/Bombik.png" style="top:1350px; left:0px; position: absolute; height:112px; ">


    <img src="img/Bombik.png" style="top:600px; left:1750px; position: absolute; height:112px; ">
    <img src="img/Bombik.png" style="top:750px; left:1750px; position: absolute; height:112px; ">
    <img src="img/Bombik.png" style="top:900px; left:1750px; position: absolute; height:112px; ">
    <img src="img/Bombik.png" style="top:1050px; left:1750px; position: absolute; height:112px; ">
    <img src="img/Bombik.png" style="top:1200px; left:1750px; position: absolute; height:112px; ">
    <img src="img/Bombik.png" style="top:1350px; left:1750px; position: absolute; height:112px; ">

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