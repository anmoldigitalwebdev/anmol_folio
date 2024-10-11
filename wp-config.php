<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'anmol_folio' );

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
define( 'AUTH_KEY',         'mGK8h^t*-W?Jnp3tOie**KFB2SS}xn+[{|KPTV7>4B@yC<Zwv[A=([,`AQ(`W?5)' );
define( 'SECURE_AUTH_KEY',  'Qf*D>PT;DdVwQ#SE=z.w6f^oQ*FI>%W1}_+*exto]^,d9:q7q8$aA#nJn8$.Y?2c' );
define( 'LOGGED_IN_KEY',    '_bR-E [ w|_/trNd)#2xXuHdgwU;SGMOM:X*Vavz>Lqf:@9Fq-<cp%Mb1ghiMVK5' );
define( 'NONCE_KEY',        'VuHbL)YXfc+8&j,]Krm(XPPWQiQ$5R$[BWPO?zSbAYD!s1%mQxJEKQf|L~2WfT&M' );
define( 'AUTH_SALT',        '4miOlFX0#{MG=yCnSi5>*6GuSkS/vF5<dc%3eS9Q:dzA|2I@fvgLM#khq}rm`~4H' );
define( 'SECURE_AUTH_SALT', '3c:Z*X?150{FJ]|<_gvMTX99T8>dcQfeq,_%,}zssOYpq:):Ezv Cs_2|vAo6!dI' );
define( 'LOGGED_IN_SALT',   'VBqQusY0$3x7uLB+dl$[x`>>jG3cnD1|m27BHjrf]~Jv,!>OE+-`i$0.r ~|(4i1' );
define( 'NONCE_SALT',       'x3[GLY%(1vppn1C3^F`de.GUZNZBP(921p-HfJe08t1d|(2bj9L?G4RDeWe:hBtf' );

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
