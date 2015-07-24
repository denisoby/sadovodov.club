<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'sadovodovclub');

/** Имя пользователя MySQL */
define('DB_USER', 'wpuser');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'jh#8HF4$SuSC');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'rr!g$qbN}(k/(aR}@[S`+?bg^w){Mb]-$Hw(d*Q,otn-%~HF.{}J?A;tuj*Z)w2M');
define('SECURE_AUTH_KEY',  '.xVc)aPaKip:r`dvCo!L^{>W,nM;wc(s{h:s-6&;)~Hr<PD)x,gw2jYG|Mea`&v~');
define('LOGGED_IN_KEY',    'UCcXqd9OVGL@yOYn9(Wkx*6%LPZx.#4--2U$m~0D:<%f+-t-fF|Q)A[[#=e+bg{~');
define('NONCE_KEY',        'K1ulTRSO*Q+ntKug/D$v%Xv)}6B1<D=AKK.m]jRgP$|%u;JZ&+*:.gq*ylawG.PV');
define('AUTH_SALT',        'K|>KFvvdGIjk w>K5n3;vL3DM/=TwW?O+HzSL9d5+sH4r{+rze4)O]X)HY=Y)XUs');
define('SECURE_AUTH_SALT', '*Sg>Wm-*6OHMine84W0l<A|9D8seYqsLk9Q?{q#O1&Ivbb((J>2+0YlerQeP7_5`');
define('LOGGED_IN_SALT',   'yjAjBP1A-*Ec~-J%4@-dtJ<&j8,%]I?{DG 7~B#j;8WH/M[5tz#mFQ_$,+:::*@V');
define('NONCE_SALT',       '`B_s-wbqO_YeqPb)mQkO>O#DZb.+h*T3,(+]Nf#meJe|SmRUCx(8Wbo9XZYev2%C');

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
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
