<?php
//$event_id =$_GET['event_id'];
class News
{
	public $m_news_id           	 = NULL;
	public $m_news_name         	 = NULL;
	public $m_news_image        	 = NULL;
	public $m_news_start_date 		 = NULL;
	public $m_news_end_date 		 = NULL;
	public $m_country_id  			 = NULL;
	public $m_news_description  	 = NULL;
	public $m_type              	 = NULL;
	public $m_location_description	 = NULL;
	public $m_query               	 = NULL;
	
	//constructor
	private function __construct()
	{
		
	}
	
	//add new event
	function Add_news($m_news_name,$m_news_date,$m_country_id,$m_news_description,$m_location_description,$m_news_image)
	{      
		$sqlInsert = "INSERT INTO news VALUES (NULL,'".$m_news_name."','".$m_news_date."','".$m_country_id."','".$m_news_description."','".$m_location_description."','".$m_news_image."',0)";
		
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
	
	
	//get News records
	function GetNews($m_news_id)
	{	
		$sql = "select * from news where news_id='".$m_news_id."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	
	
	//update new event
	function updateNews($m_news_id,$m_news_name,$m_news_date,$m_country_id,$m_news_description,$m_location_description,$m_news_image)
	{  
		$sqlUpdate = "UPDATE news SET news_name='".$m_news_name."',news_date='".$m_news_date."',country_id='".$m_country_id."',description='".$m_news_description."',location_name='".$m_location_description."',news_img='".$m_news_image."' WHERE news_id='".$m_news_id."' ";

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
	function GetAttachFiles($m_news_id,$type)
	{	
		$sql = "select * from upload_files where record_id='".$m_news_id."' AND record_type ='".$type."'";
		$data = CDBCon::GetInstance()->GetAll($sql);
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
	function Deletenews($m_news_id)
	{
		$sqlDelete = "DELETE FROM news WHERE news_id='".$m_news_id."'";
		if (CDBCon::GetInstance()->Execute($sqlDelete) === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}	
	}
	
	//Delete File
	function Deletefile($m_file_id)
	{
		$sqlDelete = "DELETE FROM upload_files WHERE file_id='".$m_file_id."'";
		if (CDBCon::GetInstance()->Execute($sqlDelete) === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}	
	}
	
	//select news details from Filr
	function GetNewsDetailsFromFile($file_id)
	{	
		$sql = "select * from upload_files where file_id='".$file_id."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	//pass news documents
	function passnewsDocuments($m_news_id,$type)
	{
		$sql = "SELECT * FROM upload_files where record_type ='".$type."' and record_id ='".$m_news_id."'";
		//echo $sql ;exit;
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
	function passnewsid($m_name)
	{
		$sql = "select news_id from news where news_name='".$m_name."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	function NewsHome($m_news_id,$m_home)
	{
		$sqledit = "UPDATE news SET news_home='".$m_home."' WHERE news_id='".$m_news_id."' ";
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