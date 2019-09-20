<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bondarbakery' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'U.+ku&Hq)bX6;/[()(BqQpanQ1/gdfK)n2}z-3!~3m@.`0bu9S#1u/Gi`&$9CYDi' );
define( 'SECURE_AUTH_KEY',  'q0,VMJXC;G`3~P5t+@.RCBXV2c$BUQ8zFPs}A=~MtoYVo!s/#hCT+dvX:oU^U&YF' );
define( 'LOGGED_IN_KEY',    '0_SlZ6p|3[brO41jS0w,nu$bV,Ftyv4S$hGmE:KdlzhL2I@>sgu(!FD:exV|`BMg' );
define( 'NONCE_KEY',        '#*8BrR*c{AIqTu@#1xW~O|,}o(&+Ce_aD_j8MT0BdVd83ba]lT30y< ]lB}U jfE' );
define( 'AUTH_SALT',        '@D{;Gws.!+eVuEv*q[sXk2-;`Ie@HoJH6T?JZ$)+5*v/Z=R2co!h0g9Naj2SF9;`' );
define( 'SECURE_AUTH_SALT', 'bzy^MCb_4RQJ  |=jx5,0|C>It/5y[0(6Wcrc[#{bL7YNly0lVWaLfpzs|$$g,2A' );
define( 'LOGGED_IN_SALT',   'Q+=3l$9UR<cTVMNO;]Fy%hxTV5kQw2$ Q=H)41>}~L,sZ+-jrC(Hva-PKP=WZ1CA' );
define( 'NONCE_SALT',       ')UHy0e<n&}3Crla&F@`*$@!XS;OkQjSZJbLeMg;ga$<*<j6k),!r.WzH3Q(HSCV)' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_bon';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
