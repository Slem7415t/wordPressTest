        <footer>
            <?php wp_nav_menu( [
              'theme_location'  => 'bottom',
              'container'       => '',
              'items_wrap'      => '%3$s',
            ] ); ?>
            
            <?php if (!empty(CFS()->get('best_link'))) { ?>
                <h2>Полезные ссылки</h2>
                <ul>
                    <?php
                        $loop=CFS()->get('best_link');
                        foreach ( $loop as $row ) {
                    ?>
                        <li><?= $row['link_description'] ?></li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </footer>
        <?php wp_footer() ?>
    </body>
</html>