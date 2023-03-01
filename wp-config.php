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
define( 'DB_NAME', 'addisway' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'makemebraver' );

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
define( 'AUTH_KEY',         '9`[adQKu>N[@s:q&HLU$9r;.NgT+)sQW_ju ^W>J1*u?&F2IJaM9-FC~0WHs|gg]' );
define( 'SECURE_AUTH_KEY',  'ni5G/c[w}P12UsW:h9=T6w]@t`>!4}8-,+@/6W|5H.)War:Q.cnaCuM!i@55y4W#' );
define( 'LOGGED_IN_KEY',    'Vq,e-:NXXPaH&^Z+p,YhC2Z/5+9rmCOIBg}B4swx;g80_H552y(!9 6|^If6a>.2' );
define( 'NONCE_KEY',        ',|y;|$CPE<$hEHC({c[wAfn~ddi1,JDmH~!i*b7e&yO[Xt^rXD ZDT 2D{=G/iT3' );
define( 'AUTH_SALT',        'ww@,$Dt:M=d5N!:%@ &6x6D2tO TKjIRYQcm)c:perWAB2a?Yf$oYlv#-~31;5J#' );
define( 'SECURE_AUTH_SALT', '7Z+[$4u}MqDDL|!ulemqoP{@eOC}]DBIm`k@r`49~-Xr)O3hZK?Szrg[P3{wlkJe' );
define( 'LOGGED_IN_SALT',   'DGeYwK=^2i9B;N]_Ie%;4zRLh1:?g|n5~ECd9AZFBNCJ2Tj4A3DO.oT<?>>>=Q8q' );
define( 'NONCE_SALT',       'l@_x8i^{~Rou|v1l4WV%B#3&xlB^<e_Z22J,)TSX/Tl:6,>g^);T8CK/=YA8AqCR' );

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
