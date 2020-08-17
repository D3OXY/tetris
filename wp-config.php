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
define( 'DB_NAME', 'deoxy_db' );

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
define( 'AUTH_KEY',         'wbK%{>r0<N]9=cN]Fuq?%R>&<qvF_fl4 bz*yhx;8C5bEn?W5_:)]nei7.oF+Pr5' );
define( 'SECURE_AUTH_KEY',  '(P9y(Y05mAA1gCpAUsppX!:Wg,4LaaS-_WgE?t#Ex-{@aMhsQ;{n!%?Y9hEALb7@' );
define( 'LOGGED_IN_KEY',    'mKtA`+Io5CgHkYxV!|2nf=V><14o^hhWV^(iyC,;./rx jH8^TKAzQ5,1N vNBzA' );
define( 'NONCE_KEY',        'c|}<@X`PSJ%.pFO CVUeHI-|_uq]1MP1^8k2i/E-:,8Bw/LvFjx[MRt<c$2G|xaD' );
define( 'AUTH_SALT',        '5O&Cg}=@E8t#v/?4eg7Hd7YlQqnVPLnd^%Xl4XVVJoX&)^qJ,*TyMP2dAx*;@aS!' );
define( 'SECURE_AUTH_SALT', 'C?V-]Wz/L#i:/6B(e^8GR1RuD6LcE{iANsJuxCVX`?K>ZB[ImD6 7WC9M-Ob&C?.' );
define( 'LOGGED_IN_SALT',   'F$qVnTPhiLt^]|,,xjXyW(wM5[^>0tq_@`xJw88e*a;8DGj4>a,wpl{6^bsx`m9<' );
define( 'NONCE_SALT',       '8MOj[gl[#?3]R7UTb|2W=j4db(RHP>ma|Ta@h#B3;6XLkCw/HW-+moqFm>D(Z)BE' );

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
