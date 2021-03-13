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
define('AUTH_KEY',         'WqN3RXeCeBsQbBhGzi/8F5bQBP7Vm/n/t0e3/NpzRCUvP3YqUU49QjQljZ1yEb21M7J/75BRSW7P8N4z/ptvHA==');
define('SECURE_AUTH_KEY',  'Hp2XqClzBFBOBV1NWXd0cU04xguCAKdwcgcB7cvvlikUkBq4pj2K62YlSBXMv+y+dYgSbskLHWYzQKl7qgq40A==');
define('LOGGED_IN_KEY',    'Znr57Q2OqnXcZ3xkM4OTWkSQtq6jqE4DASm30Z785Us9tk+TTSHepNlotfy4lqC/9C5NyLv7K6o4eFKHb1FSlA==');
define('NONCE_KEY',        'ta4ddpRa4p2SC8IGpDpfbrJXhgKruFQIwKcNoVroN5MtebZ/F7BgUtHA6cv2qj0yMC9c2AHIexVgnolTt7OmaQ==');
define('AUTH_SALT',        'XCazZMqR5ZP2yrqM5EYSC0dl4tb8fLmYK7LWZjDlomlXzjLwdsondX7ElePMNX8Hf5ikBTwCfoSIqGITfRnwmw==');
define('SECURE_AUTH_SALT', 'rzq3rUwrF4h0HchEad5VqFOfGjBtASCX5Nj330iTTGGZdRI4oWjt1JPUMxyGoR/clfi66Yz7TusQg46tRLxOGA==');
define('LOGGED_IN_SALT',   'kC/1A609NYsnrLusRp7c/wdFsWT5ktHP09ie/EA/K6oBc1nIIaiXC/6QX39pLfxCQHV1myEBJSma9oO/lyySFQ==');
define('NONCE_SALT',       'RqbwNcfqOs4hyQrJJZgm1kYktrYD9WkGV+DzV4ovr6Vf6E7Fc/f2tydNL8lV2nQK7zPmVuHlq078wusxKyCSJg==');

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
