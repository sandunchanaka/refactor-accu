<?php

//$event_id =$_GET['event_id'];
class Event
{
	public $m_event_id            = NULL;
	public $m_event_name          = NULL;
	public $m_event_image         = NULL;
	public $m_start_date 	      = NULL;
	public $m_end_date 		      = NULL;
	public $m_country_id  		  = NULL;
	public $m_event_description   = NULL;
	public $m_type                = NULL;
	public $m_location_description= NULL;
	public $m_query               = NULL;
	
	//constructor
	private function __construct()
	{
		
	}
	
	//add new event
	function ADDEvent($m_event_name,$m_start_date,$m_end_date,$m_country_id,$m_event_description,$m_type,$m_location_description,$m_event_image)
	{      
			$sqlInsert = "INSERT INTO event VALUES (NULL,'".$m_event_name."','".$m_start_date."','".$m_end_date."','".$m_country_id."','".$m_event_description."','".$m_type."','".$m_location_description."','".$m_event_image."',0)";
//echo $sqlInsert; exit;
		if (CDBCon::GetInstance()->Execute($sqlInsert) === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}
	}
	
	//update new event
	function updateEvent($m_event_id,$m_event_name,$m_start_date,$m_end_date,$m_country_id,$m_event_description,$m_type,$m_location_description,$m_event_image)
	{  
		$sqlUpdate = "UPDATE event SET event_name='".$m_event_name."',event_starting_date='".$m_start_date."',event_end_date='".$m_end_date."',country_id='".$m_country_id."',description='".$m_event_description."',type='".$m_type."',location_description='".$m_location_description."',event_image='".$m_event_image."' WHERE event_id='".$m_event_id."' ";

		//echo $sqlUpdate; exit;
		if (CDBCon::GetInstance()->Execute($sqlUpdate) === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}
	}
	
	//get user records
	function GetEvent($m_event_id)
	{	
		$sql = "select * from event where event_id='".$m_event_id."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	//check existance
	function ExistsEvent($m_event_name)
	{
		$sql = "select * from event where event_name='".$m_event_name."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	//Edit user
	function EditProfile($m_password,$m_first_name,$m_last_name,$m_active,$m_user_id)
	{
		$sqleditProfile = "update users set password='".$m_password."', first_name='".$m_first_name."', last_name='".$m_last_name."', active='".$m_active."' where user_id='".$m_user_id."'";
		if (CDBCon::GetInstance()->Execute($sqleditProfile) === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}	
	}
	
	//get all users
	function GetAll($m_query)
	{
		$data = CDBCon::GetInstance()->GetAll($m_query);
		return $data;
	}
	
	//delete user
	function DeleteEvent($m_event_id)
	{
		$sqlDelete = "DELETE FROM event WHERE event_id='".$m_event_id."'";
		if (CDBCon::GetInstance()->Execute($sqlDelete) === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}	
	}
	
	function GetAttachFiles($m_news_id,$type)
	{	
		$sql = "select * from upload_files where record_id='".$m_news_id."' AND record_type ='".$type."'";
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
	//pass news documents
	function passevntDocuments($m_event_id,$type)
	{
		$sql = "SELECT * FROM upload_files where record_type ='".$type."' and record_id ='".$m_event_id."'";
		//echo $sql ;exit;
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
	function EventsHome($m_event_id,$m_home)
	{
		$sqledit = "UPDATE event SET event_home='".$m_home."' WHERE event_id='".$m_event_id."' ";
		if (CDBCon::GetInstance()->Execute($sqledit) === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}	
	}
	
	
	//database connection
	function DBConnect()
	{
		$this->m_db = CDBCon::GetInstance();
	}
	
}
?>