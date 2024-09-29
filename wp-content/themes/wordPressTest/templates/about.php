<?php 
/*
Template name: О проекте
*/
get_header() ?>
    <main class="container">
        <p class="meta-test"><?php echo get_post_meta($post->ID, 'meta-test', true); ?></p>
        <?php the_content() ?>
    </main>
<?php get_footer() ?>