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

 define('FS_METHOD', 'direct');


// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rohandb' );

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
define( 'AUTH_KEY',         'Oj}r3~FBWeitL^5MTQ[?Y< Uw(F0@2aWo4BMBZ52w]Wdg[ %V#;(O#8hm<SI5L5d' );
define( 'SECURE_AUTH_KEY',  'F0d~uyr&N#QYdaMp?>Y](/eRcZDj9&Ps=Lss,.@bd!EC}#^=7dsT*g@6ar[7jjZ2' );
define( 'LOGGED_IN_KEY',    '^r$I(20970Q?$Z4Q_*`%r.N0noux8b]{^}*QA:`:[fv_w(1,RT&%Y&!`[(a!G$&!' );
define( 'NONCE_KEY',        '^`;%d/z?UutbZlshclR:z|Se;XnbY{I{wo/IFR^#_;)fu^WXT`i[joiGvxY ?fn,' );
define( 'AUTH_SALT',        'GcM`!JZc[r7_[a66(InGtep4T7z4XQ(=0?ev+)VsY1CFC=N*j|3Lo2G3~|&Zkq$7' );
define( 'SECURE_AUTH_SALT', 'P`87=moSvDyPnqD*r#L^V31S|GSvHclk7p8_d?`gu/iUT(>ga+NW/,m:urO*l7_c' );
define( 'LOGGED_IN_SALT',   '^pg>{!DkSN:QSgPsE-1V1c%CGb+4Ya1fKa%)*B1?GdxLAPb#*48Ja(+wXRIW,}q%' );
define( 'NONCE_SALT',       'l}qU`Z.p3/}%w$:[2nj)4.3{n>U@j@ FPwEbI8?>Kvcvh~11c@G7wD|b:,5Y+HOG' );

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
