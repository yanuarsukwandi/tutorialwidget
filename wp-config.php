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
define( 'DB_NAME', 'tutorialwidget' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'tGGj)ytv6uLP-L?EXOXa[/?Bf+l]%K0ARF7WzHT8lCH&Dy>l/v[5g@jS6N6*@Y1|' );
define( 'SECURE_AUTH_KEY',  '_mfJ~sjvKy>Z]%7g#bO3,aDn/SGkv~)KVIcM&LOoB;s`jEe<-?SuMKgg^!e.ICHI' );
define( 'LOGGED_IN_KEY',    '&(x01jDFGvKDFDmcsX:gJo!<3a D@PF0~Z+Q#+3~l #;KHIUg:#!@j}^81X$3 <^' );
define( 'NONCE_KEY',        'LnTRi[/S%}j5@/$M/=kt0mUCd9Mw EEbm5H>za<!vt00U[Xmo849DGo#i.iPG`Dx' );
define( 'AUTH_SALT',        'P;!`mPkUAvPg>OYl]9Mf;;<B9d{7&_Q^o-kY.d+j[!DE@zi!} l%jgfN@4>T6FiE' );
define( 'SECURE_AUTH_SALT', '^&b5-a2x)7N%4f]|F-^{Ib(^?ice~`=R-3iwuab`-d~?IQiy%9;cc%0O3DyoWF1[' );
define( 'LOGGED_IN_SALT',   ';W^{IWgklBv:c39WxSY=<6[-<}uGn/OX#5gtkdz!Ol|%xW3*^CfsI]oRMGr>KCZQ' );
define( 'NONCE_SALT',       'lYYb@y0W4zA?jEq*Knb&0}cn2qP@*q?){eqQ6BrRsG/y9!Z;R`7qbefiO%.-k%7=' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
