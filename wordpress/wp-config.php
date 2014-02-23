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

// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

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
define('hkGL@*:^H,{EaR:V+S%pbKtebJqqJ^BgS|$BQ}e76eE7bP&CU|kxkAY=k+G-Frx&',         getenv('hkGL@*:^H,{EaR:V+S%pbKtebJqqJ^BgS|$BQ}e76eE7bP&CU|kxkAY=k+G-Frx&'));
define('S|p>VS*QqWg9xZysY.:F+bn]K MN-Rn/+~fqsI8GX4) WWE^,XiKydp5|g$jkVoq',  getenv('S|p>VS*QqWg9xZysY.:F+bn]K MN-Rn/+~fqsI8GX4) WWE^,XiKydp5|g$jkVoq'));
define('l,PD05y&BQ/$@54bN*V.]UJm-JN8BVG0oUccAB;EQWNFR-@r12obA,K#{[M4W(_~',    getenv('l,PD05y&BQ/$@54bN*V.]UJm-JN8BVG0oUccAB;EQWNFR-@r12obA,K#{[M4W(_~'));
define('PRny.PXpju+.TC+ea.@^M0D/%@3GN%HVnEl,cZh]5.5sKZ*/:UVEH!,;nE~7xrtz',        getenv('PRny.PXpju+.TC+ea.@^M0D/%@3GN%HVnEl,cZh]5.5sKZ*/:UVEH!,;nE~7xrtz'));
define('zF5Lr7c=LJ[ D1p (;Mkn#eN!lEHU-;Up;SmQw|-0-qtV~BjIqTM#Rosjk69+S:#',        getenv('zF5Lr7c=LJ[ D1p (;Mkn#eN!lEHU-;Up;SmQw|-0-qtV~BjIqTM#Rosjk69+S:#'));
define('[DLj{*]9%=K>M=:|FpEM|rhRNR(@ETjJMp24KGaz(X:aY_x.~WzK|(F-kW=5x{H+', getenv('[DLj{*]9%=K>M=:|FpEM|rhRNR(@ETjJMp24KGaz(X:aY_x.~WzK|(F-kW=5x{H+'));
define('- 5B:{-RyD{apByQa]JU0F@KGOEhq?.)mUec&8Q=KsX1fC ,fsHu;bw!J%JV:SpA',   getenv('- 5B:{-RyD{apByQa]JU0F@KGOEhq?.)mUec&8Q=KsX1fC ,fsHu;bw!J%JV:SpA'));
define('}@P$J_+=F3<jdpX%0_~I$4J,hze6Ejn|;BLY{wjPLxyZ[WT,/QGBxE}~x83}US5N',       getenv('}@P$J_+=F3<jdpX%0_~I$4J,hze6Ejn|;BLY{wjPLxyZ[WT,/QGBxE}~x83}US5N'));

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
