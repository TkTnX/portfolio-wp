<?php
/*
Template Name: home
*/

?>



<?php get_header(); ?>

<main class="container">


    <!-- TITLE -->
    <section class="title">
        <div class="title__wrapper">
            <div class="title__text">
                <h1 class="text__title">
                    Front-End <span>React</span> Developer
                </h1>
                <p class="text__desc">
                    Привет, меня зовут <span>Тимур</span>! Я фронтенд
                    разработчик, верстальщик
                </p>
                <ul class="text__socials">
                    <li class="social">
                        <a href="https://github.com/TkTnX">
                            <GithubImg class="socialImg" />
                        </a>
                    </li>
                    <li class="social">
                        <a href="https://t.me/Timurka2077">
                            <TelegramImg class="socialImg" />
                        </a>
                    </li>
                </ul>

                <div class="stack">
                    <div class="stack__title">
                        <span>Технологии</span>
                        <ul class="stack__list">
                            <li class="stack__item">
                                <img width="50" src="<?php bloginfo("template_url") ?>/assets/images/js.svg"
                                    alt="технология" />
                            </li>
                            <li class="stack__item">
                                <img width="50" src="<?php bloginfo("template_url") ?>/assets/images/ts.svg"
                                    alt="технология" />
                            </li>
                            <li class="stack__item">
                                <img width="50" src="<?php bloginfo("template_url") ?>/assets/images/react.svg"
                                    alt="технология" />
                            </li>
                            <li class="stack__item">
                                <img width="50" src="<?php bloginfo("template_url") ?>/assets/images/html.svg"
                                    alt="технология" />
                            </li>
                            <li class="stack__item">
                                <img width="50" src="<?php bloginfo("template_url") ?>/assets/images/css.svg"
                                    alt="технология" />
                            </li>
                            <li class="stack__item">
                                <img width="50" src="<?php bloginfo("template_url") ?>/assets/images/scss.svg"
                                    alt="технология" />
                            </li>
                            <li class="stack__item">
                                <img width="50" src="<?php bloginfo("template_url") ?>/assets/images/nextjs.svg"
                                    alt="технология" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="wrapper__img">
                <img src="<?php bloginfo("template_url") ?>/assets/images/myImg.jpg" alt="картинка" />
            </div>
        </div>
    </section>

    <!-- ABOUT -->

    <section id="about" class="about">
        <div class="about__wrapper">
            <div class="about__wrapper-img">
                <img src="<?php bloginfo("template_url") ?>/assets/images/about.jpg" alt="img" />
            </div>
            <div class="about__text">
                <div class="hint">ОБО МНЕ</div>
                <p class="about__info">
                    <span>Я - Тимур, фронтенд разработчик.</span> Мой путь в разработке
                    начался осенью 2023 года. Сейчас мне 15 лет и я учусь в школе. Я
                    стремлюсь к развитию в сфере веб-разработки и хочу продолжать
                    изучать новые технологии и методики. На данный момент я использую
                    <span> React</span>, <span>TypeScript</span> и много других
                    технологий для разработки своих проектов.
                </p>
            </div>
        </div>
    </section>

    <!-- PORTFOLIO -->

    <section id="projects" class="portfolio">
        <div class="hint">Портфолио</div>
        <ul class="portfolio__list">



            <li class="portfolio__item">
                <div class="portfolio__wrapper">
                    <div class="portfolio__imgWrap">
                        <img src="<?php bloginfo("template_url") ?>/assets/images/07.jpg" alt="inkHouse" />
                    </div>
                    <div class="portfolio__info">
                        <h1 class="portfolio__cardTitle">Arcadia 🟣</h1>
                        <p class="portfolio__desc">Цели: сверстать свой самый сложный макет на 18.09.24</p>

                        <p class="portfolio__desc">Технологии: HTML, SCSS, JS</p>
                        <div class="portfolio__deployments">
                            <a target="_blank" href="https://github.com/TkTnX/Arcadia" class="portfolio__deployment">
                                Код
                                <img src="<?php bloginfo("template_url") ?>/assets/images/github.svg " alt="github" />
                            </a>

                            <a target="_blank" href="https://arcadia-black.vercel.app" class="portfolio__deployment">
                                Демо
                                <img src="<?php bloginfo("template_url") ?>/assets/images/tab.svg" alt="Демо" />

                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="portfolio__item">
                <div class="portfolio__wrapper">
                    <div class="portfolio__imgWrap">
                        <img src="<?php bloginfo("template_url") ?>/assets/images/07.jpg" alt="inkHouse" />
                    </div>
                    <div class="portfolio__info">
                        <h1 class="portfolio__cardTitle">Arcadia 🟣</h1>
                        <p class="portfolio__desc">Цели: сверстать свой самый сложный макет на 18.09.24</p>

                        <p class="portfolio__desc">Технологии: HTML, SCSS, JS</p>
                        <div class="portfolio__deployments">
                            <a target="_blank" href="https://github.com/TkTnX/Arcadia" class="portfolio__deployment">
                                Код
                                <img src="<?php bloginfo("template_url") ?>/assets/images/github.svg " alt="github" />
                            </a>

                            <a target="_blank" href="https://arcadia-black.vercel.app" class="portfolio__deployment">
                                Демо
                                <img src="<?php bloginfo("template_url") ?>/assets/images/tab.svg" alt="Демо" />

                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="portfolio__item">
                <div class="portfolio__wrapper">
                    <div class="portfolio__imgWrap">
                        <img src="<?php bloginfo("template_url") ?>/assets/images/07.jpg" alt="inkHouse" />
                    </div>
                    <div class="portfolio__info">
                        <h1 class="portfolio__cardTitle">Arcadia 🟣</h1>
                        <p class="portfolio__desc">Цели: сверстать свой самый сложный макет на 18.09.24</p>

                        <p class="portfolio__desc">Технологии: HTML, SCSS, JS</p>
                        <div class="portfolio__deployments">
                            <a target="_blank" href="https://github.com/TkTnX/Arcadia" class="portfolio__deployment">
                                Код
                                <img src="<?php bloginfo("template_url") ?>/assets/images/github.svg " alt="github" />
                            </a>

                            <a target="_blank" href="https://arcadia-black.vercel.app" class="portfolio__deployment">
                                Демо
                                <img src="<?php bloginfo("template_url") ?>/assets/images/tab.svg" alt="Демо" />

                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="portfolio__item">
                <div class="portfolio__wrapper">
                    <div class="portfolio__imgWrap">
                        <img src="<?php bloginfo("template_url") ?>/assets/images/07.jpg" alt="inkHouse" />
                    </div>
                    <div class="portfolio__info">
                        <h1 class="portfolio__cardTitle">Arcadia 🟣</h1>
                        <p class="portfolio__desc">Цели: сверстать свой самый сложный макет на 18.09.24</p>

                        <p class="portfolio__desc">Технологии: HTML, SCSS, JS</p>
                        <div class="portfolio__deployments">
                            <a target="_blank" href="https://github.com/TkTnX/Arcadia" class="portfolio__deployment">
                                Код
                                <img src="<?php bloginfo("template_url") ?>/assets/images/github.svg " alt="github" />
                            </a>

                            <a target="_blank" href="https://arcadia-black.vercel.app" class="portfolio__deployment">
                                Демо
                                <img src="<?php bloginfo("template_url") ?>/assets/images/tab.svg" alt="Демо" />

                            </a>
                        </div>
                    </div>
                </div>
            </li>




        </ul>
    </section>

    <!-- REVIEWS -->

    <div class="reviews__wrapper" id="reviews">
        <div class="hint">Отзывы и фриланс</div>

        <div class="reviews-kwork__wrapper">
            <h2 class="reviews-kwork__title">
                <span>K</span>work
            </h2>
            <div class="reviews-kwork__userWrapper">
                <div class="reviews-kwork__userImgWrapper">
                    <img class="reviews-kwork__img" src="https://cdn-edge.kwork.ru/files/avatar/large/03/16801985-2.jpg"
                        alt="Kwork Profile" />
                    <a class="reviews-kwork__userLink" href="https://kwork.ru/user/timurttx">
                        Посмотреть профиль
                    </a>
                </div>

                <div class="reviews-kwork__userText">
                    <h3 class="reviews-kwork__userTitle">Тимур - профиль на Kwork</h3>
                    <p class="reviews-kwork__userSubtitle">Frontend-разработчик, верстальщик</p>
                    <p class="reviews-kwork__userDesc">
                        Добро пожаловать! Я профессиональный веб-разработчик с опытом работы
                        в области веб-технологий, включая HTML, CSS, SCSS, JavaScript, React
                        и TypeScript. Меня зовут Тимур, и я готов помочь вам с реализацией
                        вашего проекта! <br /> Буду делать всё качественно и быстро.
                        Надеюсь, мы с вами поработаем.
                    </p>
                </div>
            </div>
        </div>


        <div class="swiper swiper__wrapper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="reviews-swiper__wrapper">
                        <div class="reviews-swiper__top">
                            <a href="https://kwork.ru/user/timurttx">
                                <img src="<?php bloginfo("template_url") ?>/assets/images/reviews/cssdent.jpg ?>"
                                    alt="Отличная работа, все сделано быстро и строго по макету" />
                            </a>
                            <div>
                                <div class="reviews-swiper__clientWrapper">
                                    <p class="reviews-swiper__client">weblogos</p>
                                    <Smile color="#84b747" />
                                </div>
                                <p class="reviews-swiper__review">Отличная работа, все сделано быстро и строго по
                                    макету</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="reviews-swiper__wrapper">
                        <div class="reviews-swiper__top">
                            <a href="https://kwork.ru/user/timurttx">
                                <img src="<?php bloginfo("template_url") ?>/assets/images/reviews/cssdent.jpg ?>"
                                    alt="Отличная работа, все сделано быстро и строго по макету" />
                            </a>
                            <div>
                                <div class="reviews-swiper__clientWrapper">
                                    <p class="reviews-swiper__client">weblogos</p>
                                    <Smile color="#84b747" />
                                </div>
                                <p class="reviews-swiper__review">Отличная работа, все сделано быстро и строго по
                                    макету</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="reviews-swiper__wrapper">
                        <div class="reviews-swiper__top">
                            <a href="https://kwork.ru/user/timurttx">
                                <img src="<?php bloginfo("template_url") ?>/assets/images/reviews/cssdent.jpg ?>"
                                    alt="Отличная работа, все сделано быстро и строго по макету" />
                            </a>
                            <div>
                                <div class="reviews-swiper__clientWrapper">
                                    <p class="reviews-swiper__client">weblogos</p>
                                    <Smile color="#84b747" />
                                </div>
                                <p class="reviews-swiper__review">Отличная работа, все сделано быстро и строго по
                                    макету</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="reviews-swiper__wrapper">
                        <div class="reviews-swiper__top">
                            <a href="https://kwork.ru/user/timurttx">
                                <img src="<?php bloginfo("template_url") ?>/assets/images/reviews/cssdent.jpg ?>"
                                    alt="Отличная работа, все сделано быстро и строго по макету" />
                            </a>
                            <div>
                                <div class="reviews-swiper__clientWrapper">
                                    <p class="reviews-swiper__client">weblogos</p>
                                    <Smile color="#84b747" />
                                </div>
                                <p class="reviews-swiper__review">Отличная работа, все сделано быстро и строго по
                                    макету</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="reviews-swiper__wrapper">
                        <div class="reviews-swiper__top">
                            <a href="https://kwork.ru/user/timurttx">
                                <img src="<?php bloginfo("template_url") ?>/assets/images/reviews/cssdent.jpg ?>"
                                    alt="Отличная работа, все сделано быстро и строго по макету" />
                            </a>
                            <div>
                                <div class="reviews-swiper__clientWrapper">
                                    <p class="reviews-swiper__client">weblogos</p>
                                    <Smile color="#84b747" />
                                </div>
                                <p class="reviews-swiper__review">Отличная работа, все сделано быстро и строго по
                                    макету</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="reviews-swiper__wrapper">
                        <div class="reviews-swiper__top">
                            <a href="https://kwork.ru/user/timurttx">
                                <img src="<?php bloginfo("template_url") ?>/assets/images/reviews/cssdent.jpg ?>"
                                    alt="Отличная работа, все сделано быстро и строго по макету" />
                            </a>
                            <div>
                                <div class="reviews-swiper__clientWrapper">
                                    <p class="reviews-swiper__client">weblogos</p>
                                    <Smile color="#84b747" />
                                </div>
                                <p class="reviews-swiper__review">Отличная работа, все сделано быстро и строго по
                                    макету</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="reviews-swiper__wrapper">
                        <div class="reviews-swiper__top">
                            <a href="https://kwork.ru/user/timurttx">
                                <img src="<?php bloginfo("template_url") ?>/assets/images/reviews/cssdent.jpg ?>"
                                    alt="Отличная работа, все сделано быстро и строго по макету" />
                            </a>
                            <div>
                                <div class="reviews-swiper__clientWrapper">
                                    <p class="reviews-swiper__client">weblogos</p>
                                    <Smile color="#84b747" />
                                </div>
                                <p class="reviews-swiper__review">Отличная работа, все сделано быстро и строго по
                                    макету</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>
    </div>

</main>

<?php get_footer(); ?>