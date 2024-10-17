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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mysite2.rus' );

/** Database username */
define( 'DB_USER', 'Admin' );

/** Database password */
define( 'DB_PASSWORD', 'giveme5' );

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
define( 'AUTH_KEY',         '5jd~3+A!mi&fVzJ/`7P3L6#pHo)k(wh~^N2d>f:sPF;QlD2c891u&)TK2bx}z@`a' );
define( 'SECURE_AUTH_KEY',  '{gPGo1PJVi/;:ufaw6292iDg:O|-&Vl9_b,WZ|r3qx4IkqAzBTW1RM*_E19.w{ZD' );
define( 'LOGGED_IN_KEY',    'b-9L!#OOm8L;Q7jsJKggV(RSOrOd;=cxOTul+v$$A?2LWJRcdrD&]7DdVN#x=D7g' );
define( 'NONCE_KEY',        'nmx.}%EBfi,!v)_UFT}-H)x$}@60V,!avPM|21{}5U<XF+|CJg|,Q!Tw7(yy@.$S' );
define( 'AUTH_SALT',        'lQhK%m:8onlc0E7z-`k=aPJPpsD/JY=,5AHK#b5R.RA^8?1v78-rSNG`]rB*c84V' );
define( 'SECURE_AUTH_SALT', 'mxv&:_Ug9g5WNdhF %hk4%Lq>m.WPlc4d.RP9%^|i+BKl2U [!$E&bf.m(#8>>z+' );
define( 'LOGGED_IN_SALT',   '/rG{(g6U~e+u`e@FhYR^ XWW`bo}*hK{qT42HO1`C_4UxJ>NFPfS-z.B|:6#*I|;' );
define( 'NONCE_SALT',       '$BK3mNQ0Isq}tq5pxbQT8{:B,ub#v6+%c6L3?(s7ZJZ}3,Ryw(FDYo`nLJ~3!Ls)' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
