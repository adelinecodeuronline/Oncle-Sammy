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
define( 'DB_NAME', 'adelineb_' );

/** MySQL database username */
define( 'DB_USER', 'adelineb' );

/** MySQL database password */
define( 'DB_PASSWORD', '5E6qp+5uqjzc2w==' );

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
define( 'AUTH_KEY',         'js7?l?g[*JAQ-d]UtG!Y*u^G=h|s>$HC?`_w!w]=m% N7a$cRI*u6rV}X,)f4$]2' );
define( 'SECURE_AUTH_KEY',  '-:`Fn]=GlF=/Tr|co@]:lqB^? QxE.6}Zrp9PritnmVJMw)3H_3{q.!B/=>Opb)!' );
define( 'LOGGED_IN_KEY',    '&JLps,R/a7E8=yF:RA^}Y&pmEw>!j_A0u]FHrS~?7oMf!u#yr>%)sx*>rEX]teXd' );
define( 'NONCE_KEY',        'fop3<Skbt0oaF2pbI.e7U?j V?T9kJ]/SB036,<wmi?LvYm)x~$vu=#vmF~!b?<[' );
define( 'AUTH_SALT',        '__M[1%s9V)[pqI+=.r5Ed8Np,MUm8P=,-dW^_<>zelT=W}]z jmU(0%(K-$j`j]G' );
define( 'SECURE_AUTH_SALT', 'G[u&,?JhjXa<cIL|[5 8CtwMh>W k4@)HlG3YxMdroO30(B}nZvD^@`ny6crC]hc' );
define( 'LOGGED_IN_SALT',   '-7Ph& $fZmXmJt_RQA3}N9#@u^V3geWXh}7/`,[xzT~U.Ul#7FSLe_bK,/~Siq[W' );
define( 'NONCE_SALT',       'E#q>}Mq gTEZ2Zne5UiHWXbefJ[LGAcv qR)uED&} 9mcCY[LuHK!]Yyg_xW|5[ ' );

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
