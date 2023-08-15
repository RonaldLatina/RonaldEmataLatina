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
define( 'DB_NAME', 'myportfolio' );

/** Database username */
define( 'DB_USER', 'rnld' );

/** Database password */
define( 'DB_PASSWORD', 'lefthandead18' );

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
define( 'AUTH_KEY',         '$WlsZ|u;NQJm>X$w!HmFxN8g;>Zg86WhU`.>VNEk`>R(L8Al4fYK?Sot-Hlr6aJ^' );
define( 'SECURE_AUTH_KEY',  'Xpv]O5zv%<E5!If)7hcHf7{t)xtl<0op*`pHf)[~IC&Q!i)+/8sH^OXSP<-Dm`kC' );
define( 'LOGGED_IN_KEY',    '[(qnO^8$iMUjZ8Va0by%&:L7HO|Mj@W ;BHlQ&B!DpDsCK|/c8`D4HU:acU@D]P?' );
define( 'NONCE_KEY',        'n.:uL=?0,Ok~*#3sfDyCOp,hD#n%Le60Jhph8n`?#gh3K+NeB*Cv.1a*`K`cvTex' );
define( 'AUTH_SALT',        ',~n*dy`kGIcYVHw?wBfA9;d;!=n-J/TP<Xps-w@YUjY6xI{>H6oe~%[I_xLapoXz' );
define( 'SECURE_AUTH_SALT', 'QXa7lmoA1>w_H+pD0}N/{2WvB:eGyP#x[jd%?YS}M`$tni9/jRGQ:ga{]O(b|&Qv' );
define( 'LOGGED_IN_SALT',   '{+6Z9*zim#x8ady<rLOh0tis3zc:7)d],n`:Ga^WAbq:K{<ci!$Go6{Eu{h|lS/A' );
define( 'NONCE_SALT',       'p[!bi#P):jSY5N.nP#;5uMnP5ODI1k-S#v5.$*0}K5!Sn!1z-02@vC9NwyiR_C3Y' );

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
