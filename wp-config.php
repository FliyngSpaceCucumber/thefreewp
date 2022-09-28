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
define( 'DB_NAME', 'tfreewg' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'UH<#JUst`FS5wlFP6lpSJh#gDat5g&;R!BRi[g-$HEjVz^jb63S!(ByUw_0Pk6~%' );
define( 'SECURE_AUTH_KEY',  'J10Wc.Vl;h!u7[0vx+o)#ep+O_&>-;`2Xm!4WMELKwEcs+mi5+=CpT%u*:1^*<2n' );
define( 'LOGGED_IN_KEY',    'V$Y41B`lHwO]Jfs+$D+JS0Dz{Nx?DfH-Zf?W0BLHh{;0}(X~j2[@#_QU4c0>n!t<' );
define( 'NONCE_KEY',        'j;VDl5{f;S`7~s#sN<tYO}YW$CsCn^x)W*:-dj[oag`{ub!g6wuUCV(S(HBn+ILZ' );
define( 'AUTH_SALT',        ';u~G?ECR>iwAL{+mQ`5/o_Fu2$jm+NpMdLLGpF}jz!&gRnx~1yBFo&e1r<K/bVpv' );
define( 'SECURE_AUTH_SALT', 'hjr~qBm=8-:7d=8F3dblaE#<&l>H I@P,N)w7>ZqcJg]PQB>G47JUAEpMpo}/;VK' );
define( 'LOGGED_IN_SALT',   ':Q}z6jkb*dJqPbSV^?wm|vIzmHo2M`kc,=Ytp#:.b7*+TMm[-*xU#j5~{T ~]:of' );
define( 'NONCE_SALT',       '??GAYNG;hKwdz@0iBp]t6^k5<d{L(fuF7AJOW`8gM.tDtsKaPn@jWiS` ?3U,4g=' );

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
