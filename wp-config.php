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
define( 'DB_NAME', 'ricardo_lopez' );

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
define( 'AUTH_KEY',         'r#Wbz0LqXd1!+=pNKX#{)[1x+BFPQ$nUb3=;>,2In;}8qu:Xca_rxH8K:UB.xBEp' );
define( 'SECURE_AUTH_KEY',  'N{-gcK*w!#Dx/2w&2[=,0eNp+J$D9Y7L W~V_q}QHha9q;XZOzXI#[z(9)nC;fhy' );
define( 'LOGGED_IN_KEY',    'F`7yE#8iNppjnxK8?VP}E7IUTVtt}]u4jQP2`ajVt- c(A)L[d-8$es4AhaFa&k5' );
define( 'NONCE_KEY',        ':=+wR^<b|s@+O*:_k`]u((s(U0EKEPR8[di%mZo0>nxofn??_YR@g( 30W`reIPo' );
define( 'AUTH_SALT',        'U0 +Ud/Rf%LFyC]Z&*@H)%p!YBB4|Ct-qd>a;1TM7:`::6g5z=+:Vk;2%4/C/et-' );
define( 'SECURE_AUTH_SALT', 'mT.2jI2D}MS/LfgSxe)*<2W*Wd2/X};x5P@xT>)(ly(-Dtt2zK]E.|]!;i- zVfO' );
define( 'LOGGED_IN_SALT',   '|S{<e7#n?tFiG8`gKj+o:}Z.2BqY: NsS+Q1;ziD`_AL-`4-)GL=iL7i]yk=!.+]' );
define( 'NONCE_SALT',       '#k%mFv][d!84N2&(AZuz.}7PJuq3*| <T ynZ~90qE-hew$*8+J,eRg-)2WHg[#L' );

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
