<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Тимур | Фронтенд</title>

    <?php wp_head(); ?>
</head>

<body>


    <header class="header">
        <div class="container header__wrapper">
            <h3 class="header__logo">
                <a href="/">timur.dev</a>
            </h3>
            <nav class="header__nav">
                <button class="theme">
                    <span class="currentTheme">
                        🌞
                    </span>
                </button>
                <?php the_field("header_nav-item") ?>

            </nav>
            <button id="mobileButton" class="mobileButton">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <div id="mobileMenu" class="header__menu">
            <?php the_field("header_nav-item") ?>

        </div>

    </header>