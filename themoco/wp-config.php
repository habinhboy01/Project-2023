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
define( 'DB_NAME', 'themoco' );

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
define( 'AUTH_KEY',         '{K(xF$<!|S9(g!13q]S|[OJ x*b.g>-Efue}ypt>@J)ag2O:+:8/}oG}a{UI[rpC' );
define( 'SECURE_AUTH_KEY',  'F^*h~F-H1&7UFn*rRm9/LaWfhTD63a7.%Gdi9H`mM$g`(RD@0%8cE01csO~_3x9F' );
define( 'LOGGED_IN_KEY',    '1^aoR,$]134a8G<Ob.h$k:Ow5XYV6r=Xdwzi75]L0|8plS(*RWJ]=Rf(SN}j6tul' );
define( 'NONCE_KEY',        'R!z t]hNtq0d*&1o!b6@x?`_76`{lZh1AZkVEC};bQl.[muBLtQz5X`wu$S3Poe/' );
define( 'AUTH_SALT',        'i8{F1B#qVI:&3Wv]Pb1Z?)0i 0nrBd U3U_TNSh<T Q5xEvI;G]rQj,79fvC $y}' );
define( 'SECURE_AUTH_SALT', '=vy~T)_Ob_u#/_iM9aB3V]{CDU220`X@0T?[vns_K@?#D|OG$L<xZ9ary!3L1nJy' );
define( 'LOGGED_IN_SALT',   '_&A3X2lWeXqFE:w_yB>VNmHO{v~T&<?:W$S65Tty*thFt]~I3.UI$xV4`O!ji*I.' );
define( 'NONCE_SALT',       '#wSx,<CTjcTr/]G6uYs)zcH30@)}G^5FG:j5hcTumS^+pUypw.DXsf5)MXg!hBIE' );

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
