<?php return array (
  '255d5a9c1ba8212c8cda710896f74546' => 
  array (
    'criteria' => 
    array (
      'name' => 'quip',
    ),
    'object' => 
    array (
      'name' => 'quip',
      'path' => '{core_path}components/quip/',
      'assets_path' => '',
    ),
  ),
  '1795b96d358737e0d6a88785db4feea4' => 
  array (
    'criteria' => 
    array (
      'name' => 'recaptcha',
    ),
    'object' => 
    array (
      'name' => 'recaptcha',
      'path' => '{core_path}components/recaptcha/',
      'assets_path' => '',
    ),
  ),
  '8a869287b4cf04a448abff548647293c' => 
  array (
    'criteria' => 
    array (
      'key' => 'quip.emailsFrom',
    ),
    'object' => 
    array (
      'key' => 'quip.emailsFrom',
      'value' => 'dutch@adachis.info',
      'xtype' => 'textfield',
      'namespace' => 'quip',
      'area' => 'email',
      'editedon' => '2025-06-05 03:11:17',
    ),
  ),
  'd04b0cbbd8719488cff5669bffce173b' => 
  array (
    'criteria' => 
    array (
      'key' => 'quip.emails_from_name',
    ),
    'object' => 
    array (
      'key' => 'quip.emails_from_name',
      'value' => 'Quip',
      'xtype' => 'textfield',
      'namespace' => 'quip',
      'area' => 'email',
      'editedon' => NULL,
    ),
  ),
  'd69de7aa9807a3e32cf03f553e7ac770' => 
  array (
    'criteria' => 
    array (
      'key' => 'quip.emailsTo',
    ),
    'object' => 
    array (
      'key' => 'quip.emailsTo',
      'value' => 'dutch@adachis.info',
      'xtype' => 'textfield',
      'namespace' => 'quip',
      'area' => 'email',
      'editedon' => '2025-06-05 03:11:17',
    ),
  ),
  '864f734119129ae3e9daf16ee010478f' => 
  array (
    'criteria' => 
    array (
      'key' => 'quip.emailsReplyTo',
    ),
    'object' => 
    array (
      'key' => 'quip.emailsReplyTo',
      'value' => 'dutch@adachis.info',
      'xtype' => 'textfield',
      'namespace' => 'quip',
      'area' => 'email',
      'editedon' => '2025-06-05 03:11:17',
    ),
  ),
  'b1feb49c04e7ad898395fcaf6e925553' => 
  array (
    'criteria' => 
    array (
      'key' => 'quip.allowed_tags',
    ),
    'object' => 
    array (
      'key' => 'quip.allowed_tags',
      'value' => '<b><i><br>',
      'xtype' => 'textfield',
      'namespace' => 'quip',
      'area' => 'Tags',
      'editedon' => NULL,
    ),
  ),
  '6830bd08461586ba0049bf48c1bbc341' => 
  array (
    'criteria' => 
    array (
      'key' => 'recaptcha.public_key',
    ),
    'object' => 
    array (
      'key' => 'recaptcha.public_key',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'recaptcha',
      'area' => 'reCaptcha',
      'editedon' => NULL,
    ),
  ),
  'dc628022c2b6123e6922b587c39194e5' => 
  array (
    'criteria' => 
    array (
      'key' => 'recaptcha.private_key',
    ),
    'object' => 
    array (
      'key' => 'recaptcha.private_key',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'recaptcha',
      'area' => 'reCaptcha',
      'editedon' => NULL,
    ),
  ),
  '183f62d6d9517aa05402ff41dcc8c8e1' => 
  array (
    'criteria' => 
    array (
      'key' => 'recaptcha.use_ssl',
    ),
    'object' => 
    array (
      'key' => 'recaptcha.use_ssl',
      'value' => '',
      'xtype' => 'combo-boolean',
      'namespace' => 'recaptcha',
      'area' => 'reCaptcha',
      'editedon' => NULL,
    ),
  ),
  '573a15b8818ff0932507f7e205a3db3f' => 
  array (
    'criteria' => 
    array (
      'name' => 'QuipModeratorPolicy',
    ),
    'object' => 
    array (
      'id' => 13,
      'name' => 'QuipModeratorPolicy',
      'description' => 'A policy for moderating Quip comments.',
      'parent' => 0,
      'template' => 8,
      'class' => '',
      'data' => '{"quip.comment_approve":true,"quip.comment_list":true,"quip.comment_list_unapproved":true,"quip.comment_remove":true,"quip.comment_update":true,"quip.thread_list":true,"quip.thread_manage":true,"quip.thread_remove":true,"quip.thread_truncate":true,"quip.thread_view":true,"quip.thread_update":true}',
      'lexicon' => 'quip:permissions',
    ),
  ),
  '60e60b56909202c6f97dc9c53ea03094' => 
  array (
    'criteria' => 
    array (
      'name' => 'QuipModeratorPolicyTemplate',
    ),
    'object' => 
    array (
      'id' => 8,
      'template_group' => 1,
      'name' => 'QuipModeratorPolicyTemplate',
      'description' => 'A policy for moderating Quip comments.',
      'lexicon' => 'quip:permissions',
    ),
  ),
  '68db5ab7ce8539a3c4d176350c2a32c3' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'quip.comment_approve',
    ),
    'object' => 
    array (
      'id' => 229,
      'template' => 8,
      'name' => 'quip.comment_approve',
      'description' => 'perm.comment_approve',
      'value' => 1,
    ),
  ),
  'c20d749f905dd92f852ac0167900ec57' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'quip.comment_list',
    ),
    'object' => 
    array (
      'id' => 230,
      'template' => 8,
      'name' => 'quip.comment_list',
      'description' => 'perm.comment_list',
      'value' => 1,
    ),
  ),
  'c32b61569d6fb9de8bc628902c7b60e7' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'quip.comment_list_unapproved',
    ),
    'object' => 
    array (
      'id' => 231,
      'template' => 8,
      'name' => 'quip.comment_list_unapproved',
      'description' => 'perm.comment_list_unapproved',
      'value' => 1,
    ),
  ),
  '1722dc2c6107d21c22c1c39f0f897fa0' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'quip.comment_remove',
    ),
    'object' => 
    array (
      'id' => 232,
      'template' => 8,
      'name' => 'quip.comment_remove',
      'description' => 'perm.comment_remove',
      'value' => 1,
    ),
  ),
  '165f386b09f3d8acae5431acfaeefb2f' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'quip.comment_update',
    ),
    'object' => 
    array (
      'id' => 233,
      'template' => 8,
      'name' => 'quip.comment_update',
      'description' => 'perm.comment_update',
      'value' => 1,
    ),
  ),
  '5b7ad59a80bbcd8a2914734afb3ec764' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'quip.thread_list',
    ),
    'object' => 
    array (
      'id' => 234,
      'template' => 8,
      'name' => 'quip.thread_list',
      'description' => 'perm.thread_list',
      'value' => 1,
    ),
  ),
  '1eed877305e5f7577d6400024c5e7016' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'quip.thread_manage',
    ),
    'object' => 
    array (
      'id' => 235,
      'template' => 8,
      'name' => 'quip.thread_manage',
      'description' => 'perm.thread_manage',
      'value' => 1,
    ),
  ),
  'a9cf837e03b3573a960209e1fac92b97' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'quip.thread_remove',
    ),
    'object' => 
    array (
      'id' => 236,
      'template' => 8,
      'name' => 'quip.thread_remove',
      'description' => 'perm.thread_remove',
      'value' => 1,
    ),
  ),
  '8c34f92f6ab0593fd1d4d363adc19a08' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'quip.thread_truncate',
    ),
    'object' => 
    array (
      'id' => 237,
      'template' => 8,
      'name' => 'quip.thread_truncate',
      'description' => 'perm.thread_truncate',
      'value' => 1,
    ),
  ),
  'be0f3c16156125a5d62fe79e2eb0a002' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'quip.thread_update',
    ),
    'object' => 
    array (
      'id' => 238,
      'template' => 8,
      'name' => 'quip.thread_update',
      'description' => 'perm.thread_update',
      'value' => 1,
    ),
  ),
  'f4b33aa99aff52d25b7764990c138241' => 
  array (
    'criteria' => 
    array (
      'template' => 8,
      'name' => 'quip.thread_view',
    ),
    'object' => 
    array (
      'id' => 239,
      'template' => 8,
      'name' => 'quip.thread_view',
      'description' => 'perm.thread_view',
      'value' => 1,
    ),
  ),
  '264e0f1980852ac826f36659e0436be4' => 
  array (
    'criteria' => 
    array (
      'name' => 'QuipResourceCleaner',
    ),
    'object' => 
    array (
      'id' => 3,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'QuipResourceCleaner',
      'description' => 'Cleans up threads when a Resource is removed.',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'plugincode' => '/**
 * Quip
 *
 * Copyright 2010-11 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Quip, a simple commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
/**
 * Handles removal of threads if a Resource is deleted.
 * 
 * @package quip
 */
$quip = $modx->getService(\'quip\',\'Quip\',$modx->getOption(\'quip.core_path\',null,$modx->getOption(\'core_path\').\'components/quip/\').\'model/quip/\',$scriptProperties);
if (!($quip instanceof Quip)) return;

switch ($modx->event->name) {
    case \'OnEmptyTrash\':
        foreach ($scriptProperties[\'ids\'] as $id) {
            if (empty($id)) continue;

            $threads = $modx->getCollection(\'quipThread\',array(\'resource\' => $id));
            foreach ($threads as $thread) {
                $modx->log(modX::LOG_LEVEL_INFO,\'[Quip] Removing thread: \'.$thread->get(\'name\'));
                $thread->remove();
            }
        }
        break;
}
return;',
      'locked' => 0,
      'properties' => NULL,
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * Quip
 *
 * Copyright 2010-11 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Quip, a simple commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
/**
 * Handles removal of threads if a Resource is deleted.
 * 
 * @package quip
 */
$quip = $modx->getService(\'quip\',\'Quip\',$modx->getOption(\'quip.core_path\',null,$modx->getOption(\'core_path\').\'components/quip/\').\'model/quip/\',$scriptProperties);
if (!($quip instanceof Quip)) return;

switch ($modx->event->name) {
    case \'OnEmptyTrash\':
        foreach ($scriptProperties[\'ids\'] as $id) {
            if (empty($id)) continue;

            $threads = $modx->getCollection(\'quipThread\',array(\'resource\' => $id));
            foreach ($threads as $thread) {
                $modx->log(modX::LOG_LEVEL_INFO,\'[Quip] Removing thread: \'.$thread->get(\'name\'));
                $thread->remove();
            }
        }
        break;
}
return;',
    ),
  ),
  'a5742954aa84bb104191010fcc1f0f19' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 3,
      'event' => 'OnEmptyTrash',
    ),
    'object' => 
    array (
      'pluginid' => 3,
      'event' => 'OnEmptyTrash',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  'cdbb3bf9b02b9bd54beb23faee3e7ee6' => 
  array (
    'criteria' => 
    array (
      'category' => 'Quip',
    ),
    'object' => 
    array (
      'id' => 4,
      'parent' => 0,
      'category' => 'Quip',
      'rank' => 0,
    ),
  ),
  'e92fc6bb0dfb82585d44762af1edd30b' => 
  array (
    'criteria' => 
    array (
      'name' => 'Quip',
    ),
    'object' => 
    array (
      'id' => 11,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'Quip',
      'description' => 'A simple commenting component.',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '/**
 * Quip
 *
 * Copyright 2010-11 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Quip, a simple commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
/**
 * Quip
 *
 * A simple comments component.
 *
 * @var modX $modx
 * @var array $scriptProperties
 *
 * @name Quip
 * @author Shaun McCormick <shaun@modx.com>
 * @package quip
 */
/** @var Quip $quip */
$quip = $modx->getService(\'quip\',\'Quip\',$modx->getOption(\'quip.core_path\',null,$modx->getOption(\'core_path\').\'components/quip/\').\'model/quip/\',$scriptProperties);
if (!($quip instanceof Quip)) return \'\';

$quip->initialize($modx->context->get(\'key\'));

$controller = $quip->loadController(\'Thread\');
$output = $controller->run($scriptProperties);
return $output;',
      'locked' => 0,
      'properties' => 'a:50:{s:6:"thread";a:7:{s:4:"name";s:6:"thread";s:4:"desc";s:21:"quip.prop_thread_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:6:"parent";a:7:{s:4:"name";s:6:"parent";s:4:"desc";s:21:"quip.prop_parent_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:1:"0";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:8:"threaded";a:7:{s:4:"name";s:8:"threaded";s:4:"desc";s:23:"quip.prop_threaded_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:8:"maxDepth";a:7:{s:4:"name";s:8:"maxDepth";s:4:"desc";s:23:"quip.prop_maxdepth_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:5;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:15:"replyResourceId";a:7:{s:4:"name";s:15:"replyResourceId";s:4:"desc";s:30:"quip.prop_replyresourceid_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:18:"threadedPostMargin";a:7:{s:4:"name";s:18:"threadedPostMargin";s:4:"desc";s:33:"quip.prop_threadedpostmargin_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:15;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:11:"requireAuth";a:7:{s:4:"name";s:11:"requireAuth";s:4:"desc";s:26:"quip.prop_requireauth_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:17:"requireUsergroups";a:7:{s:4:"name";s:17:"requireUsergroups";s:4:"desc";s:32:"quip.prop_requireusergroups_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:6:"closed";a:7:{s:4:"name";s:6:"closed";s:4:"desc";s:21:"quip.prop_closed_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:10:"closeAfter";a:7:{s:4:"name";s:10:"closeAfter";s:4:"desc";s:25:"quip.prop_closeafter_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:14;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:10:"dateFormat";a:7:{s:4:"name";s:10:"dateFormat";s:4:"desc";s:25:"quip.prop_dateformat_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:21:"%b %d, %Y at %I:%M %p";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:10:"useMargins";a:7:{s:4:"name";s:10:"useMargins";s:4:"desc";s:25:"quip.prop_usemargins_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:6:"useCss";a:7:{s:4:"name";s:6:"useCss";s:4:"desc";s:21:"quip.prop_usecss_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:6:"rowCss";a:7:{s:4:"name";s:6:"rowCss";s:4:"desc";s:21:"quip.prop_rowcss_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:12:"quip-comment";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:9:"altRowCss";a:7:{s:4:"name";s:9:"altRowCss";s:4:"desc";s:24:"quip.prop_altrowcss_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:16:"quip-comment-alt";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:5:"olCss";a:7:{s:4:"name";s:5:"olCss";s:4:"desc";s:20:"quip.prop_olcss_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:19:"quip-comment-parent";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:13:"unapprovedCss";a:7:{s:4:"name";s:13:"unapprovedCss";s:4:"desc";s:28:"quip.prop_unapprovedcss_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:15:"quip-unapproved";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:9:"authorTpl";a:7:{s:4:"name";s:9:"authorTpl";s:4:"desc";s:24:"quip.prop_authortpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:13:"quipAuthorTpl";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:9:"nameField";a:7:{s:4:"name";s:9:"nameField";s:4:"desc";s:24:"quip.prop_namefield_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:8:"username";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:17:"showAnonymousName";a:7:{s:4:"name";s:17:"showAnonymousName";s:4:"desc";s:32:"quip.prop_showanonymousname_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:13:"anonymousName";a:7:{s:4:"name";s:13:"anonymousName";s:4:"desc";s:28:"quip.prop_anonymousname_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:11:"allowRemove";a:7:{s:4:"name";s:11:"allowRemove";s:4:"desc";s:26:"quip.prop_allowremove_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:15:"removeThreshold";a:7:{s:4:"name";s:15:"removeThreshold";s:4:"desc";s:30:"quip.prop_removethreshold_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:3;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:17:"allowReportAsSpam";a:7:{s:4:"name";s:17:"allowReportAsSpam";s:4:"desc";s:32:"quip.prop_allowreportasspam_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:11:"useGravatar";a:7:{s:4:"name";s:11:"useGravatar";s:4:"desc";s:26:"quip.prop_usegravatar_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:12:"gravatarIcon";a:7:{s:4:"name";s:12:"gravatarIcon";s:4:"desc";s:27:"quip.prop_gravataricon_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:9:"identicon";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:12:"gravatarSize";a:7:{s:4:"name";s:12:"gravatarSize";s:4:"desc";s:27:"quip.prop_gravatarsize_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:50;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:6:"sortBy";a:7:{s:4:"name";s:6:"sortBy";s:4:"desc";s:21:"quip.prop_sortby_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:4:"rank";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:11:"sortByAlias";a:7:{s:4:"name";s:11:"sortByAlias";s:4:"desc";s:26:"quip.prop_sortbyalias_desc";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:12:"quip.comment";s:5:"value";s:11:"quipComment";}i:1;a:2:{s:4:"text";s:11:"quip.author";s:5:"value";s:6:"Author";}}s:5:"value";s:11:"quipComment";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:7:"sortDir";a:7:{s:4:"name";s:7:"sortDir";s:4:"desc";s:22:"quip.prop_sortdir_desc";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:14:"quip.ascending";s:5:"value";s:3:"ASC";}i:1;a:2:{s:4:"text";s:15:"quip.descending";s:5:"value";s:4:"DESC";}}s:5:"value";s:3:"ASC";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:28:"quip.prop_toplaceholder_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:17:"placeholderPrefix";a:7:{s:4:"name";s:17:"placeholderPrefix";s:4:"desc";s:32:"quip.prop_placeholderprefix_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:4:"quip";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:10:"tplComment";a:7:{s:4:"name";s:10:"tplComment";s:4:"desc";s:25:"quip.prop_tplcomment_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:11:"quipComment";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:17:"tplCommentOptions";a:7:{s:4:"name";s:17:"tplCommentOptions";s:4:"desc";s:32:"quip.prop_tplcommentoptions_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:18:"quipCommentOptions";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:11:"tplComments";a:7:{s:4:"name";s:11:"tplComments";s:4:"desc";s:26:"quip.prop_tplcomments_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:12:"quipComments";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:9:"tplReport";a:7:{s:4:"name";s:9:"tplReport";s:4:"desc";s:24:"quip.prop_tplreport_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:10:"quipReport";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:12:"reportAction";a:7:{s:4:"name";s:12:"reportAction";s:4:"desc";s:27:"quip.prop_reportaction_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:11:"quip_report";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:12:"removeAction";a:7:{s:4:"name";s:12:"removeAction";s:4:"desc";s:27:"quip.prop_removeaction_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:11:"quip_remove";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:8:"idPrefix";a:7:{s:4:"name";s:8:"idPrefix";s:4:"desc";s:23:"quip.prop_idprefix_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:4:"qcom";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:5:"debug";a:7:{s:4:"name";s:5:"debug";s:4:"desc";s:20:"quip.prop_debug_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:9:"debugUser";a:7:{s:4:"name";s:9:"debugUser";s:4:"desc";s:24:"quip.prop_debuguser_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:11:"debugUserId";a:7:{s:4:"name";s:11:"debugUserId";s:4:"desc";s:26:"quip.prop_debuguserid_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:5:"limit";a:7:{s:4:"name";s:5:"limit";s:4:"desc";s:20:"quip.prop_limit_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:0;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:5:"start";a:7:{s:4:"name";s:5:"start";s:4:"desc";s:20:"quip.prop_start_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:0;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:13:"tplPagination";a:7:{s:4:"name";s:13:"tplPagination";s:4:"desc";s:28:"quip.prop_tplpagination_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:14:"quipPagination";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:17:"tplPaginationItem";a:7:{s:4:"name";s:17:"tplPaginationItem";s:4:"desc";s:32:"quip.prop_tplpaginationitem_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:18:"quipPaginationItem";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:24:"tplPaginationCurrentItem";a:7:{s:4:"name";s:24:"tplPaginationCurrentItem";s:4:"desc";s:39:"quip.prop_tplpaginationcurrentitem_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:25:"quipPaginationCurrentItem";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:13:"paginationCls";a:7:{s:4:"name";s:13:"paginationCls";s:4:"desc";s:28:"quip.prop_paginationcls_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:15:"quip-pagination";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:7:"pageCls";a:7:{s:4:"name";s:7:"pageCls";s:4:"desc";s:22:"quip.prop_pagecls_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:16:"quip-page-number";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:14:"currentPageCls";a:7:{s:4:"name";s:14:"currentPageCls";s:4:"desc";s:29:"quip.prop_currentpagecls_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:17:"quip-page-current";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * Quip
 *
 * Copyright 2010-11 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Quip, a simple commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
/**
 * Quip
 *
 * A simple comments component.
 *
 * @var modX $modx
 * @var array $scriptProperties
 *
 * @name Quip
 * @author Shaun McCormick <shaun@modx.com>
 * @package quip
 */
/** @var Quip $quip */
$quip = $modx->getService(\'quip\',\'Quip\',$modx->getOption(\'quip.core_path\',null,$modx->getOption(\'core_path\').\'components/quip/\').\'model/quip/\',$scriptProperties);
if (!($quip instanceof Quip)) return \'\';

$quip->initialize($modx->context->get(\'key\'));

$controller = $quip->loadController(\'Thread\');
$output = $controller->run($scriptProperties);
return $output;',
    ),
  ),
  '1772f6245e7fea358cb91654e934308e' => 
  array (
    'criteria' => 
    array (
      'name' => 'QuipCount',
    ),
    'object' => 
    array (
      'id' => 12,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'QuipCount',
      'description' => 'An assistance snippet for getting thread/user comment counts.',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '/**
 * Quip
 *
 * Copyright 2010-11 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Quip, a simple commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
/**
 * QuipCount
 *
 * Gets the total # of comments in a thread or by a user.
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var Quip $quip
 *
 * @name QuipCount
 * @author Shaun McCormick <shaun@modx.com>
 * @package quip
 */
$quip = $modx->getService(\'quip\',\'Quip\',$modx->getOption(\'quip.core_path\',null,$modx->getOption(\'core_path\').\'components/quip/\').\'model/quip/\',$scriptProperties);
if (!($quip instanceof Quip)) return \'\';
$quip->initialize($modx->context->get(\'key\'));
$controller = $quip->loadController(\'ThreadCount\');
$output = $controller->run($scriptProperties);
return $output;',
      'locked' => 0,
      'properties' => 'a:5:{s:4:"type";a:7:{s:4:"name";s:4:"type";s:4:"desc";s:25:"quip.prop_count_type_desc";s:4:"type";s:4:"list";s:7:"options";a:3:{i:0;a:2:{s:4:"text";s:11:"quip.thread";s:5:"value";s:6:"thread";}i:1;a:2:{s:4:"text";s:9:"quip.user";s:5:"value";s:4:"user";}i:2;a:2:{s:4:"text";s:11:"quip.family";s:5:"value";s:6:"family";}}s:5:"value";s:6:"thread";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:6:"thread";a:7:{s:4:"name";s:6:"thread";s:4:"desc";s:27:"quip.prop_count_thread_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:4:"user";a:7:{s:4:"name";s:4:"user";s:4:"desc";s:25:"quip.prop_count_user_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:6:"family";a:7:{s:4:"name";s:6:"family";s:4:"desc";s:27:"quip.prop_count_family_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:34:"quip.prop_count_toplaceholder_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * Quip
 *
 * Copyright 2010-11 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Quip, a simple commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
/**
 * QuipCount
 *
 * Gets the total # of comments in a thread or by a user.
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var Quip $quip
 *
 * @name QuipCount
 * @author Shaun McCormick <shaun@modx.com>
 * @package quip
 */
$quip = $modx->getService(\'quip\',\'Quip\',$modx->getOption(\'quip.core_path\',null,$modx->getOption(\'core_path\').\'components/quip/\').\'model/quip/\',$scriptProperties);
if (!($quip instanceof Quip)) return \'\';
$quip->initialize($modx->context->get(\'key\'));
$controller = $quip->loadController(\'ThreadCount\');
$output = $controller->run($scriptProperties);
return $output;',
    ),
  ),
  'b9852b6aa60ff3eb96787fa80b3a8e1c' => 
  array (
    'criteria' => 
    array (
      'name' => 'QuipLatestComments',
    ),
    'object' => 
    array (
      'id' => 13,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'QuipLatestComments',
      'description' => 'An assistance snippet for getting the latest comments for the whole site or a thread or user.',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '/**
 * Quip
 *
 * Copyright 2010-11 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Quip, a simple commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
/**
 * QuipLatestComments
 *
 * Gets latest comments in a thread or by a user.
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var Quip $quip
 * 
 * @name QuipLatestComments
 * @author Shaun McCormick <shaun@modx.com>
 * @package quip
 */
$quip = $modx->getService(\'quip\',\'Quip\',$modx->getOption(\'quip.core_path\',null,$modx->getOption(\'core_path\').\'components/quip/\').\'model/quip/\',$scriptProperties);
if (!($quip instanceof Quip)) return \'\';
$quip->initialize($modx->context->get(\'key\'));
$controller = $quip->loadController(\'LatestComments\');
$output = $controller->run($scriptProperties);
return $output;',
      'locked' => 0,
      'properties' => 'a:18:{s:4:"type";a:7:{s:4:"name";s:4:"type";s:4:"desc";s:24:"quip.prop_late_type_desc";s:4:"type";s:4:"list";s:7:"options";a:4:{i:0;a:2:{s:5:"value";s:3:"all";s:4:"text";s:8:"quip.all";}i:1;a:2:{s:5:"value";s:6:"thread";s:4:"text";s:11:"quip.thread";}i:2;a:2:{s:5:"value";s:6:"family";s:4:"text";s:11:"quip.family";}i:3;a:2:{s:5:"value";s:4:"user";s:4:"text";s:9:"quip.user";}}s:5:"value";s:3:"all";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:23:"quip.prop_late_tpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:17:"quipLatestComment";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:6:"thread";a:7:{s:4:"name";s:6:"thread";s:4:"desc";s:26:"quip.prop_late_thread_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:4:"user";a:7:{s:4:"name";s:4:"user";s:4:"desc";s:24:"quip.prop_late_user_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:6:"family";a:7:{s:4:"name";s:6:"family";s:4:"desc";s:26:"quip.prop_late_family_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:9:"stripTags";a:7:{s:4:"name";s:9:"stripTags";s:4:"desc";s:29:"quip.prop_late_striptags_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:10:"dateFormat";a:7:{s:4:"name";s:10:"dateFormat";s:4:"desc";s:30:"quip.prop_late_dateformat_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:21:"%b %d, %Y at %I:%M %p";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:9:"bodyLimit";a:7:{s:4:"name";s:9:"bodyLimit";s:4:"desc";s:29:"quip.prop_late_bodylimit_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:30;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:6:"rowCss";a:7:{s:4:"name";s:6:"rowCss";s:4:"desc";s:26:"quip.prop_late_rowcss_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:19:"quip-latest-comment";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:9:"altRowCss";a:7:{s:4:"name";s:9:"altRowCss";s:4:"desc";s:29:"quip.prop_late_altrowcss_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:23:"quip-latest-comment-alt";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:5:"limit";a:7:{s:4:"name";s:5:"limit";s:4:"desc";s:25:"quip.prop_late_limit_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:5;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:5:"start";a:7:{s:4:"name";s:5:"start";s:4:"desc";s:25:"quip.prop_late_start_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:0;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:6:"sortBy";a:7:{s:4:"name";s:6:"sortBy";s:4:"desc";s:26:"quip.prop_late_sortby_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:9:"createdon";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:11:"sortByAlias";a:7:{s:4:"name";s:11:"sortByAlias";s:4:"desc";s:31:"quip.prop_late_sortbyalias_desc";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:12:"quip.comment";s:5:"value";s:11:"quipComment";}i:1;a:2:{s:4:"text";s:11:"quip.author";s:5:"value";s:6:"Author";}}s:5:"value";s:11:"quipComment";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:7:"sortDir";a:7:{s:4:"name";s:7:"sortDir";s:4:"desc";s:27:"quip.prop_late_sortdir_desc";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:14:"quip.ascending";s:5:"value";s:3:"ASC";}i:1;a:2:{s:4:"text";s:15:"quip.descending";s:5:"value";s:4:"DESC";}}s:5:"value";s:4:"DESC";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:8:"contexts";a:7:{s:4:"name";s:8:"contexts";s:4:"desc";s:28:"quip.prop_late_contexts_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:33:"quip.prop_late_toplaceholder_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:17:"placeholderPrefix";a:7:{s:4:"name";s:17:"placeholderPrefix";s:4:"desc";s:37:"quip.prop_late_placeholderprefix_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:11:"quip.latest";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * Quip
 *
 * Copyright 2010-11 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Quip, a simple commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
/**
 * QuipLatestComments
 *
 * Gets latest comments in a thread or by a user.
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var Quip $quip
 * 
 * @name QuipLatestComments
 * @author Shaun McCormick <shaun@modx.com>
 * @package quip
 */
$quip = $modx->getService(\'quip\',\'Quip\',$modx->getOption(\'quip.core_path\',null,$modx->getOption(\'core_path\').\'components/quip/\').\'model/quip/\',$scriptProperties);
if (!($quip instanceof Quip)) return \'\';
$quip->initialize($modx->context->get(\'key\'));
$controller = $quip->loadController(\'LatestComments\');
$output = $controller->run($scriptProperties);
return $output;',
    ),
  ),
  '97a7854059d4e63ba575a9b128d39854' => 
  array (
    'criteria' => 
    array (
      'name' => 'QuipReply',
    ),
    'object' => 
    array (
      'id' => 14,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'QuipReply',
      'description' => 'Displays a reply form for comments.',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '/**
 * Quip
 *
 * Copyright 2010-11 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Quip, a simple commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
/**
 * Displays a reply form for a thread
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var Quip $quip
 *
 * @name QuipReply
 * @author Shaun McCormick <shaun@modx.com>
 * @package quip
 */
$quip = $modx->getService(\'quip\',\'Quip\',$modx->getOption(\'quip.core_path\',null,$modx->getOption(\'core_path\').\'components/quip/\').\'model/quip/\',$scriptProperties);
if (!($quip instanceof Quip)) return \'\';

$quip->initialize($modx->context->get(\'key\'));
$controller = $quip->loadController(\'ThreadReply\');
$output = $controller->run($scriptProperties);
return $output;',
      'locked' => 0,
      'properties' => 'a:34:{s:11:"requireAuth";a:7:{s:4:"name";s:11:"requireAuth";s:4:"desc";s:32:"quip.prop_reply_requireauth_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:17:"requireUsergroups";a:7:{s:4:"name";s:17:"requireUsergroups";s:4:"desc";s:38:"quip.prop_reply_requireusergroups_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:14:"requirePreview";a:7:{s:4:"name";s:14:"requirePreview";s:4:"desc";s:35:"quip.prop_reply_requirepreview_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:6:"closed";a:7:{s:4:"name";s:6:"closed";s:4:"desc";s:27:"quip.prop_reply_closed_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:10:"closeAfter";a:7:{s:4:"name";s:10:"closeAfter";s:4:"desc";s:31:"quip.prop_reply_closeafter_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:14;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:8:"moderate";a:7:{s:4:"name";s:8:"moderate";s:4:"desc";s:29:"quip.prop_reply_moderate_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:21:"moderateAnonymousOnly";a:7:{s:4:"name";s:21:"moderateAnonymousOnly";s:4:"desc";s:42:"quip.prop_reply_moderateanonymousonly_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:21:"moderateFirstPostOnly";a:7:{s:4:"name";s:21:"moderateFirstPostOnly";s:4:"desc";s:42:"quip.prop_reply_moderatefirstpostonly_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:10:"moderators";a:7:{s:4:"name";s:10:"moderators";s:4:"desc";s:31:"quip.prop_reply_moderators_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:14:"moderatorGroup";a:7:{s:4:"name";s:14:"moderatorGroup";s:4:"desc";s:35:"quip.prop_reply_moderatorgroup_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:13:"Administrator";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:24:"dontModerateManagerUsers";a:7:{s:4:"name";s:24:"dontModerateManagerUsers";s:4:"desc";s:45:"quip.prop_reply_dontmoderatemanagerusers_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:10:"dateFormat";a:7:{s:4:"name";s:10:"dateFormat";s:4:"desc";s:31:"quip.prop_reply_dateformat_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:21:"%b %d, %Y at %I:%M %p";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:6:"useCss";a:7:{s:4:"name";s:6:"useCss";s:4:"desc";s:27:"quip.prop_reply_usecss_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:12:"notifyEmails";a:7:{s:4:"name";s:12:"notifyEmails";s:4:"desc";s:33:"quip.prop_reply_notifyemails_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:9:"recaptcha";a:7:{s:4:"name";s:9:"recaptcha";s:4:"desc";s:30:"quip.prop_reply_recaptcha_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:14:"recaptchaTheme";a:7:{s:4:"name";s:14:"recaptchaTheme";s:4:"desc";s:35:"quip.prop_reply_recaptchatheme_desc";s:4:"type";s:4:"list";s:7:"options";a:4:{i:0;a:2:{s:4:"text";s:12:"quip.opt_red";s:5:"value";s:3:"red";}i:1;a:2:{s:4:"text";s:14:"quip.opt_white";s:5:"value";s:5:"white";}i:2;a:2:{s:4:"text";s:14:"quip.opt_clean";s:5:"value";s:5:"clean";}i:3;a:2:{s:4:"text";s:19:"quip.opt_blackglass";s:5:"value";s:10:"blackglass";}}s:5:"value";s:5:"clean";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:28:"disableRecaptchaWhenLoggedIn";a:7:{s:4:"name";s:28:"disableRecaptchaWhenLoggedIn";s:4:"desc";s:49:"quip.prop_reply_disablerecaptchawhenloggedin_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:16:"autoConvertLinks";a:7:{s:4:"name";s:16:"autoConvertLinks";s:4:"desc";s:37:"quip.prop_reply_autoconvertlinks_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:24:"extraAutoLinksAttributes";a:7:{s:4:"name";s:24:"extraAutoLinksAttributes";s:4:"desc";s:45:"quip.prop_reply_extraautolinksattributes_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:11:"useGravatar";a:7:{s:4:"name";s:11:"useGravatar";s:4:"desc";s:32:"quip.prop_reply_usegravatar_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:12:"gravatarIcon";a:7:{s:4:"name";s:12:"gravatarIcon";s:4:"desc";s:33:"quip.prop_reply_gravataricon_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:9:"identicon";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:12:"gravatarSize";a:7:{s:4:"name";s:12:"gravatarSize";s:4:"desc";s:33:"quip.prop_reply_gravatarsize_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:50;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:13:"tplAddComment";a:7:{s:4:"name";s:13:"tplAddComment";s:4:"desc";s:34:"quip.prop_reply_tpladdcomment_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:14:"quipAddComment";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:17:"tplLoginToComment";a:7:{s:4:"name";s:17:"tplLoginToComment";s:4:"desc";s:38:"quip.prop_reply_tpllogintocomment_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:18:"quipLoginToComment";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:10:"tplPreview";a:7:{s:4:"name";s:10:"tplPreview";s:4:"desc";s:31:"quip.prop_reply_tplpreview_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:18:"quipPreviewComment";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:9:"tplReport";a:7:{s:4:"name";s:9:"tplReport";s:4:"desc";s:30:"quip.prop_reply_tplreport_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:10:"quipReport";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:10:"postAction";a:7:{s:4:"name";s:10:"postAction";s:4:"desc";s:31:"quip.prop_reply_postaction_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:9:"quip-post";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:13:"previewAction";a:7:{s:4:"name";s:13:"previewAction";s:4:"desc";s:34:"quip.prop_reply_previewaction_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:12:"quip-preview";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:8:"idPrefix";a:7:{s:4:"name";s:8:"idPrefix";s:4:"desc";s:29:"quip.prop_reply_idprefix_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:4:"qcom";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:10:"redirectTo";a:7:{s:4:"name";s:10:"redirectTo";s:4:"desc";s:31:"quip.prop_reply_redirectto_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:13:"redirectToUrl";a:7:{s:4:"name";s:13:"redirectToUrl";s:4:"desc";s:34:"quip.prop_reply_redirecttourl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:5:"debug";a:7:{s:4:"name";s:5:"debug";s:4:"desc";s:26:"quip.prop_reply_debug_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:9:"debugUser";a:7:{s:4:"name";s:9:"debugUser";s:4:"desc";s:30:"quip.prop_reply_debuguser_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:11:"debugUserId";a:7:{s:4:"name";s:11:"debugUserId";s:4:"desc";s:32:"quip.prop_reply_debuguserid_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * Quip
 *
 * Copyright 2010-11 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Quip, a simple commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
/**
 * Displays a reply form for a thread
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var Quip $quip
 *
 * @name QuipReply
 * @author Shaun McCormick <shaun@modx.com>
 * @package quip
 */
$quip = $modx->getService(\'quip\',\'Quip\',$modx->getOption(\'quip.core_path\',null,$modx->getOption(\'core_path\').\'components/quip/\').\'model/quip/\',$scriptProperties);
if (!($quip instanceof Quip)) return \'\';

$quip->initialize($modx->context->get(\'key\'));
$controller = $quip->loadController(\'ThreadReply\');
$output = $controller->run($scriptProperties);
return $output;',
    ),
  ),
  'ca8a03f40255c3524d2c907f0bbd1d26' => 
  array (
    'criteria' => 
    array (
      'name' => 'QuipRss',
    ),
    'object' => 
    array (
      'id' => 15,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'QuipRss',
      'description' => 'Generates an RSS of latest comments for a thread or by a user.',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '/**
 * Quip
 *
 * Copyright 2010-11 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Quip, a simple commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
/**
 * QuipLatestComments
 *
 * Generates an RSS of latest comments for a thread or by a user.
 *
 * @var Quip $quip
 * @var modX $modx
 * @var array $scriptProperties
 * 
 * @name QuipRss
 * @author Shaun McCormick <shaun@modx.com>
 * @package quip
 */
$quip = $modx->getService(\'quip\',\'Quip\',$modx->getOption(\'quip.core_path\',null,$modx->getOption(\'core_path\').\'components/quip/\').\'model/quip/\',$scriptProperties);
if (!($quip instanceof Quip)) return \'\';

/* setup default properties */
$type = $modx->getOption(\'type\',$scriptProperties,\'all\');
$tpl = $modx->getOption(\'tpl\',$scriptProperties,\'quipRssComment\');
$containerTpl = $modx->getOption(\'containerTpl\',$scriptProperties,\'quipRssContainer\');
$limit = $modx->getOption(\'limit\',$scriptProperties,5);
$start = $modx->getOption(\'start\',$scriptProperties,0);
$sortBy = $modx->getOption(\'sortBy\',$scriptProperties,\'createdon\');
$sortByAlias = $modx->getOption(\'sortByAlias\',$scriptProperties,\'quipComment\');
$sortDir = $modx->getOption(\'sortDir\',$scriptProperties,\'DESC\');

$dateFormat = $modx->getOption(\'dateFormat\',$scriptProperties,\'%b %d, %Y at %I:%M %p\');
$stripTags = $modx->getOption(\'stripTags\',$scriptProperties,true);
$bodyLimit = $modx->getOption(\'bodyLimit\',$scriptProperties,30);

$pagetitle = $modx->getOption(\'pagetitle\',$scriptProperties,\'\');

/* build query by type */
$c = $modx->newQuery(\'quipComment\');
$c->select($modx->getSelectColumns(\'quipComment\',\'quipComment\'));
$c->select(array(
    \'Resource.pagetitle\',
));
$c->leftJoin(\'modUser\',\'Author\');
$c->leftJoin(\'modResource\',\'Resource\');
switch ($type) {
    case \'user\':
        if (empty($scriptProperties[\'user\'])) return \'\';
        if (is_numeric($scriptProperties[\'user\'])) {
            $c->where(array(
                \'Author.id\' => $scriptProperties[\'user\'],
            ));
        } else {
            $c->where(array(
                \'Author.username\' => $scriptProperties[\'user\'],
            ));
        }
        break;
    case \'thread\':
        if (empty($scriptProperties[\'thread\'])) return \'\';
        $c->where(array(
            \'quipComment.thread\' => $scriptProperties[\'thread\'],
        ));
        break;
    case \'family\':
        if (empty($scriptProperties[\'family\'])) return \'\';
        $c->where(array(
            \'quipComment.thread:LIKE\' => $scriptProperties[\'family\'],
        ));
        break;
    case \'all\':
    default:
        break;
}
$contexts = $modx->getOption(\'contexts\',$scriptProperties,\'\');
if (!empty($contexts)) {
    $c->where(array(
        \'Resource.context_key:IN\' => explode(\',\',$contexts),
    ));
}
$c->where(array(
    \'quipComment.deleted\' => false,
    \'quipComment.approved\' => true,
));
$c->sortby(\'`\'.$sortByAlias.\'`.`\'.$sortBy.\'`\',$sortDir);
$c->limit($limit,$start);
$comments = $modx->getCollection(\'quipComment\',$c);

/* iterate */
$pagePlaceholders = array();
$output = array();
$alt = false;
$commentArray = array();
/** @var quipComment $comment */
foreach ($comments as $comment) {
    $commentArray = $comment->toArray();
    $commentArray[\'bodyLimit\'] = $bodyLimit;
    $commentArray[\'url\'] = $comment->makeUrl(0,array(),array(
        \'scheme\' => \'full\',
    ));

    if (!empty($stripTags)) { $commentArray[\'body\'] = strip_tags($commentArray[\'body\']); }

    $commentArray[\'ago\'] = $quip->getTimeAgo($commentArray[\'createdon\']);

    $output[] = $quip->getChunk($tpl,$commentArray);
    $alt = !$alt;
}

/* set page placeholders */
$pagePlaceholders = array();
$pagePlaceholders[\'resource\'] = $commentArray[\'resource\'];
$pagePlaceholders[\'pagetitle\'] = empty($pagetitle)? $commentArray[\'pagetitle\'] : $pagetitle;
$placeholderPrefix = $modx->getOption(\'placeholderPrefix\',$scriptProperties,\'quip.latest\');
$modx->toPlaceholders($pagePlaceholders,$placeholderPrefix);

/* generate output and wrap */
$outputSeparator = $modx->getOption(\'outputSeparator\',$scriptProperties,"\\n");
$output = implode($outputSeparator,$output);

if (!empty($containerTpl)) {
    $output = $quip->getChunk($containerTpl,array(
        \'comments\' => $output,
    ));
}

/* set to placeholder or return output */
$toPlaceholder = $modx->getOption(\'toPlaceholder\',$scriptProperties,false);
if ($toPlaceholder) {
    $modx->setPlaceholder($toPlaceholder,$output);
    return \'\';
}
return $output;',
      'locked' => 0,
      'properties' => 'a:17:{s:4:"type";a:7:{s:4:"name";s:4:"type";s:4:"desc";s:24:"quip.prop_late_type_desc";s:4:"type";s:4:"list";s:7:"options";a:4:{i:0;a:2:{s:5:"value";s:3:"all";s:4:"text";s:8:"quip.all";}i:1;a:2:{s:5:"value";s:6:"thread";s:4:"text";s:11:"quip.thread";}i:2;a:2:{s:5:"value";s:6:"family";s:4:"text";s:11:"quip.family";}i:3;a:2:{s:5:"value";s:4:"user";s:4:"text";s:9:"quip.user";}}s:5:"value";s:3:"all";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:22:"quip.prop_rss_tpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:14:"quipRssComment";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:12:"containerTpl";a:7:{s:4:"name";s:12:"containerTpl";s:4:"desc";s:31:"quip.prop_rss_containertpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:16:"quipRssContainer";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:6:"thread";a:7:{s:4:"name";s:6:"thread";s:4:"desc";s:26:"quip.prop_late_thread_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:4:"user";a:7:{s:4:"name";s:4:"user";s:4:"desc";s:24:"quip.prop_late_user_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:6:"family";a:7:{s:4:"name";s:6:"family";s:4:"desc";s:26:"quip.prop_late_family_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:9:"stripTags";a:7:{s:4:"name";s:9:"stripTags";s:4:"desc";s:29:"quip.prop_late_striptags_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:10:"dateFormat";a:7:{s:4:"name";s:10:"dateFormat";s:4:"desc";s:30:"quip.prop_late_dateformat_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:21:"%b %d, %Y at %I:%M %p";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:9:"bodyLimit";a:7:{s:4:"name";s:9:"bodyLimit";s:4:"desc";s:29:"quip.prop_late_bodylimit_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:30;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:5:"limit";a:7:{s:4:"name";s:5:"limit";s:4:"desc";s:25:"quip.prop_late_limit_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:5;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:5:"start";a:7:{s:4:"name";s:5:"start";s:4:"desc";s:25:"quip.prop_late_start_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";i:0;s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:6:"sortBy";a:7:{s:4:"name";s:6:"sortBy";s:4:"desc";s:26:"quip.prop_late_sortby_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:9:"createdon";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:11:"sortByAlias";a:7:{s:4:"name";s:11:"sortByAlias";s:4:"desc";s:31:"quip.prop_late_sortbyalias_desc";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:12:"quip.comment";s:5:"value";s:11:"quipComment";}i:1;a:2:{s:4:"text";s:11:"quip.author";s:5:"value";s:6:"Author";}}s:5:"value";s:11:"quipComment";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:7:"sortDir";a:7:{s:4:"name";s:7:"sortDir";s:4:"desc";s:27:"quip.prop_late_sortdir_desc";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:14:"quip.ascending";s:5:"value";s:3:"ASC";}i:1;a:2:{s:4:"text";s:15:"quip.descending";s:5:"value";s:4:"DESC";}}s:5:"value";s:4:"DESC";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:8:"contexts";a:7:{s:4:"name";s:8:"contexts";s:4:"desc";s:28:"quip.prop_late_contexts_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:33:"quip.prop_late_toplaceholder_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}s:17:"placeholderPrefix";a:7:{s:4:"name";s:17:"placeholderPrefix";s:4:"desc";s:36:"quip.prop_rss_placeholderprefix_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:11:"quip.latest";s:7:"lexicon";s:15:"quip:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * Quip
 *
 * Copyright 2010-11 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Quip, a simple commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
/**
 * QuipLatestComments
 *
 * Generates an RSS of latest comments for a thread or by a user.
 *
 * @var Quip $quip
 * @var modX $modx
 * @var array $scriptProperties
 * 
 * @name QuipRss
 * @author Shaun McCormick <shaun@modx.com>
 * @package quip
 */
$quip = $modx->getService(\'quip\',\'Quip\',$modx->getOption(\'quip.core_path\',null,$modx->getOption(\'core_path\').\'components/quip/\').\'model/quip/\',$scriptProperties);
if (!($quip instanceof Quip)) return \'\';

/* setup default properties */
$type = $modx->getOption(\'type\',$scriptProperties,\'all\');
$tpl = $modx->getOption(\'tpl\',$scriptProperties,\'quipRssComment\');
$containerTpl = $modx->getOption(\'containerTpl\',$scriptProperties,\'quipRssContainer\');
$limit = $modx->getOption(\'limit\',$scriptProperties,5);
$start = $modx->getOption(\'start\',$scriptProperties,0);
$sortBy = $modx->getOption(\'sortBy\',$scriptProperties,\'createdon\');
$sortByAlias = $modx->getOption(\'sortByAlias\',$scriptProperties,\'quipComment\');
$sortDir = $modx->getOption(\'sortDir\',$scriptProperties,\'DESC\');

$dateFormat = $modx->getOption(\'dateFormat\',$scriptProperties,\'%b %d, %Y at %I:%M %p\');
$stripTags = $modx->getOption(\'stripTags\',$scriptProperties,true);
$bodyLimit = $modx->getOption(\'bodyLimit\',$scriptProperties,30);

$pagetitle = $modx->getOption(\'pagetitle\',$scriptProperties,\'\');

/* build query by type */
$c = $modx->newQuery(\'quipComment\');
$c->select($modx->getSelectColumns(\'quipComment\',\'quipComment\'));
$c->select(array(
    \'Resource.pagetitle\',
));
$c->leftJoin(\'modUser\',\'Author\');
$c->leftJoin(\'modResource\',\'Resource\');
switch ($type) {
    case \'user\':
        if (empty($scriptProperties[\'user\'])) return \'\';
        if (is_numeric($scriptProperties[\'user\'])) {
            $c->where(array(
                \'Author.id\' => $scriptProperties[\'user\'],
            ));
        } else {
            $c->where(array(
                \'Author.username\' => $scriptProperties[\'user\'],
            ));
        }
        break;
    case \'thread\':
        if (empty($scriptProperties[\'thread\'])) return \'\';
        $c->where(array(
            \'quipComment.thread\' => $scriptProperties[\'thread\'],
        ));
        break;
    case \'family\':
        if (empty($scriptProperties[\'family\'])) return \'\';
        $c->where(array(
            \'quipComment.thread:LIKE\' => $scriptProperties[\'family\'],
        ));
        break;
    case \'all\':
    default:
        break;
}
$contexts = $modx->getOption(\'contexts\',$scriptProperties,\'\');
if (!empty($contexts)) {
    $c->where(array(
        \'Resource.context_key:IN\' => explode(\',\',$contexts),
    ));
}
$c->where(array(
    \'quipComment.deleted\' => false,
    \'quipComment.approved\' => true,
));
$c->sortby(\'`\'.$sortByAlias.\'`.`\'.$sortBy.\'`\',$sortDir);
$c->limit($limit,$start);
$comments = $modx->getCollection(\'quipComment\',$c);

/* iterate */
$pagePlaceholders = array();
$output = array();
$alt = false;
$commentArray = array();
/** @var quipComment $comment */
foreach ($comments as $comment) {
    $commentArray = $comment->toArray();
    $commentArray[\'bodyLimit\'] = $bodyLimit;
    $commentArray[\'url\'] = $comment->makeUrl(0,array(),array(
        \'scheme\' => \'full\',
    ));

    if (!empty($stripTags)) { $commentArray[\'body\'] = strip_tags($commentArray[\'body\']); }

    $commentArray[\'ago\'] = $quip->getTimeAgo($commentArray[\'createdon\']);

    $output[] = $quip->getChunk($tpl,$commentArray);
    $alt = !$alt;
}

/* set page placeholders */
$pagePlaceholders = array();
$pagePlaceholders[\'resource\'] = $commentArray[\'resource\'];
$pagePlaceholders[\'pagetitle\'] = empty($pagetitle)? $commentArray[\'pagetitle\'] : $pagetitle;
$placeholderPrefix = $modx->getOption(\'placeholderPrefix\',$scriptProperties,\'quip.latest\');
$modx->toPlaceholders($pagePlaceholders,$placeholderPrefix);

/* generate output and wrap */
$outputSeparator = $modx->getOption(\'outputSeparator\',$scriptProperties,"\\n");
$output = implode($outputSeparator,$output);

if (!empty($containerTpl)) {
    $output = $quip->getChunk($containerTpl,array(
        \'comments\' => $output,
    ));
}

/* set to placeholder or return output */
$toPlaceholder = $modx->getOption(\'toPlaceholder\',$scriptProperties,false);
if ($toPlaceholder) {
    $modx->setPlaceholder($toPlaceholder,$output);
    return \'\';
}
return $output;',
    ),
  ),
);