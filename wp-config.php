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
define('DB_NAME', 'newry_tennis_club');

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
define('AUTH_KEY',         'x|o8vl.?eZPmcc(DSEkd;qUOH.QdXzKLw 97$vE;!i#2{}P|VY&P*8]{SXwl9?p*');
define('SECURE_AUTH_KEY',  '.mCweK i5f~N}BuH<NKkhvb(bxX36[9hS3P|5L%GnU_(LYX#q~0:dFO%511l.11t');
define('LOGGED_IN_KEY',    'e@SP^4f}?*FD0[(i=4O>NXr`OqhZ. Y`ak(d1U<z}7Xt$s)i@+-1u-J]IAmHLhJ4');
define('NONCE_KEY',        '=XJM#?h) GD^r31xKC,BoI3zDf:s^s{N4jmPM0I}Q9K$!)elItWHKM17AiX=9w#3');
define('AUTH_SALT',        'zb)9H,X)8P_Jc#d@Vij=<~XJN>2eAVj)>r:z]cWMjKlA dSi^q?8;mOr8&fuY#aq');
define('SECURE_AUTH_SALT', 'g/tkBVGOqGp(8O_8NO0}j(ma;ldh-N|TD&EUe)6#HL]e+>R67I7B*pf-,/Thi|iU');
define('LOGGED_IN_SALT',   '5YiUe2N=+k}@8p@x{6:Q30#B`g0c]Zf7Mclru8]a*6)rOqNJ%)^FBy@7>8it&%(t');
define('NONCE_SALT',       '1hp1&X*Y^ulXh{g&`#}c`^<,|m}UB[>jd|xIavcsCgl.UVhxpM}daI?tF_>PUelF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tc1_';

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
