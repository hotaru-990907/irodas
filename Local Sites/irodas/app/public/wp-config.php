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
define('AUTH_KEY',         'EYM4xCoCeSMXdYDjdImGjaGOk+FYufMQGnQiCyCfE1IvapSmT/kzyeQLvMAiOgdPvUpaYM/23pcoVLXZkyovhA==');
define('SECURE_AUTH_KEY',  'ockX09yEJoqS70NJFqX1TNopinoZJX+/+WiYT/G7035GGk6k35XDxzrwjJbkq3/8+4xrHQGehsHJyctLEZlgoQ==');
define('LOGGED_IN_KEY',    '/zl84Y/eXerYK6aG0VKNUyG00F6qcjGOZRa5J+QG3ESDYVpr/3LiLKouJwzdm2Fh8sPZ4bRs1NkBjpktyT9xaA==');
define('NONCE_KEY',        'W7EqWAlOvujwuUHTgz9XFq2yQ7qB1zcG7GFpYk5MnmXb0a1SRD30uba3I6gdlAqvaFzaO87zSpPKXMlSTKJxjw==');
define('AUTH_SALT',        'oEyknHROIJyVO7QEzhL5+KXdtuX7eV/2QTsti5cDMNEN3LFlRMe6ROmv7TDeUe0SxPtjHBlVaZNqk4JLceq3jw==');
define('SECURE_AUTH_SALT', 'oA3YAycbFIcevxh5BEZIfYW5BbIo7T5H3js8VutyK5v2+T9F3LZnzVAKk6LSdR8kmv3GAukVOkpPS8yX56PMnA==');
define('LOGGED_IN_SALT',   'Gmme7/E9HrhLo9xQO2DUhCuNAcXhwswJTetBTtseWNOmTdWY8pZmS/vO2VRDZVsOJXijZABdezJ7B5YjSYaK0g==');
define('NONCE_SALT',       '871Sdyz9TaFRnI18EO+wmhS7W3abPCTCVZojOLlJ6ey1ry9h8A4RajACfDGfH+aEj9icPfRxth5SYyXq7Pevcw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
