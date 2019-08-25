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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sample-site' );

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
define( 'AUTH_KEY',         '}n s&TGgJ3+cUB(A^T@DIrUpJ{X<zRsW/ph3|Ctef+x.,@mjg);_1yOt.5r)7*)p' );
define( 'SECURE_AUTH_KEY',  'Y:m{RQ+(^9kl0mUz`-}F~=XcLI7VeX{ Gg0;{FjQ_BbQ2iZ7klxA0FCAtfsn&H.y' );
define( 'LOGGED_IN_KEY',    '}%3x(b8Fet+D8Io!84SBLJG4xL{}{R&}B7nf^Zg3+p%eAByQUQ@wIk^qO/La!Jrf' );
define( 'NONCE_KEY',        '/LDxhV$F8D]4uyD5e2:g;e[hxj<TZ24WeX<k3J]-~*VM3Y@Rt4l<;.<![LHw{Sg8' );
define( 'AUTH_SALT',        'zX5(0&e?2d&@W_#,8C!WGzN$a![;4]([t:$53`@|cfEk{==fa@jX9C2=p>CVt=xV' );
define( 'SECURE_AUTH_SALT', 'A,TRf<:Tm{KM$E_]2<JTjBt#-%2[y!r4p)|fFn;HQzVj&VTei;.plL`ln+@zvKnP' );
define( 'LOGGED_IN_SALT',   'I7GU&97l0hOoH5;$vo=cqwwqjFYsT7yFiYxuQEBMH#-):A:@af[)u|[3L)F0qbZg' );
define( 'NONCE_SALT',       'L(ShQ!HERzt{8@F tO^+|%7Gfq6GXH@5^ 1sS33<Y0.Jm8=Nz1/@Q<QyP6c#=sMV' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
