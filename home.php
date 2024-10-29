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
                <?php the_field('title_title') ?>
                <?php the_field('title_description') ?>

                <ul class="text__socials">
                    <li class="social">
                        <a href="<?php the_field("title_github") ?>">
                            <img src="<?php bloginfo("template_url") ?>/assets/images/github.svg" class="socialImg" />
                        </a>
                    </li>
                    <li class="social">
                        <a href="<?php the_field("title_telegram") ?>">
                            <img src="<?php bloginfo("template_url") ?>/assets/images/telegram.svg" class="socialImg" />
                        </a>
                    </li>
                </ul>

                <div class="stack">
                    <div class="stack__title">
                        <span>Технологии</span>
                        <ul class="stack__list">
                            <?php the_field('title_stack') ?>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="wrapper__img">
                <img src="<?php the_field('title_main-image') ?>" alt="Title img">
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
                <?php the_field("about_about-text") ?>
            </div>
        </div>
    </section>

    <!-- PORTFOLIO -->

    <section id="projects" class="portfolio">
        <div class="hint">Портфолио</div>
        <ul class="portfolio__list">

            <?php
            global $post;

            $myposts = get_posts([
                'numberposts' => -1,
                'category' => 4

            ]);
            if ($myposts) {
                foreach (array_reverse($myposts) as $post) {
                    setup_postdata($post);

                    $content = apply_filters('the_content', get_the_content());

                    preg_match('/<figure class="wp-block-image size-large is-resized" id="image">(.*?)<\/figure>/s', $content, $matches);
                    $image_text = isset($matches[1]) ? $matches[1] : 'Изображение не найдено';
                    preg_match('/<p id="goals">(.*?)<\/p>/s', $content, $matches);
                    $goal_text = isset($matches[1]) ? $matches[1] : 'Цель не найдена';
                    preg_match('/<p id="stack">(.*?)<\/p>/s', $content, $matches);
                    $stack_text = isset($matches[1]) ? $matches[1] : 'Технологии не найдены';
                    preg_match('/<p id="code">(.*?)<\/p>/s', $content, $matches);
                    $code_text = isset($matches[1]) ? $matches[1] : 'Ссылка не найдена';
                    preg_match('/<p id="demo">(.*?)<\/p>/s', $content, $matches);
                    $demo_text = isset($matches[1]) ? $matches[1] : 'Ссылка не найдена';
                    ?>

                    <li class="portfolio__item">
                        <div class="portfolio__wrapper">
                            <div class="portfolio__imgWrap">
                                <a href="<?php echo get_page_link(get_the_ID()) ?>">
                                    <?php echo $image_text ?>
                                </a>
                            </div>
                            <div class="portfolio__info">
                                <h1 class="portfolio__cardTitle"><?php the_title() ?></h1>
                                <p class="portfolio__desc">Цели: <?php echo wp_kses_post($goal_text); ?> </p>

                                <p class="portfolio__desc">Технологии: <?php echo wp_kses_post($stack_text); ?></p>
                                <div class="portfolio__deployments">
                                    <?php if ($code_text !== 'Ссылка не найдена'): ?>
                                        <a target="_blank" href="<?php echo wp_kses_post($code_text) ?>"
                                            class="portfolio__deployment">
                                            Код
                                            <img src="<?php bloginfo("template_url") ?>/assets/images/github.svg " alt="github" />
                                        </a>

                                    <?php endif; ?>

                                    <?php if ($demo_text !== 'Ссылка не найдена'): ?>

                                        <a target="_blank" href="<?php echo wp_kses_post($demo_text) ?>"
                                            class="portfolio__deployment">
                                            Демо
                                            <img src="<?php bloginfo("template_url") ?>/assets/images/tab.svg" alt="Демо" />

                                        </a>

                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php
                }
            }

            wp_reset_postdata(); // Сбрасываем $post
            ?>







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
                    <p class="reviews-kwork__userSubtitle"><?php the_field("freelance_title") ?></p>
                    <p class="reviews-kwork__userDesc">
                        <?php the_field("freelance_description") ?>
                    </p>
                </div>
            </div>
        </div>


        <div class="swiper swiper__wrapper">
            <div class="swiper-wrapper">
                <?php
                global $post;

                $myposts = get_posts([
                    'numberposts' => -1,
                    'category' => 7

                ]);
                if ($myposts) {
                    foreach ($myposts as $post) {
                        setup_postdata($post);

                        ?>
                        <div class="swiper-slide">
                            <div class="reviews-swiper__wrapper">
                                <div class="reviews-swiper__top">
                                    <div class="reviews-swiper__clientWrapper">
                                        <p class="reviews-swiper__client"><?php the_title() ?></p>
                                        <img width="20" src="<?php bloginfo("template_url") ?>/assets/images/smile.svg"
                                            alt="smile">
                                    </div>
                                    <div class="reviews-swiper__text">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                    }
                }

                wp_reset_postdata(); // Сбрасываем $post
                ?>


            </div>
            <div class="swiper-pagination"></div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>
    </div>

</main>

<?php get_footer(); ?>