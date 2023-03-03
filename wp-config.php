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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'God Of War La Historia' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '-=k6TwFNs`C+1AkxxYy3Fmv}P^Ts^WBT}#g9mnG^%}f*Wo*=61*O1^/+fZIY<i1R' );
define( 'SECURE_AUTH_KEY',  '4I,0[(@>dPtT4y>S*CprM:t?VI4n=aR%UO/m6ZX8p7(&F08G1/edK*^>Sle.wn5J' );
define( 'LOGGED_IN_KEY',    'F#=H+W-~nr.o-ntv^o5,d4]t-$l}RQ_Q-(9W;sx&i?R=!dw%gHTj23IZEXJIOFz6' );
define( 'NONCE_KEY',        'Dz_a2zKvVM1{b<gd)hC4weh30cR9w]gPn=ybd7:^6:}0&Z<[OG,NH.Z 07NQ ,Sa' );
define( 'AUTH_SALT',        '^ RpK^F<ggM`,rR5b^b*e}y9_:ooUJ1ViS-` pJ9L1k>3n#fuUI[At<&4zxN3J)B' );
define( 'SECURE_AUTH_SALT', '@sSE3fRwBOG$sJ0k%f?78.qX,$Z8(3xlG*f%z!RDH[fU#hr2Ts~dtEQeU YrM9ag' );
define( 'LOGGED_IN_SALT',   'dvMXhz<^!<*= &zgvxEmt>2&9VNqeHrES0W@Q+IHtgnZNq(3%Ng{G`Z(xp85puIL' );
define( 'NONCE_SALT',       ')6y06KB8h6#hsV]+/ZuWE.%HCnT}X?;tBQ `V%!0Y|RBFw^SqRuK;P5TOYhO`I~m' );

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
