<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'chefjust_jbwebsite');

/** MySQL database username */
define('DB_USER', 'chefjust_jbwebsi');

/** MySQL database password */
define('DB_PASSWORD', '@FreshFish11');

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
define('AUTH_KEY',         '%Cu+Ga/mvq-z:;m9Cu{~c63<z0_:@4II{S7,%rz+CLYS2eRw{p9TbQ|qwC|t|X4_');
define('SECURE_AUTH_KEY',  '(:lGAh|+W+KR,azGq5<MvjeOe2oJz+di*)|mFWX+|NlEct)2#-nI|Q)S|7>_]#>+');
define('LOGGED_IN_KEY',    'zmjm]m+*+6U,Kr$B)E:B6NSpg^JGb_^QmN|((|#DxC%G_ahy0-}OX>#Zy`@&oJEe');
define('NONCE_KEY',        '#4{+Dzy-7Tx_R:{-upovA;|%[nnWzh~Xv9)fr2M&)[.1`a`Y+Q|A|-7G?)p/S~le');
define('AUTH_SALT',        'B@^w4*k<_|-/I4wD/Cpko#=c[-ZYb+P4 +kC@A|Cb|A(5ka-8sN^G=),-@*vqG |');
define('SECURE_AUTH_SALT', 'J8^E*KVHpfqc-ioZ+LBbxp0xH-=B$V}w~ydD?[W:kitYh6>CN|vUX2yxsjGzoTFX');
define('LOGGED_IN_SALT',   'K6sQ9e.o|fi~JmCGnoTO.GI#^(+||4:G=0 VyO]<J53X-z$cctg|8|pnKy<a9.u4');
define('NONCE_SALT',       'NmzC-v8v8{1Z=k3s*S=/?_eXl{At`P9_O&%g9Mn:C,8>7+{l+FBQU_t>C56?=vnk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jbwp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
