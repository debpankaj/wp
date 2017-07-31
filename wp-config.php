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
define('DB_NAME', 'mystore');

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
define('AUTH_KEY',         'Ma 3)^NE9iR`wU(dfJ(.jaR Jy(T|zJv#OwF95S=#G-s*];2w0-~@G]E%S|2QQ_/');
define('SECURE_AUTH_KEY',  'fu9t u<iX$+C[a[M~]QAvu&0e:{dFGbCGYA@,*Y P^Vk:~LJ[[W)I-o/g@DrT(J=');
define('LOGGED_IN_KEY',    '0SC;_c@D*x+2!u:]SioTGJtmX^^a PCj,R9Q-79?1YjMd<EDh*yJ6k;Z&$xR`2/d');
define('NONCE_KEY',        'w:5kw}Yp))8Ag5{s9[oH9 Q+X<C 9APboYRZ4kQXb,]a5LvQt8Eqm:KN(d=q4|U*');
define('AUTH_SALT',        'O0)i.mV{D/OI9xO#@lclI#oW%0#oZ7e!w+!3mjSUIW*)a{=<G_>Y9=:f:U6pbt3c');
define('SECURE_AUTH_SALT', '!rH~T(b6nFmbSx$04(lqk]N5)|sBro?.Ad1NRe:_+t4};96V_[d^Jxm+;{G2X,z0');
define('LOGGED_IN_SALT',   ')~W+NL-5HJu7kGV{j!QQvaZW(@0*Uz6]|E,^jev5OGDYYdn{B*U93Disbh?F.:e`');
define('NONCE_SALT',       '*kXNqiOH;Cr^`f^;>Mu]f|aCTw{iu{^clvDS]9m.--)y;jWO(8o<QGkiM|[B4[3Y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pw_';

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
