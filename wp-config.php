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
define('DB_NAME', 'saviva_live');

/** MySQL database username */
define('DB_USER', 'saviva_live');

/** MySQL database password */
define('DB_PASSWORD', 'k(92pV[4SF');

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
define('AUTH_KEY',         'vw1kwy0ilc5l74abt8r4s9szk9ciw38nq0bdjdyih1m0cckvj9qka8jepco88kbk');
define('SECURE_AUTH_KEY',  'lznosv7qtkuwog00uuy6m3nxcbbfjom8bgzquzhveefkfub9dqwjvuz7f2v3twa5');
define('LOGGED_IN_KEY',    '3aycwql8xnm3cphadpgnju1ngbtmztazkhpnmz5h1cc7zulf6i0zmmr55i5kirpd');
define('NONCE_KEY',        'vavgodrqanw4h6e9l8lf2xzvfi35fzkt4qww6412frzmjdsikp1mg4pbhqlsgkjo');
define('AUTH_SALT',        's7zl1l7cyc1ywhziyqwlqjlvpsxevgmqsmjyo4brb7lz42ycrf5rh7xcuxi6yj6j');
define('SECURE_AUTH_SALT', 'ztqdysxrs9zy79meaipalqhtg96ebapnxa8ywyotwsrk4wwfohh8oetp96dfyvo0');
define('LOGGED_IN_SALT',   '7ebuxsqolwftcezvd7auzcq3lmgz86ljtva2xdu569xsvujo2l16qjjexetixumn');
define('NONCE_SALT',       'oytalqgzctgcvgrjk7xhoepp5ckh2onikvu31qymobqwpnh4wfg5bk8ivdwnqkkg');

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
