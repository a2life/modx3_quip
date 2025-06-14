<?php
/**
 * Define the MODX path constants necessary for installation
 *
 * @package quip
 * @subpackage build
 */
//define('MODX_BASE_PATH', dirname(dirname(dirname(dirname(__FILE__)))) . '/modx/');

define('MODX_BASE_PATH', '/var/www/html/'); //modify path to your server setting
define('MODX_CORE_PATH', MODX_BASE_PATH . 'core/');
define('MODX_MANAGER_PATH', MODX_BASE_PATH . 'manager/');
define('MODX_CONNECTORS_PATH', MODX_BASE_PATH . 'connectors/');
define('MODX_ASSETS_PATH', MODX_BASE_PATH . 'assets/');

define('MODX_BASE_URL','/'); //modify path to your server setting
define('MODX_CORE_URL', MODX_BASE_URL . 'core/');
define('MODX_MANAGER_URL', MODX_BASE_URL . 'manager/');
define('MODX_CONNECTORS_URL', MODX_BASE_URL . 'connectors/');
define('MODX_ASSETS_URL', MODX_BASE_URL . 'assets/');