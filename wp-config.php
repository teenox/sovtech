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
define( 'DB_NAME', 'sovtech_db' );

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
define( 'AUTH_KEY',         'K{hjE8fSEShwdYN|3:_OV`U})l:hFzUExt#3qzyAJ-Bqo*f9(QM{c1sq&&7EW;Ul' );
define( 'SECURE_AUTH_KEY',  '_#F~.YBsc:V5$NS%`yw]hH4)#1AvkVqAoEV(tWi sAD2H6xNNNbiFojMF@)->&;Y' );
define( 'LOGGED_IN_KEY',    'Fpj;xw$fSrD79<Sv4CiV8,`w7Z6R.}s+TB >`P pno5sWQ4H+?J$SA1~DQ@7ljrX' );
define( 'NONCE_KEY',        'NS{RQs3(=]w([;[a1CJF!/ls>YAxMb&Rw4LC<d<;,z$PFWkP-.3CfO;9y3Ok;s{f' );
define( 'AUTH_SALT',        'yGTZv7/sA>oL3%}8.^4[4<TQf<D=tco:qj64:3I#Sm<2>A5U>.m<-nP%q@`&^?c ' );
define( 'SECURE_AUTH_SALT', 'q ]VXH$0TF;JT/<A}d#.jk4o(KssP7P/!lf}lKRB*t&]lnqGTD[L1y[&| .zo{;k' );
define( 'LOGGED_IN_SALT',   '2sjH#EexEsI;Lg&/:RZG;}Lg)SwZ0+PnduGfh;Bz_| |f.K1CNn<7_!pe|17X`@H' );
define( 'NONCE_SALT',       'e:+rEmsCgd@1_a%%<+(^S<<&h[ L0bCU]?sK[-X<6a02S8nh,Z4uy{=B=]TvF=QD' );

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
