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
define( 'DB_NAME', 'tramhuong' );

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
define( 'AUTH_KEY',         'pC^>,B}}<;]_k k{{([X4F,v]IH]~5/smDpH!tj)GVksOL#Hw0O%ZCcdQg7lcWzn' );
define( 'SECURE_AUTH_KEY',  '5fd[krySxH )?uC,`n<<+[SSKGXe0?h?jsKd*WRgRb$Zxx:-:b:HJEgL;<io#%?I' );
define( 'LOGGED_IN_KEY',    'O@ch0Ezi xhpa^uXJHjJ?46*t[SgY#Mw6F~tUy[[cHQb0 u;;|DZ;uh}eGM+3kS{' );
define( 'NONCE_KEY',        '[3/och,Agf{e] SXM=^-GIc(H.+ s)-28rbJ Kthx8!&qA,W~#&+@t7,A.faKO=;' );
define( 'AUTH_SALT',        '8;L3q9EC[({|%V<mO }c![)qUS?Os`0 />w6wtx}1f;Akj95#E1&9kwrGoD801:8' );
define( 'SECURE_AUTH_SALT', 'k#Z!!HZN_N#`p0<@^IeiT3D}mN6@GGpE#{`+yQ0!ra]!&BcSTL[@9.qT=q>X{)PQ' );
define( 'LOGGED_IN_SALT',   'Ju.vmQ2 jpAT[Y8llwVf6]M`uNL>,?&LkqedegVx65_k-hk%=7ulI:E9D|wnuzAB' );
define( 'NONCE_SALT',       '~~u=f>tWkz.[gK wD,G,EjnPSgni*S3[=bD.R{8WdGJ&oC_4n+gjm59Szx|=qEN@' );

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
