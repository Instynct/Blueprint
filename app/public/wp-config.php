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
define('AUTH_KEY',         'zSlfFO+G+LYFZQwyyVyNu1sohqdLjjnrkmnww1cMGajKrKAMvmWzEjhmZxy7PO/xxwFwVUyZw/qVfRr+eczl6w==');
define('SECURE_AUTH_KEY',  'MeyDjbN9zpKE+XZ4h6TGGPcY3qifJsXVvaE7/D96FZvcU/1S3kW8ms8ALOqjH/J0UHJkxcSCTdW39UzBoT47Fg==');
define('LOGGED_IN_KEY',    'N7dx/uQnsuVPPdCZ1Z9JEBsbfYyPliRhJ/3ChVRBHf1yJu+Tq/hwec99sBpYqdrHSXwD7gTFU4ooNRg1GKlYzg==');
define('NONCE_KEY',        'J4ZRUxkiCNAw8JAehbbnXAKVRzM4nOxk6ISTdYM73HKKOuvZmmJ3taSBe2XU1+O7Ljiees1MyNeOMGCivxdOgA==');
define('AUTH_SALT',        '51tgn/4dNMIKpydK5tvJ0V3g4AFQdvm2ZofuzB5cSa/9S5HqLpg9hqWTPMNA7D7UW9FGeL09QCqhFS6uvTpKlQ==');
define('SECURE_AUTH_SALT', 'Iw3NmYnGISgqpGiMrYzfjnEryN4ZcZocbPXbHEzmb/2ZLcuAORIAYFzr9UGP1S3AT97xtSlNALCEm7S6SsZnCQ==');
define('LOGGED_IN_SALT',   'xQVvXe6pIesS3UnB+2/k94gSVGJ8+g+z2V35vgH8SbQnFDKZd9DCixT19HeMBIdI8U/MkE3ZICwLDY0W7SnSOw==');
define('NONCE_SALT',       'CclG8W33WTxokFSH/h6dOMk9IJGuCrHPp+Xa0EuyNObgignQRjRFpYk6u2oRAHNpdREvBX/6QRhhGhG4cXU53Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_07k6vkgqmw_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
