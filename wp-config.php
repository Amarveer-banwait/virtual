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
define( 'DB_NAME', 'bwpq9knf5ohe4exbjynn' );

/** MySQL database username */
define( 'DB_USER', 'uddkjidharihij66' );

/** MySQL database password */
define( 'DB_PASSWORD', 'yDIrLV1B7mwrqQYmfAFB' );

/** MySQL hostname */
define( 'DB_HOST', 'bwpq9knf5ohe4exbjynn-mysql.services.clever-cloud.com' );

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
define( 'AUTH_KEY',         'irDHO|Q|~Q4%40aXGe>x{z!_(IQnKa5H]|b4E=l~9cD&c?{a20S9`4?c7U5[4;z>' );
define( 'SECURE_AUTH_KEY',  '09bJpq>}4*8gqZi/krck+44<gg`N! 7UKUr!0I*JBt45;mUR>d,}-20`/.R-=0{W' );
define( 'LOGGED_IN_KEY',    'dmGiXW}OkKq(Y>7|ChS* ^3#75Q!-d:$OsBfyai)V~A1 2%J[6_|{dN6f2#VW*S-' );
define( 'NONCE_KEY',        'HSL!7dN4tOF.E39W:wX.37$x7>aj=#s(GQw7qv*C M:]Yc.of3ULT3QUUWrik/T<' );
define( 'AUTH_SALT',        'I5lYv.+2!j[(yD{C8NtvEW%m<_^fu1pkyh?V{b|aE >MhfnTD8F`<p>_5y)n5IJ3' );
define( 'SECURE_AUTH_SALT', 'lkSXUEAG9{[b[~oV-nUo)I&PCr%pQ(DYoH1&ICOH)&Q_kaSti/WAaK2;H#Wgv{(s' );
define( 'LOGGED_IN_SALT',   '5L!SY[~4r[rU]K@Zh6:}e]aM1Hi5u&vNDD{9WurfL6R86RbE{*a*|bhWD!D{]6[<' );
define( 'NONCE_SALT',       '3O+%:t(s}<S2Q;nc*(|5EK x&*-D3HK,01UGL/p,]% gh`0$!4GX8X_S0O%xYb1q' );

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
