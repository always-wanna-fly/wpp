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
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         'm|:#Pxu6 bo52 WO`^v<0:k14l_4>O{J[pm41)1yJO=c~}Btc!^Th8v&cv(X+5dy' );
define( 'SECURE_AUTH_KEY',  '$8n?|25m rpP3B^zd~z-U&@`X4vIL^sd3`=H?`Zoq$YtmTcy4p&C,#/Sp}{SQ$U;' );
define( 'LOGGED_IN_KEY',    'S@uX)7pWh>D_^?}~.I.ukui,a-DmXB1pPfm7bl>w`*<s>m}}h+t6[6=O,=HV(g?^' );
define( 'NONCE_KEY',        'B]%fGZob^ZC>H}8XA=qg=9yRtK4/@fPPJ_wbuy6duyq3;E-^3YAkK|FuW #$F<)u' );
define( 'AUTH_SALT',        '{xFml8/:vK}H?is)ON...{uJ:5;H<{Klp! L<Y6>w111305 ;]u[y!gS/w8-xWf_' );
define( 'SECURE_AUTH_SALT', '4ZS~R;ND sY<%Z1>9r*-pZv|Y`[!c4gI6v4NF)BMA-G;qypXu6a;]vrR2qguo.f`' );
define( 'LOGGED_IN_SALT',   'bgp-1,1t>o$W.pHL4x%^|dWsC4t:~d@R>#-dicNS7=4$!0oS$:}-Y)E-TY!#Z`aS' );
define( 'NONCE_SALT',       ']*+PwIRb[wcjG6[?K-uo*s)pPfnjb,#uQ,O! dNJ-F?F,=U[D^k.7G{Jb`?2N,6N' );

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
