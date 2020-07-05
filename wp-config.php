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
define( 'DB_NAME', 'desarrollo_wp_db' );

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
define( 'AUTH_KEY',         'k{4hURIU%k)3I#WXGzZmAh>mO&=VJLcc??N?Mc !klj8Qnl,2<Eatg,L];_P_)Tt' );
define( 'SECURE_AUTH_KEY',  '99>n65=Tl3OlN85:1,J)h}P0`TkQDF*`& ~KSV3b?XNg]w:T7u3]yF)qnady0bVw' );
define( 'LOGGED_IN_KEY',    'c(!~O=yIY^RQh2Q]PM(;SdP&&Z<S.Fe`HGYf37I*_7r`CPQUXa-4?wSSnyx_[e`P' );
define( 'NONCE_KEY',        'y59*6hQ#&Z&)5&MnPyzMa9D3T(bPne@Q(B+lF1[@*fd$vx@mKt_#3tJ?,gEdnug<' );
define( 'AUTH_SALT',        'm16GiPp;+xmwRNi[7poBB0UDu}k*Fjz9oC>g~kD}MtjfnYB#NP)U@JV[{6B[[Qy&' );
define( 'SECURE_AUTH_SALT', 'UUquKX~=Yu;zW+o r(~MP}yc*`0<{:Rn RL<hb_d5F&OdhC_2nf!{6a.Bxs(sS_T' );
define( 'LOGGED_IN_SALT',   '5Awk&(ZO&:kEuaD#ZVLB5x4*<Ds<FJm@w/uWS3@6_`bZ)j,^b.WPo-zR_VaR3Vfr' );
define( 'NONCE_SALT',       'g*j{H gBsRQNK[.}!Z)9u{~[:*M u~pV_P228zCB7hc6IqK4!^]D8-/wRP6*q;^H' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tml_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
