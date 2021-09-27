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
define( 'DB_NAME', 'onclesammy' );

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
define( 'AUTH_KEY',         '>jv4@y^>0MwU((~-&)V&,fy=Vo*QYmz< ,mHQzQvE28xx{`IcQ9?hcJtF$vKlJ>}' );
define( 'SECURE_AUTH_KEY',  'kHA%?  fEsOhAz7#qw69+uphRFO<iCkO0T#F:,_,nD.c@&sZ.%JGHWaxggV]_;,2' );
define( 'LOGGED_IN_KEY',    '<jxXUw ]UvcpF6EtmGk*{+xE LmbPcnd(z=S.Z|d[d93US7|wcN<hE8_qqcx>qAq' );
define( 'NONCE_KEY',        'ZAzSTrg$:=bWRM]HI]>Z9)R.05e%O~66fH7sX#A#Q(s[qFQ}x*v<[+@_(?8G[K6[' );
define( 'AUTH_SALT',        'L7T&vanHA_;aIFe.lm}+_Qo]Ah5s{5` klvDQd=<klxan0[dlW[cre5`$ZQ~ .s4' );
define( 'SECURE_AUTH_SALT', 'BiYGk`VO`nrx>x2:wp`eHqX9;Pv&{sgObT6)[Ej+r,KK5EvQ&OxXF),/T#-l{q;{' );
define( 'LOGGED_IN_SALT',   's!G8?CkCeKe.)Kz@7rR4 Uh,Ha]Cn-00V=@;$A4aS Q#HkVQjH&0Aomrh([7Z5-M' );
define( 'NONCE_SALT',       '|=QN`%Z$qVB9)hg`3P6zZ*9X-6BaVf ISEEzzw{AF}7YFAaRmXd3k&37cRa(t!1-' );

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
