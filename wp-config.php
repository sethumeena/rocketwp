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
define('AUTH_KEY',         'h/3PYVr1zbAh56T3M1de0J12neCOuFSmz13oF1mAgQSkpldepnqzfZCujNsiDk9AygewYEAjOAqlpE+qpg7+rQ==');
define('SECURE_AUTH_KEY',  '06mEmlrbXjiuOvv/upl+DRKTeSsLGY/heCdNbVEY1rwn6CwZZllvuDBM++FBxcpM/hV3/uAT7+7Q0F6TXn7CKQ==');
define('LOGGED_IN_KEY',    'k/1bmK64ZU0T/h2AnePTA9bUOFMXAqjvsAKPZZJPC4Nh66Nm+bzJuZslkdcPnzq+YkHxmd5rRGxmXqmUmzEE1A==');
define('NONCE_KEY',        'KyRuxs4QaiXl4p9TW7MSHChMYSDno6dWUEAw+6ibJsooAqVLBOJjxNkZ87A9gWPzxVKyeKrXaNr+PRJuQORn+g==');
define('AUTH_SALT',        '0+AjxkNSzmNIbUM908rygYWRRBjqnNIB6XXI3vv4AglRFb4RRQMnykaQ2iHL+URbgYMsBSg0yrFnXVVhdk7xVA==');
define('SECURE_AUTH_SALT', 'XpsedumMoRxy/vBGZiL7YigVHJ5/V71jgj1xw6l9Mhr2CXnJUDvREw8rD41ssOg1sdCylSX3Gl/oFPsU7lo3VQ==');
define('LOGGED_IN_SALT',   'DnWBff+pvGnzynx3heb6EK84B/CgjNUey/oXMvksZtA69PaLGTrD7TMrTCshAo08vWt2INZ8POS+wUr5hSbQlA==');
define('NONCE_SALT',       'TAujFNgPtt3pcsBTqHVa8vFAMuMm4mo4KPEZAAi4k1AuTSIzZCkAEqI7zUexH54tFrzqsmNmSG+DqCywBh7ytA==');

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
