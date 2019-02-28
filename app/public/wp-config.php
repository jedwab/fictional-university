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
define('AUTH_KEY',         'wORoZ5rdh6t2/MtNw/MBjLodYJXBQQSYAKddv6B9awqeYZQ38RYvPECL2BIr+l17BnlO8n7RXiuUXzEfDeu+3Q==');
define('SECURE_AUTH_KEY',  'bhlCxsDsVboY0Tjp2C+/ZQzs07YW7R1KLoPEtjSyLsv1aeVEE2ApyjNOFkymH+w7pzMVg7g5bzFI491u6DEBRQ==');
define('LOGGED_IN_KEY',    '1qUUtH8n0pLD0uEy0x71Di1MJs9Qr3yhyTGQsUmiyPv4tXupJGqFjuPAjC8DEr3qwIpeBkrCQN/l8j5rbLk7+g==');
define('NONCE_KEY',        'OGsYKbq5d8eQh0bchBh9LaVpjWBsJuyjvEGvuljLkzGqbyO69NbD+KxpC5WkqeR7sLc43i6tiCOPJ0oRq13ncw==');
define('AUTH_SALT',        'rtPXj82rpPMQZcv/N50oX72U4UKKBNl797Fw1z8VuY5PZLPJreCUsjQfJFSasY5Ixs5BxOQAyxW6r6lSDTzjbQ==');
define('SECURE_AUTH_SALT', 'xep7GvZAig5gTS1+6iTc4/Kw8ptzlfdmR/Alk7+iq6kE5HK9nXqGiIHWKjaIN10Z2OMoIb41INObXgCtq/0aFw==');
define('LOGGED_IN_SALT',   '2Jug3tZGb0tZ43Rh3pdC4jcvpQ57FXu8X97EMMVOeWU1Fl15BkiffWbmZRSt4cdJL7IRUXOkN92zXxfuGIGSag==');
define('NONCE_SALT',       'RpWiQiM3rTf80nVeaKY5dDaWDdQlmJahsqHc2X5rPSIAej0YNGYGJ4G0Ieek70QLMDIJ79pYNIOVtuIZ5hDHXw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define('WP_ALLOW_REPAIR', true);
