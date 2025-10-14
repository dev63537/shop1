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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shop1' );

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
define( 'AUTH_KEY',         'E8?LRY{j5F+kyq@>kt%C*?Gj-G`Mb7;;hJmpJkl`q{n!qYl *V5eQdC^s>fF}9]G' );
define( 'SECURE_AUTH_KEY',  '^*&7DBZSU$8y+>*EHW]oSN*l.z?tVE5!,]^O_b6{B#yC#`}pJR ua{v|-S19+Lp.' );
define( 'LOGGED_IN_KEY',    'DA3Qd/G@xG i`JdyjvN2Vfb5)sL@?0#tM-[fd(k7/B?V/{2gY3Qb/gJX[d-A}N#8' );
define( 'NONCE_KEY',        'UezzOg>UAi@4kHtQa4WPU~w3WTmg$^Rx1)tQ LdxcHU<Gnj^jjKiz:;L=tCBsiP}' );
define( 'AUTH_SALT',        't>Xu,0:aHvfGfsODd[eKL+kP1d=~^&Q#312G?.D(~J|{)2vmbt1Uih}K0|k?HUUW' );
define( 'SECURE_AUTH_SALT', '!]wDHV!A+4Vkwv?81N[I%O&gg8s25wxW56?S72,:CN#_1c$Obrlwg(`2sNq;;]cb' );
define( 'LOGGED_IN_SALT',   'TUlTm5Uz6;]X.%6 /so9A!!*/GUy|>7&1|UniTiW_2s`i*ax^P=7MBzR ^}qFT!-' );
define( 'NONCE_SALT',       'y88zZ67]|!ukH1VOvil^rfEo!8Zc0HzmAgYP=xzH>QTc:8t#bf1lt;gj|xi wc1b' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
