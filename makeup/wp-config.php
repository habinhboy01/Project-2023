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
define( 'DB_NAME', 'qwtvybuq_choule111' );

/** Database username */
define( 'DB_USER', 'qwtvybuq_choule111' );

/** Database password */
define( 'DB_PASSWORD', 'hWe3thWe3tx6XR]%Rx6XR]%R' );

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
define( 'AUTH_KEY',         'jy;#0eT&~j;.3kGJ*J;0WTDPhk5ary96<o&~{2>M{uF@_YlBB(K{@p}S1*c@)U h' );
define( 'SECURE_AUTH_KEY',  'cPpQVh]|4E!S0r4;#?z&Kue6B;CGg5>=m,%=3o2coBKdEd<8}xh?J;Vt6Nqmgp,0' );
define( 'LOGGED_IN_KEY',    'Hd0Sjnn1o,L31uC+AFD--+>C9HxM1Is[s(Qw?lU<D;D=pFU9SFaUf@YY8R7qB{QT' );
define( 'NONCE_KEY',        '{j^s{Xv>N8>=M!ZN-:]%6y)K[i$r-7Q6RS(-<DuPgzj1%?(BPqPk6AU5#(b@:]=x' );
define( 'AUTH_SALT',        'UJwmK /g:eHDH(7>)>+Oa89?^ CwN{N;IPTuC,$z1mlczd9g&2HwtfZSzI|TH2@c' );
define( 'SECURE_AUTH_SALT', '~wlcJ0E~b%c;PM.nF,Phfxx0Nbyzej !w_1Bk<6/,3RG{P~DUd{daC^!Qbfm4[B?' );
define( 'LOGGED_IN_SALT',   'Dd?^I-[~:36N7PXt81lwq3)Pb!=;{8s-g0soC_s:v#2#8B7^smVtiXe+m_9UdT28' );
define( 'NONCE_SALT',       '0im2IxaKekadW~RG2V:|<Y-C.80Re4#Kz7_beuZ5^u&.$nk.1):02mYZznV}|NZ[' );

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
