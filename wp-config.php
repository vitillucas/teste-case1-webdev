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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dev' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'V46u;2lGD@KEW,+)gNdieq+50t82c,z;yxH58B)}06!*_Z>>RxDpGJ1A%e$-+7D<' );
define( 'SECURE_AUTH_KEY',  'H8v_wlt@vB8c^jGg|]M|/lt.o#B2>![7IfTUEVoq|OV-yPr&07)IxFYSdIzD^^#7' );
define( 'LOGGED_IN_KEY',    'zXBp^{E{FN>u[AvVtV1KLU|:)1oT31b(1H^1K`3-?7MNtGwqN:MBQfK-y(B$1BI3' );
define( 'NONCE_KEY',        'Z!|D%D3p/3pob fIdvt4?^]Ap!2P9Lc0eca22^@GDwCN7tPniqXKVy?-JR@:|&vJ' );
define( 'AUTH_SALT',        'X;wh* LMXW5H ,1tx{6L5=O.rSc8 k1LJyf{pu``[E^p/V1]NdD3Weln/KL9Ulie' );
define( 'SECURE_AUTH_SALT', 'RQC@.NIZpG*2d`.+>52`R:|FT:^VA]Dbrftl@oVcylYN 5]JJb}@n+cDy*tC6}f/' );
define( 'LOGGED_IN_SALT',   'OXXe}^UBgU=:_oOy%>cT; n84v, =h KDJCLM/44[1T~-8iG;uRN`+;HH5l{Cp +' );
define( 'NONCE_SALT',       '5[1N[KzGIyIj.4X;^_|}71B;|*q?%-B8.YM=l5SJ:8TS6Q$Y*8|`5o4(I/i#WOK?' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
