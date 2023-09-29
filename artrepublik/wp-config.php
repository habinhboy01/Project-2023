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
define( 'DB_NAME', 'artrepublik' );

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
define( 'AUTH_KEY',         'Cu,_M){NaaN/?m.tNxV}x:v>:dhtVF-.)B!J=.Zr bAq!B~@S?bhZBmqsbxYET1T' );
define( 'SECURE_AUTH_KEY',  '&xMpO==G$gaIG__bnx3wr~AcD3`]|Kv&@9^RG>6h_r-)LEoV/>G)kB!.0eg!H, x' );
define( 'LOGGED_IN_KEY',    '(]j:t3iWS_(U^j#/77V5eiSA{-EOR !]h+84*e:K@bGpyZ*y^uGg*arcaQ<AuJ2B' );
define( 'NONCE_KEY',        ':/q,G<`nctSj|*CKDlZtgnw%I3^u})tkq#AJid$V/tw<@M^.*1x|L|}m<`X(7ag,' );
define( 'AUTH_SALT',        '4`S*ZGO[fn ?O;c3TKH/!nO1/zBWya!-JCqD=_2eXP7D&>FE_:36{vUD^vdM%)Dd' );
define( 'SECURE_AUTH_SALT', 'hIO*gphR]M~r=h?_rM|k}!k>R;{j[|iCO8GO7bL-y1>pa.*mfiMA[aYGj:E3=GW3' );
define( 'LOGGED_IN_SALT',   ':YEe3ZXm[;25!$9*q3x$C+sU3d?SIK@XJbujM_X6F?3#[2u>^OYPWTksOR0Ept!6' );
define( 'NONCE_SALT',       '%z*QOEF9Lj;[WckF1I#JazdUFk}_FFsG:ri|GvhQc9maOJM,=@YJ^i|wzH?$R7:z' );

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
