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
define( 'DB_NAME', 'wordpress01' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         '8oo>-bz@KQ{flkZ>u=1DwF]x[Wp(S$bZApx3hsKo.2WXLss8?.-na)XJeAx.vr2h' );
define( 'SECURE_AUTH_KEY',  ',TQ9XBNYkq_!M-Fn/A~*ttFJfZ<+mI:m?.~(l7,f_f^5Q%+I`; u$.u/@541|kz]' );
define( 'LOGGED_IN_KEY',    'cVX2!7vFah$Iq(EJR$c;PmjOdcGG6xb9#I@MpVW i9+<=bqK~}rzXlzX9XT0gT%5' );
define( 'NONCE_KEY',        'ey+KhI=zluoC3dhecC)S||}z?=8-q4]}7ge]962~3{)H,wk[aBJ;Uw12HtJ+]M1q' );
define( 'AUTH_SALT',        '>[F9/a10r;`/Ih~Y7sM>/5^6,{e|>->hmPH/mN]_|KDqn$S$<lq+y#1;kpm.Y&Pt' );
define( 'SECURE_AUTH_SALT', 'EL?H<9Qe^eV0]>q($HSX:j|(y- b-pL>Th.DhX9Q:rX}^k2,,duOx&eio:k1Le(D' );
define( 'LOGGED_IN_SALT',   '6c3xe{S1%4W:S6UM#@xY)^/G^OgM_f*|hO,{f^)_)FlR::^SVw2b.SGl.uPEU6y<' );
define( 'NONCE_SALT',       '-:ek`jmWj0|kIN(65S]PJ)A,5)4k`RBQ5WV*g&22GZb3;%J!P-B:<H)ZSN^=_K>5' );

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
