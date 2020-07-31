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
define( 'DB_NAME', 'prueba' );

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
define( 'AUTH_KEY',         'TbF] F+qXwZ<-b Gc-TKaKf+.(7{|YFF)Xs,;62gc C[Jmb$/C5F8Lf9w#tmr}7<' );
define( 'SECURE_AUTH_KEY',  '`9fnE^BV{wy/mmpaPS^6 ^]m8K!B)2>A?!M)iHb:8Q!ACff6cI1Y#U=wt^ EXL]S' );
define( 'LOGGED_IN_KEY',    'k.tb9a RCaTEa/*FY8r^K3!BP= W9O(p;JQo.(nawUCXI>NR)1>Ctct4X_LVE=Fz' );
define( 'NONCE_KEY',        'x.#64P+(1J@3 FqF8T+T0@NgCM6`X.GAylsYZ[Wk%H$[kjj^?Ba<x}N3K%nrR&3i' );
define( 'AUTH_SALT',        'ZvVCJx71c$Fdla!QJt}8DCZg<]Fep1]R/2.ZXVL<:8{[H6+*WD|)QLk306l_n4[2' );
define( 'SECURE_AUTH_SALT', '-vy i7.I{}?Qegm94Q]W<)lDOMz$Bfo<o*aI,_Z05YOzt]SM8[RG75_?XN`V;ZXm' );
define( 'LOGGED_IN_SALT',   '4f@*,,0tuM%pr4=?v! 8c-ALDSg?k}SJr)RG[HPlfC/0.vDr`!!+7kq[;&+X7dM}' );
define( 'NONCE_SALT',       '572Iq/#}w(#,ELb@n`!9zZ{0g<9VID(q|?,Mrs,F5DP$-*9dIVUDMS<-WP%%gZ 9' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('FTP_HOST', 'localhost');
define('FTP_USER', 'daemon');
define('FTP_PASS', 'xampp');

define('FS_METHOD', 'direct');

if(is_admin()) { 
	add_filter('filesystem_method', create_function('$a', 'return "direct";' )); 
	define( 'FS_CHMOD_DIR', 0751 ); 
	} 