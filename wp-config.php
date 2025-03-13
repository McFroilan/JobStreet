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
define( 'DB_NAME', 'jobstreet1_db' );

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
define( 'AUTH_KEY',         'lTR$nP$:U4MZ$$xig@>P?nK7e(bx>xk#a{kr)BH9c8b9iBY7_<@fYD/)fnoZBv!H' );
define( 'SECURE_AUTH_KEY',  '#T[9-Ibsil>C&Q6pa9V~8I~o~Z>{IRlS}#oXLSzo23oadV#aZlZB#I~VSh)-z2@I' );
define( 'LOGGED_IN_KEY',    ';n4H1Uf7XMk>.K/Vp>6p/t5Lw),lAN3|,y2[_-Ddfd#FR.f7!MKwu<{kZ<UX2q)6' );
define( 'NONCE_KEY',        'P:?P^Y=E|v-A4mKBpA!X-j9KY3cu:W!XlKw(`2_p[DAbeYwGw(TsF1hkY_5T;1Wc' );
define( 'AUTH_SALT',        'nt2>{u}HD3Xx zx:L,ro HX5gc=CW&2of?/drD`/0JD;T@4&{I}lL<mpQLnclw[[' );
define( 'SECURE_AUTH_SALT', '^U`%U<XI=L1mA9j=2Tu9m LrJtPf5h%&L o{<zzVj~I~uxv92h4X:B*z!ohX#hlt' );
define( 'LOGGED_IN_SALT',   '8qJ4*G{Kx,WL*w20$Rb3?k?V.=dw)5!oK?Zp=+]}^Mu9eQ7tG`VZ/ag}H4?<;h$3' );
define( 'NONCE_SALT',       'zZ|mv|bW&*A~qx{#}fG2|vP}H* ~%%-a3,-^.L*d@zIm*Y`6K]12L#04eLb<P2;/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
