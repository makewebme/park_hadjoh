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
define('DB_NAME', '');

/** Имя пользователя MySQL */
define('DB_USER', '');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'Vkp6g*_h;DwJ:WFyZ0H0AR(k2{LQlU|Rk%`;yge#>)C;lX_X*s^w3`LV/{iV=]ri');
define('SECURE_AUTH_KEY',  '!Vuhr013)vOUSe@`V*g5DZ/#svgpd =6cE8u4^-eHgwLLj{I#5O5CZ9/3p~gCoV)');
define('LOGGED_IN_KEY',    'Is;01`R#nD+zut;DK79}_l%BU>Pfl!zH^h1nhI15,R}s[^xS-f&C9j./5Q(ltHqm');
define('NONCE_KEY',        '7O.kR4u+qdX&,+m&+3I7i@;?mna{.bHM#w};kf(>lCUuLb%n+OAF#Q-<y}iMuG]`');
define('AUTH_SALT',        'mBSr,&z6=)o_sOHzM$[1A1{SB|]>EOJiC~R$8sAv;.6ajW$$O4f3du(7vs:TL pR');
define('SECURE_AUTH_SALT', ';1x^+]<Tc&8ymMml_4>a+L,$0oquPVtYvw#sB!Zk&jYYfw~.T@8%K=nNQ5|.J%%D');
define('LOGGED_IN_SALT',   'Nx9(&Gk20WXFXDIo1<4cO/ aoItvEBv{bL|?xSHI5<YUd|<G&<E;[}tBIHQ1GICK');
define('NONCE_SALT',       'isw!P>.IGhfw?^F>=~|E&iyeUej+uwRX?=9{T@JAK.]+1@w2^Cm7S4!!1}e4IeyO');

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
