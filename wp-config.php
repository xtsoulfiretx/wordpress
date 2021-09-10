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
define( 'DB_NAME', 'alexilam_wordpress.alexi-lambrou.netmatters-scs.co.uk' );

/** MySQL database username */
define( 'DB_USER', 'alexilam_alexilambrou' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Th3P0w3rN1n3' );

/** MySQL hostname */
define( 'DB_HOST', 'http://wordpress.alexi-lambrou.netmatters-scs.co.uk/' );

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
define( 'AUTH_KEY',         'k7N~POudvjognzxz24XUX$+?(Shz?#oYPQZ_:/KX&]T[?Xqtyz,TMCBP19W$-ihP' );
define( 'SECURE_AUTH_KEY',  ',H;Bf-pohWQ.x9[,1jW:o _kZA6&Im (25|e=g`|Jh)A=#`WSO}bSR0VgBpQ.zyW' );
define( 'LOGGED_IN_KEY',    'X8v.tUIo;#`[Yj{Q8t+bp xgTZG:;=0lnXpbeB#P w qz5F/};BRPoxKj1TeEuAv' );
define( 'NONCE_KEY',        '0j:eXVq9;OO=]/[%wPD[3Sx;M!?#^@)[r>b)DSlx&5O)rkI.+>0Uq&2!+HXBt0S0' );
define( 'AUTH_SALT',        '9n*s1B^*RuA;vcOoD?1JQI6&Y3Z)-}C%<oHE;P%^9S^]/z3WNyKS,MJ4S2/lh4<#' );
define( 'SECURE_AUTH_SALT', '!+{0JorwEihL-7*fi8+^9:=`sm[.M{%AQaq68.xPL1M0@LzEnWJtCL:T;&5l@(|l' );
define( 'LOGGED_IN_SALT',   '?HjsPhR?Tg;++7;3cus)VReyJE8jCMZ7GKm|}zXgOM:B-7 Ss~|i^sWx:?/K06?/' );
define( 'NONCE_SALT',       '!l&dS&!:+1YPJ?CH,>B{0uFod5&+9OVyKwJmz{eRYp$^nIG{q1{A4Gz]f#~:].P]' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
