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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'DhOq8J.x$n5O8gdwvK16SV[y89Vz gGNR#}W]UmWyz#iNDt.&)|k~Hp  M3-`8t!' );
define( 'SECURE_AUTH_KEY',  '-i$crltj1QTk:4A#`M#uH%@y0B=ut&530Df}sG`sw>*B|</rGz7T9};vcE/|ck)D' );
define( 'LOGGED_IN_KEY',    'Z|:8CZ2_D<#}4T(EHCp.27G%E/F,QkK15Z?gJ#wPG2SImS7]k=`Z=wx2rW$!PID=' );
define( 'NONCE_KEY',        '@3m2G/Gn(sIoazTWpPAlT2#>6xtKp2WTiKb=:kh}GHD@rg`Lr*wE}vOs0$@g[P|K' );
define( 'AUTH_SALT',        '/[6Z v+J^O!ISF)Gqx=OV]2 7Np:x(N0}!|PJfpmu2Zb(_-dCPEy@y_7[`8h{G:z' );
define( 'SECURE_AUTH_SALT', ']/>?j;d}g9<,.yZ;-s&f^F<9 R/kEGRB.@[%^.+4%WB-sr%k]Z@O5-@va5HS*}.e' );
define( 'LOGGED_IN_SALT',   '*arpuVM.N<Ji-Do.9)*EHES{x]eH>he{5{e46E:]U;=ZY)o%0}~4>=IK!!K`G^TA' );
define( 'NONCE_SALT',       'cBo4p[pe[u<Sd{ZQ|1eY~6K~H[{`04~r[7{JmB J.t @[Qmd|6#Od$F=7I5XuEeI' );

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
