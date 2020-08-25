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
define('DB_USER', 'bamshad');

/** MySQL database password */
define('DB_PASSWORD', '5155658');

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
define('AUTH_KEY',         'BP3:Q2+0z4%]w|49bG,``G,R%lQG=q{qAtY?;O:/SdW)4^Z9XYdtQV4*l,*.FXJl');
define('SECURE_AUTH_KEY',  'DGiK<(i&6>VCA l`36nD&NrN~>TMe]~b;|wVx>#4w&f^-Z@-Ub+;x4_}j_aep(H.');
define('LOGGED_IN_KEY',    '~l5uArGRYGp<GSq4YwAqiz8DF9I$Ul7#1gS_<^S;u* m!<=b-cLh[)55_dW HA7^');
define('NONCE_KEY',        'Kl! jdn8QXyIl9,V{hbeeN8VXbtH^,fE8`3n1DrJ?Ib.LB*Kz<MC+#mM: Y,j$3h');
define('AUTH_SALT',        'w!q|/T76h(SpfVM_=MwNYD~Q_oHAZtgmow<,pQSHRn.dr}&bI[}wy-:deL]=Du_d');
define('SECURE_AUTH_SALT', '_X5/# 04n*GdiZqS-/TA;)R{5caE5GTib%D#ZLB3D^-&i4OHc?^w<rh~`]$ue@F4');
define('LOGGED_IN_SALT',   '(BRuCVk_*[qrbfW}}d4Hz(2 CpxTTg_jrNM*E5#(F7I4E-A.H}Av$u1]UJ!(if-9');
define('NONCE_SALT',       '{QY]${Z<hpKC*LAoV[$ijqh].2r>H!(<X43Rg7S~R%b+[ ~4V{ve}HiIvhtB,hT%');

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

