<?php defined('SYSPATH') or die('No direct script access.');

// -- Environment setup --------------------------------------------------------

// Load the core Kohana class
require SYSPATH.'classes/Kohana/Core'.EXT;

if (is_file(APPPATH.'classes/Kohana'.EXT))
{
	// Application extends the core
	require APPPATH.'classes/Kohana'.EXT;
}
else
{
	// Load empty core extension
	require SYSPATH.'classes/Kohana'.EXT;
}

/**
 * Set the default time zone.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/timezones
 */
date_default_timezone_set('Europe/Moscow');

/**
 * Set the default locale.
 *
 * @link http://kohanaframework.org/guide/using.configuration
 * @link http://www.php.net/manual/function.setlocale
 */
setlocale(LC_ALL, 'ru_RU.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @link http://kohanaframework.org/guide/using.autoloading
 * @link http://www.php.net/manual/function.spl-autoload-register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Optionally, you can enable a compatibility auto-loader for use with
 * older modules that have not been updated for PSR-0.
 *
 * It is recommended to not enable this unless absolutely necessary.
 */
//spl_autoload_register(array('Kohana', 'auto_load_lowercase'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @link http://www.php.net/manual/function.spl-autoload-call
 * @link http://www.php.net/manual/var.configuration#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

// -- Configuration and initialization -----------------------------------------

/**
 * Set the default language
 */
I18n::lang('ru-ru');

/**
 * Set Kohana::$environment if a 'KOHANA_ENV' environment variable has been supplied.
 *
 * Note: If you supply an invalid environment name, a PHP warning will be thrown
 * saying "Couldn't find constant Kohana::<INVALID_ENV_NAME>"
 */
if (isset($_SERVER['KOHANA_ENV']))
{
	Kohana::$environment = constant('Kohana::'.strtoupper($_SERVER['KOHANA_ENV']));
}
//Kohana::$environment = Kohana::PRODUCTION;

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - integer  cache_life  lifetime, in seconds, of items cached              60
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 * - boolean  expose      set the X-Powered-By header                        FALSE
 */
Kohana::init(array(
	'base_url'   => '/',
	'index_file' => FALSE,
));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Log_File(APPPATH.'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Config_File);

Cookie::$salt = 'qaz3223ewq';
/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(
	'auth'      => MODPATH.'auth',          // Basic authentication
	'captcha'   => MODPATH.'captcha',   // Captcha
	'database'  => MODPATH.'database',      // Database access
//	'jelly'     => MODPATH.'jelly',         // Jelly ORM
//	'jelly-auth'=> MODPATH.'jelly-auth',    // Jelly ORM Auth Driver
	'elfinder'  => MODPATH.'elfinder',      // elFinder file manager
	'orm'       => MODPATH.'orm',           // Object Relationship Mapping
	'twig'       => MODPATH.'twig',         // Twig
	// 'cache'      => MODPATH.'cache',      // Caching with multiple backends
	// 'codebench'  => MODPATH.'codebench',  // Benchmarking tool
	// 'image'      => MODPATH.'image',      // Image manipulation
	// 'minion'     => MODPATH.'minion',     // CLI Tasks
	// 'unittest'   => MODPATH.'unittest',   // Unit testing
	// 'userguide'  => MODPATH.'userguide',  // User guide and API documentation
	));

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */

Route::set('content_ajax', 'content/ajax/<controller>(/<action>(/<id>))')
	->defaults(array(
		'directory'  => 'Content/Ajax',
		'action'     => 'index',
	));

Route::set('content_auth', 'content/auth(/<action>)', array('action' => '(login|logout)'))
	->defaults(array(
		'directory'  => 'Content',
		'controller' => 'Auth',
		'action'     => 'login',
	));

Route::set('content', 'content(/<controller>(/<action>(/<id>)))')
	->defaults(array(
		'directory' => 'Content',
		'controller' => 'Main',
		'action'     => 'index',
	));

Route::set('site_ajax', 'ajax/<controller>(/<action>(/<id>))')
	->defaults(array(
		'directory'  => 'Site/Ajax',
		'action'     => 'index',
	));

Route::set('sections', 'sections/<url>.html')
	->defaults(array(
		'directory'  => 'Site',
		'controller' => 'Sections',
		'action'     => 'view',
	));

Route::set('articles', 'articles/<section_url>/<url>.html')
	->defaults(array(
		'directory'  => 'Site',
		'controller' => 'Articles',
		'action'     => 'view',
	));

	Route::set('events', 'events/<url>.html')
	->defaults(array(
		'directory'  => 'Site',
		'controller' => 'Events',
		'action'     => 'view',
	));

Route::set('pages', '<url>.html')
	->defaults(array(
		'directory'  => 'Site',
		'controller' => 'Pages',
		'action'     => 'view',
	));

Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'directory'  => 'Site',
		'controller' => 'Main',
		'action'     => 'index',
	));
