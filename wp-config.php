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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Z%GD9Q8f=DX?|]^I&+c-X#X}=m6Srq[4P)Y|a+n.;b&LcxE`ufDX]]L~bP{N^F)~' );
define( 'SECURE_AUTH_KEY',  '8)BA[|Tk7Xz%]FOzPhX=F3&yZM(.}&?>UY` N!Vi&,Dn4iBMJkIp`DoS-UYn5V: ' );
define( 'LOGGED_IN_KEY',    'Li3Cugkl+d>DA+vlv#,Fe2+jT3)-(P 7E i:qD3hu3IUZ>u1__jGCRd_}EVPF4y%' );
define( 'NONCE_KEY',        'y ^%8thNVH4c5]!`or{z#L^Q@TZ*SS}ttH~Ax&rv53tMVug;MaZ@11<)B:-dxRdG' );
define( 'AUTH_SALT',        'Lc>2&LQ~P 5eB0Ctm^x%ktdC#$D8|S`}P6L27?HX[KBNJ dmEbn>LyUDi,~;yg={' );
define( 'SECURE_AUTH_SALT', '5QtQuuCpp=l<Wt:NlD>dEm25~n}8|I)q,|7H/]-LiVER]db Jcz.~Pe$44d[Zw:D' );
define( 'LOGGED_IN_SALT',   'yV&{9QW)[;MHJ$6GPz!JLU})1da-ZY!zEkxB1TQ(VKk#ra5d.D>)m[<]2dEgso]G' );
define( 'NONCE_SALT',       'LuN6/j4]rnn$$I#UF0HmZ+O?/(Dd3o+-i!S4m8alHL(9hz>Hk|NGk(K/3- Ki{0_' );

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
