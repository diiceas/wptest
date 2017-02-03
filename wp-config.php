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
define('DB_NAME', 'wptest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'asdqwe123');

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
define('AUTH_KEY',         'G#l tCimgv?1j8N32l`DaQ!kvms5KSJDRmtQQKQ]V5DjFab5Gl3+8ak`K9Vup3;F');
define('SECURE_AUTH_KEY',  '>2$niL%%c(Dym{Ghfi$K2XSQ%TC+lP]$)wS#/YNSjRW`WAC{n6Bob>vLW}BIA@c8');
define('LOGGED_IN_KEY',    'Ka WvlgRpfg*Y?)>HiscfQtZ:*|C+Hv>j5FT4FCPwZB}?z36&u ft>z-V/D3mi09');
define('NONCE_KEY',        '&E0}1r74Ey5`c p+P1SV^JC2GbHn+ICt`jW|2N+zf]nlsntYPw,r(s}_5bL>w+d6');
define('AUTH_SALT',        '(;sb8!W+-NyIdy3]i?#1DJ+ZH60.[Ua=)~<ST_B$U.hh!WwlF]?)AaZ!neS~^fq@');
define('SECURE_AUTH_SALT', '?#Wj~$P.MQs!ABqo1F~8phz3ZL-M^FN1_9WZmvx0bHkC05s`A~XwB(a{txY8HQd%');
define('LOGGED_IN_SALT',   'uRv0<qF:s2]Y{/0qt;dgiu6e4BARvsX-S%-~rj9LD]ey+jiM`=# i..R_ej;S4,E');
define('NONCE_SALT',       'P&5Y6UEd%)B}Z`3s>mpLz=#B}p}&E|hW]r h,dN|uo( 90VkAaDFpBf;7|ZsDM!,');

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
