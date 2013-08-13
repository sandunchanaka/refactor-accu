<?php

class Publication
{
	public $pub_id 						= NULL;
	public $pub_name					= NULL;
	public $pub_cat_id					= NULL;
	public $pub_documents				= NULL;
	public $pub_description				= NULL;
	
	
	//constructor
	private function __construct()
	{
		
	}
	
	//get category records
	function GetPublication()
	{
		$sql = "SELECT * FROM publication_catagary";
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	//get Publication Documents
	function GetPublicationDocuments($pub_cat_id)
	{
		$sql = "SELECT * FROM publication WHERE publication_cat_id='".$pub_cat_id."' ORDER BY year DESC";
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
	function PubCount($pub_cat_ids)
	{
		//SELECT Count(publication_id) as total FROM publication WHERE publication_cat_id='".$pub_cat_ids."'
		$sql = "SELECT count(pub_doc_id) as total FROM pubcation_documents pb WHERE record_id IN (SELECT publication_id  FROM publication p WHERE publication_cat_id ='".$pub_cat_ids."') ";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	function GetAllPublicationTypes()
	{
		$sql = "SELECT pub_cat_name,publication_cat_id FROM publication_catagary";
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
	//get publication Files
	function GetPublicationFiles($recordid,$record_type)
	{
		$sql = "SELECT * FROM pubcation_documents WHERE record_id='".$recordid."' AND report_type='".$record_type."' ORDER BY pub_doc_id DESC";
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
	

	//database connection
	function DBConnect()
	{
		$this->m_db = CDBCon::GetInstance();
	}
	
		
}
?>