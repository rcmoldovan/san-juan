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
define('DB_NAME', 'san_juan');

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
define('AUTH_KEY',         '/8bPncTCM~)&a e@CzH01:FU}* n0Q=hMF(k3?&rn;sT$dw*<IVjiyAq5RRdKg}z');
define('SECURE_AUTH_KEY',  '+jtryKw4<i)h|R]cP>(<4*ppfZMpC`>=:v{xF<8r~Rm&z`V}(O=)4;9|Q6SLm9$(');
define('LOGGED_IN_KEY',    '1w(B&I)q7,C)ho7|!>wfr+OnWznfr2e[~$OZmKn<N=Q%ycx|Tnv7x2$v)b4*W ^?');
define('NONCE_KEY',        'mIyteH)9kaK571~(>3o@i|.1f.848J,G{y#ozX3`#>,f/QnWYvec5mKJnS|b3Yef');
define('AUTH_SALT',        'wD7<65[M3VoNwl;:ONak].}p}{y P&WI`Z%=>%< aDt4.UZCv/n :qA0NHHjxhWp');
define('SECURE_AUTH_SALT', '_yd*]nXQ%Uo7&~y-e+#@@[(~DPThQ~h$uKlnWS9uPorGj[{JE &B$K[uVADRe?8?');
define('LOGGED_IN_SALT',   'GHc{~E|xaqS:8gVbc3-x~1PPg*5];zBN&~ihQ$({`qE4Ws`a`N+n^G]Zc;=0K21i');
define('NONCE_SALT',       'No!uJh-+(JLXoL5}z&0/i0nL:vsw{^GhXM_S0*M0hJJT[e;-g3$)F:e4/E2;B|S=');

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
