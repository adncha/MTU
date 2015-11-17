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
define('DB_NAME', 'learningWordPress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'N3dYpeQ9.sViI?k*B;.HoLap5|@S7}|{VWy~KBQGm6{f$)rYYx&2Hzz$@Yh!$$]|');
define('SECURE_AUTH_KEY',  'lG01<xZ{2*4=OnJ-U$q?y6u,B+Wo-ni.xp6iuC&{n6{c/Xkn_41O+Woz+P#9mZqf');
define('LOGGED_IN_KEY',    'LvlyG%P*PcOt/$~Y6bJtT%x0lM6nzGPYOR!L;X{a3#p@A{|eH$BH+J182mN7[75H');
define('NONCE_KEY',        'jU)w!7]7U2 GFlWaG{?WRru`>/F?NrQK%!K;6*|,)2-0essQ-EOIk.(&MBWvf?[t');
define('AUTH_SALT',        'T&EscUg,4m(-C5=-}u,Bi+4HFZ&eZ`tDYQM..xOsfJ8EPJrA>jsCr^G~>A<[$/WR');
define('SECURE_AUTH_SALT', '3G^VmR)?Q-_+4/Au<{:Q<q3g>hm@ht6mrsd+=3w#U-@VTQIk--%{~%-H}ZF;s:vK');
define('LOGGED_IN_SALT',   '{r(f*UH{]GpZ23lpGS43Qckl6fDW1*x1[|9M1>QKrn*?|#ZB7<(Oadb {J7Mzc#N');
define('NONCE_SALT',       '%6i~y:36]|8Z%2k]ulD5>aFTVs4|=o)s|)<}F*zftL!|%qq+kUr|{2b!XNUG?-sx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_testsite';

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
