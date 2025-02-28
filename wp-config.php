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
define( 'DB_NAME', 'wp-start' );

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
define( 'AUTH_KEY',         '53r }]&3T8?h`/n2I+n:(9fSNXXR@ciPjU|p1,<NuP7jgbS3ML&*,6ud9rR@H]Q9' );
define( 'SECURE_AUTH_KEY',  '$~09/Ce<EL[;hv-s=ywB5bOW1hnx+z;SaES}A|+fMzuSR<{~{adtN4a:*,A|2[S@' );
define( 'LOGGED_IN_KEY',    ')d6c1y:<t:,(-;`_KYUts@UADW}[ ;/aa8aWAjiBt!fo2~f#s%)8i}=A.-wS{^-J' );
define( 'NONCE_KEY',        'BeQEP_;_;5WXS[<_dk{|/cTmF~;+)!5ZH1pK5b/RRw^Ht?4*[6llZ:ZE;7H{TW-6' );
define( 'AUTH_SALT',        'OrLyY:TUxF [|?3cH5<Y+yU9{pJ>%>I&yV4z$r7klwGU cVo&ZwdDSDP)o((anyz' );
define( 'SECURE_AUTH_SALT', 'V]b,3iC$|}UEA[6lDUFc*OXXlX!<$7O.h~Mu4~L?O1;Z06`~)p$~AHp[5^np3,xT' );
define( 'LOGGED_IN_SALT',   ',06MFjY/rNRWWW+]^2P#{,3^~0%)s]FNjAFe:8}<$<(C[3w:B=Ejid.>)/AH7kh|' );
define( 'NONCE_SALT',       'O}lJtk9vIyp3n}2{ADoA}4:@xc]5L%d{}VR4[}8=x|F&(OM=fV>aqG8DZ:|&.U?!' );

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
