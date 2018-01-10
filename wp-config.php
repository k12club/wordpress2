<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5_z9Ho%?6S6UoKUIWzuN/(]MdyfR4_+rBLaB>%h~bYSq!QccA3d`lyh1?Z0YN4bI');
define('SECURE_AUTH_KEY',  'vZ4BXxEJV*v;Q*oN]kb;Q`Fi1:7}bC+|1@>;OBvv`nZ|epsSdFc6&~2%li+QqDF/');
define('LOGGED_IN_KEY',    'K%6x2hY*`r7I@.Hd<JrkfF(2&gX1,gq-yey=yF52BMgDnkSb;b2H=tbnWCppF[)O');
define('NONCE_KEY',        '.P|W0O-2ml<Ko`iUTocM/~yo#y$d 8Em2gJ?F~Mzlsxecw`gME>*n@6SH1(5]rR3');
define('AUTH_SALT',        '))FU/R-a9xFFT@W>_#b)vv >^Wm,MMs4L+;ARM@M@K#[lh;G .Oy?H?tkr=?[Q!u');
define('SECURE_AUTH_SALT', 'rXo[8@Mq8X`wDY{cOEOF-tF|T*MMVrp`DXk96|Jk#d~n]Q~4coFyP~9ak<YtE2WS');
define('LOGGED_IN_SALT',   '.;/LcZAyS@@RT3<Nr>=sv@2CD(;=tl090+;2DfZ99gw<i( Uyc9k&aMDs+zUBr]1');
define('NONCE_SALT',       '1*{Nna=KQ,#;~b`1]|^!RJ,N[Za02:V6@ug;e]04 s$F?DqUGWBD~sB<p6Fp[y1/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
