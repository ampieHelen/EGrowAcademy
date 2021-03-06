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
define( 'DB_NAME', 'EGrowAcademy' );

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
define( 'AUTH_KEY',         'dMzQxD@f[NN_&)3H9r%%[7doQZ78`U+eR`:V#`O:i~qj9>O,)L;4O0%dW0C):Y,*' );
define( 'SECURE_AUTH_KEY',  'tP:E. 5xgCH:+@ur(j}>? *#3-B,#6 )^9k{^-Io pQ&q&q<w]IVi2=Jc#%aAOGW' );
define( 'LOGGED_IN_KEY',    'MbFG82&dwPiU/(adF,*$6twI|L+)jh[<Y`z,i~s,>IJt`g{g%*JtQ^lV3fwz$%z&' );
define( 'NONCE_KEY',        'YP==kO-}:LbV.(psb%a848m}mksC3IOHf{R5HIf6=QF7o@P[QNod%6?kFB~&G*,$' );
define( 'AUTH_SALT',        'OQ=H9{QZGi(4 l|d4^_e~my*l<oQ[M]iCKtw3H[o#r%^fF;/s,J_|~RXOx)|zi~,' );
define( 'SECURE_AUTH_SALT', '3|ll/fwg{ALVb`LY|D[I~sEhLN##|3/OC=*$B;/)SEtE&+J;2)rav~LxV-;_#Z]e' );
define( 'LOGGED_IN_SALT',   '&<QO+(P@ZaR0S!Sh6TFrn6s(xE2L:pFio~eYxoOr$xr[Y@DrzsW4vhg~A~lx}VV@' );
define( 'NONCE_SALT',       'C5<_9~APLYBjZVnlEo%n|`5.4^4{NjjE{Z3+`gRz/pvS5Tlo^@(>Co`+0v(g{)x$' );

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
