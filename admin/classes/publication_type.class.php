<?php
class Publication
{
	public $m_pub_id				= NULL;
	public $m_pub_type_name			= NULL;
	public $m_pub_desc				= NULL;
	public $m_pub_type_image		= NULL;
	//public $m_p					= NULL;
	
	
	
	//constructor
	private function __construct()
	{
		
	}
	
	//add new Publication
	function Add_new_pub_type($m_pub_type_name,$m_pub_desc,$m_pub_type_image,$pub_act,$add_date,$up_date)
	{
		//echo m_country_name; exit;
		$sqlInsert = "INSERT INTO publication_catagary(publication_cat_id,pub_cat_name,description,pub_cat_image,activation,add_date,update_date) VALUES(NULL ,'".$m_pub_type_name."','".$m_pub_desc."', '".$m_pub_type_image."','".$pub_act."','".$add_date."','".$up_date."')";
				
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
	function ExistsPub_type($m_pub_type_name)
	{
		$sql = "select * from publication_catagary where pub_cat_name='".$m_pub_type_name."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	// select Pub Type Details
	function GetPublicationtype($pub_type_id)
	{
		$sql = "select * from publication_catagary where publication_cat_id='".$pub_type_id."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	// Edit Publication Type
	
	function Update_pub_type($m_pub_cat_id,$m_pub_type_name,$m_pub_desc,$m_pub_type_image,$pub_act,$add_date,$up_date)
	{
		//echo m_country_name; exit;
		$sqlupdate = "UPDATE publication_catagary SET pub_cat_name ='".$m_pub_type_name."',description ='".$m_pub_desc."',pub_cat_image='".$m_pub_type_image."',activation='".$pub_act."',add_date='".$add_date."',update_date='".$up_date."' WHERE publication_cat_id='".$m_pub_cat_id."'";
		//echo $sqlupdate; exit;		
		if (CDBCon::GetInstance()->Execute($sqlupdate) === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}
	}
	
	//delete country
	function DeletepublicationType($m_publication_type_id)
	{
		$sqlDelete = "delete from publication_catagary where publication_cat_id ='".$m_publication_type_id."'";
		if (CDBCon::GetInstance()->Execute($sqlDelete) === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}	
	}
	
	
	
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