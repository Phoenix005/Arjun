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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'arjun_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~%UWDLt@&lMK[1EUBm58se5dlKJQCuOGI`U8gBmubcs.jhs8nQ!0D:GnZJWl 7{`' );
define( 'SECURE_AUTH_KEY',  '-cURq5NOsfki lO52#Gb5;c^WES_-%zOpLOr@bT-|)S%j3 mEWFz1p+3E0ydtv;m' );
define( 'LOGGED_IN_KEY',    ';0;I8:~,Dj@[y{H5{Gk6i(InOGbY_ppY/%T/{T<&gx8P/YN1G:a+nyN3@)4RP*%`' );
define( 'NONCE_KEY',        'OIr?svbFkfc,b+~-C9o)#7nBPTGw;tGwdMO}q-gIH((Q4P.pskz`[8T;/]@`eh.M' );
define( 'AUTH_SALT',        'LHhP=s=1=wHF|U<4!L-@lC%^!0K)I5L05} Rt#!+^/Oe,9I0JJ!dP@nyCnYcexUU' );
define( 'SECURE_AUTH_SALT', 'rqkF%82.2N|<Z)X!bFTdKv8(%v+Ol4VPg&`ZJz$3)WFI{B%9?kn4]T$UdY3ok4IG' );
define( 'LOGGED_IN_SALT',   'tB;T5RO,x%Kxx/ujk,p/K N4lY]z3X#2&c sN|+7hEbv.`E +Tx5wY)W#et?cs7X' );
define( 'NONCE_SALT',       '5@48gCDld%mnfvry5:0vTn(u&guwH2O|[c-Y|Qhe(:tt[s0s`bp(N*D!2 ^s`W8O' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
