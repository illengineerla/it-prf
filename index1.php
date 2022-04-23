<?php 
    session_start();
?>
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
            margin-left: 5%;
            border: 2px solid #00D1FF;
            border-radius: 16px;
        }
        .Block{
            background-color: rgba(53, 122, 152, 0.71);
            width: 280px;
            height: 400px;
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
                width: 23%;
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
                <label class="menutext">Вход</label>
            </div>

            <div class="menutextmt">
                <label class="menutext">Доставка</label>
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
        </div>

        <div class="Head" style="= background-color: #5C93C6; background-image: url(img/unknown.png);background-size: 100%;">
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
                <img class="shar1" src="img/sharik.png" style="position: absolute; width: 50px; margin-left: 100px; margin-top: 50px; display: none;">
                <img class="shar1" src="img/sharik.png" style="position: absolute; width: 50px; margin-left: -100px; margin-top: 50px; display: none;">
                <img class="shar1" src="img/sharik.png" style="position: absolute; width: 50px; margin-top: 50px; display: none;">
                <div id="box1" class="mt-5 box">
                    <h3 class="boxtext mt-5 py-1">Композиции</h3>
                </div>
                <img class="shar2" src="img/sharik.png" style="position: absolute; width: 50px; margin-left: 100px; margin-top: 50px; display: none;">
                <img class="shar2" src="img/sharik.png" style="position: absolute; width: 50px; margin-left: -100px; margin-top: 50px; display: none;">
                <img class="shar2" src="img/sharik.png" style="position: absolute; width: 50px; margin-top: 50px; display: none;">
                <div id="box2" class="mt-5 box">
                    <h3 class="boxtext mt-5 py-1">Программа лояльности</h3>
                </div>
            </div>
            <div class="col-4 text-center">
                <img class="shar3" src="img/sharik.png" style="position: absolute; width: 50px; margin-left: 100px; margin-top: 50px; display: none;">
                <img class="shar3" src="img/sharik.png" style="position: absolute; width: 50px; margin-left: -100px; margin-top: 50px; display: none;">
                <img class="shar3" src="img/sharik.png" style="position: absolute; width: 50px; margin-top: 50px; display: none;">
                <div id="box3" class="mt-5 box">
                    <h3 class="boxtext mt-5 py-1">События</h3>
                </div>
                <img class="shar4" src="img/sharik.png" style="position: absolute; width: 50px; margin-left: 100px; margin-top: 50px; display: none;">
                <img class="shar4" src="img/sharik.png" style="position: absolute; width: 50px; margin-left: -100px; margin-top: 50px; display: none;">
                <img class="shar4" src="img/sharik.png" style="position: absolute; width: 50px; margin-top: 50px; display: none;">
                <div id="box4" class="mt-5 box">
                    <h3 class="boxtext mt-5 py-1">Хиты</h3>
                </div>
            </div>
            <div class="col-4 text-center">
                <img class="shar5" src="img/sharik.png" style="position: absolute; width: 50px; margin-left: 100px; margin-top: 50px; display: none;">
                <img class="shar5" src="img/sharik.png" style="position: absolute; width: 50px; margin-left: -100px; margin-top: 50px; display: none;">
                <img class="shar5" src="img/sharik.png" style="position: absolute; width: 50px; margin-top: 50px; display: none;">
                <div id="box5" class="mt-5 box">
                    <h3 class="boxtext mt-5 py-1">Латексные шары</h3>
                </div>
                <img class="shar6" src="img/sharik.png" style="position: absolute; width: 50px; margin-left: 100px; margin-top: 50px; display: none;">
                <img class="shar6" src="img/sharik.png" style="position: absolute; width: 50px; margin-left: -100px; margin-top: 50px; display: none;">
                <img class="shar6" src="img/sharik.png" style="position: absolute; width: 50px; margin-top: 50px; display: none;">
                <div id="box6" class="mt-5 box">
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
                            <div class="Block product">
                                <div class="whiteblock" style="background-image: url(<?php echo $row[2]; ?>); background-size: 100%"></div>
                                <p class="text-center"><?php echo $row[1] ?></p>
                                <button class="text-light btn mt-4 ms-2" style="background-color: #C962BF">Купить:  ...</button>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>  
	   </div>
	</div>
    

<script type="text/javascript">
    shar1 = document.querySelectorAll(".shar1");
    shar2 = document.querySelectorAll(".shar2");
    shar3 = document.querySelectorAll(".shar3");
    shar4 = document.querySelectorAll(".shar4");
    shar5 = document.querySelectorAll(".shar5");
    shar6 = document.querySelectorAll(".shar6");

    document.getElementById("box1").addEventListener('mousemove', e => {
        for (var i = 0; i < 3; i++) {
            shar1[i].style.display="inline"
            shar1[i].style.marginTop = "0px"
        }
    })
    document.getElementById("box1").addEventListener('mouseout', e => {
        for (var i = 0; i < 3; i++) {
            shar1[i].style.display="none"
            shar1[i].style.marginTop = "50px";
        }
    })

    document.getElementById("box2").addEventListener('mousemove', e => {
        for (var i = 0; i < 3; i++) {
            shar2[i].style.display="inline"
            shar2[i].style.marginTop = "0px"
        }
    })
    document.getElementById("box2").addEventListener('mouseout', e => {
        for (var i = 0; i < 3; i++) {
            shar2[i].style.display="none"
            shar2[i].style.marginTop = "50px";
        }
    })

    document.getElementById("box3").addEventListener('mousemove', e => {
        for (var i = 0; i < 3; i++) {
            shar3[i].style.display="inline"
            shar3[i].style.marginTop = "0px"
        }
    })
    document.getElementById("box3").addEventListener('mouseout', e => {
        for (var i = 0; i < 3; i++) {
            shar3[i].style.display="none"
            shar3[i].style.marginTop = "50px";
        }
    })

    document.getElementById("box4").addEventListener('mousemove', e => {
        for (var i = 0; i < 3; i++) {
            shar4[i].style.display="inline"
            shar4[i].style.marginTop = "0px"
        }
    })
    document.getElementById("box4").addEventListener('mouseout', e => {
        for (var i = 0; i < 3; i++) {
            shar4[i].style.display="none"
            shar4[i].style.marginTop = "50px";
        }
    })

    document.getElementById("box5").addEventListener('mousemove', e => {
        for (var i = 0; i < 3; i++) {
            shar5[i].style.display="inline"
            shar5[i].style.marginTop = "0px"
        }
    })
    document.getElementById("box5").addEventListener('mouseout', e => {
        for (var i = 0; i < 3; i++) {
            shar5[i].style.display="none"
            shar5[i].style.marginTop = "50px";
        }
    })

    document.getElementById("box6").addEventListener('mousemove', e => {
        for (var i = 0; i < 3; i++) {
            shar6[i].style.display="inline"
            shar6[i].style.marginTop = "0px"
        }
    })
    document.getElementById("box6").addEventListener('mouseout', e => {
        for (var i = 0; i < 3; i++) {
            shar6[i].style.display="none"
            shar6[i].style.marginTop = "50px";
        }
    })

</script>

</body>
</html>