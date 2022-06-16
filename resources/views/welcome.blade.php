<!doctype html>
<html lang="ru">
<head>
    <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/style.css">

    <title>Главная страница z-part</title>
</head>
<body class="start-buyer">

<div class="site">
    <div class="header">
        <div class="title-header">
            <p>Всё о спецтехнике</p>
        </div>
        <div class="button-menu">
            <div class="button">
                <a href="{{ route('login_user_form') }}" class="">Личный кабинет</a>
            </div>
        </div>
    </div>

    <div class="menu-top">
        <div class="container">
            <div class="row mb-4">
                <div class="col-4">
                    <div class="button">
                        <a href="{{ route('home') }}" class="">Спец. техника</a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="button">
                        <a href="{{ route('home') }}" class="">Двигатели</a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="button">
                        <a href="{{ route('home') }}" class="">Сервисы</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="button">
                        <a href="{{ route('home') }}" class="">Запчасти</a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="button">
                        <a href="{{ route('home') }}" class="">Дилеры</a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="button">
                        <a href="{{ route('home') }}" class="">Обзоры</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="footer-img"></div>
</footer>

<!-- Вариант 1: Bootstrap в связке с Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
