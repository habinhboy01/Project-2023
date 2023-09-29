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
define( 'DB_NAME', 'garage' );

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
define( 'AUTH_KEY',         '[xjY]fVRpU_`+xEDVI7^J^1SvGesjbuAEfH`?X_)>@Z2kj96.{q=cB|*0r67Q5eb' );
define( 'SECURE_AUTH_KEY',  '?wiQcfzl+.;o2l,rAjbr}dG7cEvy}M5wSzpdUgKuMp7`CSTren1LW1dGv)z]i>,&' );
define( 'LOGGED_IN_KEY',    'wPN^p:mr=6F{p8Ryg8Em#x,AIK2w*~wQ600#)K9H0TukX-[.M$i].8DrZ=QR22Yo' );
define( 'NONCE_KEY',        'MGS>,f$&#(r:g^.>m%DI*sno%Sl}/[{kSh53WH8D?f.H7n 2b8iBsj=dPcHbuG0j' );
define( 'AUTH_SALT',        'UP(z7L!X^$z{RK7{>2Pd+^[/EZ;l v6Jg6KreL;1 Pt;kAvll%~?_7(X]h`~s,~8' );
define( 'SECURE_AUTH_SALT', '5R$iQg~%,V8@R4(WKsca4vD0NY:pwOO),y{p>X2%9v}6tk]v2S6krKgemLN[q4!@' );
define( 'LOGGED_IN_SALT',   ' v1Z-aXT6!QW^%d9;)$Jr6]W0&[mHKqbYW4FpCGWZKJVafs?`w]3}=K&. K(pOc*' );
define( 'NONCE_SALT',       'Rq)2{cT]e=JMP JQ^`3Tm>+Ch8fUa9Xyh@DB@NJ*<4!R4L/q#`vMA1VmTs6q:T8g' );

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
