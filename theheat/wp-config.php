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
define( 'DB_NAME', 'theheat' );

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
define( 'AUTH_KEY',         'H#aLo)/O<:]TyfM/ObWcH Rdi~.z]#4 aV8M%g>ft1-j=9]qfYOIkX`]l<PRT:E3' );
define( 'SECURE_AUTH_KEY',  'bs-}dvRqa?0H(^c+[>ZFUW)^Nr4rU/73<M!sjYI-X4i}J/$`^6FRg?/JR(0g@rg ' );
define( 'LOGGED_IN_KEY',    'kRg$hNoGx-_;]: f!NKESmY!8EoqS>Xe o&XYc&U~49%)W8Z,tlI ^!4tOp 7*1v' );
define( 'NONCE_KEY',        '`l[%#1o1D0Q.RrC*R3jPR[%r5&]mkCaRa(q*fR(DH7>?r6nsxa:*1#+TdkZyM|8(' );
define( 'AUTH_SALT',        'BI+CD@8FR_ M{PFP,Db}>pxty0,%WV<CA W#fN7|7z`deKr(#x(%^=:}+[~$vwt2' );
define( 'SECURE_AUTH_SALT', 'nWwe/.S5nIUVn[?A20)7RP2kOM(eaohj<D6A cQ32l-]#G5yhJ9<kWGI41?0txmF' );
define( 'LOGGED_IN_SALT',   'ajpD3jc%d9FEqa?fIV(g;}rEJ)ikbIGfC2%M,uZY?DUYPSYK0hp$=2xz0Yi[jQQv' );
define( 'NONCE_SALT',       '+x3_MP!&4OnxFkp#rd%5u|usBETcJ?:q1A3g 2&EP5q][-[ZC=O|z8mFmsE,_Oyq' );

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
