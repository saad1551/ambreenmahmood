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
define( 'DB_NAME', 'ambreenmahmood_db' );

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
define( 'AUTH_KEY',         'g7M)}(0aSQUMDBCaqz37^CX`kn>#f0ie[sdS,i*^.4~`nsmb~#M=D5y$T[(b~PID' );
define( 'SECURE_AUTH_KEY',  'E51)2ax42hCi6AXdr_f3fbxP1Y6BMfB@zooW@U7`&x31G/8!`)I>)<rN[1>_VZk8' );
define( 'LOGGED_IN_KEY',    '|a<i1w5H&JK}CCpt)tDRC8hhJ<uy A`WP56/q,0m:B}&$h0943jf2vIa7;B47UZf' );
define( 'NONCE_KEY',        'sEEuc<KQ1nOmxX-F1)1wfq378L0pAy%*=%/d=[19+h+vOF%4PYvbHL.2:?#W#R8}' );
define( 'AUTH_SALT',        'RJP.S.d.&d5/zz;s)<p`@{AfX2#aa,<Oaz`.m|4W{P*!0+)o^wNa3c7DT~GM7[1@' );
define( 'SECURE_AUTH_SALT', 'QL<31|(<06NnbC@2@cD{-:@=GWNUKGB!.( 7<yGeP^cj$quMdL${|yzW49/7.e7g' );
define( 'LOGGED_IN_SALT',   'B`^X*A+M}v~Z`9ce=p!h$^j.uz};sSbu8s<+2us.tFsegL/Kar{vX4:*<2-l+i*I' );
define( 'NONCE_SALT',       'wV.b{AYk,*`AKFBfon)1W EAwa7^n6dDc$R!V)xcdvqS/E^om0.rXOA?zGEo8,sg' );

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
