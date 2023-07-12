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
define( 'DB_NAME', 'auto_bd' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'S~b/U9D,2c2V*3NX!(G)%Kw X3LDS0]*bVi/@!{:&hc>L3u>e5+-q<3IG;I1<#/;' );
define( 'SECURE_AUTH_KEY',  '%qxyE,Yx@617xq52-u?DKSF.J2BR{d&]rW5s%MW#YIpy~d1UI<k.f*XEEb]EcY-C' );
define( 'LOGGED_IN_KEY',    '/{CS~Q|pgV^,uiJae[Fk&=13=D@Y.^)Oehw^ZG4es=$a,UMOU8.[TuO>q?cMsVQF' );
define( 'NONCE_KEY',        '`;<sI@NTr^(B23I1-JYh/^pqvSpmoIkf8=f9&h~Tq>Pplf?`HG9Dy.@1KW*jWbX#' );
define( 'AUTH_SALT',        's(6L/.HtotmxXL<@U`hq:(&4N`(:$pzuI*X~hM9dYRCsNeo4/yOv^K+Kruh&a32I' );
define( 'SECURE_AUTH_SALT', '|+K ]W)GX97l~w|nz-F;H+3RC5x_h}%nm_NO5EL)@Ljbkw[6jo2G X,w|HO|:y,0' );
define( 'LOGGED_IN_SALT',   ' B?la4!NR$mK/Sej[B0x8rS.F(W$W=9|Z30Jfgz<-$eAuHpn;a61QttD`h0f2[sA' );
define( 'NONCE_SALT',       'w@2`Cpv2ocyRt<th=GiwUW9_vDn(#E~]br)(Z;wm]z(.n%/MN51j?1zfJy% +Jtl' );

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
