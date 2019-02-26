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
define('DB_NAME', 'myDatabase');

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
define('AUTH_KEY',         'ABqe6kt()lc`{LGxmgL[ZBzyaML,!/ag?na=`4d=KdRT8?|v}z*B&zCFQN>AV:?#');
define('SECURE_AUTH_KEY',  '8F  /L3mTM*A[XOVkXqO{p]XU4]:(7G/$lCl=CS}>AR9n[vZN#f1/k^G8u_73yY:');
define('LOGGED_IN_KEY',    'mjHhXum+jsuLK>aU.*T2TC&$SIQmxa7KuH6kU%po+3K*m:Dex{7s`C~w`oS2RXtP');
define('NONCE_KEY',        'wsjpBm4:hU`(R5r=D vP}KH{uphSvP@+4+*=M8!^tas#M,CuVmr0H`_l4k7S7f>W');
define('AUTH_SALT',        'W5rSs;7}W@xH {Nf%CCe)[3!e&7^3b8lE%y`#[e&!~<7JLNVC2H= NpMNmr;vfy+');
define('SECURE_AUTH_SALT', ';*6}HXn_lW{ecR3_T]qtpEyIFCiurE5,0C;>`pg[~%gXBXHT)5M@lh`d:n`som<B');
define('LOGGED_IN_SALT',   '<R04R0>)@TF(twM~SEV&o(g9$PaM:S}O|c?ml`m]:N:Tvj.VZ`c0>b6m52* HW(]');
define('NONCE_SALT',       '!Hu7x; ^lC]PN0qbd}zp6t~(YmfqUmZ12ay`h$|Eyg`CL00~:kR.9A&K[?A^2sc1');

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
