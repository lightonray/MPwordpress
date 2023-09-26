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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:7000' );

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
define( 'AUTH_KEY',         'te[]!6a,]0vv@d.hIA`{m}L#IPJ?*C]G7*x_+&0oGErRvV9EMrWKFgq`y18LH,f`' );
define( 'SECURE_AUTH_KEY',  '/P#O7;/~4RGqX,Ba^d|EE2>6NqD_1ny*+TAR(CDK1h.a^t^aqfZUQl:$rD<*s<iK' );
define( 'LOGGED_IN_KEY',    '~<+EtA}T*>-99wF;w:ak]laL<4s%PbpC,*B*j088tu<Ok!s}-rYxk-|r:J4cX6X+' );
define( 'NONCE_KEY',        '1O9%J`s/a&&iiKq.6z|=uA*%k:2@9kwx;{}C:>/7w_~gl#B<l,h`rQ)c6,ojXvE2' );
define( 'AUTH_SALT',        '4=/p,q1]t)wWwzIUUnfxO?>kNEj8:ZR7MsNY9cgk=y;N:Dh))`~tuVx-@l._3my]' );
define( 'SECURE_AUTH_SALT', 'l> Vm&;bs ^U(dzY4jMRa@3i8Qa!)h$PKp`%ns}RbyhU>J$;XB#<lTK:9~v^UAc+' );
define( 'LOGGED_IN_SALT',   'hyo.;AS,hI_OuaHz.eu;p@3M);!De~X{QMSniTE<gL;gzH&VOCq*6RRxSsN5`j+o' );
define( 'NONCE_SALT',       'tNSXM`ZNxI67Gw2gDVAc>Glv-HLR[6Xk!k]:>bpIh~!J[`q-F5l,si[RW,bR=<D$' );

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
