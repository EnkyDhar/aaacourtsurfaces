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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'clientap_aaacourtsurfaces' );

/** Database username */
define( 'DB_USER', 'clientap_court' );

/** Database password */
define( 'DB_PASSWORD', 'bfNjyq^~y%)X' );

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
define( 'AUTH_KEY',         '5(Fv3UC8tG{5^7{9-s$Y]^9zdH1xG9Yz+A*4[^`j/%f35sm`-wG8Okdw%KH]CQ|4' );
define( 'SECURE_AUTH_KEY',  '1FaN6W,zV18%q[[IAXh7>)Cr^XJg70%,/vZj</Mkk3?_#wM/nGLS<Pj?%qYb]>-Y' );
define( 'LOGGED_IN_KEY',    '^W!:9nDLPAIg.~uY=&!)#qOHS_.EWtE?)n 6_YC{GE^F6l2UY?~p9jJ:?[uYzB^Q' );
define( 'NONCE_KEY',        '5]-tEWC;>*Qgc0iX))n>t(VqBEm/*oL73CmdW6t=hZa^OVDD$f[^%WGE3r=R`r>$' );
define( 'AUTH_SALT',        'T8qlM9hm$48W-0Hg,Q@GD0Xr$ ,ix[xW=+6<FLSku1[LP:2}@OvMK%S87/EFK(ws' );
define( 'SECURE_AUTH_SALT', '0lP@2K`;]|Ei*D}awG?G8Kmy3U+Q]r1^&O|_8Aj4,)XRtfXZ&^e}ftj&v1UezJmF' );
define( 'LOGGED_IN_SALT',   'yRxum[1v-`u{^mz;~wFA4_(F@xp{>T)7$MPLCBG%I>(bJW1+0!.N4yA3)1qK2c5S' );
define( 'NONCE_SALT',       'S*&NSS%e+sQn.bs))pI(.=h2ag&J&~QcffRxDYot3@>&sF*gc]oHSZNOZr=D`;`T' );

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
