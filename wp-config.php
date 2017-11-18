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
define('DB_NAME', 'mulligan_wp1');

/** MySQL database username */
define('DB_USER', 'mulligan_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'U#*B2XIQWdqqUv&iv~@92^]7');

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
define('AUTH_KEY',         'o2OUsMsTF2QkDELZvT72Jky9IFhlil0NqECp5LJYAUExTwlIqNQqzkKwWiiwMkT1');
define('SECURE_AUTH_KEY',  'lq2OnXIpTAlk4GZHvtpFnZAM32Jkc5x0ZcExMLA0nii4hZEEULcZSGCbkQCEifJj');
define('LOGGED_IN_KEY',    'F9BKEX0KdCqGpORcUyXGziP5rHmKcsGqbUXC2xpjYtDw43BFvbb5BzjxXZtxuXFt');
define('NONCE_KEY',        'BBakU0UPDPJwOqYGmI0NTuSOoL34qbB06u068MUesJxIShUK0i8NIGGgnM2jfO9P');
define('AUTH_SALT',        'kqctOYaNtI1BJLlsGHpOB9dKBTmzAovxofMidr32bF4XsTnVO6yJGRSz382tAHJo');
define('SECURE_AUTH_SALT', 'lIVIJkWgAA1uwjuxdY1xH49wUXPgcDp0p4YUoIEXT1WEeW8AMmYkCnNwpzEgVqkd');
define('LOGGED_IN_SALT',   'AAMJlEiXoEipN3QdTSxXKdw5MCj7UN1ATKyw7uydtKMFxgs8Mhg4jKmW5A8KiPq1');
define('NONCE_SALT',       'Alon3yNpJlfVvLO12MMUTR9CX8wNBhagxhJNdFXwDxngN7NCByx6BFc1oWvCy4kg');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
