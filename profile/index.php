<?php
session_start();
if(!$_SESSION['user']){
    header('Location: ./profile/index.php');
}
?>
<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Виртуальный методический кабинет</title>

    <!--Подключение собственных стилей-->
    <link rel="stylesheet" href="../assets/css/style.css?ver=3">

</head>

<body>

    <section class="main">

        <div class="personal__main">
            <div class="presonal__nav">
                <nav class="nav">
                    <div class="nav__title">
                        <p class="nav__atn">Тестовая версия</p>
                        <p class="nav__atn">0.3v</p>
                    </div>
                    <div class="nav__logo">
                        <img src="../assets/img/vmk-logo.png" alt="Логотип Виртуальный методический кабинет"
                            class="nav__img">
                    </div>
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a class="nav__link"><?= $_SESSION['user']['full_name']?></a>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="nav__link">Активности</a>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="nav__link">Лучшие практики</a>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="nav__link">Методическая сеть</a>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="nav__link">Настройки</a>
                        </li>
                        <li class="nav__item">
                            <a href="../vendor/logout.php" class="nav__link">Выйти</a>
                        </li>
                    </ul>
                </nav>
                <div class="personal__nav--burger">
                    <span></span>
                </div>
            </div>
            <div class="personal__body">
                <div class="personal__body--header">
                    <h1 class="personal__body--header--title">активности</h1>
                </div>
                <div class="personal__body--list">
                    <div class="personal__body--item">
                        <div class="personal__body--item--title">
                            <h2>PROфи СПО</h2>
                        </div>
                        <p class="personal__body--item--text">Цель Конкурс: повышение эффективности и результативности профессионального образования с
                            учетом современных образовательных технологий и а
                            ктивизация взаимодействия педагогов, участников
                            образовательного процесса в формировании единого образовательного пространства для успешного
                            обучения студентов
                            профессиональных образовательных организаций</p>
                        <a href="#" class="personal__body--item--link">Положение конкурса</a>
                        <div class="personal__body--item--btn">
                            <a href="#">Подать заявку</a>
                        </div>
                    </div>
                    <!--<div class="personal__body--item">
                        <div class="personal__body--item--title">
                            <h2>PROфи СПО</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit quibusdam veniam, f
                            acere facilis voluptatum, at repudiandae vel omnis, est impedit temporibus ipsam laudantium
                            esse aut non blanditiis voluptas. Dolorum, officia!</p>
                        <a href="#">Положение конкурса</a>
                        <div class="personal__body--item--btn">
                            <a href="#">Подать заявку</a>
                        </div>
                    </div>
                    <div class="personal__body--item">
                        <div class="personal__body--item--title">
                            <h2>PROфи СПО</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit quibusdam veniam, f
                            acere facilis voluptatum, at repudiandae vel omnis, est impedit temporibus ipsam laudantium
                            esse aut non blanditiis voluptas. Dolorum, officia!</p>
                        <a href="#">Положение конкурса</a>
                        <div class="personal__body--item--btn">
                            <a href="#">Подать заявку</a>
                        </div>
                    </div>
                </div>-->

            </div>
            <div class="personal__body--footer">

            </div>
        </div>
        </div>

    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../assets/script/ham_menu.js"></script>
</body>

</html>