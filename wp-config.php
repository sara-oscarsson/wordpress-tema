<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'wordpress-labb-1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'DLuE$rkYrQ5`TEBn8ZWTw#{[>*)f?iFL RU^jm<huY|#;cmI`t4Lq^J1i*rYdN=1' );
define( 'SECURE_AUTH_KEY',  'gK(Ha<|W{fq0Wtm<oJ+q/>5;gtfsB&*wQ%o3.:ujg84<0`<%0[;=r/1G&*@P=YS$' );
define( 'LOGGED_IN_KEY',    'wH2s0V5 nV?Ebt!x#%[rk~;Y$5[#gVjh:118/0SYgfl4%Sj$1#ssz>o<L{f>#A0d' );
define( 'NONCE_KEY',        '9XGUU+lp<EvlHP>N3+nPOo!0E7=&/Ih.}swn3.uqU}]tUbj%q8faX&4|#TI_AAPz' );
define( 'AUTH_SALT',        'hvS>jI^j0@FzoqXtuO #=S;gy}yePcQP0f(rDo%9#Zmvy5@CVm5,5nPYce}F:MOy' );
define( 'SECURE_AUTH_SALT', 'gY[=jLB!h6o]dGcbM/t gW89p]ZK_f-5a>#TI0`.oG9Kxhj(!]}#R!b<mdu{mI3d' );
define( 'LOGGED_IN_SALT',   'Y<:Yz5bGIpe~VG{Z=r[}ABcIR!Fs}%MCrYo!ipY{&|`BFqE41)3iwKlybz~w_*J3' );
define( 'NONCE_SALT',       'X-3MjOEhp8Y?x@<F;#wH4GVpO(^Y27DL%578n1FZ[Y4`ETl-T.-fu&X:dE1IJ*LC' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
