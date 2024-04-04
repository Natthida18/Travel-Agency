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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'P6*_YfsVa#O0E _Z7x2]-1*I`WcO?tsx=gz!e8Qr#ohu||m>&fSyY_ ^iHk__s*7' );
define( 'SECURE_AUTH_KEY',   '{80ft]2+]$eVk $)Q/B8JSxO?;C_`C[WXJdB_A~q--j+t|Cws0xt,*JAV4MC2v<C' );
define( 'LOGGED_IN_KEY',     '2l(0q^6?bX]j7Ocgu19.E)2Okcz1J[,d<^E[13*-[|:aq,^K;Lf7A6Qn6ztujb>q' );
define( 'NONCE_KEY',         'aOd|&YCb/OR[*s`:6lFM(Vs~z^j<{HwEpAL[]#^]g,KntThow`K0:Ay:-bq}((+=' );
define( 'AUTH_SALT',         'yB1[-/I;VTtBet/zPUh($[6Iw+,u@2)_ah96<(g/Vfb5{*I;%zW7$#&}O*UU6qJ<' );
define( 'SECURE_AUTH_SALT',  ');No<2g+*N_}K)7i2U=6YHC7)qoWd<Ufkj.2Ds6B?DXs]<#zzk.=xdOGb4#=#{[c' );
define( 'LOGGED_IN_SALT',    ']7M(}xqvf$VM?0{^dtOPyd}ZsyG{LSBV0n2|Pp>[n6F28&1p1;aaTIN|Kbh{8jGr' );
define( 'NONCE_SALT',        'W)f{w3Re8/;IRgx_zh7{gYT);sXnij6s(l`)~P2EK$fT-%Nluj{O7NeS)ckCOR$}' );
define( 'WP_CACHE_KEY_SALT', '7^8em#OM)<=g,I>2DzV$A<$z?%;ZtKUj(AZdQ-N^:>H(+~-xQKX6tTo(E`f7y$t_' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
