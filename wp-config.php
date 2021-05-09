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
define( 'DB_NAME', 'wp-test' );

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
define( 'AUTH_KEY',         '2; J*0j_0e6p5221C@CbnV6q4,]O,KJZxxy[g.Ez*_#:*jX?DUk>@--%ro[&Y];V' );
define( 'SECURE_AUTH_KEY',  '&Bf5BEg-6JN<}4cRknrs_u:i+;62{ch+3T|s&O.*R1,KtP@a IB>;;{5lN%$xx$]' );
define( 'LOGGED_IN_KEY',    'NI1Z>+D^>8LrB9y=cc%A8T_w`2{]jd,F*M~C(D%`1:TsotEE;^jQ34P:<b4(p1gA' );
define( 'NONCE_KEY',        '0Vw^to4/2_6?ol{Y9u[nX(s;dURP#b0+6nKXUHQJfg@WF.GJN;a[eya#gf!`V] q' );
define( 'AUTH_SALT',        'c9cX>w)SXfI95ZMP{oy!;jhGM8 ibxiiZ}X$@dlL-%iM)1rFC6*IL5+>fK*b6*G7' );
define( 'SECURE_AUTH_SALT', '=Fv)-:gCHIjtZmb:Dum-9+n5~kjwzM J/*8 ITC.ADY[D.zf4l-gHiUXzP$Smp5N' );
define( 'LOGGED_IN_SALT',   'ig)3v=~^70Bah:5j_^;]V8)n0v$g~0>;6bs41s3ThMR_x?Q+9<gjb~{ w>/| }W6' );
define( 'NONCE_SALT',       '.F z{gB%]i-]EksO,&.Kp8<GW;-+|+RXhNva>6uk?[Oj(MIx{}?7?^X5P8%:KGS>' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
