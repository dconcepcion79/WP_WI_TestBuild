<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_WI');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'H5O1tvYNoJ?)+D_gqF:(ZirLPwsc`nOX{6/gmvb))-0|asL+3n=uY{RlOEAIAGj5');
define('SECURE_AUTH_KEY',  'z;0-LyX.5jTa1I2l?dm|_=_Fneh9iD){iFiY &Y=vrR7`&p=(-Upvdp|JFgY=,w4');
define('LOGGED_IN_KEY',    'L<11|,X5(3])Sm|7kM9vCnD3YzBcq.D9p4UvFnCBc*]esl>UT{1A9|APWxIlzi|u');
define('NONCE_KEY',        ',h@]NQh|RzIEQd;*Uvo<~8>t5y}M:a%Cq@<:q#OgPB0Ws_sp>q,9xDMvG3t&w 8z');
define('AUTH_SALT',        '+,|giHb!87oophg`0Mgg4vP%GqQLX-^2<0[e>=wpk@;enR)=<,oe&}=X-s[+h]3=');
define('SECURE_AUTH_SALT', 'f{+UpJ+B^{=T)*kDz<64byf(R(wA&wUAq!6|gROQMErO#}(IUr)^qO&_^Mz$Luv^');
define('LOGGED_IN_SALT',   'z[r=!)[(o!BxU}QBE|K,`R+~R]&zly.pTigp!XW[#X(;q;11n{[mh~fq1K{JWb&j');
define('NONCE_SALT',       '1FVUsX*+ukd.BH1VZ|-2>:FaXIKz8WlS0W=xva*;9Vy{e_[3;vI ES_&.#rZ[!X)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
