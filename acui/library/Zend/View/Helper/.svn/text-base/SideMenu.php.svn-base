<?php

//namespace library\Zend\View\Helper;


require_once "Zend/View/Helper/Interface.php";
require_once "Util/Security/Security.php";

class Zend_View_Helper_SideMenu implements Zend_View_Helper_Interface {

	/**
	 * 
	 * @var Zend_View_Interface
	 */
	public $view;
	
	public function sideMenu()
	{
		$security = Util_Security_Security::getInstance();
		
		if (!$security->isLoggedIn()) {
			$view = 'nolog.phtml';
		} elseif ($security->isStudent()) {
			$view = 'student.phtml';
		} elseif ($security->isAdmin()) {
			$view = 'admin.phtml';
		} elseif ($security->isTeacher()) {
			$view = 'teacher.phtml';
		}
		
		return $this->view->render($view);
		
	}
	
	/* (non-PHPdoc)
	 * @see Zend_View_Helper_Interface::setView()
	 */
	public function setView(Zend_View_Interface $view) {
		$this->view = $view;
	}

	/* (non-PHPdoc)
	 * @see Zend_View_Helper_Interface::direct()
	 */
	 public function direct() {
		// TODO Auto-generated method stub
	 }


}

?>