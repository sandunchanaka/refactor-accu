<?php
//$event_id =$_GET['event_id'];
class AboutUS
{
	public $m_aboutus_id           	 = NULL;
	public $m_mem_title        		 = NULL;
	public $m_mem_name         		 = NULL;
	public $m_mem_image        		 = NULL;
	public $m_mem_societynmae  		 = NULL;
	public $m_start_date 			 = NULL;
	public $m_end_date 				 = NULL;
	public $m_edit_date 			 = NULL;
	public $m_country_id  			 = NULL;
	public $m_post				 	 = NULL;
	public $m_type              	 = NULL;
	public $m_query               	 = NULL;
	
	//constructor
	private function __construct()
	{
		
	}
	
	//add new event
	function Add_Aboutus($m_mem_title,$m_mem_name,$m_post,$m_mem_societynmae,$m_country_id,$m_mem_image,$m_type,$m_position,$m_start_date,$m_end_date)
	{      
		
		$sqlInsert = "INSERT INTO about_us VALUES (NULL,'".$m_mem_title."','".$m_mem_name."','".$m_post."','".$m_mem_societynmae."','".$m_country_id."','".$m_mem_image."','".$m_type."','".$m_position."','".$m_start_date."','".$m_end_date."')";
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
	
	
	//check existance
	function ExistsNews($m_news_name)
	{
		$sql = "select * from news where news_name='".$m_news_name."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	function Getcountry($m_country_id)
	{
		$sql = "select * from country where country_id='".$m_country_id."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	//get News records
	function GetMemberName()
	{	
		$sql = "select member_name,member_id from member ORDER BY member_name ASC";
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
	function Get_about_us($id)
	{
		$sql ="SELECT * FROM about_us WHERE about_us='".$id."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	
	
	//update new event
	function edit_Aboutus($m_aboutus_id,$m_mem_title,$m_mem_name,$m_post,$m_mem_societynmae,$m_country_id,$m_mem_image,$m_type,$m_edit_date)
	{  
		$sqlUpdate = "UPDATE about_us SET title='".$m_mem_title."',mem_name='".$m_mem_name."',possion='".$m_post."',society_name='".$m_mem_societynmae."',country='".$m_country_id."',image='".$m_mem_image."',type='".$m_type."',edit_date='".date('Y-m-d')."' WHERE about_us='".$m_aboutus_id."' ";

		if (CDBCon::GetInstance()->Execute($sqlUpdate) === false) 
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
	function DeleteAboutus($m_news_id)
	{
		$sqlDelete = "DELETE FROM about_us WHERE about_us='".$m_news_id."'";
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