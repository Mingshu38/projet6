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
define( 'AUTH_KEY',          'PZ.5ZNreMA:)|Zv_/aLl%(#98@p_/30<=g;7HXTAI_8QeU9pgi_48:n6_V9ZMI&q' );
define( 'SECURE_AUTH_KEY',   ')G5S//VU%<UkxLFX*vG?yI`yP7I$Ut/qy]0Q[P$VVz$+*Vx>Oosx`qehJa}Ap[;3' );
define( 'LOGGED_IN_KEY',     '4hYfra&hH)Nd.El@}J[E/L%o(`- K_@MRvq~x,{uJAAi}xr7asakp7<(sZZ9x=7e' );
define( 'NONCE_KEY',         'z7:_L3#X[&~3+v@)NQLBs^XVG#u:<DhHsnZ}n&8 +>aj0)Aom|]c+yU!4o^qx4)*' );
define( 'AUTH_SALT',         '#,2m{Db+<1>5)a@<w/9Gm< VaynWeM67*0@d0#OU..SFWl|AkwhC,nb_ d}GNaC7' );
define( 'SECURE_AUTH_SALT',  'lEr{p5q?0q9spo2`6z[$P;XI]tB%8mx ke%Ww@1C!mkL{: IVLbTu[=)7@. s4Sy' );
define( 'LOGGED_IN_SALT',    '[B0%2Q`N3ZZZ3g8d&P/21GhU0fKvcFan3 N2]U~/W^z2nJ5:;FXU6$G5UOK#+b%=' );
define( 'NONCE_SALT',        ' w+: F]pGZK.E4QyIS-Tip+yaPn%C&l|&Cf0D[oT_cXIY8Og7Z;)#m3E!a2~K0Qr' );
define( 'WP_CACHE_KEY_SALT', 'qmHJ[U73Wz8MN75L38H?3i#Fx[>v&${KNF1gtD,(?I78OWx,.SAkK;Q`{]j*} t;' );


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
