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
define( 'DB_NAME', 'hoshiphan' );

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
define( 'AUTH_KEY',         '5s3HY7#_aE-x]XLC}%/*7osD]g;Z9i9$Ju7&jL)%|WX`k2[K|`H le(l)_Y>JWV#' );
define( 'SECURE_AUTH_KEY',  '6jh!D-2n}.Ilo d>/qzRPD9F6-hFtOY=uezS*w?hj[ K{3!LT{+6+OynVdphd5_x' );
define( 'LOGGED_IN_KEY',    've6xN?h@DqV*M.5!q</~Icx,ZLck}Vko;ZJv2<MvuP>4Q%s0D!l/rG*|-4N-/F*d' );
define( 'NONCE_KEY',        '*O@ct]q5^i$vyDAM#~:7o~c>*tbM_-F:k+i4H &iqCg(:Rma2> z2di7J[$q*yNe' );
define( 'AUTH_SALT',        'Ss18@<I/laQRJgy!/O<DhbN) N($eds_nZ+&Q?[-I{CTAKNq*kXW#o#3c.S[2+R-' );
define( 'SECURE_AUTH_SALT', '*G{n#y2BY@QAx^>|=m.*|y *K2:(VgxcV8R#)}j{[qBsXc#&!X<<!6j8SBzB?mMw' );
define( 'LOGGED_IN_SALT',   '$xqc9(dfSi?jQY^]HvY[.k1/vEi=YdG<W=7v{.r=ncW1O|%5<eH9daVA(-XT-+1y' );
define( 'NONCE_SALT',       'RgbhbSH(R^k}S2!+EQ4jNz` ~W]h#h48|QJtqSE0u}E(+sK2a@rK{k[UM)h=grA:' );

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
