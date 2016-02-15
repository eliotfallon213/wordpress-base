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
define('DB_NAME', 'hmwedding');

/** MySQL database username */
define('DB_USER', 'hmwedding');

/** MySQL database password */
define('DB_PASSWORD', 'P455word');

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
define('AUTH_KEY',         'Tv>A^}?qiH6;-2mix<Kgw)GfKVrokq@:/0sEK.b[|^[d~ZpyA~w@[NJ8iDB-PcVy');
define('SECURE_AUTH_KEY',  '|6`UT-*:15JXqVL<<@e;N`jg(0(|maE&^0B,ODv~ jAqU{{-zQMW6vx}rbW3dG_I');
define('LOGGED_IN_KEY',    'kA5gl@VJ9G+04q0};^6TYz~ 0,JO]14yU`3.uo/Z.4Zj08;b-|df`|!O+TJct^8p');
define('NONCE_KEY',        'Q;D_$f|r|%Rf^elRjV/v^:0=]WVzna`95asAyC><)Ge$T_FhvH|eD-l 5^D3VAhU');
define('AUTH_SALT',        'q/K_et+{5-$RYwjz0E^wxOuHWU.d(^T 2^)|@{!!T$#F,Ivbmeak=Cp1Y{1yY-[8');
define('SECURE_AUTH_SALT', 'A4mGOvn-])ID^tiX!hCD6deBsE)M[YB6H&MAjwJ`5Fmgo*|Tp;TtRmXY]%y@OG87');
define('LOGGED_IN_SALT',   '|my[@b-,`pp+e>=e]_&LmW!o!FBKP+i]t|}//1)f}Q [!*@J~fCKR88-rH1i$^rX');
define('NONCE_SALT',       'bQ.?|_]M:0(a~s)@o4uc/*t]+-JM2r-{eUoZN^+00N1yZ s{L*vbkuw8P;)/St/=');

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
