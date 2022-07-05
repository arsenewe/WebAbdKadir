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
define( 'DB_NAME', 'abdkadir' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '9jXsohDkjzF&t[jLW@|~5~+=iu=a{[5AV-6F;gKM6}s48B49OXY+&o(qgi`lGbPJ' );
define( 'SECURE_AUTH_KEY',  'Nb/YH!`Yb;:>nnv;3I7EE-t$Acg.e3q@h8;?^-v:P5)aV{G.jg9q6&FE[Rc)Z:-d' );
define( 'LOGGED_IN_KEY',    '1KmKh}P%>d%]wZP,|)M7FP`21<q}P3i`BA;t[vP0^GSNV:H80~0![;gNG~Dj [fe' );
define( 'NONCE_KEY',        '#Db)/g 3sus,<Tg:9L5[Lq/J.[[?[1FbAHRWCH1{jy&=ql#$=1bx/KB&?2:dYSr_' );
define( 'AUTH_SALT',        '?J?Uh~,5dAueQ731-ynTZ)zY{t7beqr6ywy|/J 6l$!csWT#qEZDduN>d*a?l6tL' );
define( 'SECURE_AUTH_SALT', '2,gk7WW}R*c2AE!^>c1Q&>*Cv|~mg{&|aM0UBY3SD6/At;Biqh$SXgP<#${jVYf:' );
define( 'LOGGED_IN_SALT',   '=hFGcb0-C.NjDNwO_>?sg{LHVuo!E8@|}A8N1>?kcZ*#+|;q~Y&hgiw=<>{}-G:y' );
define( 'NONCE_SALT',       '9SOv@4eT(kzXy[!%VlB>oSi0F^h_N2DRQ5`giqxWE_I-2#s.1N`~PwaD-VZQS_Ok' );

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
