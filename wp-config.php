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
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/* Multisite */
/*define( 'WP_ALLOW_MULTISITE', true );*
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/wordpress/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
*/

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'byzz7w^!zeJD)?6{VBQ|7*?`7r$L1D#m.`A_f.CyUfH%hz4o,q>:N*O~+n&^q*?V');
define('SECURE_AUTH_KEY',  '_p+RiG;XUnycl63eZW3,&]9g~]#FA#i!JA{VSA&_ROj3)BCFJ[j,b5Yg(yw9-@&,');
define('LOGGED_IN_KEY',    'cJ:Uk1rAj92TWGvD4|m>kud<XR4vyYEUxCxe,[9#&5w:j!;]WNF`To3nlRyTzpyE');
define('NONCE_KEY',        'g4-a|cP4K:#pPki&>Qv 4,L6e+^aX=pdY?inu)Vslo/~UbEB5m%TdslXFvFteqq&');
define('AUTH_SALT',        'y7t4Rif%C;)Cpz{!i~%GZ%9}Z~Zy,B,=4O^>YVLX7gY|4@sxqbN!C8.ZRLsBJ1Uj');
define('SECURE_AUTH_SALT', '3HDX-Q7z)-oo:$hh{F5:2:4kYQr6!Y rNT~sCf0:;=uSY,946fTFDx4&/OvsLuRb');
define('LOGGED_IN_SALT',   'H`f2l[9F|:F/Y=nQg!}S>0F1i)9YY d%,Trh},yUFO)ghR[>%zhhfzMA7Z627h*[');
define('NONCE_SALT',       '_Q.L]fCSQWe4 .D)J9X)d~@Y-fnu*~@Tv7L7Y=x~O0c~:K!;RwN9/8&i#UPBC~K4');

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
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
/*define('WP_ALLOW_REPAIR', true);*/


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
