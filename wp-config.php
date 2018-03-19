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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'I+oJB#JR?=T;CWW;wS@MImkRvh9Aq9g(yAYx)V!!C^2j{K5e EREmU`Aid/(-K1C');
define('SECURE_AUTH_KEY',  '9~io2:*O.3UN)=:&.R!+574[M-]V,ti<KSeM`CP;S$S]?NV79$AgA&O#^z=u:23U');
define('LOGGED_IN_KEY',    '*a/[Y;qyF}C]kB>{;;g|l0nM1X78#Ez~l$?0l9R.5XQ[Z^#bN(*-95x*7M6%8bF8');
define('NONCE_KEY',        'Rfueup^-=NgGQqj`5kbPRX{X&M1yk~`PG0mDBXQ[CLyU#7~E$GVqEYVPjIC9cL/f');
define('AUTH_SALT',        'M[R0rlNV1C+n&@=Q+eyl[KbjF(V3#wR[?LEt-ngllbuaOmS:aKD+?};CS5XL;Tx3');
define('SECURE_AUTH_SALT', '>pla}YHP,Zk&S-NUSuuJ%qtSCc4]=]9eW0}-AgAA L}j}$MC,#&Y:)TOR]p6D+/5');
define('LOGGED_IN_SALT',   'Th])yjtP,*HrYVjN|ya{d]MFI?LSw3th7-^IM*+5 $!dRb:58=F~SESVhH!_IMQ{');
define('NONCE_SALT',       'IKyp?&2x%@;zrjvh/yMLt3@VpGf}!Tj* )w:D84[oAoCRLo9B-):;BV=e,j:M+T]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
