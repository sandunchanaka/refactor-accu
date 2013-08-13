<?php

require_once "models/User.php";

class ProfileController extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout()->disableLayout();
    }

    public function indexAction()
    {
    	
    }
    
    public function changepassAction()
    {
    	
    }
    
    public function  passwordAction()
    {
    	$session = new Zend_Session_Namespace("security");
    	$params = $this->getRequest()->getParams();
    	
    	$u_adp = new User();
    	$u_sel = $u_adp->select();
    	$u_sel->where("id = ?", $session->user_id);
    	
    	$user = $u_adp->fetchRow($u_sel);
    	
    	if (!is_null($user)) {
    		$user->password = new Zend_Db_Expr("PASSWORD('" . $params['password'] . "')");
    		$user->save();	
    	}    	
    	
    	$json = array();
    	echo Zend_JSon::encode($json);
    }
    
    public function sendmessageAction()
    {
    	
    }
}

