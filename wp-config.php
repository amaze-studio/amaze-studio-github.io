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
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'Mixanok72,');

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
define('AUTH_KEY',         '%HXez5t`HlBTz#YuC;)te,j|4c#&a:.j*{RkL9|VB}_&f^}o(j::mI`oT@F:0vh[');
define('SECURE_AUTH_KEY',  'AoY|jX=7s::U!5!k-V_8$g[%Kh?871|+`Y7vMC%|N}8}{!+iHN9RhEf`QM-0|#Lw');
define('LOGGED_IN_KEY',    '%e|xL/X4c~^!<}3j`#H-@F-?c2Qk9J}m-Z?|OLe_}=y|I96n_J&CL6[Y)Q7a2I`j');
define('NONCE_KEY',        'YKvMg;lTSRKQ-Zy*wM]|.<YK.C4i||g{PATi+`t>{E<f~ny{Zwq-|z0Q4YU@MOj|');
define('AUTH_SALT',        'N,1;l8o]J*leORx3wROKPm~sc{c..(=P`:ry8,2s5ozN-z1VR}}s3h][>)}Xd#h!');
define('SECURE_AUTH_SALT', '1b7Xbu$AK+^RW|FQ*q1nIJ/im{|1|Eq9 [}kbm2J+wY9Sfv=c|]|Nz3_|rYRSGlx');
define('LOGGED_IN_SALT',   'N21ra~Iw-dl}1~fSB^GOKxa^{E??T=>s:,gO,b_N-pvAiR^ZxT{b 0AWN=xb}$Fe');
define('NONCE_SALT',       'xf9KNk?.H[c EcEkAj[uK&*7z-#&|~V./wXuyb(]aoTpY$Bg+DeJF)@EZ,F).K8l');

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
