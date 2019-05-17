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
define( 'DB_NAME', 'wordpresstest' );

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
define( 'AUTH_KEY',         '#+HR*4QeaP=>,H_|yGFLtelwnKE4btg@iH$uQ&x^kmaO`?S/a]04PG:>ku#Ks#u8' );
define( 'SECURE_AUTH_KEY',  '$yEU_l!Fx{]8wT69CGl~]>$9p{GQPRIeODNQf~Khs0%~nKo*g(*oK.vnW4B>t[$-' );
define( 'LOGGED_IN_KEY',    'J{4z,{+b+knupFQ!hqe/7,T7.f:z+)|O!#s;.%]BAucF !R)JSa(f:V@tWxZ``_~' );
define( 'NONCE_KEY',        'zykKaYIfoa<~<R7@LJ+y#-a(!Ym2GDt1V.H!4OG3K:#DQ5d`0FJ>q.j&/Y-h3AJb' );
define( 'AUTH_SALT',        ']Ym)^`2Grw>`c`$>GqV_;|<[Jd,<7xym)oo@RL{`4Mn%&g<1*R|[cq2,,NI<ozUd' );
define( 'SECURE_AUTH_SALT', 'ac z1/1u]iQAlU`>ZK[W}i:P53Hzoq4G9`|vGmNO! y9{)_xpvpe.4/7QR,t~K?C' );
define( 'LOGGED_IN_SALT',   '8BE[?&{QTA?mHXw1x{I$ILKTc) Z[Yo$q:=O]C<Hphl>KY/}1Pa:ggb?`j]xj !D' );
define( 'NONCE_SALT',       '38h#}O`YfbU^#o>]K$n|r)Ux4i$tHkK]6d|#UBSf^I#~1#*4BfF;,:<siL$O07F~' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
