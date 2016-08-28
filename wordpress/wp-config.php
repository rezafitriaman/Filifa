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
define('DB_NAME', 'filifa.nl');

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
define('AUTH_KEY',         'kS111k)Bj]9A>_Ma&u}[~ZhbtLQs/VPLjw9.+us]L#Nv(AewR/<QaXXwO6CN!a41');
define('SECURE_AUTH_KEY',  '`a.)};PVdD1X`JBKhdnM=jg2L3|s^T])b}g_LEYgOt~9D^#4sw,~|[VOTG{{L>nJ');
define('LOGGED_IN_KEY',    'e[:9JoOnTdw<BV9L?OU|:5V#a;w@hU|Zb?8kUff%6),$p86*:Q%mwcN*, DcH?=T');
define('NONCE_KEY',        'd`=p9.9(4! 4)ED-Uk42iT(;@>Ex_oA,Rlsu/yor(ES)V$Ib(@$f~IC@#Zz]|x}m');
define('AUTH_SALT',        'LfkytvZQcIH+!Ig8zs[|Ea,~$v.!ifp#l*4W/x%gdlsBz;w+4t-/`QK-dTdT]+(X');
define('SECURE_AUTH_SALT', 'AXA?MXdPEyVvm`x~~Jxl-;Q)m~IM$1c,ww~2tM1$PM0mWBD>>yS|pgP;.2#7d.N7');
define('LOGGED_IN_SALT',   '*AI.oreaN0*h-i<$X^@?Mx&A8v-9|2|zT@Vo WJAQ2W4@mg;x&dh}oP.:?EvtUhQ');
define('NONCE_SALT',       '}RmBK4z;r9uZ=gctJ}XA1( 4_j5U6QhrR<mFlFT8GC^?Vcu6T)ZXdhWDCVl+@xrl');


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
