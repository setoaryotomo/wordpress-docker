<?php
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_dp' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'sandi_wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql-server' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_REDIS_HOST', 'redis-server' );
define( 'WP_REDIS_PORT', 6379 );
define( 'WP_REDIS_PREFIX', 'dolanan' );
define( 'WP_REDIS_DATABASE', 0 );
define( 'WP_REDIS_TIMEOUT', 1 );
define( 'WP_REDIS_READ_TIMEOUT', 1 );


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
define( 'AUTH_KEY',         'Z:L3qr$H9BJ,#dT`a~^FXe*UI<!0x*6FxxVC]Ps%rsxD_ukw/o*G:6+pHi@yF5o/' );
define( 'SECURE_AUTH_KEY',  'KCgF*QN)4RIZdZoq6]1_?=~B]M,(hM[S2!nHrr~P{yc{a,/c|`Prg;]|dSZoWYDF' );
define( 'LOGGED_IN_KEY',    'm t:5pl3)j_vZ..u`5jrs*iQ#>}?u}^D$[wSxK@(plx#GpPu=H?KOf3<fbo2-WzC' );
define( 'NONCE_KEY',        '3;>HHdqlU,;YgPmK]l0Q,#O4E3sS%V%bM`{`%&LUQ{`&JnZ&sS&ug_t6MevThj.y' );
define( 'AUTH_SALT',        '1Kv=~QRykh=A]0h81V?8E5?v%+snkJs3pjPrUaf=)]Jtd>Un+?qsi s~H8pyqPpL' );
define( 'SECURE_AUTH_SALT', 'V+Df({P=_&wNdh8,?DdlKtQ{eMY%;%d_-T$BSY-#X TB=@A@v:Z:^^t(;t$?49hN' );
define( 'LOGGED_IN_SALT',   'LjxeTs0<Kh6LbiuA*aF/+e^^MnR1&YD!f3YN]}bw4D~(cVb@.G>K,^c<_ VOlc2p' );
define( 'NONCE_SALT',       '!_!n(EKuVjd*Ql<*1iYi<qs+jp]%c|fbp}mDt^Wm+kBn^,0^:0sur)Y Nqz0HNzd' );

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

define( 'FS_METHOD', 'direct' );