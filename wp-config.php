<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
/*====================================
=            LOCAL CONFIG            =
====================================*/


// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}


// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'onsite_jwd6NPLG7c');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'onsite_N58KTKNAz');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'PwHAdas38E44v4WFaPYpVEej');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^D^gr4}, c56+uC^Hw ?r~47Ed}C>o.XQBfe(uPq<Z&HPx2#muY46-`auShfdjRl');
define('SECURE_AUTH_KEY',  '+iZn&s}+MH[c(!A7),%|XM9-:O^N`OH!yb_YNY%WHSd9SZmYZE=.V-%6+?[d0+=R');
define('LOGGED_IN_KEY',    'lDDx}E(6- :iN8WK+91rG ~|?r1kx*(W)CLId:|0+)pq.CUR!0<|-XC,? 5h5:xB');
define('NONCE_KEY',        ')DoXu5lND?ouwG$m?C4]|?ck(Tt_[]Jo;eM:OLx^t9bExeNx(B}-&yM~QWF_XQt-');
define('AUTH_SALT',        ':Yyf1  Wfx8{%7H&-zGEC|.y|awWO%+e+?4+i7W#-n7q2O=E[Y0JVH8*C&M&`K@k');
define('SECURE_AUTH_SALT', 'a|~Dri@=l=-^g@*hwuWr#z>nfGI5^6U(&KeMZfj5RRVHuKBMg&zB|c(igLlNG{9A');
define('LOGGED_IN_SALT',   'g|&v WL@EQS?$1cIPCXP6_XTRG+z#d[-tERz2HwsyoNd>T/_m%-sq%4*~~}BW3^O');
define('NONCE_SALT',       'k;>x?)doRzBMs~n(|_<5Z6kseQx+ZGD3mUjrmG+^++~wQ^-9~^^BJ~0?;u<-YB!w');
define( ‘DISALLOW_FILE_EDIT’, true );
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'PgfSK3H4L_'; // <-- GENERATE A RANDOM PREFIX
/**#@+
* {@link http://passwordsgenerator.net/ WordPress.org secret-key service}
*/
/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
	define( 'SCRIPT_DEBUG', true );
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
