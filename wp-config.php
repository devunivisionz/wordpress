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
define( 'DB_NAME', 'nich' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '_R.((^jo1nfgy/G).pFJ! ?fO;!{V7i_rP7gaJ4Cgwtqn^-_z7hUq)*Y60q2)dX/' );
define( 'SECURE_AUTH_KEY',  '>Ws12`9(c[92dAMMIiSKw;gE@PY:w6}#uMaUI`U&lI]paf!l`diVriUJSTr)r#WQ' );
define( 'LOGGED_IN_KEY',    'IZ/c1Tn=jf- hc2FgVoyS +<54cI05g>C= )6Nkp<EZ;2&ZX%~pKR3,li%C$j@IQ' );
define( 'NONCE_KEY',        ']P`+m%UjU:F| )gjk5sC=GxQ/ <dH)}%w+5,m(X?=].O5eoyX)dN<A;;#)(5IrXk' );
define( 'AUTH_SALT',        '+(tILKz1eT1QAh.i!Z!L`x,|}wV-@Y3/.36B9 VRtTx*X98rY4f4?l|u^b<T~lzM' );
define( 'SECURE_AUTH_SALT', 'N0!P}S>_3{P5zI}N}oT3^nWm-cryWd,na}mc[JnLT(wYHk>8*z$fg5#O|nxtw`rE' );
define( 'LOGGED_IN_SALT',   ' B;zFVo5`.1%Mt)Xxqz@5dqwC9jUS^=>coh}<<+A!MflY*iEA#?Tt!M;25.6D6=R' );
define( 'NONCE_SALT',       'C!^n[$(MPn^`i?/NIDA65O9!c,t18~|(iF%wC3A!]hr*DCZc0RaCS9HfoKW[CP[D' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
