<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress_test' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'MySQL-5.7' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ta(!Iz RrEs0X_70?.{c5Z#8Pl?n+WxpR$h3>[^vgl+u1g}L]!l`m(zvttg9RK^y' );
define( 'SECURE_AUTH_KEY',  'NQR{V>m>!?#jE^k^7I}F,Du|H/!m0o<+2_L=[(!NmYN?>=VxCqhxo%cwGmL(;#W|' );
define( 'LOGGED_IN_KEY',    '4#rOJqm(/;BETL<v+ T -c1cF^p4BovGP5XO(>uINv@!JOp%[tE]+^tm,-I:81(A' );
define( 'NONCE_KEY',        'TrUwJ,)5,t.?!^o-UH? =n+.=**@>8p}xn`CTVvdA>XMf@Vy]=zC,B1$-}kT<x?d' );
define( 'AUTH_SALT',        'JAB5k}%g%F)|,{u6Y/.G1erHVQJBBEf$Hc=@J`tE^K8hqF@>HZg!:Nm2O>):#O )' );
define( 'SECURE_AUTH_SALT', 'BhH>qNYsi[=Iho_tr|`i|8`x+)(y>m4dP}&SWwu9.[z`L{$nc(R3-TEeW5v^us%p' );
define( 'LOGGED_IN_SALT',   'UH##nFaI?IjNXt1GJVd>AIxr2!|X,&KLPkeY&l*woENt|4K)s-!qHJ5?-{DKM{&M' );
define( 'NONCE_SALT',       'h @Mbqp ;Io&geFHq,`,,afRKM(,I$^K6zIVv/DDiXV:ooh~};-sB?zEwW<*0(S;' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
