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
define('DB_USER', 'dev');

/** MySQL database password */
define('DB_PASSWORD', '1234five');

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
define('AUTH_KEY',         'pwvK_r0{/&`i)E:(ZZ3oI.`<X4N`Om4Hde>(B4^tMnN kXW=9e]}KCBhSmrN}* *');
define('SECURE_AUTH_KEY',  ' {FqsbJa}}GQ8#zW^]Yj+p p5E1zoark8%N(3>b~/,raJL^/S+-k .@/>}Z|FFyK');
define('LOGGED_IN_KEY',    '5l.+k6}8%K)inJo3_Nu)^Ej*m.kYH(z`ef4 u[^bnhXKtvJ%N2FsjZMumi~~O&+9');
define('NONCE_KEY',        '+JP{DdYs8.x{SkL^ig3({3#>Q^-{tbUM#t{71`Alh]_#-^BYuf.^plgZz0!)fwN@');
define('AUTH_SALT',        'AOW_BhoyffL;XD%R)OW4zP|B(&lY:y8Nt}^7Ybi3h&69oqKGl2i.3*xmX)H^L!GK');
define('SECURE_AUTH_SALT', 'FyAT!oA8O/hPQlL1x*dU!Qe-Qs4a#%>K%56n}k4|MPI9RYjO8<JC^*Am|s>b^Nud');
define('LOGGED_IN_SALT',   '4glesOAo&0)NHr+;#1u5naeR#;2]-WFhsF$q~[LRL#8vaT<@KoU5CR8 =d%.[/Yj');
define('NONCE_SALT',       '=vBTALS!K1yLDixlmj7)b+<EvF=;Q1)MBVL?P5t~ b(53%}r+ZRx:a7E1LuGgUWF');

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

//custom
if(is_admin()) {
	add_filter('filesystem_method', create_function('$a', 'return "direct";' ));
	define( 'FS_CHMOD_DIR', 0751 );
 }