<?php
class User
{
	public $m_user_id = NULL;
	public $m_email = NULL;
	public $m_password  = NULL;
	public $m_first_name  = NULL;
	public $m_last_name  = NULL;
	public $m_active = NULL;
	public $m_registered_date  = NULL;
	public $m_invitor_id  = NULL;
	public $m_query = NULL;
	
	//constructor
	private function __construct()
	{
		
	}
	
	//add new user
	function NewUser($m_user_name,$m_password,$m_email,$m_active)
	{
		$sqlInsert = "insert into uses values(NULL,'".$m_user_name."','".$m_password."','".$m_email."','".$m_active."','".date('Y-m-d')."')";

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
	
	//get user records
	function GetUser($m_user_id)
	{
		$sql = "select * from uses where adminId='".$m_user_id."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	//check existance
	function ExistsUser($m_email)
	{
		$sql = "select * from uses where email='".$m_email."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	//Edit user
	function EditProfile($m_password,$username,$m_active,$m_user_id)
	{
		$sqleditProfile = "update uses set userName='".$username."',   	pass='".$m_password."', active='".$m_active."' where adminId='".$m_user_id."'";
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
	function DeleteUser($m_user_id)
	{
		echo $m_user_id;
		$sqlDelete = "delete from uses where adminId='".$m_user_id."'";
		if (CDBCon::GetInstance()->Execute($sqlDelete) === false) 
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