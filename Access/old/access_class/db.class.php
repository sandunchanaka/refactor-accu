<?php
class CDBCon
{
	static private $m_instance = NULL;
	
	private function __construct()
	{
		
	}
	
	public static function GetInstance()
	{
		if ( self::$m_instance == NULL )
		{
			self::$m_instance = NewADOConnection(DB_TYPE);
			self::$m_instance->Connect(DB_HOST, DB_USER, DB_PWD, DB_DB);
		}
		
		return self::$m_instance;
	}
}
?>