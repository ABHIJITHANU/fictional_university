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
define( 'DB_NAME', 'fictional_university' );

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
define( 'AUTH_KEY',         'Kgzuh1UrGW@KpKGotcN%^@s=THKVcH&{:aPu @QoGttGj{?+``N/0>$(RnIr&rQ4' );
define( 'SECURE_AUTH_KEY',  'DUx+4HB&?c0q}X&]lQU$wqiT|{W-fO 4}u9Qz[FUo]mOFCiQb][WtZE`-&tnEbdJ' );
define( 'LOGGED_IN_KEY',    '28oe}}S6%Zv-CK_N[k2T,X~!^wo<]Pzpn%>zQZezzr,t_V~!a~#$Zbc9wc_^F+V3' );
define( 'NONCE_KEY',        'he#koGsO@yIz8}sUK05:yGyk/w9C0]pTtg3l8`-)i Hi~GQD}-+[%4=5/1#p(1HB' );
define( 'AUTH_SALT',        '2Fu4NBFO  -A5C=/$[%@BEeLq 5{K)}g~mH.J8R%}SR=U]9G)~((i(f(S @8v/9 ' );
define( 'SECURE_AUTH_SALT', '>o6?Y72^&:0Q2gw1cg6I!=g(F!H@OhDyTJp|SBw-B:FK(T3~g(i3{(k!MXy{kWT;' );
define( 'LOGGED_IN_SALT',   'sPg0FHs1qy)(Tj5|wc yS^zI99TZ&.9:Q^>4TN:H{]SeGKiEzT3#LxjpUnXpOV!O' );
define( 'NONCE_SALT',       'G{tmFdXh0D4<DPA[t<;6|~3w 1cRb_~82BJ^v>}+(10Mdg>D.EWr@F3#FxtXZ(^8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fu_';

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
