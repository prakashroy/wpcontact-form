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
define('DB_NAME', 'iqtest');

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
define('AUTH_KEY',         'j+LPLS-.w<FVhLWL?[|+uKc@yIh^<TP7ynN5+5:;/Z/GgX 6#Vlda}NkDdboR<.M');
define('SECURE_AUTH_KEY',  'F7Ml|;P3gh.^kMfePl/B%HRR?%@R$2Fu=[|]bZa$PFhCf(8z3^~OsbjHd}^pT2L ');
define('LOGGED_IN_KEY',    '+F:n,%b6$5.q4I@.Z56P[ePLtpds#@0/gzI-NlMx+^XH|(eZTQ#,Kp!5fQ*Yw!bB');
define('NONCE_KEY',        'grX<H52hYL6s:FB(CB0g|>i2_!9{6L}--ZVI4#a88=qE<?g$kir#+bOY!` :1*@>');
define('AUTH_SALT',        'XKfa(w+m)(Ij=U67slIC}x#XGai`mG5-N}E$lnPuz#2v++#;S}$ibov|vEV5T >K');
define('SECURE_AUTH_SALT', 'ne/U6NpG{8N$PEj}}Tg|8q|tgh^,/+;e-pEu7OMX};V9`n}kb,mGSGj!|B)?9 W.');
define('LOGGED_IN_SALT',   '%j>,w7H7*h3]2K|5ji3.>0pV]+8>]VT0zsM<w;.uR;:+scT|#t$O$wNvYP|Kfx.Z');
define('NONCE_SALT',       '59b4L+3$|wXPnUY~U7i82l!wpzWAI ^O*h]|flIgk[a&X+)[]rh{2C9_pmY@knTO');

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
