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
define('DB_NAME', 'bamshads_wordpress');

/** MySQL database username */
define('DB_USER', 'bamshads_bamshad');

/** MySQL database password */
define('DB_PASSWORD', 'Bamshad_5155658');

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
define('AUTH_KEY',         'EUsTVLk|61z9,QEnr?eclVX(Ws w!C4k^O-~kbXD}jOG@]nBeHWYQTP>d[~dhx<l');
define('SECURE_AUTH_KEY',  '~h> fA>APFkU$2<DIA_@PSf@3ZUKp)<`A`UYJ%UH{syFKROjmFz8P5=V.:Ib:]bI');
define('LOGGED_IN_KEY',    'k(&IS+a?o3MU~,r:w1FY NNIsJp9IQL]?bL<&c81Y>l0(_bIf9WdjYk7_r,E@e[K');
define('NONCE_KEY',        ':S9ou4%IXDTLNyzMii]YMcY!smX?<X?MHX34gSH?-9u[.uMg8I!(12},*eF D@Im');
define('AUTH_SALT',        't?A+[HmED1M=$r_`)lK 7l1O$S-&2u3WqEPQ}nk$zM[i3y!#h3q>|gK<<:OD|qYw');
define('SECURE_AUTH_SALT', 'X4.e>qPhF|:.fve & ddjUkq+]dS`FD!<@FQLDXf:M3)6M;`jEG-Dr4^R,`G/1/x');
define('LOGGED_IN_SALT',   '{C7u%GkP~o4s3.JRgt/nD%r[IZ}+$qGfP/Qp0+wvGw^zufZS5>_cZK^VVx,77$C9');
define('NONCE_SALT',       'yvTQF47kpNqvzhCf%p2Q3ZCt=5PVyx{YxWM@WlEPJXbM*`29=*_QkqP*C&EYgm:{');

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
