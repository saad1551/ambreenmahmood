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
define( 'AUTH_KEY',         '&Wa:a8rH9.%w3{](0+sy n:mp=3^PG3Tyl`b:Bw]N*t9e|2-GZ.mL{5{%]R<Rx@F' );
define( 'SECURE_AUTH_KEY',  '*;cqN0tx-pBp9-*cCEz&2i/X7N~8(a)#Ma:gKprNWcCq.4G^zlNSUk/1urDje)PT' );
define( 'LOGGED_IN_KEY',    '&)&EjEh(N6GT*`></e_FI#pn!stY{>&&U2-=$fempbRR&Wy2B9&.[mG{JG*0hVC5' );
define( 'NONCE_KEY',        'kvHrklgFJ<)0=r]Q(j<7].~.j|y];LIeV88okPp[c+GWze+DC$,|baJ>O?7JkN-#' );
define( 'AUTH_SALT',        '?zEwagc&6_<K*!NiN9=ft4oP9]og64ox?7B}P9!8BRR3/NK#_!z7k[`7g>XTtyT`' );
define( 'SECURE_AUTH_SALT', 'kWCAmdY#$J^,:Y&P^ TN[9`6SQY0j@CxKN>_`4YVqzb/RlJjx={fqlPEO%}kn}[b' );
define( 'LOGGED_IN_SALT',   'qd&1Do.ONe(=[V.OMv,jBqkjS2+E@#8L[TaR5yya4XeZnvteWb1^9~ z2N0#PR@^' );
define( 'NONCE_SALT',       'Dv|NRM#6LUMIl3)>-jtYWSDEN}vV$sgF;rGFfC>LrJNdzVix:.7k1ogh=E,w#]Vk' );

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
