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
define( 'DB_NAME', 'lms' );

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
define( 'AUTH_KEY',         '|-}aP/62nA@^I>h}]dl]%l=zh:,bN4@zN_anN*r7.fM&wRn%r~R9^10SR]=7W37`' );
define( 'SECURE_AUTH_KEY',  'w&{XK5%QeLEcN_FeR?DVjy0in8.CN/Ke)-zb~pqHm?FC!=i`dC/Il2nia+ xLNAR' );
define( 'LOGGED_IN_KEY',    'u{[BiTi9 t]GA%Hk45;pDztid -8exNp}Pa8iZ%ilZ@4JQk<xd8;`kb>h+%@26FD' );
define( 'NONCE_KEY',        'ogN#]Y`-F$9&<&XrZu!,X2*sQET7$A5. e@KQi;eOb~^V3U)eMk67ATo_0W0i!d#' );
define( 'AUTH_SALT',        'A3XIF~SLl5~HJ%TlFk_&syh$L6=ubO`~a$G}ITJwBYG-.k9hC2?w-?ZjQBRdm_-u' );
define( 'SECURE_AUTH_SALT', '9FC^yloOYA).KbccPx~b`rZZzb7HMryzXjSW1unfCPm+|HT##9;O%K1I/J:1H?)?' );
define( 'LOGGED_IN_SALT',   'megS:%1;=`%Bm)GCKV2_o}9A:9rhtO># +|V4b@#/? !DGf[eR.DNH6OdV#wo64^' );
define( 'NONCE_SALT',       'L+NIs;S*MuqS@Zc7rqe~Y;{RaMT>O5E-ap/q +m2,(L Dd7lP!Wg%Xw8P_w>l>E!' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lmsD_';

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
