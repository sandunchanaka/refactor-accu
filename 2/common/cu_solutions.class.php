<?php

class CU_Solutions
{
	public $news_id 					= NULL;
	public $news_name					= NULL;
	public $date						= NULL;
	
	
	public $m_registered_date  			= NULL;
	public $m_invitor_id  				= NULL;
	public $m_query 					= NULL;
	
	//constructor
	private function __construct()
	{
		
	}
	
	
	
	//get category records
	function GetSolutions()
	{
		$sql = "select * FROM cu_solutions Order BY ord ASC";
		//$data = CDBCon::GetInstance()->GetAll($sql);
		$data = mysql_query($sql);
		return $data;
	}

	
	//database connection
	function DBConnect()
	{
		$this->m_db = CDBCon::GetInstance();
	}
	
	function test() {
		print('xxxx');
	}
	
}
?>