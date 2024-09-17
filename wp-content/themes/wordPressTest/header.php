<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wordPressTest</title>
    <?php wp_head() ?>
</head>
<body style="background-color: <?= CFS()->get('background_color'); ?>; 
             background-image: url(<?= CFS()->get('background_images'); ?>)">
    <header>
        <?php the_custom_logo(); ?>
        <nav>
            <ul>
            <li><a href="<?= get_home_url(); ?>"><?= CFS()->get('header_link_home'); ?></a></li>
            </ul>
        </nav>
    </header>