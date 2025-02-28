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
define( 'DB_NAME', 'db_intelassist2022' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Rl`caT[x<i:#)p|T;g3_`sta!KO49LhQjP]  tim$Oc>vGzt$~*B/9c=nyC$bWuj' );
define( 'SECURE_AUTH_KEY',  '[NAqiBU}kqG`p@W0=JV/?j4?~7f(:;}/#[72CC&TcZAo1GZ*xdO0~zlNZQ@b$+n8' );
define( 'LOGGED_IN_KEY',    '(my^ceFB(6O.M.W^EX4R?QJyk),d_B=l*!?4u9+c5I[-.b{3t`%Ndm&X8cyY<SHQ' );
define( 'NONCE_KEY',        'Y_622vr;^&_&i89{&-,AEd:_}`7omcNevAgBn{((S?8;. =*iR<druQu[z^Hd=a7' );
define( 'AUTH_SALT',        'HvH<m=*ZNH2~_=KL* ?E]U4|KNWS<`hIfmDtW]0!6%=HA^|h}ODJ&1h3Z<r@f4nC' );
define( 'SECURE_AUTH_SALT', 'wUJ$i?G iG$/( gw:t6$7a<TNR?i9X~}X|vc^@iFTv,`|_)i:id|K4?OUJFivW<F' );
define( 'LOGGED_IN_SALT',   'j6~r`~@5OAes#$8Tx?;~+Ec.wFfav]*7^`Jd<puNU7Y2A8kt4/C;CGZ=GG]<vecl' );
define( 'NONCE_SALT',       'l:fhoJ,TE;[r3i)`C(9$d!0HM|F<f[Wh[+SVP8BUz<a#5:c;!caQcw<+Hm/}e`fh' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
