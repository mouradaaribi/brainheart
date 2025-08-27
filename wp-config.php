<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'brainheart' );

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
define( 'AUTH_KEY',         'NM$IH(R$=Ye23Lw7s|_ej N#vj2auZO(?[uHlUN6FxHMX.h>7WZ@B4fqDPM|33He' );
define( 'SECURE_AUTH_KEY',  '^$={nLu{qc23=L{@r/TtuLj*gx9%&Jooh&~_0WfceJcx#Eq/&wIa`EY/LyYKH^1.' );
define( 'LOGGED_IN_KEY',    'x;D3l* )fAW(rv~X0/K)6|BZDw*m&W1|XYQaP[}ju?uwVCTT[=oF|AOfc0E^kpXU' );
define( 'NONCE_KEY',        'u?$]jx,7H7_8OLno#;SSC?]Oi1Kr^(X%{!@egJnt}0Grrkym9[6$p;m@DE|,$9jr' );
define( 'AUTH_SALT',        '{TvB`IPprQR6BZ0Yl,NG%P^y<?e=`>I*n9be::PK U+!s]%h4mKL:2g4Hk*%U,tJ' );
define( 'SECURE_AUTH_SALT', 'W 6O1oFjieVILTC]A6O+Gf;(+Vi(E/gx`Uhp >u6VOY56N|;#idGLe9O[,0 :j>>' );
define( 'LOGGED_IN_SALT',   'i&yCfJ<er-9V(}/j:`v1ZMiq3J]]gvx[RJn@v{Sw%#3LgP:xyAbHh37l9T> j_<6' );
define( 'NONCE_SALT',       '<S B8F/@{R5`j-5v`VnsSqva($6bcmIIk:NU_CZ~9I(7h50jM0qquB vZ[M[9UY#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
