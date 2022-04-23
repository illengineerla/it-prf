<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Регистрация.css">
    <style type="text/css">
        .main{
            height: 965px;
            background-color: #5C93C6;
            padding-top: 10%;
        }
        .info{
            height: 60%;
            width: 60%;
            background-color: #FFE870;
            margin-left: auto;
            margin-right: auto;

        }
        .flagright{
                    background-color: #49DEFF; width: 107.2px; height: 40px; margin-left: 20%;
                }
        .flag-1{
            background-color: #49DEFF; width: 107.2px; height: 40px; margin-left: 2%; opacity: 70%;
                }
        .flag-2{
            background-color: #FFE870; width: 107.2px; height: 40px; margin-left: 2%; opacity: 70%;
        }
        .flag-3{
            background-color: #49DEFF; width: 40px;height: 107.2px; margin-top: 2%; opacity: 70%;
        }
        .flag-4{
            background-color: #FFE870; width: 40px;height: 107.2px; margin-top: 2%; opacity: 70%;
        }

        .input{
            padding-left: 1%;
            background-color: #FFCF53;
            border-radius: 16px;
            border: 1px solid #00D1FF;
            color:white; margin-left: 12%; margin-top: 5%
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
    <div class="main">
        <div class="FLAGS" style="display: flex;">
            <div class="flagright"></div>
            <div class="flag-2"></div>
            <div class="flag-1"></div>
            <div class="flag-2"></div>
            <div class="flag-1"></div>
            <div class="flag-2"></div>
            <div class="flag-1"></div>
            <div class="flag-2"></div>
        </div>
        <div class="info" style="padding-top: 2%; padding-left: 8%">
            <div style="display: flex;">
            
                <div class="logo" style="background-size: 100%; background-image: url(img/logo.png); width: 80px; height: 80px; border-radius: 60px;"></div>
                <div>
                    <h4 style="margin-top: 10%; margin-left: 5%; color: white;">CLOUD CL.</h4>  
                </div> 
            </div>

            <div>

                <h2 style="color: white; margin-left: 27%;">РЕГИСТРАЦИЯ</h2>

            </div>
            <?php 
                if($_POST['reg'] == 'Зарегистрироваться')
                {
                    $login = $_POST['login'];
                    $mail = $_POST['mail'];
                    $pass1 = $_POST['pass1'];
                    $pass2 = $_POST['pass2'];

                    if($pass1 == $pass2){
                        $query = "INSERT INTO `users` (`username`, `email`, `password`, `role`)
                                                VALUES ('$login', '$mail', '$pass1', '0')";

                        $result = mysqli_query($conn, $query);
                        echo "Регистрация прошла успешно, <a href='reg.php'>Авторизуйтесь</a>";
                    }
                    else
                    {
                        echo "Пароли не совпадают, попробуйте еще раз <a href='reg.php'>Зарегистрироваться</a>";
                    }
                }
                else
                {
                ?>
            <form action="reg.php" method="POST">
                <div>
                    <input class="input" type="text" name="login" placeholder="Логин">
                    <input class="input" type="password" name="pass1" placeholder="Пароль">
                </div>
                <div>
                    <input class="input" type="text" name="mail" placeholder="Почта">
                    <input class="input" type="password" name="pass2" placeholder="Подтверждение пароля">      
                </div>
            
                <input style="background-color: #46B4C5; margin-left: 32%; margin-top: 5%;" type="submit" name="reg" value="Зарегистрироваться">
            </form>
            <?php } ?>
        </div>
            <div class="FLAGS" style="display: flex;">
                <div class="flagright"></div>
                <div class="flag-2"></div>
                <div class="flag-1"></div>
                <div class="flag-2"></div>
                <div class="flag-1"></div>
                <div class="flag-2"></div>
                <div class="flag-1"></div>
                <div class="flag-2"></div>
            </div>

        </div>
</body>
</html>