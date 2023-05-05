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
define( 'DB_NAME', 'sajt' );

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
define( 'AUTH_KEY',         'X:rbJ{<:6U-J>ow#wwcASV0#!,[vDz,dHNS:k^+7XP+xEzQZEvp;g5?3`g$&D>7?' );
define( 'SECURE_AUTH_KEY',  'LQSR3inpv=oDE<1%6-vlTI:;h85]GlQif511`K]Tx<.H6j_vx(3qITGXohN|Ybg;' );
define( 'LOGGED_IN_KEY',    'k}B)Fl1*U?7KK5Ng/qIeo%!@Rf+jg*{|{TQR*mto&?}kVX0ID.cCpNyOXksxeTyX' );
define( 'NONCE_KEY',        '7pLe((3Sthye_@66HLkZy5HJbU6J8jbv%U,jf/AD`SYpQFJ&Os1;C9itN ~~[f7k' );
define( 'AUTH_SALT',        'JOAa@pUHnrLY;MqEgVGq)]o>s>;Dj@Z%*Jy3pVAi]/(td$F[7:R{H`KGjD*Xqx?g' );
define( 'SECURE_AUTH_SALT', '_vhKR31V-IkP65*,VyKJvEm0LZn&>K[vz16(:Cr{[Ph=MjEN=Z|bhHz6wm%YortJ' );
define( 'LOGGED_IN_SALT',   'wz|VVQ}S$>}Um`Y#DM:}Pe{@9.uN$i{zm+Q050u,Lbr9.=U`^T1q`~9C)WQT|`!y' );
define( 'NONCE_SALT',       '_~MinEl?>a$+y6`3 zDwLz|TC6qaEt#Cz:6 u#%s!p3{0N:z6RTicX?B7;1x+l&I' );

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
