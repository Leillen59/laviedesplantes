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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '^TyjM5_lfu(_-G&>rnDEqsQ>|uxDIx(&x]_n(@{k7cv^A-6x<wVgMT<JX,eD?$;O' );
define( 'SECURE_AUTH_KEY',   '@Mf`8%y}Bc5mG@|oBFckis?ClpUGZ4ZDis-ES ;Riim(q.`Ncn1XnoQ,z(ox[H+k' );
define( 'LOGGED_IN_KEY',     '37=>L!0$qZ}~K3NKw,9fu+|/Ol>{LZUI3t+ede@p#k/w6d:r=mhcD$4*e*=Q-`wT' );
define( 'NONCE_KEY',         'C7pm4u-t6<A-p!X5spM?^jc%D9:gSm.zcVz)ZogB1LF:n_Uv$]h^8,Y.?[a7Bl0~' );
define( 'AUTH_SALT',         '|?=d+Zc2M@nGdX5W-_EZubkEOw30stWF%t@r6*Wq%di ITVkQDN@I0X^Naj|5FcW' );
define( 'SECURE_AUTH_SALT',  '|I-Pd(?lju@Xd+?zI*opnw.mX-gShYe8?1|1?-}`smj%i8d%j__o|tR!7FhD=$ak' );
define( 'LOGGED_IN_SALT',    'N[fE22zEFv>Qfl^Zy%6eo>%m+py5]Q25W`:+>I^Bvtbr2SYx8&BoKs~k];%?hmQ ' );
define( 'NONCE_SALT',        '_)f=x!fv[`*<}A|W]HfA({}0o x^Vw>b@Wm2fQ-U%21Jk-2g)gaK%v)m4Aa7s&*r' );
define( 'WP_CACHE_KEY_SALT', 'u{;`2|)jo@zEaSmW`+ynEI}:N]2z~Cz_92AR~+AV9Q^27KR!5>~q#@}Fz^r>0Y|b' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
