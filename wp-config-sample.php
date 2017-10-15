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
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'HC=L-@L<S0-oWYC+-zRvU5<jmcd 5/.A_Leyai`RXnk`()`&Z;2wV-RxO^Z~_I,K');
define('SECURE_AUTH_KEY',  'aYjeETzTCN;e|D$$!;M#Kb5TY>{Ha]S/Qpq!~9/Vw:98q*1&@Zbfk.h~|~S$j=!J');
define('LOGGED_IN_KEY',    'f0Y,=%|&aZ%~5*I~o8f@zpw[b!P(s$kK>fG|mRoC|DD:tZ8+V#:Y6jD0+X>t?{Sz');
define('NONCE_KEY',        '$h~;g RXqP:@gwxg4IG/{DO>,#JfpWniB+6YC(Z--|0d+@+x{yf5T-8FW[VyL,5-');
define('AUTH_SALT',        '<CnMYfEu>D-&~OO>=PW{)9I+&{/1~=FU5k+,BLHOFr-HPvmho /Y0KJ$|hqfvgMS');
define('SECURE_AUTH_SALT', ')bk5&$gncS{S+-/NX,H%ajQ!*MZ=h@xOp4=JL(Q)1Xz,Rsy96@Y!>g%upR_wNoQD');
define('LOGGED_IN_SALT',   '6@Slt@-Cg!bJYcFQMl{E>ubq+<hu,-{ ~HQxcZsI}`7;}?UJ 1&j]r)--m6d{MZb');
define('NONCE_SALT',       'pM`V)fI2mG=5={IQUEKUX$;)1_fJylcOf,(F*f(:pXKW!YI@aY&d%Yq&I5)#jg[1');

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
