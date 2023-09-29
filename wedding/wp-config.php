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
define( 'DB_NAME', 'wedding' );

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
define( 'AUTH_KEY',         '4-Q=U.P1)$:]xW6/#u8A{2-x<rDQnJ}>@4hH,Y4@n:]VDFgKVzE][)KO&;fYn@2{' );
define( 'SECURE_AUTH_KEY',  '2[$uGe9a4CBAN36vB$xEJPT2&6=Ua?3z&)a>pitX{g2+EJJQ-_i=|{)X`<nHJ3f3' );
define( 'LOGGED_IN_KEY',    'd}c{S=KV2KtCVo=9e+Vvbqis[+NZOavj{#?? +}O(^EsBbx^@>Ykmmx{%osZDDjn' );
define( 'NONCE_KEY',        'Y[&!tTjZW-nrHM#,GN(eGL8ZJ1OxW?X^AsQJv{PwF#G[]dS=dC-aI*]F>Kw8XU@D' );
define( 'AUTH_SALT',        '05^_LOa~A_;K<{A^;ExwbCXsF9([XgxPyIPh5:F]:Sa`[Q3v<v0x)Rs5`bn,_n]O' );
define( 'SECURE_AUTH_SALT', '$@Z,Z~MF$Qb</0ImntHEW2OK|c!`V{lY[dbTz7mT;Fl`;;:snbN@~sRfNqZ^lOF;' );
define( 'LOGGED_IN_SALT',   'Z]Iz@WQ|p/0henT4e3rl!%zUfk~O?ZxMr2DIjS?RgRM`T}tRE#YWOt)/6p<aidj#' );
define( 'NONCE_SALT',       'SBNT4)~it!hZN#&!{ #JS[m4 g$A9;?pf.b}E23VrxuKq ;bf%6e/N9V>bhsy2!A' );

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
