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
define( 'DB_NAME', 'perx' );

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
define( 'AUTH_KEY',         '8Oh6?a/:Cfq0dh<cFoznBMBT?v+DMl4vl<.BBZI0uAS6Gu$:HR/8N`9OA&HBif%F' );
define( 'SECURE_AUTH_KEY',  '.^)iX#VA!{Yhff]W8Tf A}5 l&2{GfVz6sJ7>9nnL0_4a`MIyDpfCK{3$X28G_/o' );
define( 'LOGGED_IN_KEY',    'q{TH$NR&_$uA_};RYH~x=>g13|461{4t5-(~p@UfUbniBwVCB]Vf4/;P-dnK9`I ' );
define( 'NONCE_KEY',        'MTDiLogW+a66i:p8{-0A?K?-X`{i<b6K7xvC&G^Cc61MG;4BI;vs6 s,6IGm}ks7' );
define( 'AUTH_SALT',        'XJSbVLvzOH!2nU#&}olc9XQUoj[H(v:R!DrdF1VC(Jon<t4:I9+Wp6Ry2aiOdwY(' );
define( 'SECURE_AUTH_SALT', 'VCjikz#kWBL/Z[Vg phN|VklfCVOnh@t2hj,itDJ1Q=)M[+Q]piYVAnOtc_BxB>~' );
define( 'LOGGED_IN_SALT',   '%OMA0;&wnP.wNc0q3#*&D_2Br*? RB!_p40S#db#Ts#],>_W9+?W=UYk u59gy2,' );
define( 'NONCE_SALT',       'tWhwfN#QhrHSoF8|>Z{8%&0Zgn@,<i}ZaG2sYEP3qCd_7X7~E`-,lQbXLK/i7~-;' );

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
