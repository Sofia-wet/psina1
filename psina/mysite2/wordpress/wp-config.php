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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'psina' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'sofi' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '123456' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ISxUT]A@kc-,98:0Kw|&u @G|~)Jl:Kn%F@9ah/7j}+vZ*.Gx+:L$tIaTfHXqVwx' );
define( 'SECURE_AUTH_KEY',  'Q,ER[&gU=jErZg_WR.-~W;Kah.3F5i)5/4p(Ard{Q8PO gdCI{dTrt4PwA`Y t*6' );
define( 'LOGGED_IN_KEY',    '<_o0.>Zqa1VGC6Kz6$*<J|)@*K2+SiNx=),94--rRi(n51s8[i+ul|HhU2QVWn+X' );
define( 'NONCE_KEY',        'LW02fxW&A?*:WOCXNG&4FKV.j}V7BC?aSO0}!>}}wDZSI*j14->oq-OqLMJ><FF4' );
define( 'AUTH_SALT',        '];<J[x=}ag=ng2Qevh%FlA(#Wyo.f9+J$%2 u-N93(xk;M,/!Fe2_ZXd>C1/B`x9' );
define( 'SECURE_AUTH_SALT', 'm9lvErV]ncvn#2n!JtH?+jUz[Fwe+umOS-Gb`;6Hon[4N0+~SNXqDrqn7^`;L5?g' );
define( 'LOGGED_IN_SALT',   'l2gCgepU[eb .p/_Uu$!&[sHO*Z@BsJ$g/_)2Hn^x5B*Dm:+EYnLRsTT}_.*UPy*' );
define( 'NONCE_SALT',       '!.Jg`FNwv}rL<<&el(V=hcrLHm#c5K:^5pU#vF2V,Hwt@nt`LD:aeKt:-o:RflY=' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
