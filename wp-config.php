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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'intefy_db' );

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
define( 'AUTH_KEY',         'O]V2;F=J)6qjw<b8U-?cx63Q2lPg;PeDs+]6!jLABHqODJTaSI/3~tji~.:/%neN' );
define( 'SECURE_AUTH_KEY',  '0(yNBniYR!F~xvQ)Ro(-,8|Dd9f>Z.H+`w.eP/7;J7~^y{7)]bx4=mb?N|X1drG/' );
define( 'LOGGED_IN_KEY',    'cBdq=0M0c/d&D.[U?pHcDDRB=+|dHc1/(J@Uz]0:o2B:p%0Jg~VeU(iUDZxJJIxL' );
define( 'NONCE_KEY',        '5<>.]`<2F~`pNZ*V0k+`Pc(BtS85%?*abepP?Gd81dEm9#W%`6rthwxvvr!`SVN-' );
define( 'AUTH_SALT',        ',-r>onGc{Yw+R! fFL_&UIQcTz~/|?KqF.b;4-)tu{lLR7|2&;?-i;FV2Q~/%|R3' );
define( 'SECURE_AUTH_SALT', 'pN5}Aj,{c3e/`QnM$yiP([&k!D>!_lI8,g7h.E 361dh5=u9hFuazMZ<>WEH$|Wf' );
define( 'LOGGED_IN_SALT',   'zid^ +#Kta%g<;wy}aG{>W(!&q(,L}-.y1EHU&t8$NHeZr#Ty,;,:cVhy3C+Z>R|' );
define( 'NONCE_SALT',       '>biAWyOdUWvZ 53H9ypP6nvv829i_E[;C8>] cDf,7K8@o.8xF-&;y2f+]-r#^R[' );

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
