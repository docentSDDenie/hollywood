<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hollywood' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Q?`euMXZf!X]m]NP~{;ai3OB]w{N9l5my{(Y^.L7$W|kl<jhYY+ qz#%RW(MfzWv' );
define( 'SECURE_AUTH_KEY',  ',=J),PV?JX#R`nU%q{$rm1_NsC|77Lt.5U3iRFi~/,0coE(YkE4HO-ld}C&5fO|T' );
define( 'LOGGED_IN_KEY',    'v$at%g.8,T{B9iF{SIUSO{fgZd:pySA7@u/f,AHQ$1Gme?<:rK!MEY(d`OWtU{cT' );
define( 'NONCE_KEY',        ' PHO#)gGVjR4XEi~fFHgY6&oiU%2%>D@R[udc&t/A+5kyNmYLvh`Rpks:,N.{]Zv' );
define( 'AUTH_SALT',        '@DS11>5mLYI|kTEaF[-WbFYFp!4q%GW{.N:ZysD/-|pgTY$B#v-=J#;7B7[,V2Js' );
define( 'SECURE_AUTH_SALT', 'I{_Gw:w%cSo1zYS2tc.g4rVgB$zh-Un]}PvfRf! WArehqr5 hEfy#4#P:B]|v:I' );
define( 'LOGGED_IN_SALT',   'uU}:|~)K_1)A~u$2Zqn-2T::u725)Th7Mr_E{_j![Z[:<NKa~0DB1M_3lz-(:RE4' );
define( 'NONCE_SALT',       'Fh=jL_CCm[@XRqj8^.A6mc5.~2LZ_T5gq;P8@$_<rOBSt[?5|Yk<R3CN?yOcu*N*' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
