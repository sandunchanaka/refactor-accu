<?php

require_once "models/User.php";
require_once "models/CourseStudent.php";

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function authAction()
    {
    	$this->_helper->layout->setLayout('login');
    	
    	$history = array();
    	$active  = "Login";
    	
    	$values = array('history' => $history, 'active' => $active);
    	
    	$this->view->assign('breadcrumb', $values);
    	

    	$this->render('index');

    }
    
    public function indexAction()
    {
    	$this->_helper->layout->setLayout('homepage');
    	$this->view->assign('ahome', 'active');
    	$this->render('homepage');
    }
    
    public function registrationAction()
    {
    	$this->_helper->layout->setLayout('homepage');
    	$this->view->assign('areg', 'active');
    	//$this->render('homepage');
    }
    
    public function facilitatorAction()
    {
    	$this->_helper->layout->setLayout('homepage');
    	$this->view->assign('afac', 'active');
    }
    
    public function learnerAction()
    {
    	$this->_helper->layout->setLayout('homepage');
    	$this->view->assign('alea', 'active');
    }
    
    public function faqAction()
    {
    	$this->_helper->layout->setLayout('homepage');
    	$this->view->assign('afaq', 'active');
    }
    
    public function contactAction()
    {
    	$this->_helper->layout->setLayout('homepage');
    	$this->view->assign('acon', 'active');
    }
    
    public function testAction()
    {
    	
    }
    
    public function sendformAction()
    {
    	$this->_helper->layout->setLayout('homepage');
    	$this->_helper->viewRenderer->setNoRender(true);
    	$params = $this->getRequest()->getParams();
    	$this->view->assign('params', $params);
    	
    	$regdata = $this->view->render('index/regdata.phtml');
    	
    	$mail = new Zend_Mail();
    	$mail->addTo("webmaster@aaccu.coop", "E-learning");
    	$mail->setBodyHtml($regdata);
    	$mail->setSubject("Registraton Form");
    	
    	$config = array('ssl' => 'tls', 'port' => 587, 'auth' => 'login', 'username' => 'webmaster@aaccu.coop', 'password' => 'V8UAEuP09X');
    	$smtpConnection = new Zend_Mail_Transport_Smtp('smtp.gmail.com', $config);
    	$mail->send($smtpConnection); 
    	
    	echo $this->view->render("index/thanks.phtml");
    	
    }
    
    public function regformAction()
    {
    	$this->_helper->layout->setLayout('homepage');
    }

    public function resetAction()
    {
    	$params = $this->getRequest()->getParams();
    	 
    	$u_adp = new User();
    	$u_sel = $u_adp->select();
    	$u_sel->where("keyhash = ?", $params['keyhash']);
    	 
    	$user = $u_adp->fetchRow($u_sel);
    	
    	if (is_null($user)) {
    		$this->render('invalid');
    	}
    	
    	
    	 
    }
    
    public function passwordAction()
    {
    	$params = $this->getRequest()->getParams();
    	
    	$u_adp = new User();
    	$u_sel = $u_adp->select();
    	$u_sel->where("email = ?", $params['inputEmail']);
    	
    	$user = $u_adp->fetchRow($u_sel);
    	
    	$user->keyhash = md5($user->name . $user->id . microtime());
    	$user->save();
    	
    	
    	$mail = new Zend_Mail();
    	$mail->setBodyText("Please click the link below to reset your password for ACUI. <a href='http://auci.messycode.com/index/reset/key/" . $user->keyhash . "'>Reset Password</a>");
    	$mail->setSubject("Password Reset Request");
    	$mail->setFrom("webmaster@aaccu.coop", "ACCU WebMaster");
    	$mail->addTo($user->email, $user->name);
    	$mail->send();
    	exit(0);
    	
    	
    }
    
    public function doneAction()
    {
    	$this->_helper->viewRenderer->setNoRender(true);
    	
    	print_r($_FILES);
    }
    
    public function templateAction()
    {
    	
    }
    
    public function allAction()
    {
    	$this->_helper->layout()->disableLayout();
    }
    
    public function loginAction()
    {
    	$username = $this->getRequest()->getParam("inputEmail", null);
    	$password = $this->getRequest()->getParam("inputPassword", null);
    	
    	if (is_null($username) || is_null($password)) {
    		$this->_for('invalid', null, null, null);
    		return true;
    	}
    	
    	$u_adp = new User();
    	$u_sel = $u_adp->select();
    	$u_sel->where("email = ?", $username);
    	$u_sel->where("password = PASSWORD('" . $password ."') ");
    	
    	$user = $u_adp->fetchRow($u_sel);
    	
    	if (is_null($user)) {
    		//throw new Exception("User/Pass incorrect"); //TODO: route to page
    		$this->_forward('invalid', null, null, null);
    		return true;
    	}
    	
    	$session = new Zend_Session_Namespace("security");
    	$session->user_id = $user->id;
    	$session->name    = $user->name;
    	$session->email   = $user->email;
		$session->group_id = $user->user_type_id;   

		if ($session->group_id == USER_TYPE_LEARNER) {
			$cs_adp = new CourseStudent();
			$cs_sel = $cs_adp->select();
			$cs_sel->where("user_id = ?", $user->id);
			
			$cs = $cs_adp->fetchRow($cs_sel);
			
			if (!is_null($cs)) {
				$session->course_id = $cs->course_id;
			} else {
				$session->course_id = 0;
			}			
		}
    	
    	$this->_forward('dashboard', 'index', null);
    }
    
    public function invalidAction()
    {
    	$this->_helper->layout->setLayout('login');
    }
    
    public function dashboardAction()
    {
    	$history = array();
    	$active  = "Home";
    	 
    	$values = array('history' => $history, 'active' => $active);
    	 
    	$this->view->assign('breadcrumb', $values);
    	
    	$session = new Zend_Session_Namespace("security");
    	
    	$this->view->assign('name', $session->name);
    	
    }
    
    public function logoutAction()
    {
    	Zend_Session::destroy(true, true);
    	$this->_helper->layout()->disableLayout();
    	$this->_helper->viewRenderer->setNoRender(true);
    	$this->_helper->redirector('index', 'index');
    	return true;
    }
    
    public function homeAction()
    {
    	$this->_helper->layout()->disableLayout();
	}


}

