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
define( 'DB_NAME', 'trickle' );

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
define( 'AUTH_KEY',         'NTOT3`djYDg!0]uODYS[7edC]_7i{`R -]OnXxhZKe^(f?}ZK/1m4_Oi)c>%~ppm' );
define( 'SECURE_AUTH_KEY',  'DsSw5TQ%1!L n+BnVL #lrnLw}$=<])0<-N%QP9t)>_i]l`cNsXxZT*i;MGr>Td.' );
define( 'LOGGED_IN_KEY',    '97*AwjX}n5D@tHDuHEdEY]B?dOxx>n$>6)@[Y#AkQszRU3n&F$,gA>bc]Jbgk)k~' );
define( 'NONCE_KEY',        'h%$iq8gDzHLajv,@x&KgoT6F2eFF}Ud@V!r7..PWE]5Xe*M=YC29n: 0)qlaV*zj' );
define( 'AUTH_SALT',        '?;j PR~CQ6|vTH`*x`IH&Db~ahWrE9KwaRZkM1(e#hpR;ttd$TuL(+n72gWG7eR|' );
define( 'SECURE_AUTH_SALT', 'IU^WP$kd>r3(p 09,~ddiPo=_exL0<|RjD7/Q+&S{S_3@N`O&Z}!GU%<K!S(a,{Y' );
define( 'LOGGED_IN_SALT',   'RUJ>8vAqmo`HaMd~SDI>!tz)dtFgxz*+B?MqtC#Wq/>;[&aoQ5B(gy19F$Vu}wm ' );
define( 'NONCE_SALT',       'O-;JfVCR77L!TOtw;gQtVfj8yNZJSQ!5_(y*mrR+r}9S,dU|Z!} 2`}-k0+er!#>' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ts_';

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
