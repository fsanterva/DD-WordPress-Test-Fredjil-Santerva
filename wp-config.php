<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'deardesigner' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'FiX`-DW{oUEOS;#8)1BVS/pjbI#:-WGPSKKHu[jos:LNw3[MK?W^j4Rn7(Ek(XT>');
define('SECURE_AUTH_KEY',  'LYgJJCjC@cxX40dMoto@eCWE[K6iy+dm..FadnS5`+h67+/T7lQw!Izp*YRU]K2+');
define('LOGGED_IN_KEY',    'jp7s$5I3Iux|+3taH{SJZc=A _E(N<3dYEuf`D<p%@-OUnN/$w=s+ {Ldds4.CBU');
define('NONCE_KEY',        'wt#[c!D]8_`d;B|`fUEl;q!wQeH{.P-pH1dB;b|2G?Yzu3;Ldwr}-T!k&N)bKMgu');
define('AUTH_SALT',        'V]]vIWzzkk::uZb~+$zCMsa;5Ng/4;6lstr-~zC>*nHdWn|Y1JL{d.nPFCm6z@|t');
define('SECURE_AUTH_SALT', 'sj6!3d6-Y0tyu-#I?,exGpBWwCizX@e-$N:/Fdt+iqSrIvPckbO`+l|eR~|QwvVj');
define('LOGGED_IN_SALT',   'X_19h$e<elf7TjOUNZR? Duti-<<>Uz(-veJ7XCRc9+~!q=trwX+aTe]?X?,k:se');
define('NONCE_SALT',       '& 4Ju(UJsQL(g}xbF+1yE4^YE/)k:).S@4wU]*4Tx=Fq=E}XL|gE~Hf1#MJ@c4!$');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
