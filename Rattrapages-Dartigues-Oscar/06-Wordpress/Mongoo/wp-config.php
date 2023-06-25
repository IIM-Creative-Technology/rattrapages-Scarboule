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
define( 'DB_NAME', 'mongoo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'K7|.-ORp5FKPMj4f**l[/UM%dAf^wCYda,2L=Ah4dwh@C*Q[TA=dZ{-[.mJ[a)!M' );
define( 'SECURE_AUTH_KEY',  'YO{i4U>Wr`$IBNtz]Z=m{#c*m-((JDo?6Gcd]M{uV:mAda}.]>7EcX9[2Uz&+t{z' );
define( 'LOGGED_IN_KEY',    '9N*<@OkpXGL/Q:EVSmi{z]%3TAyG4$C,srVdNv@GM}0w03kPmVo!zsHfVb$K&xPG' );
define( 'NONCE_KEY',        '%Fn)R?(T[]=R&@bgO i9_5uIBioq?EIaWhk-+&B,W(s1T)t*tq/3qvI96a[Vm> (' );
define( 'AUTH_SALT',        'fPn]4Wt?O^*Az]R94M_2vlTG&I0;6-[a4NN28JpZjBe@YoYN|+M Z/z)1/T~z4wT' );
define( 'SECURE_AUTH_SALT', 'y#QQP[0exN|Cx}Myn{JGT!1Sjkp]XsR4y`ZG5:Rf#zaru!A2x_u$p)vbAhg7/Q R' );
define( 'LOGGED_IN_SALT',   'xuwy 8`].Y8`-!&19qnRrPg FRW$|-n%8z@O`yvMp)lN)VrIrMs>a Kk=%MeMksy' );
define( 'NONCE_SALT',       'Z_FO-+Vo$jMQ*=jz+LuG[].?eRpo)o6k(^$}*)nixrfR2#+Vdot9BbtEMz7NF+#H' );

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
