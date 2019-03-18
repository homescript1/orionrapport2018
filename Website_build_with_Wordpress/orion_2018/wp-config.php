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
define( 'DB_NAME', 'orion2018' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ange*' );

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
define( 'AUTH_KEY',         'xd1g;x,>VsPN&NNa3JKL@g8>v^Wy%9fkQ,f?|$osCo8$f(mZM,Uke._P1Sm.>z?l' );
define( 'SECURE_AUTH_KEY',  ')>zV;Ts+t7@]bIVV{fz3bqBwr`~(o{6=.2/hCI.E#5#n~+lt&yr_8W0x5-cwTU08' );
define( 'LOGGED_IN_KEY',    '$B>s+*:scQ%((gXR>6l(k;#fW_z+#k>S$G~`{}x*^.1OPf;.Cy.v2p[H5V/_KI>k' );
define( 'NONCE_KEY',        'qClW[/V/x !/nHGvxF{Rd<x>r(4M2@z>Gvs5:_3]:n6+]>|CX{57YP~15f5ODEn ' );
define( 'AUTH_SALT',        'Vm44@omoPFUB(T>gv*JX3Do9Z,R+/fsxOedPVb$+IttV#<Y|oq3.pKl<k{5/.N@y' );
define( 'SECURE_AUTH_SALT', 'IrgZ.> lKJBYCm4y_#s$V-d>16LzE:;c^LB*uLVzb& &$J|A}?dyC7|%J~Qp33>L' );
define( 'LOGGED_IN_SALT',   '`5:0CFQEOb3FW/<!(=YwgVu}VC$M`T< M[K$n8q -D[uB;k63mR/A&u&)$$7)m/j' );
define( 'NONCE_SALT',       'dSxmRdS7wLX5;GdRVl2^L,k@CRy=aZ=Q1kbdD`+uHevAk}Jg(lC]Jme21-fM(L6w' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
