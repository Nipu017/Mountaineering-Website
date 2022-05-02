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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '=/Slfp?,R %TDx1G+;SRQ.f}Xt9osb!O/.c48iYMQ{:Y@%ln6m<a6nw@n1X0{5B0' );
define( 'SECURE_AUTH_KEY',  'yS>}DaiHFf`Q;4qK}:lnzg2nne<<Y^vc-0}(%YM._aX3fr{X$8Jcv*(o` [-nc^f' );
define( 'LOGGED_IN_KEY',    '}z`bZ73YEKvEVuy^t)ukw a58Kh,D(:#ngFU,br#t6+C8Ie?afUd?Y2D&qSCp#o5' );
define( 'NONCE_KEY',        'u^:NCtq9]3!OE%2Z&d&XK>0)%!T}^z$jTe>wJ,Vx]8Gs%3*z>*zkZ-/p&,2]p#!|' );
define( 'AUTH_SALT',        '`86up =(D@yo;svpRbf$=JAwR9duh(JhEyAG|36hDUf1~iak?+xhw!?{5Is2Y{zI' );
define( 'SECURE_AUTH_SALT', 'eFj/!3@V1~TZ.&51~R7awpa4<%9W?|&pHyE1*gSS#j?Kg`{y5Z|0%Z;ATS}8?}Jj' );
define( 'LOGGED_IN_SALT',   '&J9])#Sl.9`EWUE#+A6_%hdmY/H=(Bcw{Kq$UBf#t/Dt[Sn!8jsZ|ikCqJ#JVYwL' );
define( 'NONCE_SALT',       ' ?FjA/h)?.uz)&QC}jZE$@z~_u~nA~&Vu}$A<#^l1CS4wRwSrikt)k!~Pl+Dru$&' );

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
