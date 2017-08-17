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
define('DB_NAME', 'db_teste');

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
define('AUTH_KEY',         'uhFZ^y3db^Uv4l!.Z^7y{^lc+#~ymQ1Q|dKgVDvz#}bs;D2v6JxyQq=H{.6{9{^g');
define('SECURE_AUTH_KEY',  'pwwE^8$(=A$]L6Ny1>j[VZDsjpm~_+7C&es~>v!-*V}4m|u>E$uJfT[^,GPylcPh');
define('LOGGED_IN_KEY',    'bz;6be]ZO6p5h=cw3BFW[fsyuSg#wi!t33!-0Z!0}Bo`Ct7lwDT3`D#pN=jvy!~#');
define('NONCE_KEY',        'yxen7aG~ ;IDWw*3,!4W7E6jTgPWiwft|<fH2okTU1zz5{Q*R%W_4Y^xl3E.wOJq');
define('AUTH_SALT',        'OJEwyh#tP7z5sB0o 2%$83Z[6c(ntFq1lcQoBa1-}!nZ3<e=ghc^o YV<&@he_K.');
define('SECURE_AUTH_SALT', ' Jx@{r8d.cxH:&B=wjuh0G#2`<z5L92B*D6B7*ZO1)wH/YaJX@Err~NoW@?N#k3S');
define('LOGGED_IN_SALT',   'j$SAQ3,M)Bm=C6]AlW-NtQt1lZ*SXs.- rfFu+O%*FbjV:@BXb}!}CT->dLc{KTt');
define('NONCE_SALT',       ' He0L,~BryYT-WbxDpitu8rOsKD?tU#b}.vzEI+rKp,%_7C&,jC9B[zY<WOpu<9~');

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
