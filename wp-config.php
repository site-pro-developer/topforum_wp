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
 * * Настройки MySQL
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
define( 'DB_NAME', 'topforum_wp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'topforum_wp_admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '12345' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'T$JX!<.;rC-ev!X5ip`)L4G<}ne25bi=3YH1&jJHw5ln!U~0n;r}VrFD8CZG&)#Y' );
define( 'SECURE_AUTH_KEY',  ' #SFXv4RUS1s`!jtqK&uF:ka2;!ofdoj!37fX6m;>aLo+E8iX|W(/s!Cp?]dgeWS' );
define( 'LOGGED_IN_KEY',    'f8{Bx3DVMSu.-+Nf-pT7?4hU6@pESbRd_<>@u=!@){WJNz)9il7=HkEe>k I`FoT' );
define( 'NONCE_KEY',        '[vMG}kE%Bxj75}w(s97lim-$=b}|)}Jq0x9#Ha.?u8:-mm#R%/v0/]_5nk9Gplaj' );
define( 'AUTH_SALT',        'U*$49pe.r=_2/41pa.GET]s4@h{C@/43+G_wwGVkHZj&C%}07*^~.#_=.cF/fk@$' );
define( 'SECURE_AUTH_SALT', 'J`iIWs56D%w2,e8A#<^%6dnn)f-~^;uMo}j3ZC@u7ISOH}qLsHW:+UB<2o>!Bgw2' );
define( 'LOGGED_IN_SALT',   'A&ii/dOV_)GKX25y-`_n_%zIS:<YZt!dli,uZ04*IFMZx*d=eWJHFCBK0h-DV#W<' );
define( 'NONCE_SALT',       'QtyWamHgu2/*RmsJ<4Qnb#yDdueK85EHG;w9_?%uD%R({[! rBq)!lS>Sc>)=6P$' );

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
