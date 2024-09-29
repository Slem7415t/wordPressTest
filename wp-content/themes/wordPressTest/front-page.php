<?php 
/*
Template name: Главная
*/
get_header() ?>
<main class="container">
  <article>
    <?php get_search_form(); ?>
    <?php the_content() ?>
    <?php get_header('records') ?>
  </article>
  <aside>
    <?php get_sidebar() ?>
    <?php dynamic_sidebar( ); ?>
  </aside>
</main>
<?php get_footer() ?>