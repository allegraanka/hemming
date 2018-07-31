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
define('DB_NAME', 'hemmingDBqv3vn');

/** MySQL database username */
define('DB_USER', 'hemmingDBqv3vn');

/** MySQL database password */
define('DB_PASSWORD', 'Hkbp3hs6s6');

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
define('AUTH_KEY',         'zvV[4|[wGR85!:dKN8K-hdpV#s-|sC[]5_SDGS9tZWhO_pt~l5_:]xHS9D]1iOaWD');
define('SECURE_AUTH_KEY',  'dV@!Z8JR0osgVdR-os@dkC![:sKO1CG[hl9]eSHPDlaepO#;tx+p2A;]*_a9EL]im');
define('LOGGED_IN_KEY',    'RFzokrg>@,zov8}408}VJRGNCosgckZ![@s-o1|:[@|NVK8G5hlOZdR~!wlsh[1#|');
define('NONCE_KEY',        'JFvjkNR>oz@r4>}0vNRFB04gVYdC-@sock}@!|-GK84[:kKOV5swlhVZ1w-~s9D1:');
define('AUTH_SALT',        'bQ^uqb36{^uyMAE3bMQUI$cnYb3yYcQzjvyn7{}rJQ0BF3cQUY7vzokYc4z@!v8');
define('SECURE_AUTH_SALT', ':NS9spsoV5__~lK1:5_hOOK1xeada]-xteD;1;+aHD9]qWTWS.tpmX6.*#tTAA6.i');
define('LOGGED_IN_SALT',   ':zN4G:[lRKdKG!skhd:[w[wsC95:]aWDWO5plhaW#~+~-hH9#2*+LD9D92ieaWP*+');
define('NONCE_SALT',       'UF0gcfcJ>vrnk40@0@zN4F}>kVNRB!okgc:@z@zJG}8|!RNRN4wgdZV|_o!ok51:[');

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
