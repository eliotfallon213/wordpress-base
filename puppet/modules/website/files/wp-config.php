<?php
/**
 * The base configurations of the WordPress.
 *
 * This file is a custom version of the wp-config file to help
 * with setting it up for multiple environments. Inspired by
 * Leevi Grahams ExpressionEngine Config Bootstrap
 * (http://ee-garage.com/nsm-config-bootstrap)
 *
 * @package WordPress
 * @author Abban Dunne @abbandunne
 * @link http://abandon.ie/wordpress-configuration-for-multiple-environments
 */


// Define Environments - may be a string or array of options for an environment
$environments = array(
	'local'       => 'localhost',
	'development' => '000000.dev.',
	'staging'     => '000000.staging.',
);

// Get Server name
$server_name = $_SERVER['SERVER_NAME'];

foreach($environments AS $key => $env){

	if(is_array($env)){

		foreach ($env as $option){

			if(strpos($server_name, $option) !== false){

				define('ENVIRONMENT', $key);

				break 2;
			}

		}

	} else {

		if(strpos($server_name, $env) !== false){

			define('ENVIRONMENT', $key);

			break;

		}

	}

}

// If no environment is set default to production
if(!defined('ENVIRONMENT')) define('ENVIRONMENT', 'production');

// Define different DB connection details depending on environment
switch(ENVIRONMENT){

	case 'local':

		define('DB_NAME', 'vagrant_db');
		define('DB_USER', 'vagrant');
		define('DB_PASSWORD', 'vagrant');
		define('DB_HOST', 'localhost');
		define('WP_DEBUG', true);

		define('WP_SITEURL', 'http://localhost:8080/');
		define('WP_HOME', 'http://localhost:8080/');

		break;

	case 'development':

		define('DB_NAME', 'dev_db_name');
		define('DB_USER', 'dev_db_username');
		define('DB_PASSWORD', 'dev_db_password');
		define('DB_HOST', 'localhost');
		define('WP_DEBUG', true);

		break;

	case 'staging':

		define('DB_NAME', 'staging_db_name');
		define('DB_USER', 'staging_db_username');
		define('DB_PASSWORD', 'staging_db_password');
		define('DB_HOST', 'localhost');

		break;

}

// If batabase isn't defined then it will be defined here.
// Put the details for your production environment in here.
if(!defined('DB_NAME'))
	define('DB_NAME', 'live_db_name');

if(!defined('DB_USER'))
	define('DB_USER', 'live_db_username');

if(!defined('DB_PASSWORD'))
	define('DB_PASSWORD', 'live_db_password');

if(!defined('DB_HOST'))
	define('DB_HOST', 'live_db_host');

if(!defined('DB_CHARSET'))
	define('DB_CHARSET', 'utf8');

if(!defined('DB_COLLATE'))
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

if(!defined('AUTH_KEY'))
	define('AUTH_KEY', '%hs2TG=ae^ViT?bu,&C-_uN[Ajiro$q42|9>;:+P<A$Tz1i!3,IhO7AkzEHnqTbt');

if(!defined('SECURE_AUTH_KEY'))
	define('SECURE_AUTH_KEY', 'Q/5(5Sjirx,|7u4,K+fEaLw0H[Clnt8}37<t,aO|}X,)r+y8zi<3ef{-L&0-pf[d');

if(!defined('LOGGED_IN_KEY'))
	define('LOGGED_IN_KEY', 'N::ilw]9$#)6+U3?gsA9+saWgEE08bet5md|h0y|3: leBlueZsRnD=+W~KcLun^');

if(!defined('NONCE_KEY'))
	define('NONCE_KEY', '[%VR*-g|L30$vZP~^8^BZ}RGAqnZP|5THT6o%-+OtH/hk{T[p7M-^<+4;$VJD<al');

if(!defined('AUTH_SALT'))
	define('AUTH_SALT', '9}SRTB0.4L=($,*E.&++o5O)rvr)Q|w&_+1ME-*+{K;3-R|vHjxvO|zO)efN!@JJ');

if(!defined('SECURE_AUTH_SALT'))
	define('SECURE_AUTH_SALT', 't3CH@NplpyF{j2}V,tC|GPG:828ATBM0iE2-Gw]5v~MA|sB5iJq6e}ep_}Pz&BxZ');

if(!defined('LOGGED_IN_SALT'))
	define('LOGGED_IN_SALT', 'zO+=>cV kt@5H ie{?m_}voT87bJQECe <WXSVdiN7}Jvm~r}:.?gPf-ZCkn+hcA');

if(!defined('NONCE_SALT'))
	define('NONCE_SALT', '/f!7FELbTB_o+kTl#V{c^ODQ+0)dvgy,wjV#)#ZPonaZihX2kE]GPxa] hu08+wQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
if(!isset($table_prefix)) $table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
if(!defined('WPLANG'))
	define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if(!defined('WP_DEBUG'))
	define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');