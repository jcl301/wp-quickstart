<?php
define('DB_NAME', '');
define('DB_USER', '');
define('DB_PASSWORD', '');
define('DB_HOST', '');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

// ========================
// Custom folder(uploads, plugins and themes)
// ========================
define('UPLOADS', dirname( __FILE__ ) . '/content/uploads');
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
//define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

// ========================
// Default language
// ========================
define( 'WPLANG', 'pt-BR' );

// ========================
// Security keys
// ========================
define('AUTH_KEY',         '');
define('SECURE_AUTH_KEY',  '');
define('LOGGED_IN_KEY',    '');
define('NONCE_KEY',        '');
define('AUTH_SALT',        '');
define('SECURE_AUTH_SALT', '');
define('LOGGED_IN_SALT',   '');
define('NONCE_SALT',       '');

// ========================
// Table prefix
// ========================
$table_prefix  = 'wp_';

// ========================
// Debug mode
// ========================
define('WP_DEBUG', false);

// ========================
// Absolute path
// ========================
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');
