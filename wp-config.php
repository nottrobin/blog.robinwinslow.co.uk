<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'gUjE7Atru6Ham+DU');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('DB_TYPE', 'sqlite');

define('WP_ALLOW_REPAIR', true);

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'zoW+4!+GJosFY6)la=;G 1ie%|x_TQj.VId)T-|~*(=vK&[.?hpvVqYyq-U3&,P+');
define('SECURE_AUTH_KEY',  '1cM^c_%Zvsy0g%l>-)pGS<DY~MGgX;JFAV$+uHGo6.ivhpR`;|*eO%5>HF-Pnm+/');
define('LOGGED_IN_KEY',    '.R<A)mf2^fzR=]HAQEF`b+.9G# E2#/%7.(ckn/UYX?$U~n0jmKTM?(7!c9y1Zzg');
define('NONCE_KEY',        '-n*[aAW,3XMABEq :ZbEWo$y]ADVMLi [6b`NW] ~PZ<:oC28TVQap})nB}M42K:');
define('AUTH_SALT',        'vPy30H1 /8J/t/%#A>lxQ-MAS#W_K6xh?:`X_Zjpp^Ju0so8&yDhYdV%[1i%d0Gm');
define('SECURE_AUTH_SALT', '<_EL@|~6(NUoLUk{X<p(%9u3PdDpc3-/1XVA78WFv(-Fu8S2-Zfou2bVF*B=Hbn%');
define('LOGGED_IN_SALT',   'j2on-eSHho={GKv]r%HkL%{BKk3w7sfZ&jFJ]~Y7N_%nsa8z)>vOFEF?R,`*Zd+|');
define('NONCE_SALT',       'FcY|,|TRZ6`s[/nyf{r&or;K>>DIg!Dd-[|<<jGh(Ml`;FgYUTW6q@V/JDt|YahS');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

