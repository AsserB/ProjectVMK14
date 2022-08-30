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
        <div class="register">
            <div class="register__logo">
                <img src="./assets/img/vmk-logo.png" alt="Логотип Виртуальный методический кабинет" class="logo">
            </div>
            <h1 class="register__title">Виртуальный методический кабинет</h1>
            <form class="register__form" action="/vendor/signup.php" method="post">
                <?php
                    if(isset($_SESSION['message'])){
                        echo '<div class="errMessage"><p>' . $_SESSION['message'] . '</p></div>';
                    }
                    unset($_SESSION['message']);
                ?>
                <div class="register__form--filed">
                    <input type="text" name="full_name" placeholder="ФИО">
                </div>
                <div class="register__form--filed">
                    <input type="text" placeholder="Логин" name="login">
                </div>
                <div class="register__form--filed">
                    <input type="email" placeholder="Почта" name="email">
                </div>
                <div class="register__form--filed">
                    <input type="password" placeholder="Пароль" name="password">
                </div>
                <div class="register__form--filed">
                    <input type="password" placeholder="Подтвердить пароль" name="password_confirm">
                </div>
                <div class="register__form--btn">
                    <button type="submit" class="btn">Регистрация</button>
                </div>
                <div class="login">
                    <p class="login__text">Если уже зарегистрированы</p>
                    <a href="./index.html" class="btn btn--auth" id="authlogin">Войти</a>
                </div>
                <div class="privacy">
                    <p class="privacy__text">
                        *Нажимая на кнопку, вы даете свое согласие на <a href="https://irposakha14.ru/privacy/" class="privacy__link">обработку персональных данных</a>
                    </p>
                </div>
            </form>
        </div>
    </section>


</body>
</html>