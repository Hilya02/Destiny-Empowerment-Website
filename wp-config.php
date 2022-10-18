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
define( 'DB_NAME', 'yexaafri_wp66' );

/** MySQL database username */
define( 'DB_USER', 'yexaafri_wp66' );

/** MySQL database password */
define( 'DB_PASSWORD', '7J]6C-pH7S' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'jxwohhsl5mkixn6tn59jkozew9h434vnwroe3toxtxp86j5jts1sli0bqv6mf8uo' );
define( 'SECURE_AUTH_KEY',  'bkb50hzjysra11ylbd1vz8o0ilzqew5inmpud99mpwqkzxn7ddcee1nhaco3wtpl' );
define( 'LOGGED_IN_KEY',    'fgnsqoopq3bi2ifloo4ymv1hdtdheiq24eyln7ngdr6xrugmqgasbm4fy7qpsbkd' );
define( 'NONCE_KEY',        'ytnv5zvrm9wsrbf1fibze6vczsoxsvvfbh1u5mia1kc69crka7q18uox5ayensbg' );
define( 'AUTH_SALT',        '1vqviquncusapm9iym9pzbopszw3doimzfk45ohpcqvplfk3smafhb0dqzoselpm' );
define( 'SECURE_AUTH_SALT', 'codyofyo1rnfmgskb3248i2ljgfoyztkaobovgmw5w0ieqza1rjeshmdi1pdrqgq' );
define( 'LOGGED_IN_SALT',   'jbo8dy0yianq3p6ju7ibyvb0dqtquxdggj7sfuq0bvcklzoegzuy5lgxq2emcekl' );
define( 'NONCE_SALT',       'bc6pkwg9iayutoyhrbql7qn7ziyxwlgkeah18zdlrpxrcjllc8y6nb2zfarpubd2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp65_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
