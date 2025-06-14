<?php
/**
 * @package quip-test
 */
require_once strtr(realpath(dirname(__FILE__)) . '/QuipTestCase.php','\\','/');
/**
 * Main Quip test harness.
 *
 * @package quip-test
 *
 *
 */
class QuipTestHarness {
    /**
     * @var modX Static reference to modX instance.
     */
    public static $modx = null;
    /**
     * @var array Static reference to configuration array.
     */
    public static $properties = array();

    /**
     * Load all Test Suites for xPDO Test Harness.
     *
     * @return QuipTestHarness
     */
    public static function suite() {
        $suite = new QuipTestHarness('QuipHarness');
        return $suite;
    }

    /**
     * Grab a persistent instance of the xPDO class to share connection data
     * across multiple tests and test suites.
     * 
     * @param array $options An array of configuration parameters.
     * @return xPDO An xPDO object instance.
     *
     *
     */
    public static function _getConnection($options = array()) {
        global $config;
        $modx = QuipTestHarness::$modx;
        if (is_object($modx)) {
            if (!$modx->request) { $modx->getRequest(); }
            if (!$modx->error) { $modx->request->loadErrorHandler(); }
            $modx->error->reset();
            QuipTestHarness::$modx = $modx;
            return QuipTestHarness::$modx;
        }
        
        /* include config.core.php */
        $properties = array();
        include_once strtr(realpath(dirname(__FILE__)) . '/config.inc.php','\\','/');
        require_once $config['modx_base_path'].'config.core.php';
        require_once MODX_CORE_PATH.'config/'.MODX_CONFIG_KEY.'.inc.php';
        require_once MODX_CORE_PATH.'model/modx/modx.class.php';
        include_once strtr(realpath(dirname(__FILE__)) . '/properties.inc.php','\\','/');

        if (!defined('MODX_REQP')) {
            define('MODX_REQP',false);
        }
        $modx = new modX(null,$properties);
        $ctx = !empty($options['ctx']) ? $options['ctx'] : 'web';
        $modx->initialize($ctx);

        $debug = !empty($options['debug']);
        $modx->setDebug($debug);
        if (!empty($properties['logTarget'])) $modx->setLogTarget($properties['logTarget']);
        if (!empty($properties['logLevel'])) $modx->setLogLevel($properties['logLevel']);
        $modx->user = $modx->newObject('modUser');
        $modx->user->set('id',$modx->getOption('modx.test.user.id',null,1));
        $modx->user->set('username',$modx->getOption('modx.test.user.username',null,'test'));

        $modx->getRequest();
        $modx->getParser();
        $modx->request->loadErrorHandler();
        
        QuipTestHarness::$modx = $modx;
        return $modx;
    }
}