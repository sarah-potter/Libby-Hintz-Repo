<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'libbyhintz_WP');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'iqJsJk0[K%u]F1F4R6UF>dHds3+$~GwcqrhIS-!_G$yR.b-;YeUit!@<*6S+Eq-e');
define('SECURE_AUTH_KEY',  'Bu7|c+0P%TI_mw1Q}n)~J]k7HDI}hL-X2Xs.I|j~]F=1|JZE@RO=gmf2`sK7>@3p');
define('LOGGED_IN_KEY',    ',9R/#->R0LzPOG<Hdeg|ZPxel?avh?7hB7 ~m*|u2d]cGb&YD2|CQ*o-J8V*/S~+');
define('NONCE_KEY',        'C/#Z6bXjW#isYPF.Le N_/#:r+_vQ-&FCq-#f_aMU[Z~Q%n|,0m^1hz7cf$xb%=a');
define('AUTH_SALT',        'i12%3=kdBqM#wKcf j<%Db4SUC.?s|(f})H*|&h?4tY_7+F;0&_X`@Fa4@PK_Tnl');
define('SECURE_AUTH_SALT', '|J8**?Hvp|*Dx-k=E=Kd//f5eeB-s@~?)V<oUsvIZ:ziY9Rm;5BYC5#W}eF3F<?3');
define('LOGGED_IN_SALT',   '*I!}/%d.hSLw&<K4S(N z_7v2%JU+&4-!S3(}AlL*|HGVz9cI<wkK;)[^Qklhr`j');
define('NONCE_SALT',       '9r1Ea]kH@-+,klYR[zw,*8j-FzeF]_7V%Zn^V-x)Cs.!ai07QZe.U<46?kMqJ>|(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
