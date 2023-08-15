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
define( 'DB_NAME', 'corefix_telefonia' );

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
define( 'AUTH_KEY',         'e#D<v_e~y(t:js/.f$~KI)=~Wgi&AIZ#Kmz*KyO}TGZTlQX?7uFfdF-hmeH,P!Fo' );
define( 'SECURE_AUTH_KEY',  '2eKA2_2v^!zn|rF!*5nLerx-S,=)y+Sr#V$ !GoKe{k{w}W.FV&e7yw1pf3dDryH' );
define( 'LOGGED_IN_KEY',    '9+XaE%p8t:%v8P7i6AKq1Om7e$JN`3l #^r~s5fc~x,|Q:={*;Y5a+IUH:b*sMkN' );
define( 'NONCE_KEY',        '8nJYeD}Un++2P#sIeUs2gF}B=PCo3e#[(#+vHMz aZG<)bcoSieH#JQ`ioelVrJj' );
define( 'AUTH_SALT',        'jy|Ar?s5IQl&pd=;y|k-W>?_^G.4//Wqg%q8kc_fF:f{1 1Lf~<#sNJn(7e4Wx4~' );
define( 'SECURE_AUTH_SALT', '|&2t T/=NhlkEAq3=),mhQXI:~tCyad.j/kk6{L8zS3QM!i.EF 4w,ZIc/L-)P()' );
define( 'LOGGED_IN_SALT',   '%bmv5>oP*.IMtv:-Z5?jg,hxeF3|:d$j02Bn+q<!A:t7dFEn1uliBr!&p%6!@$rM' );
define( 'NONCE_SALT',       ',s6gLzr=85Rz265V S,-gJcS]Ddn42j9I0jHn821Hvlwh[|r*&8KZ& >VvqQ$@so' );

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
