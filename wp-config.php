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
define('DB_USER', 'XXXXXX');

/** MySQL database password */
define('DB_PASSWORD', 'XXXXXX');

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
define('AUTH_KEY',         'r|mK7%<T{,si)$SB?z,1q(aR.+Ra/d^{A}hTN8egru!9HQ~YT{uFlPVoTjjB,Ra#');
define('SECURE_AUTH_KEY',  'i.IAxtcuy k9PAlrt(x`Vr]mipXRG8Bw:7Y]:scgz=`YHU+HD O}6dWWu1X?5)|#');
define('LOGGED_IN_KEY',    '1.]z^]k<$oC4$+kGi X`HJlD_xCaq6>,EsQlQ3FvSeWVvg+fVzg1aQB%_@i-:sbh');
define('NONCE_KEY',        'zqZfSOU^8L;SDJr,FXk[$<x^v$6$~(p>/3.@)6zll[(jnWf+ % `:J/P:sCk(d;f');
define('AUTH_SALT',        'PINWHe1)B~c5KX_%uifDFT5*m?@6s*TZLZ9bugDGYn_#dBe8D#..P)+pGV(=kb1|');
define('SECURE_AUTH_SALT', 'X.#$o|4 }h>,BSh%w q=%tkuTdqzw3goc;-iz%<)_:]6/N*@u,$3@sgN-$*FlU!T');
define('LOGGED_IN_SALT',   'b.me+fleVWJ&=la0w//-kj K/QdW%y^zZBm@M:W>[cZ;O2l5gVBP8/={Ma{u,(-e');
define('NONCE_SALT',       'fMDT;up=slm71AG]mk&?hcDM|ts]349_p8^,cwlV21|f7un7`o-`i1.Pm)r)jx!R');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
