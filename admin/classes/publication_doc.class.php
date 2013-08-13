<?php
class Publication_Document
{
	public $m_pub_doc_id			= NULL;
	public $m_pub_doc_name			= NULL;
	public $m_pub_doc_type			= NULL;
	public $m_pub_doc_desc			= NULL;
	public $m_pub_doc_image			= NULL;
	public $m_pub_att_file_01		= NULL;
	public $m_pub_att_file_02		= NULL;
	public $m_pub_att_file_03		= NULL;
	
	public $m_record_id				= NULL;
	public $m_file_name				= NULL;
	public $m_file_data				= NULL;
	public $m_file_type				= NULL;
	public $m_record_type			= NULL;
	
	
	//constructor
	private function __construct()
	{
		
	}
	
	// get Publication Type 
	function Publication_Doc()
	{
		$sql = "select * from publication_catagary";
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
	//get Publication catagory type
	function GetPublicationDocumentCatagory($pub_doc_id)
	{
		$sql = "select * from publication_catagary where publication_cat_id='".$pub_doc_id."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	//add new publibation
	function New_Publication_document($m_pub_doc_type,$m_pub_record_type,$m_year,$m_document_name,$add_date)
	{
		
		$sqlInsert = "INSERT INTO publication VALUES(NULL,'".$m_pub_doc_type."','".$m_pub_record_type."','".$m_year."','".$m_document_name."','".$add_date."',NULL)";
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
	
	
	//publication Document File Insert
	function NewPub_doc_Files($pub_doc_name,$pub_file,$pub_file_type,$record_type,$record_id,$add_date)
	{
		$sqlInsert = "INSERT INTO pubcation_documents VALUES(NULL,'".$pub_doc_name."','".$pub_file."','".$pub_file_type."','".$record_type."','".$record_id."','".$add_date."')";
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
	
		// select Pub Document Details
	function GetPublicationDocument($pub_doc_id)
	{
		$sql = "select * from publication where publication_id='".$pub_doc_id."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	
	
	//Get Pubcation Document 
	function Get_ALL_PublicationDocument($rec_type,$rec_id)
	{
		//$sql = "select * from pubcation_documents where report_type ='".$rec_type."' and record_id='".$rec_id."'";
		$sql = "SELECT * FROM pubcation_documents where report_type = '".$rec_type."' and record_id = '".$rec_id."'";
		//echo $sql; exit;
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
	// Get Publication Document Details
	function GetPublication_doc($doc_id)
	{
		$sql = "select * from pubcation_documents where pub_doc_id ='".$doc_id."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	//Update Doc File
	function Update_doc_file($m_pub_doc_id,$pub_doc_name,$pub_doc_file,$file_type)
	{
		$sqlupdate = "UPDATE pubcation_documents SET pub_doc_name ='".$pub_doc_name."',pub_doc_file ='".$pub_doc_file."',file_type='".$file_type."' WHERE pub_doc_id='".$m_pub_doc_id."'";
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
	
	
	
	// Get Pub Type Id
	function GetPubDoc_Id($pub_record_type,$pub_doc_name)
	{
		$sql = "select max(publication_id) as maxval from publication where record_type ='".$pub_record_type."' AND document_name ='".$pub_doc_name."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	
	
		//check existance
	function ExistsPublication_doc($m_record_type)
	{
		$sql = "select * from publication where record_type ='".$m_record_type."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		//echo $data; exit;
		return $data;
	}
	
	// Get Publication Document Document Name
	function getPublicationDocumnetname($pub_cat_id)
	{
		$sql = "select * from publication where publication_cat_id = '".$pub_cat_id."'";
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
	function getPubDocname($pub_doc_name)
	{
		$sql = "select * from publication where document_name = '".$pub_doc_name."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	function Update_pub_doc($m_pub_doc_id,$m_pub_cat_id,$m_pub_record_type,$m_pub_year,$month,$m_pub_doc_name,$add_date)
	{
		//echo m_country_name; exit;
		$sqlupdate = "UPDATE publication SET publication_cat_id ='".$m_pub_cat_id."',record_type ='".$m_pub_record_type."',year='".$m_pub_year."',document_name='".$m_pub_doc_name."',add_date='".$add_date."' WHERE publication_id='".$m_pub_doc_id."'";
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
	
	function Update_pub_doc_id($pub_rec_id,$pub_doc_id)
	{
		$sqlupdate = "Update pubcation_documents set record_id ='".$pub_doc_id."' where record_id = '".$pub_rec_id."'";
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
	
	// Uploaded Documents
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

	// Update Files
	function Uploaded_document_edit($file_id,$m_record_id,$m_file_name,$m_file_data,$m_file_type,$m_record_type)
	{
		$sqlInsert = "UPDATE upload_files SET record_id ='".$m_record_id."',file_name ='".$m_file_name."',file_data ='".$m_file_data."',file_type ='".$m_file_type."' ,record_type='".$m_record_type."'   WHERE file_id ='".$file_id."'";
		
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
	
	
	//check existance
	function ExistsPub_doc($m_pub_doc_name)
	{
		$sql = "select * from publication where document_name='".$m_pub_doc_name."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	

	
	//Get Publication Document type From Pub Id
	function GetPubFiles($pub_doc_id,$pub_type)
	{
		$sql = "SELECT * FROM upload_files WHERE record_id='".$pub_doc_id."' AND record_type ='".$pub_type."'";
		$data = CDBCon::GetInstance()->GetAll($sql);
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
	function DeletepublicationDoc($m_pub_doc_id)
	{
		$sqlDelete = "delete from publication  where publication_id ='".$m_pub_doc_id."'";
		if (CDBCon::GetInstance()->Execute($sqlDelete) === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}	
	}
	
	function GetAttachFiles($m_pub_doc_id,$type)
	{	
		$sql = "select * from upload_files where record_id='".$m_pub_doc_id."' AND record_type ='".$type."'";
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
	
	function GetAll($m_query)
	{
		$data = CDBCon::GetInstance()->GetAll($m_query);		
		return $data;
	}

	// delete Publication file
	function deletepubfile($m_file_id)
	{
		$sqlDelete = "DELETE FROM pubcation_documents WHERE pub_doc_id='".$m_file_id."'";
		if (CDBCon::GetInstance()->Execute($sqlDelete) === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}	
	}
	
	function SelectPub_doc_files($m_pub_doc_id)
	{
		$sql = "select record_id,pub_doc_file from pubcation_documents where pub_doc_id='".$m_pub_doc_id."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	
	//database connection
	function DBConnect()
	{
		$this->m_db = CDBCon::GetInstance();
	}
	
	
}
?>