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
define('DB_NAME', 'keithlab_blog');

/** MySQL database username */
define('DB_USER', 'keithlab');

/** MySQL database password */
define('DB_PASSWORD', 'K2597a69');

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
define('AUTH_KEY',         'b-vAz(_RXzA-9=W*#|}Hnv-/HI+u^c:{Pks6c{iMKO]:o+*8^:e|1~zu>=zU>o-L');
define('SECURE_AUTH_KEY',  '#Su[Q_nq`|U3 C>3|rDL^b2+o/.RdG2V^jK+>aQX?n)pRi-2uKr^*QRzf^SU+}8l');
define('LOGGED_IN_KEY',    'M+~sv)-UJFkx[YME5]YX+xO$so#C-iE8EhrE%Dtq.GhsG?tOsvsdY?+u)l){{>F8');
define('NONCE_KEY',        'w&8Zf_7,z3mWK.rI;W[W/HB1ti^|5/,-!mufTBg-;-;H+3]Z/!Og~>)<y`P-%gIf');
define('AUTH_SALT',        'JZl7^{QBwqyh<B;r_stx|bygO@-82+-}IzsZgpgSBGKp`+N%>|j)^%7y(j(FVQ7Y');
define('SECURE_AUTH_SALT', 'h4J;y-%;x+Fh!0jU/pbO~ h2[#PPBRVl(G6De74VA:feiUeUj`B,|H2?r|;] m3Q');
define('LOGGED_IN_SALT',   'kSyW>o|[OBOT+bY5j!i#=S04P(WpE1K&s4bf^ndXc$2=Z?^0UqTZxY+1(wC|`|I ');
define('NONCE_SALT',       '=$[^(d!X|1H&=4i*-N0nq{S.#~?^df2^?e4#mi+13&5$&6|`ECWxNH{^i~RZyl?1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
