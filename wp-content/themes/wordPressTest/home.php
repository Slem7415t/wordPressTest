<?php get_header() ?>
    <main class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h3><?php the_title() ?></h3>
            <p><?php the_excerpt() ?></p>
            <p><?php the_time('j F Y') ?> <?php the_author() ?></p>
            <p><a href="<?php echo get_the_permalink(); ?>" target="_blank" rel="noopener noreferrer">перейти</a></p>
        <?php endwhile; else: ?>
	        <p>Записей нет</p>
        <?php endif; ?>
        <?php echo the_posts_pagination(); ?>
    </main>
<?php get_footer() ?>