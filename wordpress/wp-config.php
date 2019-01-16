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
define('DB_NAME', 'lab10');

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
define('AUTH_KEY',         '<1.pWDRvNsH#x;5,I-_`es]:r(.4#9^]hLEKW|XQ`SXVwGR=iI{aCc)6XnvQb5)+');
define('SECURE_AUTH_KEY',  'KF`:$<|%zd%[K }U6BS}.4M|L/VEmz7t<0$Pj|70+nnK/Ud92f/q)Q78@R9;U&HX');
define('LOGGED_IN_KEY',    '40o}q~^>_b^8_q*:Z~B=2oQ6`GZ7FigzvV%vI]~[*Mo ZU8P9SA(U|ECLs1<D*B7');
define('NONCE_KEY',        '3[]bG2Lp@N1(P/TY2;!,o2P>EKg3<+3o;[>P<-J/ZM}OdWaVn~t,g|4mHMiY~7_4');
define('AUTH_SALT',        'hHH*:]RpEs2e!t<7Vj&&G)F,TvMN1&mhg%0^RC+loHQFisleY#Slylr~oa=xMXpD');
define('SECURE_AUTH_SALT', 'rvXpNUK`J>Ho!p+0`[gR@F;>^3~X>*B%[rw&-OrH|]r)swxdbBR(N~p|B=pc6TU1');
define('LOGGED_IN_SALT',   '([<ESyavI|<?7y})k|!rG5AWDtN(OVjd2dxtnoR?q=8t/z.$oA]wR6/WB^`PJ^yx');
define('NONCE_SALT',       '$+3$Ld4]/0&&C-s7fZXiwfjw5a9(;bj;&=m=>8)@J@L1!E!b`tL}{#OGQXttjMO{');

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
