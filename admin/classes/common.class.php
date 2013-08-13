<?php
class Common
{
	public $m_atttitle   	= NULL;
	public $m_attachment 	= NULL;
	public $m_type 			= NULL;
	public $m_record_id		= NULL;

	//constructor
	private function __construct()
	{
		
	}
	
	//Insert new Attachment
	function Uploaded_document($m_record_id,$m_file_name,$m_file_data,$m_file_type,$m_record_type)
	{
		$sqlInsert = "INSERT INTO upload_files VALUES(NULL,'".$m_record_id."','".$m_file_name."','".$m_file_data."','".$m_file_type."','".$m_record_type."')";
		
		//echo $sqlInsert;exit;
			
		if (CDBCon::GetInstance()->Execute($sqlInsert) === false) 
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