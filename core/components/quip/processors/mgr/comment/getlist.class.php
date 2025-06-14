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
 * Get a list of comments
 *
 * @package quip
 * @subpackage processors
 */
class QuipCommentGetListProcessor extends \MODX\Revolution\Processors\Model\GetListProcessor {
    public $classKey = 'quipComment';
    public $languageTopics = array('quip:default');
    public $permission = 'quip.comment_list';
    public $defaultSortField = 'createdon';
    public $defaultSortDirection = 'DESC';
    public $checkListPermission = false;
    public $objectType = 'quip.thread';
    public $primaryKeyField = 'name';

    /** @var quipThread $thread */
    public $thread;
    /** @var string $defaultCls */
    public $defaultCls = '';
    
    public function initialize() {
        $initialized = parent::initialize();
        $this->setDefaultProperties(array(
            'combo' => false,
            'limit' => false,
            'deleted' => 0,
            'search' => false,
            'family' => false,
            'thread' => false,
        ));

        $thread = $this->getProperty('thread');
        if (!empty($thread)) {
            $this->thread = $this->modx->getObject('quipThread',$thread);
            if (empty($this->thread)) return $this->modx->lexicon('quip.thread_err_nf');
            if (!$this->thread->checkPolicy('view')) return $this->modx->lexicon('access_denied');
        }

        return $initialized;
    }

    /**
     * @param xPDOQuery $c
     * @return xPDOQuery
     */
    public function prepareQueryBeforeCount(xPDOQuery $c) {
        $c->leftJoin('modUser','Author');
        $c->leftJoin('modResource','Resource');
        $thread = $this->getProperty('thread');
        if (!empty($thread)) {
            $c->where(array(
                'quipComment.thread' => $this->thread->get('name'),
            ));
        }
        $family = $this->getProperty('family');
        if (!empty($family)) {
            $c->where(array(
                'quipComment.thread:LIKE' => '%'.$family.'%',
            ));

        }
        $c->where(array(
            'quipComment.deleted' => $this->getProperty('deleted'),
        ));
        $search = $this->getProperty('search');
        if ($search) {
            $c->where(array(
                'quipComment.body:LIKE' => '%'.$search.'%',
                'OR:quipComment.author:LIKE' => '%'.$search.'%',
                'OR:quipComment.name:LIKE' => '%'.$search.'%',
            ),null,2);
        }
        return $c;
    }

    /**
     * @param xPDOQuery $c
     * @return xPDOQuery
     */
    public function prepareQueryAfterCount(xPDOQuery $c) {
        /* get comments sql */
        $subc = $this->modx->newQuery('quipComment');
        $subc->setClassAlias('ct');
        $subc->select('COUNT(`ct`.`id`)');
        $subc->where('`ct`.`thread` = `quipComment`.`thread`');
        $subc->where(array(
            'ct.deleted' => 0,
            'ct.approved' => 1,
        ));
        $subc->prepare();
        $commentsSql = $subc->toSql();

        $c->select($this->modx->getSelectColumns('quipComment','quipComment'));
        $c->select(array(
            'Author.username',
            'Resource.pagetitle',
            'Resource.context_key',
            '('.$commentsSql.') AS comments',
        ));
        return $c;
    }

    /**
     * @param array $list
     * @return array
     */
    public function beforeIteration(array $list) {
        $canApprove = $this->modx->hasPermission('quip.comment_approve');
        $canRemove = $this->modx->hasPermission('quip.comment_remove');
        $canUpdate = $this->modx->hasPermission('quip.comment_update');
        if ($this->thread) {
            $canApprove = $canApprove && $this->thread->checkPolicy('comment_approve');
            $canRemove = $canRemove && $this->thread->checkPolicy('comment_remove');
            $canUpdate = $canUpdate && $this->thread->checkPolicy('comment_update');
        }
        $cls = array();
        if ($canApprove) $cls[] = 'papprove';
        if ($canUpdate) $cls[] = 'pupdate';
        if ($canRemove) $cls[] = 'premove';
        $this->defaultCls = implode(',',$cls);
        return $list;
    }

    /**
     * @param xPDOObject|quipComment $object
     * @return array
     */
    public function prepareRow(xPDOObject $object) {
        $commentArray = $object->toArray();
        $commentArray['url'] = $object->makeUrl();
        $commentArray['cls'] = $this->defaultCls;
        $commentArray['createdon'] = strftime('%a %b %d, %Y %I:%M %p',strtotime($commentArray['createdon']));
        if (empty($commentArray['pagetitle'])) { $commentArray['pagetitle'] = $this->modx->lexicon('quip.view'); }
        if (empty($commentArray['username'])) $commentArray['username'] = $commentArray['name'];
        $commentArray['body'] = str_replace('<br />','',$commentArray['body']);
        return $commentArray;
    }
}
return 'QuipCommentGetListProcessor';