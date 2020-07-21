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
define( 'DB_NAME', 'k_k_hire' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '-g?;Hek6Q=*X-]8jf0cezXh{0B?NL}.*kR_L~Pf4-VBuLa2YeF3gcaVvPf[`4:Va' );
define( 'SECURE_AUTH_KEY',  '@<`e]:.?u8TY#<_KH(yxoj8ds217Gi]@P(DIv#uwCVX{y(.x+G|y$39WJ$yNmh4?' );
define( 'LOGGED_IN_KEY',    'Kh7r1P#qMnbBq#_U:<WAu1Ka$|kc|La`N{|J?pz@;R_$onZXMqX~+;V*{nXDmuH,' );
define( 'NONCE_KEY',        '/U.myM:=E+xU[/?phf:IM?m~aGk::~(-o {|63mG4TJLQWk2xCUSinEj,1T2?0#}' );
define( 'AUTH_SALT',        'as%~pO!y_-]9bH8eLVY[zFl83 Wco$3wI}gGF0TRBWm[@dt[PYfCo!EBDD*!:gh(' );
define( 'SECURE_AUTH_SALT', ',t7oZR<D+wh*Kt]M1iqN%Gb1v=;i*yX=01BAXn4CgihiWh5|gMlTPE-U%O%H4;Ar' );
define( 'LOGGED_IN_SALT',   'b;:@V(9YV65(EhOv4e8lnSdL*#^czKZ94?|(s5-F.eU=:ER&MVyK=A=&>lDW`&S[' );
define( 'NONCE_SALT',       '}Z,<!]95fqvbuzt1,.KdJ~!CXfCl*Dpc}cHLowonvr/q;%SSH`dUMFR~hh(2H&>@' );

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
