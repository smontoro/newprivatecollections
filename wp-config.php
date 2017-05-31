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
define('DB_NAME', 'newprivatecollections');

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
define('AUTH_KEY',         '?#-@g%[c6RS#f/xf I^=*fBdN1#9i#v>T,?6Wj(_R(DlF=a@YVv=VK2FY`.^v3?X');
define('SECURE_AUTH_KEY',  's}QlUtUwGo[Q)bG^MX2GbX.g{VvNc24xk&PU.FN3q!Ih:d!AhClGY0B:yn=>z/C1');
define('LOGGED_IN_KEY',    '/{wZMZd=?FzY))@=%*xrH<j;_ZrRij^g!N04KI#nCQor(|XH:72O{$jHXlp3(0~3');
define('NONCE_KEY',        '/g@cw>Kwmq;1+=Gqt$PQJMW+s3mpL(o~Cm9H7G%GL%ysvV,l$2pg;XGXIO4TjkzB');
define('AUTH_SALT',        'A%h_4k;}_)FLi~O`z7Jp1potu*s{M+p^i?jZEG~|R6N#>BC%_|(s&7V Vy,f}N`=');
define('SECURE_AUTH_SALT', 'M/-MaB8dB$~$ysqwVvzM<VZ0TyuHW^NR6&@-<WLGU]xm43O.yLbN!lr@cJax1zfB');
define('LOGGED_IN_SALT',   'h_ x>y*ARf2cpNvciqD(VQPJeNY@h^GuSK0/05Y}W;`rrlt1JZzM9~6.P+(r,kGL');
define('NONCE_SALT',       '``}.U*a[lHM%E!WjBX~=U/#NG#$Pd$.}|>V0:]N>0oDG[,_Z1*~ZmqRZSyI3*JIG');

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
