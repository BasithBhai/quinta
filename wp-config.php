<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'quinta_new' );

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
define( 'AUTH_KEY',         'LX0k}wHPw7_*MdlQ3%_ -c%j3iux/q^+ 7F4SS?DE=x+dR`U&Q:+_mCdeU4c<WH@' );
define( 'SECURE_AUTH_KEY',  '>&gHDG@M$L.7L[x9UTmgIU<c~_&$?$<6D@)M2B7z)EGU;L9YL@hrV`^t(+z4gRYR' );
define( 'LOGGED_IN_KEY',    'l0#fSVlfV38B=Q4n>*#b@2+*XjB`fC|E;&4@w:E,ck?T,-~M^N`[.)]x>OwfmMtD' );
define( 'NONCE_KEY',        'c&?L/U8w9ZY[CtuAIuOwya-;N;tWoq~$vEs1F-F|-5H9s%T1kdXS&2fufE49BhoJ' );
define( 'AUTH_SALT',        '#8):yi-LZu@^(LIdx/ #8(6dT#X;e~T/efwfEJ+:|b4GslxY:[/#/fg3JwrJMjh9' );
define( 'SECURE_AUTH_SALT', '>=BrqU&]w !|.tszY56AW#,T]0a3(Bfgsf_?g9^?d4`3u/naJ-3g9e(j<1({4[ $' );
define( 'LOGGED_IN_SALT',   'L3FM0q#yW~2#:RxRE.,?Yn/h}|y3e>2rB>;=e _ g&)*.yS!>l&:ZY.&6^r~-6SU' );
define( 'NONCE_SALT',       'Ngt,9|1u4q,A4dbL@r{W2huKVCL`[4.1lT;7dyUI`&kXYYK|G/}H/^G.$)w^ElX ' );

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
