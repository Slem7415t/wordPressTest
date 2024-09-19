<?php 
/*
Template name: Одиночная статья
*/
get_header() ?>
    <main class="container">
        <?php the_content() ?>
        <hr style="background-color: blue; height: 3px">
        <?php get_header('records') ?>
    </main>
<?php get_footer() ?>