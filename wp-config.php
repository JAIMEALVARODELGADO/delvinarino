<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'delvinarino' );

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
define( 'AUTH_KEY',         'ExC<YR6p<nDmy~;D?H[[Mgsq_MlI+A98nhncmy.qKlDHT.eE8ps2dQ_xIBkT@6r;' );
define( 'SECURE_AUTH_KEY',  'a*54F16y@;xoBFfS*_iGaKqxP>c>tcb3[Lvh9p0N=b,qNm1Il=!Vh7ig2qH/2b_k' );
define( 'LOGGED_IN_KEY',    'RKT>iqow|sV#eD>%T;9-emGC{@[nDg3I_SsqFG%}$hN?,H $^{$=~#BUGW+w`#v/' );
define( 'NONCE_KEY',        'YN4k:C05+O%)^8}t`enMXJ;wyc6u[DEvpe~FV`~.;WB/k}Z*n_ocyqlv@;e%p#XT' );
define( 'AUTH_SALT',        'p]r|E@$vFSaEDu?oPyYAlsm0|Wgm*C2;X_a|PU>[y^@wOdeF87(n*+e`!!&?{6ML' );
define( 'SECURE_AUTH_SALT', '8I_Xb#CGXP6DOJ1w~p@*Z3{4f2v/$E5L>CqJdfS8>*w!hmx]fvgf?&[JgATdRd[F' );
define( 'LOGGED_IN_SALT',   'M{bG1Rt-E|LIP=YdcsQuP l(1AfbYfoDul`Y$Rm==p6y[-~ex8FevCJekvB,1 &6' );
define( 'NONCE_SALT',       'O}DaB(npY1OJs&j5Q{f40t2oa>t.,XsJzcLwf)(@)y7Qv[Xito<h|C*zZvz}^4v]' );

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
