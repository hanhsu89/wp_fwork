
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '' );

/** MySQL database username */
define( 'DB_USER', '' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         ')E(Xtp 4.(!kzm=JS3dti^e/L~m>($5aU._Xr7fCSV.EM5I__F5.]G:u:~a[4S|/' );
define( 'SECURE_AUTH_KEY',  'BY|^0&@x-n)p8$w7]iP=O1Ia2<]?O7 Bld,gnl7>~;LQ=u~w% m|cRGevEiu:1vo' );
define( 'LOGGED_IN_KEY',    '~ F VV7Qb#0 C inc829j@*1-yi^hS~|,UR[X5<>WJ%U[A+I*6M49~pL>Fm`^fW5' );
define( 'NONCE_KEY',        'bRgZ{2}NF{Y)HrExz|;2iDdd/B*8b*MqD7ga|Fx<nW`n,G@9~`k~HT:MUoU2_`ao' );
define( 'AUTH_SALT',        'q3A@I>oqDf:EHc+9Bkrp yhyU+LV 0SSBZSc!I-%?/-n{Fz_m6LhA64W&(Y:mCN/' );
define( 'SECURE_AUTH_SALT', '.oi5Hjp+(9:LZc?#n+xQ#t|2p{%SF!Rog 9?C;.r,*%.mr*S!|iP9;P#:e.nlr r' );
define( 'LOGGED_IN_SALT',   '5cDAt+k-RxtTYW-p61%3CI^&SG~<B(L^c(N@&6n0Hu[*(*YKGIK:e5]=>x^j.ck2' );
define( 'NONCE_SALT',       '>5bDeKac2.0Vm?[$kp];D=J@mvn^oJ(!{C=},.hd@]pAe%=huTd*4zl_ns@y{Of ' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

define( 'AUTOMATIC_UPDATER_DISABLED', true );
define( 'WP_AUTO_UPDATE_CORE', false );
define('WP_POST_REVISIONS', false );

define('FS_METHOD', 'direct');
define('WP_MAX_MEMORY_LIMIT', '512M');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

