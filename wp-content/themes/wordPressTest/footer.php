        <!--настройки-->
        <?php $settings = get_posts( [
            'numberposts'  => 1,
            'category_name' => 'settings',
            'post_type' => 'post',
        ] );
        foreach($settings as $post) {
            setup_postdata($post);
        ?>
            <div class="" style="width: 100%; background-color:<?= CFS()->get('category-color') ?>"><!--открывает настройки вставку-->
        <?php
        }
        wp_reset_postdata();
        ?>
        <footer>
            <!--меню-->
            <?php wp_nav_menu( [
              'theme_location'  => 'bottom',
              'container'       => '',
              'items_wrap'      => '%3$s',
            ] ); ?>
            <!--полезные ссылки-->
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
            <!--верстка-->
            <a
            class="white"
            href="https://my-resume-alexsem.netlify.app"
            target="_blank"
            rel="canonical"
            ><?= bloginfo('name'); ?>&nbsp;&copy;&nbsp;xAlexSemx&nbsp;2024-<?= date('Y'); ?>г.</a>
        </footer>
        <?php wp_footer() ?>
        </div><!--закрывает настройки вставку-->
    </body>
</html>