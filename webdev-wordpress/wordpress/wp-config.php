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
define('DB_NAME', 's4-webdev');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '&8?a@%,Z?K,E.{k(5s?d-ngSHXM-xg;Twx4#W|E?7WrBFG3|8t~j$QC]+nn|_%+}');
define('SECURE_AUTH_KEY',  '=o69=Jn7/Q`>uPn{^]7$<CQrU6AtBArjrkIrTTXwvnvf@fGFM)ml:=xzVpp.$/+/');
define('LOGGED_IN_KEY',    'Dw*[@YgnFdK+#o4{F<xkvRjEs.bFU~(]X?n0L$kR&` UgS?4AcY30T5b3Ya)sJn3');
define('NONCE_KEY',        'aNsjGG/>6~cNJ1yB3cMzF3VPFDd4O,Ds%lA|JY swRmlq~4z, Hn7ur=2 C}e#Jf');
define('AUTH_SALT',        '2&r%R*vruGE6SO_M6gMCPZUUU^Z0?rH``#3s=$IW@B(mE:y&on9D@]90bgZfie8b');
define('SECURE_AUTH_SALT', '2=nlM>MPAZXHkpPy-b^+Kh14G2z Apd0Vd(g|S9Nj#r0yC#!l_2jYZMxPSfF~#M$');
define('LOGGED_IN_SALT',   '0z&lOGL`av+F(>@1K-;4nW(,y1,G_Kc)a=:e/a=%})Oq?8s@eb)t!1x^7<_6KoLN');
define('NONCE_SALT',       'SUMK-[0Q,Gssqkj*;B-Y5~/OO2r]<rx]E+JCwxhQBLHp0KVDHsVW+~+r,6-~>f|z');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_s4_webdev_';

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';