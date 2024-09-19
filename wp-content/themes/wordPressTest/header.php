<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php if(is_404()){
        echo 'Ошибка 404';
    } elseif(is_category('interesting')) {
        echo single_cat_title();
    } else {
        the_title();
    } ?>
    </title>
    <?php wp_head() ?>
</head>
<body 
    <?php if (!empty(CFS()->get('background_color')) || !empty(CFS()->get('background_images'))) { ?>
        style="<?php if (!empty(CFS()->get('background_color'))) { ?> background-color: <?= CFS()->get('background_color'); ?><?php } ?>; 
               <?php if (!empty(CFS()->get('background_images'))) { ?>background-image: url(<?= CFS()->get('background_images'); ?><?php } ?>)"
    <?php } ?>
    <?php if(is_404()) {
        echo 'style="background-color: #b0c5ed"';
    }?>>
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
    <header>
        <?php the_custom_logo(); ?>
        <?php wp_nav_menu( [
            'theme_location'  =>'top',
            'container'       =>'',
            'menu_class'      =>'',
            'menu_id'         =>'',
        ] ); ?>
    </header>
