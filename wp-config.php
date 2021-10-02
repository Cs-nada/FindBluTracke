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
define( 'DB_NAME', 'BluTracker' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'nji@@@' );

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
define( 'AUTH_KEY',         '+h}zZ$3M2FKxyhK2*^d,!acrIxJvgc%.|PHGCYB9B:u_ 7fo4ecj*yT!~I>flcu,' );
define( 'SECURE_AUTH_KEY',  'ZRw2bzDp9bY1g_eF<q~>2mein5-fQ50Wz<l4422no:S$jPdtsWveifSAE-;#{Gm9' );
define( 'LOGGED_IN_KEY',    ',0xUzwSiY$).2c^*{azt?USKnc#kGonxo3 9ntR)Tma1<LL-6!/ sP|Y2n{f1c.,' );
define( 'NONCE_KEY',        'QnJ(Z~l?- bp:Zg**WBlUG[JT*4_R)]#4=)ZfktiO!&J~~,+oC20$z:o<@^2cTk`' );
define( 'AUTH_SALT',        'q-=FR?4c,vg=>:=C-inYUyM@zr|B32~l9J><r7<)g=#M)jUF=8v7:.$n;rBApmv|' );
define( 'SECURE_AUTH_SALT', '_N*wE+o0so5YD sz zSN60<nQx:&%@J]bt7uzir`(*X[r=L|pV5e8,G;#q2Tda;m' );
define( 'LOGGED_IN_SALT',   'D~BRUlP0B_kWw}K(?52En6bj=:m?]M`5Zv;x%(}VtfA9YmXlWzNMA^)dKEq(v[]l' );
define( 'NONCE_SALT',       'X0Bz@A2j;}+S/ahh+?qEiM-Y%T4K+MWD9&,tcC|lZ7%Ly6gf<2B*>%08|{^@.)^f' );

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
