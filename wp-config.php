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
define('DB_NAME', 'game');

/** MySQL database username */
define('DB_USER', 'new_prj');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         '>d!?a5yv)`0T:nN$iZ+&a#A)(Ul0aww,_N+%#i}x1(Z%c-]o@;`<YLfL?@yBEaAD');
define('SECURE_AUTH_KEY',  'i)Dx,csC8DD{-*hN}L%*8)IPS{vd#pOAI[d|<*tG9=Yb^pm P/]+8R? ^Q(JJ=i[');
define('LOGGED_IN_KEY',    'pS0iNS/KKy+8SL,a&JP/Hw4!6~7(-0h]FnVb!uUz8>O@0Nse9&u!`04-?f[(g/%E');
define('NONCE_KEY',        '@V$9FY(yzU)S8ZFO=}w29<G<jFkW11m_=dZ dJ*OAOx~<Rp]=tE7l}Gv<N-yB6]H');
define('AUTH_SALT',        'eG|vbpyM}IPy(f{>*]N_rX3s`P*@#k>Pe-@(`@PURhqCy fIqCC25OU<XTdibZ*3');
define('SECURE_AUTH_SALT', 'c1ukw+xmgx0$$-XDd5X_=zn#G~@OGJZqTd.QUz`WH)Y2Z%F9KM,4A&M--n6Uc}F4');
define('LOGGED_IN_SALT',   ' e3N#m`=[~<LRdfd-NC`jv7B@6Z|Ks/<Efdx _bJD,vu|nmgC7oY bsKZ<GFhHRD');
define('NONCE_SALT',       ' RQMdc^Avk,vUP?M&of*.spkzGkGy$WQpGw.U:dHaqcAoNbG-!dU9I@DiY%6zxUL');

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
