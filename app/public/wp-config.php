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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'TDG1iG0ZH/84W/C4O6ZFlK3I4JS8gVDJdRXZLIIIVGWQ8Q7ivuDACPl/fxps6F5s2TkvjddRKvQwyBc1h8FFDA==');
define('SECURE_AUTH_KEY',  'hrjil/Vm4mSh4UpLDWJC3YgGPh77QkcUvtiWdeYxvqAVaIymP8iC+OuY//TNgImlZBjYrFwdRY5QJ4Sk11+VFw==');
define('LOGGED_IN_KEY',    'otDLgl2FpyBpSgOyk/pVHMcoSOU5EcncO4ZRTpJg5aOy6KMhAqNfo6IXAi8Ek5BtQlQ9szG2kVLE7XGjFhRjUg==');
define('NONCE_KEY',        'B3dl6xQHwNvW5ULN/xgFg2I+xYb8DXhqwJnoiJ7tQi+3et1RIWHe7imIm6Oay3bpb6GBHMyCPlFuJsvlC6v4AA==');
define('AUTH_SALT',        'JrWEPlfwdyNgQEo7kgmDoAKI+PD/Y9I84pHHxX5TvVL2U8Q1g2YIAFwmvZoMf69mHK7zx0iQY8lxR9CZg/r2HA==');
define('SECURE_AUTH_SALT', 'WBNyjihNG9a24CAYSf7drygkzP51Tb1/keWK9fYHo/mfWiTRgTn9QuPiEqP64e+Mw25OP9Q2Scqv8YguGQl4eg==');
define('LOGGED_IN_SALT',   'iUL783wlBtMqryScRQAqGUmHReOVYsWDNXRF0fI3TAx6+ujz7pgVU+ch8ZfewL5qvqEUPFJEKQj8iRgzWQezyw==');
define('NONCE_SALT',       'NtYBGR2a3aGNdmIMvMaEwqTognvtt9v+uSEHsR47JciC91uG94pXPboDNXBcy3CZpFN6+5YphJMKLvB02JnWYw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
