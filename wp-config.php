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
define( 'DB_NAME', 'wordpress_study' );

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
define( 'AUTH_KEY',         '6od%J}V%shML:fu;!uTy@s7<5yOp$o/KG-o$X#em,2`i6Le>{tcZ+)lK_#xoc(w;' );
define( 'SECURE_AUTH_KEY',  ',f(MA]!fxb2yc~01X*G#Xs_I~o?&7 .NP2#A#_YTTsON)BSZjP+zmhF-(=D%ptc6' );
define( 'LOGGED_IN_KEY',    'D7RN>*S<g=sw`g<7|EhxwZJN*=IFE0Mr]ZN`qV?079Cu_#^;SC$u!B4yvsFKh(l~' );
define( 'NONCE_KEY',        'ujRS}!)wDC7<sKlSYtI/w23^xKeP,tJ{S7(q6F.{x*koSR m3bB|`r7]`I_-CSL[' );
define( 'AUTH_SALT',        '$Cd7rThN8~P5^MIRSIa1K) ]1ak^4<J(I_8(Ox,+}snAms=%^Mi/U0lwILiK160w' );
define( 'SECURE_AUTH_SALT', '3GXH([R&Wl{FAIq@1i}~pNyj#2m +OWJ*)T*zDPx|OH1Hq#Iacc5bHY1puR;0(M-' );
define( 'LOGGED_IN_SALT',   'RXq<Zqo$?Q*_4jM;/c!8dkFl*SM=1g,@SJH[;dw<*gPl>JX)Q4D>r?w= WpcKK$0' );
define( 'NONCE_SALT',       'Nwh^QZB@)<L>2Jm7>eHxAV;~Dx/,-6w`N(Iw (Yh=e_~0*&7_yX3V)m9Nt1/v06<' );

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
