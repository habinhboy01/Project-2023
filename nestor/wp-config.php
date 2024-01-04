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
define( 'DB_NAME', 'nestor' );

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
define( 'AUTH_KEY',         'X93vn7q#i?dWzw.O-(YXG#s$f[*HIp zYdM_7aZW@*QD5uw{J[N)`KP&6|k2u,la' );
define( 'SECURE_AUTH_KEY',  'qcrMzqze;yTw8Y8~t-rcK>zk`?p.qc_bE%Ajot.gI gedOCE/ba}ZjBN6`e(5r0?' );
define( 'LOGGED_IN_KEY',    'I]}#Y|a0y@ZH}k4$iK?K6@6@6pHdM+.}+2@MuYJ6-{$:3Es-aHyb*f/Am9fA&9y8' );
define( 'NONCE_KEY',        'I}3dGmR~lK$gT3B;qXS0CXlT2@p=4d)orJh6BH{NXAk+^BvPKBQ&^wx(?f$k-{T?' );
define( 'AUTH_SALT',        'D-2H^zN 7x)^.h[oYdC.lw.Xpuf-I3ru*EC*z%l9#Wj8=QswoHi]SCGg%H(i;4|y' );
define( 'SECURE_AUTH_SALT', '!kB|uO2Y[ucp{UX&QAr/cpe}~Sm8X9=l8`awQ&5WF|Vt.<~]f)~gn]P6O/Z?a_-_' );
define( 'LOGGED_IN_SALT',   'x-@XO.BL$sjgAEKW>*%EXo7{l.LK|TxBEAt <F~^~B[?Fz-4pqQghUZIqN([>Sdk' );
define( 'NONCE_SALT',       'h2dW@*Chqj&*&U+-=Y=(^%`47ljm>zGIF6xXubr5xU}T&,TT@3#Ki/R->9XRDk[k' );

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
