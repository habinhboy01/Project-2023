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
define( 'DB_NAME', 'oripu' );

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
define( 'AUTH_KEY',         'O:eemPXqC7[<Mx%X~[-8{:^#Kz=0K5_KU|2yeW}!0,;C$BJX(%-N!$a#-3E7VRTC' );
define( 'SECURE_AUTH_KEY',  ')(L=#fwq3Mt{f=f->VLxW. >i6]Rt=T[c#/Hl<cu8h1H5`Og.n8A@-}$>L%UFsNg' );
define( 'LOGGED_IN_KEY',    '(YoI4Gxe7Tv3d=9&+Itb_R{gnqe:A1tb]$02.mtLhb^43pKlI1Jl!Zy>$u5^6k^<' );
define( 'NONCE_KEY',        ';avdIW6)YM[Fqu<X,5G-RGVU1P$o/^h:7uzCA`SE:M;xwy>^zT;_[?sV|pJ3lk.r' );
define( 'AUTH_SALT',        'u(WCEB1{sXiXXZTKWp*J[iW5@e9GN]cXpHFF76#>i*65p,t-lBP@wecdbWN8fv*.' );
define( 'SECURE_AUTH_SALT', '7jzp)PE^L>@@MX,)/)>C{=/Gt|`$^1WXl_Q-EeK/gmyemZ#q+nPVtaj#Fq+?GtW?' );
define( 'LOGGED_IN_SALT',   'ml*,_uHt+TwF&6DJ53$Vw$sWd6{.*x{E-G {HFjZ$CMBYut[<Dk?A$7ycO04.l=o' );
define( 'NONCE_SALT',       'duAkD-KL23AH9_#]@Pb1UW;z)VK2$Pj;M9fG>~:^.Zy/Fp(1z)x^fK0}egJjy((&' );

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
