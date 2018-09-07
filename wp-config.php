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
define('DB_NAME', 'beewinner');

/** Имя пользователя MySQL */
define('DB_USER', 'beewinner');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'beewinner');

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
define('AUTH_KEY',         'fN-*Ep ypm.< Y/0cqMZsCUzF<cwyHHw4n{*<N8SG(G[aYs7ka,P,F9_EU=6;w9q');
define('SECURE_AUTH_KEY',  'V8.HYv@6ydms#/KBU,]SYH2GM%_mE#v>Z@ XE#L~E<#K)k(>u|g49H]$(n}=.m*y');
define('LOGGED_IN_KEY',    ' =AAXWRbUW#M+LtaEp2@!mK[G.PAZF/MBfF;vfP[-poOKEe)|N6BhRw8k&,? WE)');
define('NONCE_KEY',        'sA|1J5Pd?+#NTcc2l2|gc#%HJ:{|K6cgN)Yf8^&B</fY*tZ+JRA@Hw)ID&7lHMn_');
define('AUTH_SALT',        '~%#HYh< }i0d-.6]e=}_>%WA1Yb,yAAh7g.+r:YE$%#ra_uyF(<Ww.coVX)kcqv6');
define('SECURE_AUTH_SALT', 'ykX+xx|suTi7b-:d(6h(%dBRj,WD7R.7Tn2Q^4LEXbif`%&)%3Ohj-z(CSLEkK=}');
define('LOGGED_IN_SALT',   '6q^z0+Qlp(/-{K)!~Z~B,?7DCHrN!w|5V;{tP,IuCX0hm+QT5X#cDb#nrS*<wkhO');
define('NONCE_SALT',       'Vl(@~NDRIcnz==ni+!3%~^rk[vN?.mSr4j<u_`z>G5o7>)~0eG}87y]25WO7.c^b');

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
