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
define( 'DB_NAME', 'sure' );

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
define( 'AUTH_KEY',         'm`10`Ksthx{g9`SYR/.94,hpi~rU8IhEtAPTAE]ke.xql7e&GlwlNAY4d(Y,Dxs4' );
define( 'SECURE_AUTH_KEY',  't{A1~oHD<0C`Z3lVpy~m`#M(K?)8Mf@+E@8Q~BJED;3Du_[$.F2 ~6f+jAYzmVbR' );
define( 'LOGGED_IN_KEY',    'S__6m>w.@A/GN/ KW9e4W~ZJh`b6]?6A*<3QI<k%Ft<82Mv?ZT?QA{;a*DTmz_o^' );
define( 'NONCE_KEY',        'I-Jr2y}:K)gEEU?oYjA4={aQ![+pC|SRocvvANZRc>OG6OxCy$m(0^D!h@3I[YX(' );
define( 'AUTH_SALT',        'HQ40vSS977sp_5GRT~V<YjQOF|2wK@bB`-&Y+lr=aiki&4Q^wF_[cWSt9M{[Brc&' );
define( 'SECURE_AUTH_SALT', 'lnDW,{2=24ou-mqRx>PS8SFjo4$Q2>v&pS<?<1i@;[Oy8}Asbzqr<xP4.HY[u20T' );
define( 'LOGGED_IN_SALT',   'E?,63S-(0}=d[NG^/tC&OISCA5UI=2E]UXZ7%(3cq|17mXjvfU:Xi$z<f/QE6b{>' );
define( 'NONCE_SALT',       '53bL)8/{!TZ-9QjEeEoS$}g3tfV2FWYHJ=(Rc}.m8L8)9|,pBn[c72<c{kf}4v/J' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sure_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
