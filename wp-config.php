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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'hPn|l{/~HU@) +J<H=y!H{83eEVU[|BhEg?{vP|eJBHH~OW]GK!$Eq~08uut3AuR' );
define( 'SECURE_AUTH_KEY',  'K$s(40?P!Gg<gp, VK/:]a)Z[<7Fyi<:H)w.+(HE1Jh~s)VZHLmshb5Ub6X# rjp' );
define( 'LOGGED_IN_KEY',    '$/s3ToT{:v3]|Z#tY_t%MhaDz&rBj7*TZ5d$?+.^4<y;Pg)I2c,g<vT>ZH3PS$t(' );
define( 'NONCE_KEY',        'r+E+KhqUR=z`B>d`&7]OC2M2#x*M|dSR,^$Qs6O-K&uaKYHXp?@MLx-2_hzc<*Gm' );
define( 'AUTH_SALT',        'DxVZ#l!VwPscvPI/!JMXq30#+3JU1VHa;+PV~--_fd2o)fvb,_3+|V7k4Vn5_>U@' );
define( 'SECURE_AUTH_SALT', '.+3izdV#L>@$}.1fLL|RE</m5UCpW(&5Kug#o]j*YS4!vk]x$MC<Q^$q6Ix(LV*v' );
define( 'LOGGED_IN_SALT',   '`;`|!7)w13z^=!2!K>mz}:2kbCt2;^a8{!&s&;=NgY!i}:!4i/&XV}D2(s]],T].' );
define( 'NONCE_SALT',       'i}UIscwdmyyBu|QHyMrA<|Qz[<`$4$lkBA&%J;#VU?]SyLkNgcL{.=-*N5$5@z l' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
