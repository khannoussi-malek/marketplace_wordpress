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
define( 'DB_NAME', 'marketplace_wordpress' );

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
define( 'AUTH_KEY',         'pIZ%_)MiqVGq-CBq-Wh*zgO qk+_aT/Swmv49c8kGq`d2^!;?ZKDZA[(RHfW&u;w' );
define( 'SECURE_AUTH_KEY',  's7u0+b]&mM)2VXA_/W!$o%dM%92S4Z$FnAT6wOz6)>c6o_u]L5W9uXxw<_51](XY' );
define( 'LOGGED_IN_KEY',    'sAQnib_9yl.<<5{<3x.qrEy5sr#d-51$Y:w#x~qaTK9`kpo{rQMnTBWdefUv-,^q' );
define( 'NONCE_KEY',        'y,n5i5(Pm,&b<zrYW(SvIh3tWr(`;2dNPQ``+f)| ?4h{Ig(?5,uDF%=X@[SW@5Q' );
define( 'AUTH_SALT',        '9QG_azL|iEg]9F8y !?A[-]-E]@=(L`[]$H,x_6}Y(O<6FeYpvP[ohw1Mm(J sd<' );
define( 'SECURE_AUTH_SALT', '$.;*wjS&G+K&)i:*JN2EN:rLL~g^g-miL0]ErZ @p@YLm)OT#nQs/&yLe*ET<0:Q' );
define( 'LOGGED_IN_SALT',   '#b{n,0`JfTU~F,a~yOP3;:n+:.H@6tX0{MQ%}m$1:i:*%OM!J~.>~$_{(PBwfA-D' );
define( 'NONCE_SALT',       'W%Ew_J7OmC*/l:n#ao0;Vxf<KPV2Kn}^%1 9D-g{Q]l8#R6[adB`j_@jBI@?i1V5' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mk_';

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
