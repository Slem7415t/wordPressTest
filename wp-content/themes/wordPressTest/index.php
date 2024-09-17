<?php get_header() ?>
    <main class="container">
        <p>Создать пустой шаблон для темы можно тут: 
        <a href="https://underscores.me/" 
           target="_blank" 
           rel="noopener noreferrer">https://underscores.me/</a>
        </p>
        <p>Подробные статьи на русском языке про WP: 
            <a href="https://wp-kama.ru/" 
               target="_blank" 
               rel="noopener noreferrer">https://wp-kama.ru/</a>
        </p>
        <p>Про иерархию темы: 
            <a href="https://wp-kama.ru/id_7654/ierarhiya-fajlov-temy-shablona.html" 
               target="_blank" 
               rel="noopener noreferrer">https://wp-kama.ru/id_7654/ierarhiya-fajlov-temy-shablona.html</a>
        </p>
        <p>Войти в админку на wordpress командой: <i>сайт/wp-admin.</i></p>
        <p>Настройки базы данных хранятся в файле <i>wp-config.php</i>, 
        он расположен в корневой папке.</p>
        <p>Залитые файлы хранятся тут: <i>wp-content/uploads/</i></p>
        <p>В phpMyAdmin в таблице wp_options редактируются ссылки на хост. 
        А в таблице wp_users редактируются данные пользователей, зарегистрированных на сайте, 
        там тоже может потребоваться отредактировать ссылку на хост, при переносе сайта, 
        чтобы попасть в админку.</p>

        <h2>Плагины для VS Code</h2>
        <ul>
            <?php
                $loop=CFS()->get('plagins');
                foreach ( $loop as $row ) {
            ?>
                <li><?= $row['name_plagin'] ?></li>
            <?php } ?> 
        </ul> 
    </main>
<?php get_footer() ?>