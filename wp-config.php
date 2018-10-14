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
define('DB_NAME', 'wordpress_serra');

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
define('AUTH_KEY',         '(SGF78Tln&-!;?uFpwfP`0Fos@Ygd|![NlB6t:6-y@6zptC0rycyc8AETKB i-pk');
define('SECURE_AUTH_KEY',  'tdE7`4voBd?ii<QR_}D}uL2Wn5-g7{zjucKD_+A^l C*_p5$^kFceC3i`lv9FZQ.');
define('LOGGED_IN_KEY',    'n}Ua{hIl+&n6A%4``h8a+U&74V2f>]p,yu2`mP.xhBC%OL+f-rt-u5^qgvvfzSd[');
define('NONCE_KEY',        '8A/dqkcECr6GBX{XES?l3ay2Hsbh./vXcjczjG*c5(|~E]x$iw]p=Qtlb=-j;?vH');
define('AUTH_SALT',        'dTLalL0!$}qCd<@nP5C!RaA9`K7oVzG-}iM&a[6k]XJZxgyUI2#cZ]i47aoSh<P+');
define('SECURE_AUTH_SALT', '_}K`g+[-#5EpaJ!kUF#?!h.6*uM;&n;;`zuv)o{mIt-_xD`iW,mm8.b1~Tc?UaV!');
define('LOGGED_IN_SALT',   '|_i]L:{(h|vZ.Yp:Cr3cu4|l?xJ%@EYr^TqR+C_.R5]yZG,yTQP#BMw]bd?HVk6$');
define('NONCE_SALT',       'iZV8U.~n9j=9rS6.!cK4k!PDx=Mx.s1hgm:9hzazp{/,-@kw=~zRLvChBq9;+rD[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_serra';

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
