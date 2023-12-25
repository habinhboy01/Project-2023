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
define( 'DB_NAME', 'sql_nh23_vn' );

/** Database username */
define( 'DB_USER', 'sql_nh23_vn' );

/** Database password */
define( 'DB_PASSWORD', '3w48GcrzaptFcLX3' );

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
define( 'AUTH_KEY',         'z1Sq(4?K_%9pvv|B(jZI-6::EtbK#gvrbfbD Fb$#;[z}M|C:}=UZy*D=Mw(IY5C' );
define( 'SECURE_AUTH_KEY',  'BOLn`=#d<6q2|zY-lD5Hp;,:1qe.xr(VraOgF)p#1BapJL@+Manf9-J 43Cd511,' );
define( 'LOGGED_IN_KEY',    'Ltc{<ow>#aABCdT5^ .G_kXsq}1W@+9^_BqGi<B#00%Zxg+QOE0s<4Gz D oMs`s' );
define( 'NONCE_KEY',        ';?w p=6!i!df*&:(F{k/ -[|KpVx1.94rL)A8:<xKG@8iml;O&x!_!Z#NyJOFLR8' );
define( 'AUTH_SALT',        'zxQlb&HaBoQV`6#~ocp#~r@MIr]1;,ANF.%JbE`Zr2*7 vy(C]:`fh@DMN}U)I<_' );
define( 'SECURE_AUTH_SALT', ']Zr1JoO!Y}GSARgrq=2T4$]20nI;+naM4:TT!uwF1.0_SY_UlFF/F{$3+xc]j7np' );
define( 'LOGGED_IN_SALT',   'tChxEJWwTtO|W^C?gpMI$|)ZK%f/c~lXGfms140^TI_Cid{)Qj`63K5v}/,OP&Ua' );
define( 'NONCE_SALT',       '-SKg7z90cCBk%1(R?&d74;eKOE`{=dc@z ud4ctf_$W-Es)4}9oMN>nXgf;U@NoH' );

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
