<?php 
class about_us_Document 
{
	public $type			=NULL;
	public $doc_id			=NULL;
	public $cate_id			=NULL;
	public $txt_doc_title	=NULL;
	public $up_doc			=NULL;
	public $add_date		=NULL;
	public $update			=NULL;
	public $up_doc_name		=NULL;
	public $doc_cate_id		=NULL;
	public $display			=NULL;
	public $doc_name        =NULL;
	public $doc_cat_name	=NULL;
	public $m_doc_type 		=NULL;
	//$doc_id,$doc_cate_id,$txt_doc_cate,$txt_doc_title,$up_doc_name,$update
	
	function GetAll()
	{
		$sql="SELECT * FROM user_doc";	
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
	function get_user_doc($doc_id,$cate_id)
	{
		$sql="SELECT * FROM user_doc WHERE doc_id ='".$doc_id."' AND doc_cate_id='".$cate_id."'";	
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	function get_cat_name($cate_id)
	{
		$sql="SELECT doc_cate_name FROM user_doc_cate WHERE doc_cate_id='".$cate_id."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	function get_display_members_1($doc_id,$cate_id)
	{
		$sql="SELECT t1.user_level_name FROM user_level t1 ,user_doc_display t2 WHERE t1.user_level_id = t2.user_level_id AND t2.doc_id ='".$doc_id."' AND t2.doc_cate_id='".$cate_id."'";
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
	function get_display_members($doc_id,$cate_id)
	{
		$sql="SELECT t1.user_level_name FROM user_level t1,user_doc_display t2 WHERE t1.user_level_id = t2.user_level_id AND t2.doc_id ='".$doc_id."' AND t2.display=1";
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
	function get_user_level($doc_id,$user_level_id)
	{
		$sql="SELECT * FROM user_doc_display WHERE doc_id='".$doc_id."' AND user_level_id='".$user_level_id."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	function about_us_Doc()
	{
		$sql="SELECT * FROM user_doc_cate";	
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
	function board_members()
	{
		$sql="SELECT * FROM user_level";
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
		function Doc_type()
		{
			$sql="SELECT * FROM doc_type";
			$data = CDBCon::GetInstance()->GetAll($sql);
			return $data;
		}
	function getAlldocfolders(){
			$sql="SELECT * FROM board_member_folders";
			$data = CDBCon::GetInstance()->GetAll($sql);
			return $data;
	}
	
	function insert_cate($type)
	{
		$sqlInsert="INSERT INTO user_doc_cate VALUES(NULL,'".$type."','".date('Y.m.d')."','".date('Y.m.d')."')";
		if (CDBCon::GetInstance()->Execute($sqlInsert) === false) 
			{ 
				return false;
			}
			else
			{
				return true;
			}
	}
	function insert_Doc_Folder($foldername)
	{
		$sqlInsert="INSERT INTO user_doc_folder VALUES(NULL,'".$foldername."')";
		 $insertid = CDBCon::GetInstance()->getInsertId($sqlInsert); 
			return $insertid;
	}
	
	
	function update_cate($doc_cate_id,$type,$update)
	{
		$sqlupdate="UPDATE user_doc_cate SET doc_cate_name='".$type."',update_date='".$update."' WHERE doc_cate_id='".$doc_cate_id."'";
		//echo $sqlupdate;exit;
		if (CDBCon::GetInstance()->Execute($sqlupdate) === false) 
			{ 
				return false;
			}
			else
			{
				return true;
			}
	}
	
	function get_user_doc_cate_id($type)
	{
		$sql="SELECT doc_cate_id FROM user_doc_cate WHERE doc_cate_name='".$type."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	function insert_doc($cate_id,$txt_doc_title,$up_doc,$add_date,$update,$m_doc_type,$m_doc_folder_id)
	{
		//echo "wwwwww"; exit;
			$sqlInsert="INSERT INTO user_doc VALUES(NULL,'".$cate_id."','".$txt_doc_title."','".$up_doc."','".$add_date."','".$update."','".$m_doc_type."','".$m_doc_folder_id."')";
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
	
	
	function update_doc($doc_id,$doc_cate_id,$txt_doc_title,$up_doc_name,$update,$doc_type)
	{
			//$doc_id,$doc_cate_id,$txt_doc_title,$up_doc_name,$update
			$sqlupdate="UPDATE user_doc SET doc_cate_id='".$doc_cate_id."',doc_title='".$txt_doc_title."',doc_file_name='".$up_doc_name."',update_date='".$update."',doc_type ='".$doc_type."' WHERE doc_id='".$doc_id."'";
			//echo $sqlupdate;exit ;
			if (CDBCon::GetInstance()->Execute($sqlupdate) === false) 
			{ 
				return false;
			}
			else
			{
				return true;
			}
	}
	
	
	function get_user_doc_id($up_doc_name)
	{
		$sql="SELECT MAX(doc_id) FROM user_doc WHERE doc_file_name='".$up_doc_name."' ";
		//echo $sql;exit;
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	function insert_doc_display($doc_id,$user_level_id,$txt_doc_title,$cate_id,$up_doc_name,$display,$m_doc_type,$m_doc_folder_id)
	{
		$sqlInsert="INSERT INTO user_doc_display VALUES('".$doc_id."','".$user_level_id."','".$txt_doc_title."','".$cate_id."','".$up_doc_name."','".$display."','".$m_doc_type."','".$m_doc_folder_id."')";
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
	
	function update_doc_display($doc_id,$user_level_id,$txt_doc_title,$cate_id,$up_doc_name,$display,$m_doc_type)
	{
		$sqlupdate="UPDATE user_doc_display SET doc_title='".$txt_doc_title."',doc_cate_id='".$cate_id."',doc_file_name='".$up_doc_name."',display='".$display."',doc_type = '".$m_doc_type."'  WHERE doc_id='".$doc_id."' AND user_level_id='".$user_level_id."' ";
		//echo $sqlupdate;exit;
		if (CDBCon::GetInstance()->Execute($sqlupdate) === false) 
			{ 
				return false;
			}
			else
			{
				return true;
			}
	}
	
	function delete_doc($doc_id,$doc_name,$doc_cate_id,$doc_cat_name)
	{
		$file_path	= "../../upload_images/about_us_member_documents/";
		$sql_del="DELETE FROM user_doc WHERE doc_id='".$doc_id."'";
		//echo $sql_del;exit;
		
		if (CDBCon::GetInstance()->Execute($sql_del) === false) 
		{ 
			return false;
		}
		else
		{	//echo $file_path.$doc_cat_name."/".$doc_name;exit;
			if(file_exists($file_path.$doc_cat_name."/".$doc_name))
			{
				unlink($file_path.$doc_cat_name."/".$doc_name);
				$dir = $file_path.$doc_cat_name;	
				
				$fp = opendir($dir);				
				$num_of_files = -2;
				while ($file = readdir($fp))
				{
					$num_of_files++;
				}

				closedir($fp);
				if($num_of_files==0)
				{
				 	rmdir($dir);
					$sql_delete="DELETE FROM user_doc_cate WHERE doc_cate_id='".$doc_cate_id."'";
					if (CDBCon::GetInstance()->Execute($sql_delete) === false) 
					{ 
						return false;
					}
					else
					{
						return true;
					}					
				}	
			}
			return true;
			
		}
	}
	
	function delete_doc_dis($doc_id)
	{
		$sql_del="DELETE FROM user_doc_display WHERE doc_id='".$doc_id."'";
		if (CDBCon::GetInstance()->Execute($sql_del) === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}
	}
}
	


?>