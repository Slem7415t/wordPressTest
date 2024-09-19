<h2><?= get_category(6, ARRAY_A)['name']; ?></h2>
<?php
    $posts = get_posts( [
        'numberposts'    => -1,
        'category_name'  => 'records',
        'orderby'        => 'title',
        'order'          => 'ASC',
        'post_type'      => 'post',
        'suppres_filter' => true
    ] );
    foreach($posts as $post) {
        setup_postdata($post);
?>
    <div>
        <?php the_post_thumbnail('adv_thumbnail'); ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </div>
<?php
    }
    wp_reset_postdata();
?>