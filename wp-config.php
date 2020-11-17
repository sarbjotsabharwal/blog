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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         'UV>-|D@RT8%%V) w,FxrP:ds[giCoT9?90`rL&v  Iv>@>wY~g34f}CO*^N:GtDr' );
define( 'SECURE_AUTH_KEY',  'U@^(<Qq^d8Ca5g#8O#d%Y}mkRZ>i.tI@p9Z+q8mK^?E~Y]}B|?6<h?{b|4k9h7`7' );
define( 'LOGGED_IN_KEY',    'narn(~0IXCiMU++6y&vshcn{>YT._K!qh}Ifd6{dS^vu(^,IXmwB-| @(|)VtgeM' );
define( 'NONCE_KEY',        '8>45KwUI<Op)#RIHujs}+RB~G?95`C#9WcDImp^D a~15LLcV+*>>jU<puG`a6b6' );
define( 'AUTH_SALT',        'm@hAv3y3Jp E6PG&DZXldeS-T}SQqG(Q=u[vfov>1.G#=/}7(nxGEub,X.mR(RR6' );
define( 'SECURE_AUTH_SALT', 'mPjQT1w^_{[>Z-B^qIg4tf>.(. A~ok*8M^xAgVmY<4`IHg3//rc(]@+X2?^}*+O' );
define( 'LOGGED_IN_SALT',   '{=d?tZgOH.KuFP_*<?E2iJ^IB6gfmr3Nb$]JP[w*H/F|kcP!c@+LwU6EnoKfZr`,' );
define( 'NONCE_SALT',       'a-T$-h 2l>tl++W8}3k@#?`J2%Bn,uovR+e1zb,4?)vRT8>,f/!?-6YHs5#=ec/g' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
