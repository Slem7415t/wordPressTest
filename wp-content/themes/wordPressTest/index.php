<?php 
/*
Template name: Главная
*/
get_header() ?>
    <main class="container">
        <?php the_content() ?>
        <?php get_header('records') ?>
    </main>
<?php get_footer() ?>