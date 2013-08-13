<?php

require_once "models/Discussion.php";
require_once "models/Thread.php";
require_once "models/TMessage.php";

class DiscussionController extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout()->disableLayout();
    }

    public function indexAction()
    {
     	$d_adp = new Discussion();   
     	$d_sel = $d_adp->select();
     	$d_sel->from(array('d' => 'discussion'), array('d.*'));
     	$d_sel->joinLeft(array('t' => 'thread'), 't.discussion_id = d.id', array());
     	$d_sel->joinLeft(array('tm' => 'tmessage'), 'tm.thread_id = t.id', array('number_of_posts' => new Zend_Db_Expr("COUNT(tm.id)"), 'last_post_date' => 'created_date'));
		$d_sel->order("tm.created_date DESC");
		$d_sel->setIntegrityCheck(false);
		$d_sel->group("d.id");

		$discussions = $d_adp->fetchAll($d_sel);
		$this->view->assign('discussions', $discussions);
		
		$delete = false;
		
		$session = new Zend_Session_Namespace("security");
		if ($session->group_id == 1) $delete = true;
		
		$this->view->assign('delete', $delete);
    }
    
    public function deleteAction()
    {
    	$this->_helper->viewRenderer->setNoRender(true);
    	$params = $this->getRequest()->getParams();
    	$d_adp = new Discussion();
    	$d_sel = $d_adp->select();
    	$d_sel->where("id = ?", $params['id']);
    	$d = $d_adp->fetchRow($d_sel);
    	$d->delete();
    	
    	$json  = array();
    	echo Zend_Json::encode($json);
    }
    
    public function viewAction()
    {
    	$params = $this->getRequest()->getParams();
    	
    	$t_adp = new Thread();
    	$t_sel = $t_adp->select();
    	$t_sel->setIntegrityCheck(false);
    	$t_sel->from(array('t' => 'thread'), array('t.*'));
    	$t_sel->joinLeft(array('tm' => 'tmessage'), 'tm.thread_id = t.id', array('count' => new Zend_Db_Expr("COUNT(tm.id)"), 'created_date'));
        $t_sel->where("t.discussion_id = ?", $params['id']);
        $t_sel->order("tm.created_date DESC");
        $t_sel->group("t.id");

        $threads = $t_adp->fetchAll($t_sel);
        
        $delete = false;
        
        $session = new Zend_Session_Namespace('security');
        if ($session->group_id == 1) $delete = true;
        
        $this->view->assign('delete', $delete);
        
        $this->view->assign('threads', $threads);
        $this->view->assign('discussion_id', $params['id']);
    }
    
    public function threadviewAction()
    {
    	$params = $this->getRequest()->getParams();
    	 
    	$t_adp = new TMessage();
    	$t_sel = $t_adp->select();
    	$t_sel->setIntegrityCheck(false);
    	$t_sel->from(array('tm' => 'tmessage'), array('tm.*'));
    	$t_sel->joinLeft(array('u' => 'user'), 'u.id = tm.user_id', array('name'));
    	$t_sel->where("tm.thread_id = ?", $params['id']);
    	$t_sel->order("tm.created_date DESC");    	
    	
    	$messages = $t_adp->fetchAll($t_sel);
    	
    	$delete = false;
        
        $session = new Zend_Session_Namespace('security');
        if ($session->group_id == 1) $delete = true;
        
        $this->view->assign('user_id', $session->user_id);
        $this->view->assign('delete', $delete);
    	
    	$this->view->assign('messages', $messages);
    	$this->view->assign('thread_id', $params['id']);
    }

    public function addAction()
    {
    	$d_adp = new Discussion();
    	
    	$params = $this->getRequest()->getParams();
    	
    	$data = array('name' => $params['discussion'], 'created_date' => new Zend_Db_Expr("NOW()"));
    	$d_adp->insert($data);
    	
    	$this->_helper->viewRenderer->setNoRender(true);
    	
    	$json = array();
    	
    	echo Zend_Json::encode($json);
    }
    
    public function addmessageAction()
    {
    	$tm_adp = new TMessage();
    	$params = $this->getRequest()->getParams();
    	$this->_helper->viewRenderer->setNoRender(true);
    	
    	$session = new Zend_Session_Namespace('security');
    	$data = array('message' => $params['message'], 'thread_id' => $params['thread_id'], 'user_id' => $session->user_id, 'created_date' => new Zend_Db_Expr("NOW()"));
    	$tm_adp->insert($data);
    	
    	$json = array();
    	echo Zend_Json::encode($json);
    }
    
    public function delthreadAction()
    {
    	$tm_adp = new Thread();
    	$params = $this->getRequest()->getParams();
    	 
    	$tm_sel = $tm_adp->select();
    	$tm_sel->where("id = ?", $params['id']);
    	$tm = $tm_adp->fetchRow($tm_sel);
    	$tm->delete();
    	 
    	$json = array();
    	echo Zend_Json::encode($json);
    	 
    	$this->_helper->viewRenderer->setNoRender(true);
    }
    
    public function delmsgAction()
    {
    	$tm_adp = new TMessage();
    	$params = $this->getRequest()->getParams();
    	
    	$tm_sel = $tm_adp->select();
    	$tm_sel->where("id = ?", $params['id']);
    	$tm = $tm_adp->fetchRow($tm_sel);
    	$tm->delete();
    	
    	$json = array();
    	echo Zend_Json::encode($json);
    	
    	$this->_helper->viewRenderer->setNoRender(true);
    }
    
    public function editAction()
    {
    	$tm_adp = new TMessage();
    	$params = $this->getRequest()->getParams();    	
    
    	$tm_sel = $tm_adp->select();
    	$tm_sel->where("id = ?", $params['id']);
    	$tm = $tm_adp->fetchRow($tm_sel);
    	 
    	$this->view->assign('message_id', $tm->id);
    	$this->view->assign('message', $tm->message);
    }
    
    public function editmessageAction()
    {
    	$tm_adp = new TMessage();
    	$params = $this->getRequest()->getParams();
    	$this->_helper->viewRenderer->setNoRender(true);

    	$tm_sel = $tm_adp->select();
    	$tm_sel->where("id = ?", $params['message_id']);
    	$tm = $tm_adp->fetchRow($tm_sel);
    	
    	$tm->message = $params['message'];
    	$tm->save();
    	
    	 
    	$json = array('thread_id' => $tm->thread_id);
    	echo Zend_Json::encode($json);
    }

    public function addthreadAction()
    {
    	$t_adp = new Thread();
    	
    	$params = $this->getRequest()->getParams();
    	
    	$data = array('title' => $params['title'], 'discussion_id' => $params['discussion_id']);
    	$t_adp->insert($data);
    	
    	$this->_helper->viewRenderer->setNoRender(true);
    	
    	$json = array();
    	
    	echo Zend_Json::encode($json);
    }
}

