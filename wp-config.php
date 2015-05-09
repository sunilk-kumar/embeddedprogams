<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'ep_database');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'mysql2015');

/** MySQL hostname */
define('DB_HOST', '');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '7q#)2J9_;MhcztPfi*l4BmlU<.i+LR[!6IO%U/g*hRl>-M+r|9*04&*,+Vmcx4B/');
define('SECURE_AUTH_KEY',  'TE~; ?+xCwu%By%k.4g$KJ#;~}LSrrw/Q!(hKw@%{l`$m/#Wyj[*UfiESUGU^#%4');
define('LOGGED_IN_KEY',    'nN^NIP$2H!Q/38.sa0PiHpw8RTzhdWWa8Um|EOOV%+|-4:{8HiL</$rg`CuK]|B4');
define('NONCE_KEY',        'F02D?be&8Is<qt`@%~0.8S<q_MxT2&reeW&iz7N7q$oxjZaH0ldM-[Y&]1vN)x-e');
define('AUTH_SALT',        '6]}#jK>P7-X8}L`cnZL$?vI(6E<=Lr-|+g+GpjM|mO`DP>pQe.#?,;9[OYx|nOx8');
define('SECURE_AUTH_SALT', 'tY,|$`SXoo[F%{VtA_6> $Ge,Ex-;pM{E CNd|lHa:!~ ?Z@#FE7 7)_Pkv_&0+/');
define('LOGGED_IN_SALT',   'v8G|coa7fW;.KJPsX0;+j%dcU>SlZ2-FgyCj>ytW5Ow-|s13#S95/?k[ULv*<G^y');
define('NONCE_SALT',       'I|~QgF|EIq9s:C6NxfHDlwh.$D|xOLvxFU#,+u>/N}|~l=,oPc{mMhe.W[}$U:X*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ep_';

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

