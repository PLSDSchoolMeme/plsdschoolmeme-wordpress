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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'change-with-strong-password' );

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
define( 'AUTH_KEY',         '@_1c}#aZJJi1G-G0{ZXxZ`;CyAM&ssWQ.4}1_n+BE84L[+-::M&;@q/5R}f8|6^B' );
define( 'SECURE_AUTH_KEY',  '7}v H1R+62j9Hu%rxS6e>+-b;tOuHC!S!U!Dxqx#?ifp|<9Pj7NQ%MvGKAYLYY?m' );
define( 'LOGGED_IN_KEY',    '<{wO5+*%9cQrgT2K9)4e,]?[QhMDYluj{XfzOg&U1DlYXP5PW~Loxy+frP_F,#cP' );
define( 'NONCE_KEY',        '[Be=N-r[x^Xr8<Y&xGK8*VpP+N{gT{1h:},101>C9x vzdmrQ%C~:Y;}(u gc75s' );
define( 'AUTH_SALT',        '*Si>}sN_/<Q)XsV_LHy&tZ$V(6gwr_]G=77<fF+>o#4e`dQ8=n<+Srf,IgNhxgyJ' );
define( 'SECURE_AUTH_SALT', '#t-q$P&s.8KES~xlHY5@GKVcD{>G}AvEZQ)=j3VE{+j-)3/p.Nz,rQFV._b d;l~' );
define( 'LOGGED_IN_SALT',   '#YILJP_E :M]bSw|H&fY7,8BQaUq&DWT5|l@0^S|s/*.nMZD}rwMU++nmD6:{pSI' );
define( 'NONCE_SALT',       'CV+> sE^L<8F_.OfgWXC60Y$k2[c38sDmN!2>Ee-AR}6<VvXpU.6}<,Lv)wnSHNC' );

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
