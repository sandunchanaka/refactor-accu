<?php

define('SECURITY_GROUP_ADMIN', 1);
define('SECURITY_GROUP_TEACHER', 2);
define('SECURITY_GROUP_STUDENT', 3);

define('USER_TYPE_FACILITATOR', 2);
define('USER_TYPE_LEARNER', 3);


ini_set('mysql.default_socket','/tmp/mysql.sock');

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	protected function _initDoctype()
	{
		//$this->bootstrap('view');
		//$view = $this->getResource('view');
		//$view->doctype('XHTML1_STRICT');
	}
}

