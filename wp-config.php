<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u116616108_K67Xd' );

/** Database username */
define( 'DB_USER', 'u116616108_yWRSn' );

/** Database password */
define( 'DB_PASSWORD', 'ZL3VSDQwQt' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'k*nWkuGmy3,z,,K!-$HDgL <DQ~u{FM%:O$9b(zh3w>{123e3*,]3fZl(vm]vZ4L' );
define( 'SECURE_AUTH_KEY',   '<MV0Uu%8ge7phdsv2y%*ao %:+ZA-42ETz/>wy%o0;DH@,}P2z$g>c;e(~AwfX0f' );
define( 'LOGGED_IN_KEY',     '|ar1Tm{jd6$1gj`;i!^[SxrCo.f%w}OT}z++fZ7Y|Sk`5F.TLAf Jx/aZ`YQKGXP' );
define( 'NONCE_KEY',         'v9=K2Zn6@{U}UtI_g 9Z0:|kKjbLYu=NQD2}@V0o-FteDF?/Fr&jRq2zkwcDi=_E' );
define( 'AUTH_SALT',         '}g>8G]0]&L5h*Dq k{|,5^m/9k^*8oVLhjNYxIKNwFQo`e9>esX>K!t!=VE:%Ayn' );
define( 'SECURE_AUTH_SALT',  '@p&#Jig|eIb*&q`sVSKk<$-LZxZ`uS.S}uf2yH=TAOvX)?~RYGyMOe]m3vT&4q,3' );
define( 'LOGGED_IN_SALT',    '9SsF8&g^QjJ%}F=xo2o!u;#+9-EU..jc7]5m<0?f@XVaVZ O+c|w^f5q/LC]hEo;' );
define( 'NONCE_SALT',        'fgA8!NM68|eIo65L#4zST$=%7w7yw:t=<2,x8Q}QR(:thP!lNo&Az6GfC|vntMc5' );
define( 'WP_CACHE_KEY_SALT', '=l3R&twaQV!f#A5.ci_jf32/9i7+c*MG a2%K{8QbM>xRwESd}C^ywbvw)@nlS^4' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
