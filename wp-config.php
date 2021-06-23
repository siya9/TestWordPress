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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         '#8~bIg]Lm93k]=a|=(*+1X&~^!OFIbe#xMak^_rQCzXO>`z2==ZVJ/@hW[B?G}-[' );
define( 'SECURE_AUTH_KEY',  '3R/XB->u*Y>!LHGuoAocF1V|i(qMPH(WRgM9a`zP~3OS=ecSEakYsY%R#IdQdqv[' );
define( 'LOGGED_IN_KEY',    'C8o-[Dk>9)K3Z/?@Ehx_|K~?LO7FR: ada)DM>6~`|z Vm<.!R+A|9ucqHER4[O>' );
define( 'NONCE_KEY',        'W(Y,*C1/fT(*@MS$O@o23yRXA)E 8>a=64`/j?tTT@Dw/^4K9N!J})n8DE46fsY)' );
define( 'AUTH_SALT',        'R`-@Y/%2+F(r$uHem#l4}A6V6JNL@Z*zUo#P4JY-v|W9/VWXz>r/^#T9jW4dM.|Y' );
define( 'SECURE_AUTH_SALT', 'U|n_;{_)Cm;tW3`Ut,]om&km0:9qz.@u|5P]a5/]4=d^a.60Es.`OgF2I3XIG}S/' );
define( 'LOGGED_IN_SALT',   'e{fCb@UlOrP9U`xiCm2lZQ,N*Rfs}RPi%JO[?AUTtL`x]nr9NbXx((@6=Y4,j 0g' );
define( 'NONCE_SALT',       '&[aco#]B!>ZTxP !-pMA/u$5jbk!XV?z]K>L/2){0!B,}aS1D$rgW[PRO5p5Oi^?' );

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
