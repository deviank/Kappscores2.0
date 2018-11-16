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
define('DB_NAME', 'kappscores2.0');

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
define('AUTH_KEY',         '>.hES=4^/,.%f^Ud_[TcNYu`D`V2jPk_M3Ac,xJIF5B_o4Cn1}3`c~z1&icPD4kH');
define('SECURE_AUTH_KEY',  '2{+4D=;iahZ&#JoHKPt;S{)*R5zP68|Jo]6JR+:Va)H<>iUU|GWm]X.p]r5Rk^b#');
define('LOGGED_IN_KEY',    ' [[0^RQX s/6a&IgKI$>usw`fB?70)Un?6D38A*E0tt{WM(y>gepx]O8n|(0FtDx');
define('NONCE_KEY',        '? (K`s3s6JOQ,^C8VmFc|/_<U+!{|XO=sOM/O&BO_FICfw[P_C IyFl~X?uL2_q-');
define('AUTH_SALT',        'ID/GEtiGVjP7RpZGB3rG@=Q{rIC%(3R&ohR]x<:dk4|_yH`VTUDjye!qq)|qVL#R');
define('SECURE_AUTH_SALT', '[w/al5wR~,Yq3Xb:GvB%X,rgteiW_MVg>/#qH4X$rc{|^1JrMN&cfpX/`XcFSFHb');
define('LOGGED_IN_SALT',   '|Q*?artSG` 6ab7a;nHL%C2J+n|:auO YzM Dtn)sBAoNa;1*@6epv>h/{{X$/U3');
define('NONCE_SALT',       '4I4!?^e+,<C:^{RW-WL]pAGp79KYeJ3I6$]KpBy:]~{`$`B#{gRcJ0jwp;aFuc**');

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

define('FS_METHOD','direct');
