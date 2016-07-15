<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'crkdtnz');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'CPxdAwM$&`t808iB|L6_jBGAgl6ztl1i6g4ZE=UM@&J-JLC<T7vdn/eWjR+&y9`E');
define('SECURE_AUTH_KEY',  '+W)ao+1i8=jXjKfz9N5znD#*57;A;s10%Ex9OG)s;(EM7_%z~q/{k++hdhwjfp.8');
define('LOGGED_IN_KEY',    '7P1oo<![g{`8FL0{*OM53?`QS<7Q;9)j/ov/,UY aSZ;qBIwvv$,@;Shxls+=A%U');
define('NONCE_KEY',        'R2 p9D<N&0k(}aCgpJHc!F}p_l7s$5?gljsdk}IwrM~FpY(x~B-0VbWZRlp#j}ni');
define('AUTH_SALT',        'wV;T3+~T?39+:J<,N^1f3z=p6lK)8{&&--O`rP#Mc+4J3;dt~S85@n8Vb.V(EWl.');
define('SECURE_AUTH_SALT', 'n38!l!(R8J_!m:@5_u|s`qWqI:e|_L,.!`-]B*_0L]aB_*uBR}sgv>(+B> gi2p(');
define('LOGGED_IN_SALT',   'WCZP&z;JyIW0`.rC9Z5~vG .=..Z#DY--i]p6jO846&u<hs^B?ZmX@~N74^yQGm*');
define('NONCE_SALT',       '!qX%U^]ok^@qW4S)$G9|,10WWd.+*-Q/oOtP7m#-X-h_|PcNSvd5&6_pdc=, @2P');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
