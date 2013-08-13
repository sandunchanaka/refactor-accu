<?php


class Util_Security_Security {

	protected static $_instance = null;
	
	/**
	 * 
	 * @var Zend_Session_Namespace
	 */
	protected $ses_security = null;
	
	private function __construct()
	{
		$this->ses_security = new Zend_Session_Namespace("security");    	
	}
	
	public function isLoggedIn()
	{
		if ($this->ses_security->user_id > 0) return true;
		return false;
	}
	
	public function isStudent()
	{
		if ($this->ses_security->group_id == SECURITY_GROUP_STUDENT) return true;
		return false;
	}
	
	public function isTeacher()
	{
		if ($this->ses_security->group_id == SECURITY_GROUP_TEACHER) return true;
		return false;
	}
	
	public function isAdmin()
	{
		if ($this->ses_security->group_id == SECURITY_GROUP_ADMIN) return true;
		return false;
	}
	
	/**
	 * 
	 * @return Util_Security_Security
	 */
	public static function getInstance()
	{
		if (self::$_instance == null) {
			self::$_instance = new Util_Security_Security();
		}
		
		return self::$_instance;
	}
	
}