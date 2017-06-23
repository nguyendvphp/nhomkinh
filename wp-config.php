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
define('DB_NAME', 'nhomkinh');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'BC*T B<eZ~LJ_fP&SW_RAY[!(`tnkES`Ky8z.^/JV}FN~m>gRzLAbsC3MCgmbe/,');
define('SECURE_AUTH_KEY',  'cA*2nP,kY$:s xO2Rl=Na7SMMKZ*(jUN[rnK8o5$[7!X-TbQHuT/l5ZBlQv3^$Dw');
define('LOGGED_IN_KEY',    '25:[BF%GUTJw:T)N^vI,3&V-]S&Jx]|6.m18#:>yUe}pHFG%h^l8,^RuYHZ|[[5W');
define('NONCE_KEY',        'MnA0UbWG#o$l,xP(aZW({+1uez$`*>}JQaVKyQhLU/XKG11scel1C@{xIawAuum/');
define('AUTH_SALT',        '?;C]@@9OZ,5,Zdrj/z}+IADkwtgcOz}##bh?WkjU&CeZF-a?G?mr{61yS|JHO>xa');
define('SECURE_AUTH_SALT', 'gbory|KU#6_`=LXW`xkLId;*x860CCvdz5K .?nmDD%5po)q9DrTur<{t;8g:h*0');
define('LOGGED_IN_SALT',   ',>|a~[i_hBl&*(d`Ph|r:$Db=K:i8yJ`|MdO:x91z_b&`Uod_jk4x24UlkoHw.Qw');
define('NONCE_SALT',       'Q|F}g}HHw;&vCnH6>03[3Q] OEjfhs&7ncpkfVqGkQ[UFkz~da[^aNg{R!NHWqJ#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'nk_';

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
