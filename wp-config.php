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
define( 'DB_NAME', 'wp-customizable-chart-color-and-data-db' );

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
define( 'AUTH_KEY',         '#/7LcTD_mUr;J@0Ff?hvq:E64kw{]1|+d_=:{wpCA)we)*[|-pfR=}7pll:BRCqt' );
define( 'SECURE_AUTH_KEY',  'W9YX[,YZ>3B6[ToA{gcxgy<;G:DZxKM/|(y/e_@K_@cd-3?0ZYX/JF3!$oEp[]|S' );
define( 'LOGGED_IN_KEY',    'k.RDJ!/h=T)Zb>q(!dR45#7u3.3@7]ArI-T)?gQK9|PL2?2:K0qY_/t[|j2H 4_m' );
define( 'NONCE_KEY',        '>,(6HiWWi6YuGDG{z:BfGZm2[}4tQtN$?+G+se: 8*!mDBJ>{gkEEd,AAd0QTtpf' );
define( 'AUTH_SALT',        '`7_60iAzZyx/>0cn[gx,>O[y7o&@LE0aXTItRv2z*j16 <C9a^+[xLJLYuZ@(k#x' );
define( 'SECURE_AUTH_SALT', 'Qx?_R!*z%4B6kL-$C}&oLtYt`hmQ3ll|LxR3^rEj1fXv01DTyZ/,%EQ h:@(;Ae4' );
define( 'LOGGED_IN_SALT',   'gT4=EYKNl<[Hkg,Q,orF{;qAJ;X0pd*T7~.M}2mV-2j?bsMXRo0R1|UA0)QZJ?z@' );
define( 'NONCE_SALT',       'gxKUB_@m:NLC!+sr=ar]H[3,9S[,7~W` q~(x+`T@!2{#0pSu*F@baek7rT*3HhE' );

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
