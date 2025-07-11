<?php
/**
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
 * Adds modActions and modMenus into package
 *
 * @package quip
 * @subpackage build
 * @var $modx modx provided instance
 */


/* load quip menu  */
    $menu = $modx->newObject(\MODX\Revolution\modMenu::class);
    $fields=[
        'parent' => 'components',
        'text' => 'quip',
        'description' => 'quip_desc',
        'icon' => '<i class="fa fa-comments" aria-hidden="true"></i>',
        'menuindex' => '0',
        'params' => '',
        'action' => 'index',
        'handler' => '',
        'namespace' => 'quip'
    ];
    $menu->fromArray($fields,"",true,true);

return $menu;