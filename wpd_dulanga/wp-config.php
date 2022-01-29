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
define( 'DB_NAME', 'wpd_dulanga' );

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
define( 'AUTH_KEY',         'lUoLPp$t+lhfSb&hfLJmRGp^6nggqmKbIrX4~ca=U9Q7B$$sUv-Ps%{{c!w.f5iq' );
define( 'SECURE_AUTH_KEY',  'hq?H17Dk;PbJ!0zGw_ZT<JgdL yj##$~gLv)aP$%(2RMl]q=85(hn=`Gn4i|bdG@' );
define( 'LOGGED_IN_KEY',    ':uyb{&>6zJ2DI1$m3t 7EJQ6ZB=*ZW!Ap{-pvv5wOpk>iZqaqj.* ioO` +j%hL,' );
define( 'NONCE_KEY',        ':!g1{%a=zdUPg~%z9l1s=*@)p#trq:79TE~m!al[+/KmtU?co}swl``gDg;N%>^*' );
define( 'AUTH_SALT',        'vlLDap}l[N5OX|h_|f&n nF{.4@y!0m#yR~C^7u%&O=bJ6sKk4sPhN2dQ_`)zIw(' );
define( 'SECURE_AUTH_SALT', 'a)o>]mqad&Gm)DLvE 5`,xTzRjvh;|%nMa:Q}xu~c l)G#8b-;0e_gQenQD9FMVk' );
define( 'LOGGED_IN_SALT',   'c=)FBb{a&afgAs<[*oe-+LFIw9T:L?qzIIWuic]@2zb9gZ?w{U0Ck;!B5,wtx(s}' );
define( 'NONCE_SALT',       'g^ZJ/;^ *J7/1:)UZKT,LITdz`D6y%7Yn3tX>g;4;4lfEf@g^}-w|E3{/0re1l([' );

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
