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
define('AUTH_KEY',         'fsorYnFEYfgLHjDHWGkARJW2oZIlr+Qi3YvGfLX8+5cGKNLQX9SQ4F8MdaU1G0Jomcog4xTLwVMblJ6cJHVe0Q==');
define('SECURE_AUTH_KEY',  'SrYipZQGqQ+4VioqG/ofaOWvPS3NtliA5aM1CKgbK3bRX0cwqo5W+O5MUPXAu2F3T8w7OuhK0aPaP+bMBbtWQA==');
define('LOGGED_IN_KEY',    'VlKIZWTKJmBGna/NvIBf8T3fDHtrFbbCtrDZS8woQxkn19wlI18LevK0DsNIkAneaDEP2yju5imjj98l7SVJMw==');
define('NONCE_KEY',        'CfUJfjThkRezkoEdbQc75xQeT/gMnw6MNw4Jre4GvG0R3jTTUOwjv5Vc3J190q3zawBPFx4hxUiofv8kTNoPJA==');
define('AUTH_SALT',        '+DJIuzlTNq3RyEcgtvDUyah+fKH6hkXk04jvNDeQKQiTQnS2VP37lzA6rx5gsa9nQ/B7X/xrFjYyHM98cho85g==');
define('SECURE_AUTH_SALT', 'Gi03K6jCLUNpnryYhOP2B0tm1HMZ9WVMlm7q6EnpleagRMPYu4GghR7McNhSlDNjroNhjrAT/L869uuj+jcYag==');
define('LOGGED_IN_SALT',   'P3lFtZfmnejeBu0OJjcmvAT/v4SsM73tsp+7LHn7HJUc74LQFmvPj+tBbOicaE25iLXl1g6tIjtvf2HGZk0Rog==');
define('NONCE_SALT',       '+kH2QaVDqrkFjR8YF4XVlypqlBRevcTrv2Jse/CaD4UiM1T9YHE0F7LgWkCMRb9turwzyRniABESxvhIxDBzfQ==');

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
