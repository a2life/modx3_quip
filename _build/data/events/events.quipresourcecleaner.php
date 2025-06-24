<?php
/**
 * Adds events to QuipResourceCleaner plugin
 * 
 * @package quip
 * @subpackage build
 * @var  $modx /MODX/Revolution/modx provided instance
 */
$events = array();

$events['OnEmptyTrash']= $modx->newObject('modPluginEvent');
$events['OnEmptyTrash']->fromArray(array(
    'event' => 'OnEmptyTrash',
    'priority' => 0,
    'propertyset' => 0,
),'',true,true);

return $events;