<?php
	class about_us
	{
		public $m_doc_id  		= NULL;
		public $m_doc_cat_id  	= NULL;
		public $m_user_level_id	=NULL;
		public $m_doc_type		= NULL;
		
		function Get_Documents_category()
		{
			$sql="SELECT distinct doc_cate_id FROM user_doc";
			$data = CDBCon::GetInstance()->GetAll($sql);
			return $data;
		}
		
		function Get_doc_cat_name($m_doc_cat_id)
		{
			$sql="SELECT * FROM user_doc_cate WHERE doc_cate_id='".$m_doc_cat_id."'";	
			$data = CDBCon::GetInstance()->GetRow($sql);
			return $data;
		}
		
		function Get_doc($m_doc_id)
		{
			$sql="SELECT * FROM user_doc WHERE doc_id='".$m_doc_id."'";
			$data = CDBCon::GetInstance()->GetRow($sql);
			return $data;
		}
		
		function Get_document_data($m_user_level_id)
		{
			$sql="SELECT * FROM user_doc_display WHERE user_level_id='".$m_user_level_id."' AND display='1' ";
			
			$data = CDBCon::GetInstance()->GetAll($sql);
			return $data;
		}
		
		function Get_folder_name($m_user_level_id,$m_user_docfolder_id)
		{
			$sql="SELECT doc_cate_name,doc_cate_id FROM user_doc_cate where doc_cate_id in(Select doc_cate_id from user_doc_display where user_level_id = '".$m_user_level_id."' AND doc_folder_id ='".$m_user_docfolder_id."')";
			//echo $sql; exit;
			$data = CDBCon::GetInstance()->GetAll($sql);
			return $data;
		}
		
		function Get_document_name($m_doc_cat_id,$m_level_id,$m_doc_type,$m_user_docfolder_id)
		{
			$sql="SELECT * FROM user_doc_display  where doc_cate_id ='".$m_doc_cat_id."' and doc_type ='".$m_doc_type."' and user_level_id = '".$m_level_id."' AND doc_folder_id ='".$m_user_docfolder_id."'";
			$data = CDBCon::GetInstance()->GetAll($sql);
			return $data;
		}
		
		function GetNoofDoc($m_user_level_id,$m_doc_cat_id,$m_doc_type,$m_user_docfolder_id)
		{
			$sql="SELECT count(doc_id) as total  FROM user_doc_display  where doc_cate_id ='".$m_doc_cat_id."' and user_level_id ='".$m_user_level_id."' and doc_type ='".$m_doc_type."' AND doc_folder_id='".$m_user_docfolder_id."'";
			//echo $sql; exit;
			$data = CDBCon::GetInstance()->GetRow($sql);
			return $data;	
		}
		
		function Get_Documents_Folder($user_level,$doc_type)
		{
			$sql="SELECT t2.* FROM  user_doc_display as t1
INNER JOIN user_doc_folder AS t2 ON t2.user_doc_folder_id = t1.doc_folder_id
Where t1.user_level_id='".$user_level."' AND t1.doc_type ='".$doc_type."' Group By t2.user_doc_folder_id";
			$data = CDBCon::GetInstance()->GetAll($sql);
			return $data;
		}
		
		function DocCount($user_level,$doc_type,$doc_folderId)
		{
		//SELECT Count(publication_id) as total FROM publication WHERE publication_cat_id='".$pub_cat_ids."'
		$sql = "SELECT count(t1.doc_id) as total FROM  user_doc_display as t1
Where t1.user_level_id='".$user_level."' AND t1.doc_type ='".$doc_type."' AND t1.doc_folder_id = '".$doc_folderId."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
		}
		
	}
?>