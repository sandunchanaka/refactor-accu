<?php

class Events
{
	public $event_id 					= NULL;
	public $event_name					= NULL;
	public $event_starting_date			= NULL;
	
	
	public $m_registered_date  			= NULL;
	public $m_invitor_id  				= NULL;
	public $m_query 					= NULL;
	
	//constructor
	private function __construct()
	{
		
	}
	
	
	
		
	//get events records
	function GetEvents()
	{
		$sql = "SELECT event_id,event_name,event_starting_date FROM event where event_home =1 ORDER BY event_starting_date ASC LIMIT 4";		//echo $sql; exit;
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
	// function Get All events
	function GetOneEvents($event_id)
	{
		$sql = "SELECT * FROM event WHERE event_id = '".$event_id."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	function Get_More_Events($sql)
	{
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
	
	
	
	// Get All Event 
	function GetAll($m_query)
	{
		$data = CDBCon::GetInstance()->GetAll($m_query);		
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