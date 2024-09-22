<?php 
/*
Template name: Интересное
*/
get_header() ?>
<?php $settings = get_posts( [
    'numberposts'  => 1,
    'category_name' => 'settings',
    'post_type' => 'post',
] );
foreach($settings as $post) {
    setup_postdata($post);
?>
    <div class="" style="flex-grow: 1; width: 100%; background-color:<?= CFS()->get('category-color') ?>"><!--открывает настройки вставку-->
<?php
}
wp_reset_postdata();
?>
    <main class="container">
        <p>нет тут ничего</p>
        <?php the_content() ?>
    </main>
    </div><!--закрывает настройки вставку-->
<?php get_footer() ?>
