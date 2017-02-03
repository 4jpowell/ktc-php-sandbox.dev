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
define('DB_NAME', 'ktcphpsaDBvy8yg');

/** MySQL database username */
define('DB_USER', 'ktcphpsaDBvy8yg');

/** MySQL database password */
define('DB_PASSWORD', 'kk0Z3IpJa5');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'pL5_~liaHD]#tpWSK1:-xda,^nfbIE{<uqXQM3$yqXTA6.*yfbIE{.*miPL2{<uq');
define('SECURE_AUTH_KEY',  'T<qPE.mbAuiLocC!ogcJB8,@zgYUB40>vrkQNF}>vnjQJF7,^zfcUB3]xtaSO5:');
define('LOGGED_IN_KEY',    'AieLH;]xtaXD62*+ieWD9#_pieLH;#_pl0},rnUQ7}yvbUQ73^yubXEB<^$jfMI');
define('NONCE_KEY',        'F@gF4zUR74^@kgYFB>,rjgMJB>,rnf]#tphOKD[#spWSK1:-woVS85:-wdZG84!-w');
define('AUTH_SALT',        'uP62*+ieLHAkgNJ0>,rnUR74}zvcYFB3^$jgMFB>,rnUQ73{yvbYEB3dOK5|whO8[');
define('SECURE_AUTH_SALT', 'B,vrYUM3$yrYUB7sZWC91~-hdKC8|!ohdKG:[wokVN40@zsZVC8|!zgcJF}>TP6;');
define('LOGGED_IN_SALT',   'b7>urXUB3$yfbIE7.dKG:[wskRN40@-gdJC8|!okRNF}[vsYVN40@zgcUB8,!qie');
define('NONCE_SALT',       'fB7,^njQIE{<SOG:[wskRO4:[wsZRN40[wsZVN40@vsZVN40@vsYVB40@zD9#_pie');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
