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
define( 'DB_NAME', 'divi_portfollio' );

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
define( 'AUTH_KEY',         ',{xuV*.2p:vA^n>*JayKD}bH@2%PLG<xvrXmN,/1TV_HQwy:[iJ~hi~|.GG.jK&=' );
define( 'SECURE_AUTH_KEY',  ']&K%U`u+_lf_w2s`ArY@:qDa^,d7>]GSo22?dLv~.,-6xl<PUlt4uI=#.TaU8- /' );
define( 'LOGGED_IN_KEY',    'u[OTa*q)mZ9 xuEb2a G+v}ACh8!Iq#4,u]}[V[ 7ru!sfQkqBzq`jMsVLM NY4h' );
define( 'NONCE_KEY',        'kJHjR$!,n_nBPrSX> f{taWj9gyL&+h!hp)h&42a8B3/1ZJ6kKYkEST2 loENy.Y' );
define( 'AUTH_SALT',        ':Ho7_ft)Hm.$mi.+,KOXtP-!*~V7]9!.)4~-LY[m+NQH0Su`ovSL3d!15A|f,{n(' );
define( 'SECURE_AUTH_SALT', 'hML$P3X>eU{d7}GHRJ%:llDit,$~(s-X}uVi%}&uuxn$?US}L&Z]>N1,;` WnF,p' );
define( 'LOGGED_IN_SALT',   ']j4hTj#f1Xj$km4Iq=KAXOeDoD3j}JEUi($4X$%%;X}M[cg0u0ZNh!3D(fx|dMEQ' );
define( 'NONCE_SALT',       'JTbN}sEG8/[vq)XUUi2_4[uWmdAHJBkrs{+zFf&-l9j`Oy;HRdA@$mpQ[5F{YA,h' );

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
