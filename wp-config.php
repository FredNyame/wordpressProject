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
define('DB_NAME', 'joshua');

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
define('AUTH_KEY',         '+ZM#c21r6h]W;=lMLi/I^HVVJ:K6+0?o(bB3Q$5vF6GA[v>L(`p;i/t 5[iev!&*');
define('SECURE_AUTH_KEY',  'R=m-]4rL$kVpA>NjCB(G?(g:$~f5NUgjeO#t]9j0]poQKITB$;28Z#.WmrZjN:*z');
define('LOGGED_IN_KEY',    '-v@8S~y:hR=^|<-M,~CvW[0TkQnK%<~R?LjMn:*yq<9,yX,gpTrc,]qJerT|AjE|');
define('NONCE_KEY',        '$T<t{;?8wQ,=z[<rjW.8}#XT81nQ7s3x]w5eb[P;<&{8;[}L{/4A`CN@yNFhSgMS');
define('AUTH_SALT',        '=>nA<fb!rshUfA}a@HroL^.CHk+vV#&gR O@36LA2-w6p&;miOY`0I$jmp(>(*EC');
define('SECURE_AUTH_SALT', '(%CV.p4v;LjQ3O$Av?=-5~[8L^rh:,/+q^f7PL!%X5jP,-5_PcbB@bh}tCNKigtc');
define('LOGGED_IN_SALT',   'H?5>swN}~No_gBm|)BhE$L@owAp.T|+_Zj__fpK=UoO5^Ib8O_Y!_oBFeI^yp+I;');
define('NONCE_SALT',       '`w(.,<?)_6pq^)h?6!O{69lX/~gT>RW:y&@<x)0)S)szDjTQ pFGLsgX_(xaGn;d');

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
