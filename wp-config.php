<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'D:\servers\MAMP\htdocs\childhoodCMS\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'childhood' );

/** Database username */
define( 'DB_USER', 'child_admin' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         'P8X7rpV7e+txv+I-5bFVU:,PU@n$OAgcDTyFYo__Yr1#s}[eg8i5 /87e!wiOWQz' );
define( 'SECURE_AUTH_KEY',  '2y?_<tRI&5w.]bX{*Up1:3wEpXmK0`^)=/))Poq>#$$0#g/0gu(/OQd8}f?QrnR8' );
define( 'LOGGED_IN_KEY',    'dONC=!SB}eeM#J:jt}!_2&8SRetrxJ}1CyIz~IT_BM-T6.VN?hV7ud+HAOVQIB+D' );
define( 'NONCE_KEY',        'c#W6}gO.$~}b8Ve<}x_fE*p_!/u~ui-D0<5W>{H<Abvr]i{p-2u$1hWzc@&iO2<?' );
define( 'AUTH_SALT',        '02mu[UpBUTvOG1mn3Cd@Si$I{5.ZwUd;8?T?&b-BIUFceEKAoA3/8}$7~^rJ55i>' );
define( 'SECURE_AUTH_SALT', 'c<mv#Knf!vfaX=__Fra)lwa;~O`5^$E%Ce*!3ZM|:>?&+2!)N8%$lN0{fQR>27|!' );
define( 'LOGGED_IN_SALT',   '2|ag4cxt|{bELINOk~dQEnoP8DlyL+&R?;1.tn%J+F1t{XZw^BY4(vA:_V0Ruul$' );
define( 'NONCE_SALT',       'Wmc%Pktl3cAFO,rBP>DhRZqhtC(,&8|f@XG)cr8C]^l,P@qLBY; h<;:N?N =FG;' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
