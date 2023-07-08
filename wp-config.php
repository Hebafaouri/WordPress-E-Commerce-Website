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
define( 'DB_NAME', 'wbEcommerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         ' Lw<%i#`VZf-2O;;oEM^-0Y`B)F,Ixv/n68^N @ihd84iv}]xP,Z/!]0P,(=22b|' );
define( 'SECURE_AUTH_KEY',  'M[}<VO]8DR {/TQQu#AK/TUbS&aOE[.1w8QZo/viH5`Zc(g]kp{sVBYBxo4B~|=i' );
define( 'LOGGED_IN_KEY',    'kZ:PNBTrY;,.$@dC6{f9]BU;m,PtTTL6Dup5m+Z<<Y;?@?Q<Vyz0H_.C`gT9w6P$' );
define( 'NONCE_KEY',        'uz-1AwAsyi`/JD_RMZ-{Qx{&rHNW+:*e(65F@2<nhziYP<LSE`UDTxwuB@fP6UjB' );
define( 'AUTH_SALT',        '@nf2*svx#hJVqy, Zq}3:--%+YS.vB#m;Fe?BFWC!B|pM/bV*NQkXj!}WT#.vCC8' );
define( 'SECURE_AUTH_SALT', '_0 kvj#|/D$w<FkgElf4OJn[SCM7bc+0c4}A6PmW#!go?yzv4pXtE@?ukoZoj7e_' );
define( 'LOGGED_IN_SALT',   'K/Z2IY43AL=yxhBD4yL_&(0QVjQ?|;{GB 7Kc<B^+)N^-0rEN;iAgLA(RGc,ZdvJ' );
define( 'NONCE_SALT',       'oYxUJnY$+)&GP6o$,jEE/Y52+iVRT_X$Z@Jx{qM>$WYh4tV!X6wYp0M^6O=h<L?M' );

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
