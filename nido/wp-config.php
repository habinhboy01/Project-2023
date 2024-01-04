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
define( 'DB_NAME', 'nido' );

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
define( 'AUTH_KEY',         'VB^q$|9T%VPvIXE*!om8Z.u5j91xj1H(L)4:w6-(v&7*;;q[M$:.=h,/)eRoC,+~' );
define( 'SECURE_AUTH_KEY',  '{d&?!^sc>E&n+-l4KJxCH)}%%+lOPk4uk 859t~INImw+zv8WjlagfTaw`fdPpv/' );
define( 'LOGGED_IN_KEY',    'VSc=-pNL)qz(V7!1$#1#8?<@I&Z&WoMpUdJNBL34=aEd*T/&|;ezc/.iB!^]M^F8' );
define( 'NONCE_KEY',        '985$DtVCuQM|uajjzPL4?oOkl8[{RkQn5:O|u9ad1%qWvCP-,aHflYjz;c`^dAdC' );
define( 'AUTH_SALT',        '9m?r987OP_,7hC7%_xwL[lZ2{tODwb=_rO?Ef(U(/qI*@9WAW {#fe+Wa[gGAhJO' );
define( 'SECURE_AUTH_SALT', 'r?Sa%lDT7RoK% ux>KE%ZM_MIC3{+S!oRG,/O|C/#h-NJz8CC#=:+a0b{/p*r>/D' );
define( 'LOGGED_IN_SALT',   '3@7Pn86NMTP3rwu07~>nP<NqEp6GIBP_.3[)mams3!g]2&h#&BfR:&tt7?!IEWkD' );
define( 'NONCE_SALT',       'n.-vG(28elSB;=P}VR& va{qB~,Hiv.a]l FZok1iMEoKS0ghVqrYPq)F2-k^BGJ' );

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
