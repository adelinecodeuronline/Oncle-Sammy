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
define( 'DB_NAME', 'brahimc_onclesam' );

/** MySQL database username */
define( 'DB_USER', 'brahimc' );

/** MySQL database password */
define( 'DB_PASSWORD', '6SWm0YwC8gr1tw==' );

/** MySQL hostname */
define( 'DB_HOST', 'promo-91.codeur.online' );

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
define( 'AUTH_KEY',         'vj;fhAU0s1$H_FlhjNlwC4[.&,J;WO{AhJ]O*rX}s1}3yNSdvody>1B/lOgzMYYq' );
define( 'SECURE_AUTH_KEY',  '5[{/09A]yLll/:vutnsITkaKi0@3Z`=lTC0!U;u]X.p0hk*K-8Im3#eOC`jEaS+R' );
define( 'LOGGED_IN_KEY',    'iRA2ZT?L@1ic-O6!4?!s(Cv>Mva]7.Ve}g`K7z[79&lFuKsis3HnyP7S!L#}ktTj' );
define( 'NONCE_KEY',        ']VI8Q0/;zCF*nLpXFQCO5pcHn9a:a-|d]rMlRsZ[+~`xq]iM*aNm*7za&KF6O*oP' );
define( 'AUTH_SALT',        '-@(g2[uoY6XjG&(QD^Ft7,-YgeQUc2>Qs|nfLf/3j{y`$VFz[]^AiRLinqDSqD(G' );
define( 'SECURE_AUTH_SALT', 'N-ti&3p^9G/Fa$o}mtlIlq%rOrR^iyrAk[e25kXk#@Yia9S1.FS qDO.fTG`^}M>' );
define( 'LOGGED_IN_SALT',   'jP`3kH![vlnj9dG=:Yo?/sc@F<`q//SA_%o)_x_Y0HOP`kUSjw-Y1[<grh+ J/dG' );
define( 'NONCE_SALT',       '>]_+1Hx!GKM$fu&G?G-&3C:!fHJSF&7g:4:eOY`>Apz!b8iDWTry<0o*|Ij_~e3;' );

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
