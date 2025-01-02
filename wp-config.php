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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'O%C?P0NNA[f=_k|y<= {21*^CF(8DN7_SF?o-SeVP@X(MgH)fM%AIkvkr?Nf3]A=' );
define( 'SECURE_AUTH_KEY',   'f!U&EuSYC>:+AU76XYWPLm=qFc:OP4L)PZ*!D$.ax8t~?1L d&Ez9L-s`-#M[h?&' );
define( 'LOGGED_IN_KEY',     '5XCie0K|_?vyayDKsz2#H%e_U~G5:]i|d51q+ F7K2?^4X#w!nc@@*zGg,8xM RA' );
define( 'NONCE_KEY',         '5JL?r7qIi9Q`9o1({Jz>Ne8%(Zjn<08?5(9l| YV}.|3zW_(3RbcKw5E;{i/i1fu' );
define( 'AUTH_SALT',         'R0G,R=F_{>$bG*(e78+IMuf6a* )Z)H_:Hq,&{@lX{L1s:$XpC>t7YMQvqM:fR;<' );
define( 'SECURE_AUTH_SALT',  '[`6ydK.I`6c<u&$<souIu/-(fP)J+/8@LgQ~]fYmnExo61}`L0JE;/2|W6=Y>QN4' );
define( 'LOGGED_IN_SALT',    'ko5}vGpU?{75D3pXeEcgJmv*0=u/J~u[7aB=mQ@hM&MayAI=M}|`85jzXYTz.%{`' );
define( 'NONCE_SALT',        '}:s@^E[,,mJU-|T}@=T_wLfIL%gz)V^O|Rf5##OT#JXHHz*K0?ZdZ6,${?(`/ Y>' );
define( 'WP_CACHE_KEY_SALT', 'bY:G=5$X7uz_jyQIRyCPiO${eI3:nlV]8)r!5R7HRY-^tR0v6(;c<:?JV1%6c5Qk' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
