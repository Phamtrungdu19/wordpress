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
define( 'DB_NAME', 'wordpress1_v602' );

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
define( 'AUTH_KEY',         'T_sz~;f#jNW?s*D1aE #tC2Ny%/T0qKN=+pJ;=+mtnkXF2U0b3*Mf-Cu{et;O;vk' );
define( 'SECURE_AUTH_KEY',  '0hzR(4%6.$q(r{o5z#73Tt?xtIY5bgHvvP8y7j^! b/K A1<8>_SlIA/Degh^9y^' );
define( 'LOGGED_IN_KEY',    '@VA;36p=pE>E{562KR!7:su 5+ZiPzVp@^,i8G;M0,N#|3Aej^Q.@.7o0n)W=O7u' );
define( 'NONCE_KEY',        'u8&tXyhcYO?[GPQB#|pvfcI3X#yf_?gO-/9p=+OS:WcV:>mc+64>1sV>qA>ZoACN' );
define( 'AUTH_SALT',        ']`%HT9C265[?: <5Lr)}K%wJ0>(e_u,Puf;5c~6w]kT0fp=xNSG(Kl6zRImM,s}y' );
define( 'SECURE_AUTH_SALT', 'K#3ED*(b/ndsJ<DWh8Tzv*DUGja[>vD*uTFE,{^i%2Fj+ l$Sv$v#%|2wj]16`QQ' );
define( 'LOGGED_IN_SALT',   'tb7oPzgJ? !Rcg^`x_xgwQCQlt%{AYH]3c3?Q^vpm/!pVVA)F))[#q |e*X~0{0t' );
define( 'NONCE_SALT',       '/R}Ni)<{N{RNEc*M#U9XFD1/VH?iV0j==X?epqZ`pOTSu^H)}UK4H5O^^%^Y(@Ha' );

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
