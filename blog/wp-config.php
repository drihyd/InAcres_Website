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
define( 'DB_NAME', 'deepred_inacres_blog99' );

/** MySQL database username */
define( 'DB_USER', 'deepred_Lorene' );

/** MySQL database password */
define( 'DB_PASSWORD', 'h--~dy)-X]5i' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'z4T!v6YM7An-zu_j+X0K-$wmPx!!7;dpDY3C^4K9+g>Qxq=lsp-h:mQO[@[hZKW9');
define('SECURE_AUTH_KEY',  '~`+L>QzEQ?S-UDa(D?az#D9^0+`I>4uhq|x=md]N:UK_MQ_gX(;^tae Ne7U8`I^');
define('LOGGED_IN_KEY',    'W6{2[kQx|>[`&?c*Fq# (V4!;j|e `E3~DO`1O3POgY!X!%p*,X0c&fi?K|vHBNv');
define('NONCE_KEY',        '#c.j^S;vb)g6k$S2h5yrP~PBfWT&5nO0YSPU4f41<a|V.MW#).}02L4OaaMH,&I3');
define('AUTH_SALT',        'YPR&vf4+.9A,A6F`F5+p^sYnW&7L}R?dbHdN3Re|{lN|Ccf@A|R`7LrnS2t+L70M');
define('SECURE_AUTH_SALT', '`2C$l|rIXJr7c`+hi).4l6hIHFqbFD{[pi ;v1H^/ |H`40,*P/]T,Rh3djJn|h3');
define('LOGGED_IN_SALT',   'r~DAy-3~*phtlC!($iOfvg79Xb9+}0cB?}rQeE;2#[NlKMM&A425fE~}$5rxHcdU');
define('NONCE_SALT',       'ZxkafxN_Y!f~tjQykB*#*|dIXm&6;Q+HeaTyq}?A#jAN!)Fj2LoAbhD}^L2Q1P_E');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ac_';

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
