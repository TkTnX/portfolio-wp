<?php get_header(); ?>

<?php the_post(); ?>

<?php
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

<div class="container">
    <h3 class="single__title"><?php the_title(); ?></h3>
    <div class="single__content">
        <figure>
            <?php echo $image_text ?>
        </figure>
        <p class="portfolio__desc" id="goals"><?php echo wp_kses_post($goal_text); ?> </p>
        <p class="portfolio__desc" id="stack"><?php echo wp_kses_post($stack_text); ?></p>
        <a href="/" class="single__link">На главную</a>
    </div>
</div>

<?php get_footer(); ?>