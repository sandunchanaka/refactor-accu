<?php

/**
 * MessageController
 * 
 * @author
 * @version 
 */

require_once 'Zend/Controller/Action.php';
require_once "models/Message.php";
require_once "models/User.php";

class MessageController extends Zend_Controller_Action {
	
	private static $message = null;
	
	public function init()
	{
		$this->_helper->layout()->disableLayout();
	}
	
	/**
	 * The default action - show the home page
	 */
	public function indexAction() {
		// TODO Auto-generated MessageController::indexAction() default action
	}

	public function sendAction()
	{		
		$this->_helper->viewRenderer->setNoRender(true);
		
		$params = $this->getRequest()->getParams();
		
		$session = new Zend_Session_Namespace('security');
		
		$data = array('to_user_id' => $params['to_user_id'], 'from_user_id' => $session->user_id,
					'message' => $params['message'], 'created_date' => new Zend_Db_Expr("NOW()"));
		
		$m_adp = new Message();
		$m_adp->insert($data);
		
		$json = array();
		echo Zend_JSon::encode($json);
	}
	
	public function inboxAction()
	{
		$session = new Zend_Session_Namespace("security");
		$user_id = $session->user_id;
		
		$m_adp = new Message();
		$m_sel = $m_adp->select();
		$m_sel->setIntegrityCheck(false);
		$m_sel->from(array('m' => 'message'), array('m.*'));
		$m_sel->join(array('ur' => 'user'), 'ur.id = m.to_user_id', array('rcpt_name' => 'ur.name'));
		$m_sel->join(array('us' => 'user'), 'us.id = m.from_user_id', array('sender_name' => 'us.name'));
		$m_sel->where("to_user_id = ?", $user_id);
		$ms = $m_adp->fetchAll($m_sel);
		
		$this->view->assign('messages', $ms);		
	}
	
	public function sentAction()
	{
		$session = new Zend_Session_Namespace("security");
		$user_id = $session->user_id;
	
		$m_adp = new Message();
		$m_sel = $m_adp->select();
		$m_sel->setIntegrityCheck(false);
		$m_sel->from(array('m' => 'message'), array('m.*'));
		$m_sel->join(array('ur' => 'user'), 'ur.id = m.to_user_id', array('rcpt_name' => 'ur.name'));
		$m_sel->join(array('us' => 'user'), 'us.id = m.from_user_id', array('sender_name' => 'us.name'));		
		$m_sel->where("from_user_id = ?", $user_id);
		$ms = $m_adp->fetchAll($m_sel);
	
		$this->view->assign('messages', $ms);
	
	}
	
	
	public function composeAction()
	{
		$u_adp = new User();
		
		$users = $u_adp->fetchAll();
		
		$this->view->assign('users', $users);
		
	}
	
	public function viewAction()
	{
		$m_adp = new Message();
		
		$params = $this->getRequest()->getParams();
		
		$m_sel = $m_adp->select();
		$m_sel->setIntegrityCheck(false);
		$m_sel->from(array('m' => "message"), array('m.*'));
		$m_sel->join(array('uf' => "user"), "uf.id = m.from_user_id", array("from" => "uf.name"));
		$m_sel->join(array('ut' => "user"), "ut.id = m.to_user_id", array("to" => "ut.name", 'to_id' => "ut.id"));
		$m_sel->where("m.id = ?", $params['id']);
		
		$message = $m_adp->fetchRow($m_sel);
		
		$this->view->assign('message', $message);
		
	}
	
	
}
