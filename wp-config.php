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
define( 'DB_NAME', 'street_db' );

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
define( 'AUTH_KEY',         'o}vg1XWXYlyQr,?9B}cbv}~r3R16,[8B0AsyP#F:ZSr%_86K&z`[}{ynMO{(2vaI' );
define( 'SECURE_AUTH_KEY',  'G>56`EB0[@(|jQ`+UF{%G?p2Kq~oOj8K8Gc>QPq:0qlT%EZNf|.c828J7)O4Y!wb' );
define( 'LOGGED_IN_KEY',    ':?y;`WJy2_?%)5d(9(kr&ODO0XI8;cVP[oK?!cW/bAvxUiG{#:zWgL9W/J#v9QJN' );
define( 'NONCE_KEY',        '/>Rnw`NWP#}UYtOgcZu0Sag; o#;_eFZQL7%1rgV+DpB~Zl{pT84/C[2H)bPh1U<' );
define( 'AUTH_SALT',        'oGo&TW4|1Y}!L/lRF}`3:Z498Q/owv$FBH2X.{{Z*>oVtBtxMPN;(FJlWF=K@5{A' );
define( 'SECURE_AUTH_SALT', 'E=n;P]O!(%gVCc(z#GRX|aRap/$Y1e1{lH#WUN-Z,[x)$1t*mGK{!}hP{.ISN9gl' );
define( 'LOGGED_IN_SALT',   'JGB{gsBkyg>o0(9-!q(/]Z8p-EE/qtOj}Uu3>yGuK7|`]|eox;c!-~U{Qse@@IO[' );
define( 'NONCE_SALT',       '~>Cb(V#T79c NV:~WV5l3JavVx*JO*25:B-#.P)+E)SX{HmG[>.^UL())B:xKJJ}' );

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
