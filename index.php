<?php

$application = 'application';
$modules = 'modules';
$system = 'system';
$media = 'media';
$riudb = 'db';

define('EXT', '.php');

/**
 * When developing: E_ALL | E_STRICT
 * In a production environment: E_ALL ^ E_NOTICE
 * PHP >= 5.3, it is recommended to disable: E_ALL & ~E_DEPRECATED
 */
error_reporting(E_ALL & ~E_DEPRECATED);


define('DOCROOT', realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR);

if ( ! is_dir($application) AND is_dir(DOCROOT.$application))
	$application = DOCROOT.$application;

if ( ! is_dir($modules) AND is_dir(DOCROOT.$modules))
	$modules = DOCROOT.$modules;

if ( ! is_dir($system) AND is_dir(DOCROOT.$system))
	$system = DOCROOT.$system;

if ( ! is_dir($media) AND is_dir(DOCROOT.$media))
	$media = DOCROOT.$media;

if ( ! is_dir($riudb) AND is_dir(DOCROOT.$riudb))
	$riudb = DOCROOT.$riudb;

define('APPPATH', realpath($application).DIRECTORY_SEPARATOR);
define('MODPATH', realpath($modules).DIRECTORY_SEPARATOR);
define('SYSPATH', realpath($system).DIRECTORY_SEPARATOR);
define('MEDIAPATH', realpath($media).DIRECTORY_SEPARATOR);
define('RIUDB', realpath($riudb).DIRECTORY_SEPARATOR);

unset($application, $modules, $system, $media, $riudb);

if ( ! defined('KOHANA_START_TIME'))
{
	define('KOHANA_START_TIME', microtime(TRUE));
}

if ( ! defined('KOHANA_START_MEMORY'))
{
	define('KOHANA_START_MEMORY', memory_get_usage());
}

require APPPATH.'bootstrap'.EXT;

//try{
	echo Request::factory()
		->execute()
		->send_headers()
		->body();
//}
//catch (Exception $e)
//{
//	Error::handle($e);
//}
