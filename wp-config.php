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
define( 'DB_NAME', 'wp_nblog' );

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
define( 'AUTH_KEY',         '(hZ0KSwL2+-9$kztFgCn2]q$y7Ih`f@d|Z~^4+%c%4G,]Gdk`id$,K<WfsDT/kpJ' );
define( 'SECURE_AUTH_KEY',  'vHS]JyA0s|)}n*ktTeUY+]6{yVfR8QoXE@Z.3rh|(2Nof2~FQ(XNR]fbp )}GT6-' );
define( 'LOGGED_IN_KEY',    '.dmb`Et5$(RVrQsQ$dml=8XxF^usC][m<na+)vH0R<}km<Ch-]F|Dg,oa7!:![|T' );
define( 'NONCE_KEY',        'v-Bq?xk^t #TQIP?SRm`,Zsy^8YjkvH1_d+s[2V1<Q98A<6Pks8iF`MjIT+ET?K1' );
define( 'AUTH_SALT',        'vp/@MRVOqm;3~9RR)>F262N1eB~ub47.%gA%hq57G]^l/O@3!x_ILXR&}tAGQTP3' );
define( 'SECURE_AUTH_SALT', 'FW?QINMoI@gn CfFY+?C@}NQ}m&lcg>u*6ewt?yN[SWupc,?)U^6afe>7O,l!9;3' );
define( 'LOGGED_IN_SALT',   '/Y*hTrs!R[YMZ]Lw0~aI8+N7#th1f_xG)2}Z:VStkBFnpb=}eCBdX^@/{RunS0/5' );
define( 'NONCE_SALT',       '<g(I%@Ehw0]:N!T+7TvzzO(jNu;hc<7kjb#i4M;f6^<o)ZIN xnGF4!aG-^=Mpsm' );

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
