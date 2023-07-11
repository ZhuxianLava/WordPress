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
define( 'DB_NAME', 'codazon' );

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
define( 'AUTH_KEY',         '_{}r8K&O=M~[QN|}bE4a`0G1/%@of oz@qrd/NMQ57+]+nHGRbpM=)<<yN-hs@[]' );
define( 'SECURE_AUTH_KEY',  'kH>BR>DwO8*8~gzVWBJ@v<POB!$}@kE%Y?G>2?oo&?6zA*u#eeI#@)v00#;4VHZ,' );
define( 'LOGGED_IN_KEY',    '0>@,d-Pq{xb1XGUeR}pO=!NvyN|#{)ve8(a|9(&t^8LQ_;a#^Ghgg*:2O;T3YAK}' );
define( 'NONCE_KEY',        '[Ha*XAKF<o+:i)bT(2-@ N@[({ysy0i+aFi.[5yK#DF3~N%M:T>Oiyr]~^59{nO6' );
define( 'AUTH_SALT',        '-|!fP9s-+`xZ^20o$% iAAI+:PO{h/{_:4KTPuLb[+9[+Tl-E6cj}$o([:j5Y$/x' );
define( 'SECURE_AUTH_SALT', 'ssU g&kW#~*yD13g!fUKI?faTN0x-i,K6SwwgqLqO9hhi@M,Q2b{5-6hbRo9K7)k' );
define( 'LOGGED_IN_SALT',   '/+QVC%Zd(:ySR9(n}~W-*9~mY=En::Y%;Dr_1,$w!{z0A$Gdcei@I@I|UOKC2%lX' );
define( 'NONCE_SALT',       '9RV xj4D7Vrqi [;11{#<qruV?0V.5xOkSnTbZE0-{Vx3Ez:`uh`v*VD3|9]A!38' );

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
