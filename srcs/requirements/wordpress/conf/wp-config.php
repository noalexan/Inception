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
define( 'DB_NAME', '' );

/** Database username */
define( 'DB_USER', '' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         'jh8r<TE(V3_eC-ed7b6GI?+bQ#U!Xu$k[{CtzNpnTk^Y`re!dLVnA2I-WRm_e52f' );
define( 'SECURE_AUTH_KEY',  'OkmPC3U^TjOi}| _@UD.?9];%!B)!vgpiE*p}S=Rp>NPi0  >Rf`rNC-kml^gv<l' );
define( 'LOGGED_IN_KEY',    '5G[F&vyd)O&Be>W87AF%GI[q62.<Ctn/+M(W#pPUw&^5NU Jg^Qfw0FQ-~/8t!ar' );
define( 'NONCE_KEY',        'wl,B$IwZo_%bs)aA.Y9At^qD!O0z6Frqo,RLTbD2gpY2{3c/aBsfMTP|{W*K7gIu' );
define( 'AUTH_SALT',        't(YfT1]a1oZ6s<<#e/-+{85QH3Ms2`UH)=,AO)jcb<asoq~ilY8?;bDC`+}w?({O' );
define( 'SECURE_AUTH_SALT', 'c<nvLJ<_8]Vj6Y<]LA^{4%y//bJV8jt8L9F;/#C%%CG{5tKkIPOSBBD$3WVH6!&+' );
define( 'LOGGED_IN_SALT',   'z$CjnPfD;?<A 9tN27dg,Q1]%Lt.,$0`GrQ_b:&4m$%d{jwVaF=x#7I-w:(1j+_H' );
define( 'NONCE_SALT',       'O9LThsl;lWw/>1|F_+$5jMSf2S5qHLdNaqi9AK0_phi3wu>KAuoGuhQ*#!.vEA!C' );

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

