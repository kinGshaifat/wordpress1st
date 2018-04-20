<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'shaifat');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'r!pFYSn8*Q/eM+o8wTorNcG~+mqZYpC[2$:8N7/S!l,X`10}5wq@.d&Bd*|y(ZOG');
define('SECURE_AUTH_KEY',  '/-[|Xw20{n-1.r{1}27sr&v*EE.fWv`7CNL[fCO&Z@W0wi}u>J#)U`=8S]w,mNDS');
define('LOGGED_IN_KEY',    'NV`3w7Uj_gLR^>6=D}2,^3!|ARX+-tW2U4eekQbUOp vO!|+@)fLO%5GR4(}aP]r');
define('NONCE_KEY',        'Wz.53VX{=[K.kR#ch9/y/?O*}M?n;)RsF$gagP|e<kDkZ_ ([GmdmcEZ.n!u)@+,');
define('AUTH_SALT',        'BdG}-gU~PjM5wcb@FXAYB0Y/kw!4e=DC-0_Ei22,C$!ysRhIaV@wlSkj]m}pQs#d');
define('SECURE_AUTH_SALT', '~0[,ru>.EPH>;utLQ$xSx%1+ceEG]({p8bQ/~<yq9]19d{R[Ko7>lXtM:R<Ua432');
define('LOGGED_IN_SALT',   'CD,ej?1^eyXO  mD#U0).*k`wd}e-|7:Q@ea$]?aDw+4j[%&VI1MqiDRq7(u %Ne');
define('NONCE_SALT',       'X5aD#;39&/^J9%L:y$?MCnK?/h3T)acdvkFM//5,{|B`i{$Wt5eFs7s5suP=wEtL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
