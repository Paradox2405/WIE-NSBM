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
define( 'DB_NAME', 'wie-nsbm_db' );

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
define( 'AUTH_KEY',         '5R-+0]KLF2N(y&ihA]yT;c.,ZjAi7h&p ?~ku0{d_Sr ]8gzBaILU8i=&V?.l /r' );
define( 'SECURE_AUTH_KEY',  '.**lOpz~BwF=Z`NOd=Kp<4xs<9o`De2I|*a8{((#{+p]4<,Z7zT`c&_nm)U%!=zK' );
define( 'LOGGED_IN_KEY',    'XF+Eu %;=Th?SIt<n~zG3|A+>b`p4X|#([D}rAgJY`-AD<2<kG?(1}i8Yi%eT@Tx' );
define( 'NONCE_KEY',        '[U1K6;&$8%0641>lz?~eb0l?!gtPND@(pZ9.gyuW?Q~/DU25kl<!/eY0b!8C}K8j' );
define( 'AUTH_SALT',        '!0iqI~mXQyIxh$Q:SMpeQS*#uX 7]js}B&u|Mdi_JRu:bPu`gq(K+P)`g8YXzi1>' );
define( 'SECURE_AUTH_SALT', 'KJ$V!oLG Qj +PS_p+wx 5[Ao6,>7/^L.fnx{se`w&];J{Gi;, w;:D2{<C[QY>t' );
define( 'LOGGED_IN_SALT',   'jw~D-yMM<7Ei]vO[#&+4q/e=zkbFK?3f.*@L{z>| AcQZ@M2%;,NoE(CZU!r)7+&' );
define( 'NONCE_SALT',       'b%X/w(zh?5V3c`HPXP[9RnRSx!@L_Wuoyq<u4E3wBxWZLe`H%bR{fyv{WgY(@Rv`' );

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
