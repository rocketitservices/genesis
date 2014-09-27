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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'wordpresspass');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'Cj9;A[Kp:{z-/4gx5S0%%H|5]k8U|S7&g2cpAxTTmNY]fPxuWxP 2r{ARd04c/Q[');
define('SECURE_AUTH_KEY',  'lr>Ke)zei8ojA<OMELz`z~Iy_;Y-]MgiHCKy/EKyTc2gF./^Bq#.#E}:dan-[nNO');
define('LOGGED_IN_KEY',    '+)qX*:a#As#+ko9K#7kxt_17Tf/^Qs~j:z-yf^j|NP^T3YdZc$0)e/S5+/|FlkI-');
define('NONCE_KEY',        '+/?uXtvt.NK#*yjA<VkT8 Z}r-&{-rBU%cF9.3{z8X=TwlPXH&#njvP;ntBvP#/=');
define('AUTH_SALT',        'Gg pOzZBh[u;.riG7]K[X9+7Cn$$x}vApgtL+.+N*&k{kBvVinQiZ^RYZI(K9dz}');
define('SECURE_AUTH_SALT', 'IPzt~qb|*>H6Y+ %vY|QWs{~-^GDSbl|;Ov{5J>yx&]=qqh%dU8-)wqTE2c>$Q6~');
define('LOGGED_IN_SALT',   '_yL;_ h?tMt-)GJmB+KA<<lfP8w3b4Y}^:U^~:V#=6X}Mk n7/W lS,{|][)9e_%');
define('NONCE_SALT',       '#BAO;kR^iyE?E=/oiP*gQ~-rYabcJ+-~?*U20U3ln-mD<wITSvR%<d.F%fWmM+~v');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

