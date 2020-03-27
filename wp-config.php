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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '/R](~-^z%=!@Rq)Xrs>2BebS]kt} s[#If%ebToqd2O_2+pDK:Lo64>,9IN]Tdj&' );
define( 'SECURE_AUTH_KEY',  'n+qdNC(#RdWhx2`sZ<H6@kn4=,oakw{PqYjH*]ca:I|ynL[yi7i$UA5U5x^x&y/T' );
define( 'LOGGED_IN_KEY',    '%JxUiZlo7e->]|xf`RmU~v,.[A>~WpK(%`6+8=o,@EB%rawHC#_3;=5B#3MsCF%C' );
define( 'NONCE_KEY',        'o`V|qPLA)!Jc RvX**fR2W4Atk]K&!z1GB#LScOzzTksvCv?_ +AZlb]3c)}WF@]' );
define( 'AUTH_SALT',        'u>z!-=S?yyHyy>^/GU[k)+YnA?D<W@[8GxGyfP_RQ]+nN<Hc O0-tvV&a(HU@v3;' );
define( 'SECURE_AUTH_SALT', '|6(w--84*/E{JjQ2%^avLLKh7uavC9U&  cUQ.AI9`d>K&RP1k!t(!RSQ(4 #^$*' );
define( 'LOGGED_IN_SALT',   '4lX?HhjZ2^(E<F28AWt_^U@BLH;p5+Ic3eqG1urTNZ25Zbl5LFD6fHAN{Ik|9yyI' );
define( 'NONCE_SALT',       'druhA1>H  6et(_$}1hV-6h~P;VezsS,t cr?52gDqa0];D:(W<>,VlC3RRvF[RC' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
