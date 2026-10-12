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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'l0Umk7et?#?t*rX%,9^R%&-PdPKa=nPH^#I]-u}]@)jpp_@`Q6 IK <OKx@63dmP' );
define( 'SECURE_AUTH_KEY',   'Vbp4^*i~<x(AY{ ~6mh4~kT6c%37(6m@wDe})VIU Jp%mA.(QHfeS*n(M&Fk;K*+' );
define( 'LOGGED_IN_KEY',     'AN(4}duBI7%,t ;KbhC54S1g3/^>oO_*^2Gecp!!g7F`mFXo](Z?E`9A(r%avfGe' );
define( 'NONCE_KEY',         '?%,VSZe?hv*atfYC1YqsP9sARf}1Ff0ZD,b{ 4Rv*h%EcG9vB(|U1kn@=,(U55Kw' );
define( 'AUTH_SALT',         'g >MH-d3cu1]F8F[W{Quk^BZjlLM(?NI%h9I4hvA*{mqpSNUG1x#_~YmqFxAy4rJ' );
define( 'SECURE_AUTH_SALT',  'PCl14C*{3;$%hQZKHdhO3a.4qP(Rfa!v<o92XYN*#hR(hOG2&sT;`q_*RWScXFMV' );
define( 'LOGGED_IN_SALT',    'Sl-k~XX6>XiZJ45=W%<&-IGjG^*Y*^1Qts2o$1j8FA(/`Dnj.32Ppr9}@5pBahA#' );
define( 'NONCE_SALT',        ';yl$KD?+1iI 1jT33IJA |i]Tl07|ZNY|&(,&]f9xapM3XrD2}}wdJ0HsVAeFc1,' );
define( 'WP_CACHE_KEY_SALT', 'GvZViOy5[Bt.5Uv@$]GRXx4`sLOp:]SpYP >zu89h[uf>( m]{o{^i)^yV;#U)2{' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
