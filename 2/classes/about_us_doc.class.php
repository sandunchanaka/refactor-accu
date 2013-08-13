<?php
	class about_us
	{
		public $m_doc_id  		= NULL;
		public $m_doc_cat_id  	= NULL;
		public $m_user_level_id	=NULL;
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
		
		function Get_Documents_Folder()
		{
			$sql="SELECT distinct user_doc_folder_id  FROM user_doc_folder";
			$data = CDBCon::GetInstance()->GetAll($sql);
			return $data;
		}
		
	}
?>