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
define( 'DB_NAME', 'wordpressdemo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root@123' );

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
define( 'AUTH_KEY',         ']d,>O#|O>zKeLs&=s><b,Erac7m 10Qhk=d)q_J>8b;_Y5-f))*`X;WU~OW0>D ]' );
define( 'SECURE_AUTH_KEY',  '4,jr}JVa:]Szf8sGj|2.FU1CL7#i:R#+U ]|E]fvBW2[gUHX{eD:eD>>t2&2b!{H' );
define( 'LOGGED_IN_KEY',    'Sg)u-0oKGn9m`H:nFCZda5O*?YZ/SBtYKz(o)Bl=NWj9q 1Guq}-/izGrwu-e/T/' );
define( 'NONCE_KEY',        'DDVdUF_A28lS y`{kZtn3A$HXdzMi3ep.Cu ()zW/y}h~%it/ZR^w(?9nX;sx0P#' );
define( 'AUTH_SALT',        '(5 d5C?Qm*!fag>Qp$n:gIg*:jA+B]4x_t:>n3=&p|Fc>r+9K(/y &C]7iz_T#q5' );
define( 'SECURE_AUTH_SALT', '!A;%tU1Q }tr+]lv%f*NOZH*-gN$p6 F:Ui+c/tna^um]V&nR^,vX?yK98q#A5PG' );
define( 'LOGGED_IN_SALT',   '!bRk@[_S5SAD3n0pr^_X};C2.pv$9;0n9IX.y^Ls5o^DW?]0|EQ1mDnJId.#8+J9' );
define( 'NONCE_SALT',       'dh%k~iHJJq.%%~|Gtj?2tz4RJJ}`EG[CmKe=BHdLC0lP%CD0>2Qs+>:1B6vI:Ti2' );

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
