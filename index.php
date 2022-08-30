<?php
    session_start();
    if(isset($_SESSION['user'])){
        header('Location: ./profile/index.php');
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Виртуальный методический кабинет</title>

    <link rel="stylesheet" href="../assets/css/style.css?ver=2">

</head>
<body>
    
    <section class="main">
        <div class="circle"></div>
        <div class="register">
            <div class="register__logo">
                <img src="./assets/img/vmk-logo.png" alt="Логотип Виртуальный методический кабинет" class="logo">
            </div>
            <h1 class="register__title">Виртуальный методический кабинет</h1>
            <form class="register__form" method="post" action="vendor/signin.php">
                <?php
                    if(isset($_SESSION['message'])){
                        echo '<div class="errMessage"><p>' . $_SESSION['message'] . '</p></div>';
                    }
                    unset($_SESSION['message']);
                ?>
                <div class="register__form--filed">
                    <input type="text" name = "login" placeholder="Логин">
                </div>
                <div class="register__form--filed">
                    <input type="text" name = "password" placeholder="Пароль">
                </div>
                <div class="register__form--btn">
                    <button type="submit" class="btn">Войти</button>
                </div>
                <div class="login">
                    <p class="login__text">Если еще не зарегистрированы</p>
                    <a href="./registration.php" class="btn btn--auth" id="authlogin">Регистрация</a>
                </div>   
            </form>
        </div>
    </section>


</body>
</html>