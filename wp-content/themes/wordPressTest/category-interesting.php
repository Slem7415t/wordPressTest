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
    <div class="" style="width: 100%; background-color:<?= CFS()->get('category-color') ?>">
<?php
}
wp_reset_postdata();
?>
    <main class="container">
        <p>нет тут ничего</p>
        <?php the_content() ?>
        <?php get_header('records') ?>
    </main>
<?php get_footer() ?>