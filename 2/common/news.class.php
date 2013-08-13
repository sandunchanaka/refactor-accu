<?php

class News
{
	public $news_id 					= NULL;
	public $news_name					= NULL;
	public $date						= NULL;
	
	
	//constructor
	private function __construct()
	{
		
	}
	
	
	
	//get category records
	function GetNews()
	{
		$sql = "SELECT news_id,news_name,news_date FROM news where news_home =1 ORDER BY news_date ASC LIMIT 4";
		//$data = CDBCon::GetInstance()->GetAll($sql);
		$data = mysql_query($sql);
		return $data;
	}
	
	
	function Get_More_News($sql)
	{
		//$sql = "SELECT news_id,news_name,news_date FROM news ORDER BY news_date DESC";
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}	
	
	function GetOnenews($news_id){
		$sql = "SELECT * FROM news WHERE news_id ='".$news_id."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	function Get_UploadFile($news_id,$file)
	{
		$sql = "SELECT * FROM upload_files WHERE record_id ='".$news_id."' AND record_type='".$file."'";
		$data = CDBCon::GetInstance()->GetAll($sql);
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