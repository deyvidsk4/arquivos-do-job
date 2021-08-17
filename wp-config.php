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
define( 'DB_NAME', 'teste01' );

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
define( 'AUTH_KEY',         'BlGAH%.E%cJzQnSYvmW~lj6,gVN?rc}z(iWHOH3P_((%i2<%u92nZ/ylNDwXv^W@' );
define( 'SECURE_AUTH_KEY',  'FD;r;a(D HpZDv,HTuGfg|)4 HZa9-1W4*VR:AwFH]R42mY6RY};FGD+(^6;n~mZ' );
define( 'LOGGED_IN_KEY',    '~gH@GKrf=.>AJGo/ GR560$ 7U/*+)1+gnE{UZex~%!$!AIBtD~O0%Px`0z(n]=s' );
define( 'NONCE_KEY',        'FhorEzheN@cKvb&eB+_Ct]fPv)X2.wqhmuz1FWq4f9dg7tR^lh%}FPHC+mzy}e2~' );
define( 'AUTH_SALT',        'y5qRY!EBzi{<b>vAAG09;3rs!,_}x){Lx .YHK[-TylYm%?GOI/`d3L:$tKM<|^H' );
define( 'SECURE_AUTH_SALT', 'k-~8+VWD=K5&qQtPHhsz$d4G/18J~G*FbcB2W9ui^VIDG6?/}B-@V:?>2vpJ?4c$' );
define( 'LOGGED_IN_SALT',   'nQvZai6]pAA!QT4eQ@%MxC9(}ZIM[]>xumLFk%(,@P!n)Dp@g*#d}f2RNSF<M6D<' );
define( 'NONCE_SALT',       'S30qr[?L(|RCh%I.!H{t?_)8a`Oml<<j.9m!|Y@hYj;M9St3qj!SGqt|Mzj8Bd$^' );

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
