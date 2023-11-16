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
define( 'DB_NAME', 'kasunair' );

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
define( 'AUTH_KEY',         'Ig )1osjf&(*qsTn!Squ4xt2I7cS%b2G6go<gY*8=lR^epi4gjz^@A.rWV|0bcBx' );
define( 'SECURE_AUTH_KEY',  '(#J.r[7nS}2s<_yy6GiJ$LS)*|6@.M#Tnv?!T?u.Rmh6>=nT_QDM,Yrx6`<??q[U' );
define( 'LOGGED_IN_KEY',    'h h(A7*PC7&b7G-P{w[Z%F-{Q6XUElZ45ZoR}#.z,Od|7km.(y_?Z<fRSW1jy70E' );
define( 'NONCE_KEY',        '; *?3fMBch,LFU&D;s~P$Ja)8S$b:!%G{[FIo?x1!lOqPppDk-Y;#3rDeh=tD!XM' );
define( 'AUTH_SALT',        '?} Ha!n!<`k49o%9Bs;f3jD%]IebR74(|?EZ0ZSDQ_ehY`D8Pfzjbb8_)dEuX`W,' );
define( 'SECURE_AUTH_SALT', 'df :S?|$gx}}XHTjC_s?]Hq;{S:)Zcs&Ff6t$Q_.S?+FL5{I=V2vLqI=u-l9tb 9' );
define( 'LOGGED_IN_SALT',   'JM,p+BVqIB>kf#z:o5TW<t&b?`?I}86w*Ro3bzU_^|C}~syYf/GiQ%i`VNp=(6Qd' );
define( 'NONCE_SALT',       '^UM*-hJLVjz{ bNP8cnR}D#DgMcR,t[,Y2<r7DoVK}rl9V;1v6T[_Y}t9L?hS85v' );

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
