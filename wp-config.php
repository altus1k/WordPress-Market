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
define( 'DB_NAME', 'flower' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'flower_admin' );

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
define( 'AUTH_KEY',         'r^Id`hwT8Mi^4 )s7p0o6.+]9Jd`]z?WjyQd@Cp0O{zlKkT:Le3${@ioSVxEG>LL' );
define( 'SECURE_AUTH_KEY',  'nX48fST;eyC*<3_ngh.YmB+1QS)UAaMU{BqGlLPv&xKHiIY4>t4F.cL J(Txn<zB' );
define( 'LOGGED_IN_KEY',    '?d}HT{)D; h+K5+~iga+-`?<Z-$ 5#c vHOv[CD-V>dAw$dVI7,oFyiWeUn.]l0U' );
define( 'NONCE_KEY',        'N*iIjOVIE<BswJ&OZm4Vq(Cxg eiNaJpe*Rc,~u4TUSkjc_5SQQ#*oO&:d9;_lny' );
define( 'AUTH_SALT',        'cK9c:dJg,Rf9yL?+z^MmH.r+YI^|<7^JJCP=(5[Nwq,}Xn.LKi.RI7;k`-!i@/5t' );
define( 'SECURE_AUTH_SALT', ' $8R=xH-XNZu@V84xBn^B:^[2EEe{+xM,MPJar_K~leH6`#=*j:pLBClj_FqVjxl' );
define( 'LOGGED_IN_SALT',   ';UIGB%5KF^kA01f*&bphk=4+uKOOe9hgSq/* xv>`e~}+ (J, KsC}A9._G(E&Xk' );
define( 'NONCE_SALT',       ']8aLmXm%:BKcO&}IVkz=!HVXNJAjP3h0!u7^yh}jysqt(mG%`ZYBl_ig m;C?t|&' );

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
