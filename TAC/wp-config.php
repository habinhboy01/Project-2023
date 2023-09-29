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
define( 'DB_NAME', 'tacindus_2023' );

/** Database username */
define( 'DB_USER', 'tacindus_2023' );

/** Database password */
define( 'DB_PASSWORD', 'ii={ZGJ9?)s0o={ZGJ9?)s0o' );

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
define( 'AUTH_KEY',         'i95gpW(Oi2cw6Rm$+!4i/KBzrS ?_!G#<:(bdhUJ~+bhjF~8to< }9]97|HiRu`<' );
define( 'SECURE_AUTH_KEY',  '=0JU?J!0k~jthU43,_u+)JXvN;Ua5ScFi%}%OI).#k!(*OUx?3L JpXcUpfpAV_O' );
define( 'LOGGED_IN_KEY',    'IsYuj-qO,UQR#c2(yt>~~,f^:rZ_rYkFy;LnNRp{wr^CNgy`aye*`aR9~)C+3OL_' );
define( 'NONCE_KEY',        '>OwS~C{{v%CxC9(Yyg-d*6:3K;rRGe@D8Zt1N1(4_jn;J%}2p[pw/tv&7``RJW?X' );
define( 'AUTH_SALT',        'aPJwVo6Q|T(Txb#?KVF^}jLH3MBFXV=*uPJCd)9v)g#+>z2Bp7=?!{IA$NK?`T+E' );
define( 'SECURE_AUTH_SALT', '@^;qI.VAx+BOn:;9[WU&T3p.o2nn%(wdp[.O[:{!~pY,<b_{Jm,dw{9jcyvM]FUi' );
define( 'LOGGED_IN_SALT',   '6_j6^H`=n(Kd9W#4!;ri,=;4:QC+mug43dH_9qb<h]Jtwi2yFTwa2I>>$JOd+m?o' );
define( 'NONCE_SALT',       '.Ni+[P_<0Lvtf],3+^`[6g(2uUYWJuJY=T/X0p[~w,3|xFP7#Dp1].3U#yfgxy/.' );

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
