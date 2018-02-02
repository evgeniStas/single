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
define('DB_NAME', 'wpsingle');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '09021994');

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
define('AUTH_KEY',         'zwKI`wV&bteBGn$U(x(>&PG8RzA4Qx@J.qU8[^[.?:kdbk3KCgD!0Y$4r[+%Z]Ry');
define('SECURE_AUTH_KEY',  'DBAN,qOg Nhti0@T~R,|*i+={wzUEv-G)4w]1m(D7-G7cJ ~tNY`r`YHXX.|^F7x');
define('LOGGED_IN_KEY',    '?-AEHv|3sHoa/ex !7tg%V@4,/:l71niV =;in(!46lhGCr_v<qYa;6{k[A*clzJ');
define('NONCE_KEY',        '~j/[iIALT,An/:aM[LPU)Rfza@}*[oH% t$.$ 1+t2)j0|7A|s/>Bun}-5;=eLZ}');
define('AUTH_SALT',        '/u0H$Kb}`5;]C+/2F1etvSkSMsO~/=jaf[~r.%=lWLH_EENoa/BG2a!NzkaCf)3U');
define('SECURE_AUTH_SALT', 'C(6T<fsV/al.QXPW!E Ln=7FwV#_FaagISm/Y-~v_e*_WbX*mIia^lLh&5yCDq<+');
define('LOGGED_IN_SALT',   '.Ip5_81S_4p~7}t0_UCh3c(YBv%%+z{-W@abu{>=DVf=~,Y:;)#l&{)qZ@o_pBsa');
define('NONCE_SALT',       'LbD@#MFgpIq=Q3(2O$HsA/t$D8Mw`k2> Rz%SdTgU[-gx=lzbTpS|auEaMc5awU:');

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
