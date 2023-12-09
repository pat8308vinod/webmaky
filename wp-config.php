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
define( 'DB_NAME', 'webmaky_db' );

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
define( 'AUTH_KEY',         'C8]JPhLmU*&,YNqi;x30xDPh{o^6XA#u(sfk@[)7B}AkEn_5H@&7by<pz3P^]9@,' );
define( 'SECURE_AUTH_KEY',  'f|!7b[%A*S=u[]F_O&/&4iXv^*d%tV@V*$|l~2ou0]/9lXY__|hO@RO,2pjE[MZ2' );
define( 'LOGGED_IN_KEY',    'fs8Tc;5=]Z-f__aULay7i1W=XE(&7VBRH^%<SyTgEQM-CkhvW.TK&3KpT5g|;:lp' );
define( 'NONCE_KEY',        'pcoFZDGs.l:/+1X%.yOY1iRs|{sKs7ZD78&WkUg:1kUuD?x387o$N89~f-Ba1p5o' );
define( 'AUTH_SALT',        'mQtc[7_e [;R?*BwL7sRD*hqKACbNN*MQqC296hH*VaS38p8zp@zX+py7Hq2U|F(' );
define( 'SECURE_AUTH_SALT', '4(lZ~$ND`ImD_&Ztw(JY,taYjttNs#?-(HJ)Cm@B%u!l_H`r{*1obNh@~dk.qB7T' );
define( 'LOGGED_IN_SALT',   'r$T|zibPC>1V)h]/~&u[+dZ!Apyq2nXY_4|#5 vV2>Q&,X?[FlU70r1w{vaVY7?s' );
define( 'NONCE_SALT',       '*M!6MVe62-DH~]ra/kmkj`B>if#/G(*[LF*hd<3qsk&[&<&c!Af/xFZ;NDM6H+:{' );

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
