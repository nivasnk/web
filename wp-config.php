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
define( 'DB_NAME', 'web' );

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
define( 'AUTH_KEY',         '1U3H/|&g]^3$Xei)AN^C5SS=2NXX)BCM/I0vc^E,}*oORPtc.nV0GnNcY<DnEFq3' );
define( 'SECURE_AUTH_KEY',  'O!h?&8|u.K0_#.|}xY#r>gc,x.$V%O+V(8RL!CWy,oq78Eui/TUGGG#w?n:=X:_M' );
define( 'LOGGED_IN_KEY',    '9*utF_-Cbm=W3(BzFN/*%yGP31!s9Ja|~s4;<`[[k[G;5H%04=E5d9a+eCn$g4&N' );
define( 'NONCE_KEY',        'W:yV7>![LUK+-}yr<JYqrT^~KuYTLS}1pnRj<+AcCjALkHsNl=U%`V:RDOX,Xp`$' );
define( 'AUTH_SALT',        '@/(*JV#8~4swF$Uvk7oXJlYxQ]#jsu8AO[br7!.3XEk`wzuK!&&X5j_RU=ar$c+<' );
define( 'SECURE_AUTH_SALT', '8l#d3Xk<)L@sZnx%]Hwr^!&ez`Zuu|,u{,xb1;;+[t+c~XlpK;(uR@j(trt`?d-U' );
define( 'LOGGED_IN_SALT',   ':{2/iWR@O-^ar=_<gd$E_afiVXUP}4P*P^[<G^d[E<stfxioScdye:a5MWOs]6uW' );
define( 'NONCE_SALT',       '8)cZ41iF|0EwZL0 |@Ou@XWH`#>jDRG#O_]r]ZZ%nf~O`)jQJdh!diZuFWQkBl|R' );

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
