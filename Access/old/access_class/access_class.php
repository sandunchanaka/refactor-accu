<?php
	class access
	{	
		public $mi_cate_code	=NULL; 	 	 	 	 	 	 	 	
		public $comp_id			=NULL;
		public $MarkOption		=NULL;
		public $CatID			=NULL;
		public $CatCode			=NULL;
		public $Marks			=NULL;
		public $Year			=NULL;
		public $Date			=NULL;
		public $UserID			=NULL;
		public $Upd				=NULL;
		function get_mi_category()
		{
			$sql="SELECT  Distinct CatCode,CatProsp FROM mi_caegory ";
			$data = CDBCon::GetInstance()->GetAll($sql);
			return $data;
		}
		
		function get_mi_category_CatProsp($mi_cate_code)
		{
			$sql="SELECT * FROM mi_caegory WHERE CatCode='".$mi_cate_code."'";
			$data = CDBCon::GetInstance()->GetRow($sql);
			return $data;
		} 
		
		function get_mi_category_data($mi_cate_code)
		{
			$sql="SELECT * FROM mi_caegory WHERE CatCode='".$mi_cate_code."'";
			//echo "$sql";exit;
			$data = CDBCon::GetInstance()->GetAll($sql);
			return $data;
		} 
		
		function get_mi_caegoryoptions_data($mi_cateid)
		{
			$sql="SELECT * FROM mi_caegoryoptions WHERE CatID='".$mi_cateid."'";
			$data = CDBCon::GetInstance()->GetAll($sql);
			return $data;
		} 
		
		function insert_mark_data($comp_id,$MarkOption,$CatID,$CatCode,$Marks,$Year,$Date,$UserID,$Upd)
		{
			$sql_insert="INSERT INTO marks VALUES('".$comp_id."','".$MarkOption."','".$CatID."','".$CatCode."','".$Marks."','".$Year."','".$Date."','".$UserID."','".$Upd."')";
			//echo "$sql_insert";exit;
			if (CDBCon::GetInstance()->Execute($sql_insert) === false) 
			{ 
				return false;
			}
			else
			{
				return true;
			}
		}
		
		
		function get_union()
		{
			$sql="SELECT reg_id,name FROM register_data";
			//echo $sql;
			$data = CDBCon::GetInstance()->GetAll($sql);
			//echo count($data);exit;
			return $data;
			
		} 
		
		function check($name,$pass)
		{
			$pa=md5($pass);
			$sql="SELECT * FROM register_data where reg_id='".$name."' AND pass='".$pa."'";
			//echo $sql;exit;
			$data = CDBCon::GetInstance()->GetRow($sql);
			return $data;
		} 
		
		function check_fill($comp_id,$Year,$CatCode)
		{
			$sql="SELECT * FROM marks WHERE comp_id='".$comp_id."'  AND Year='".$Year."' AND  CatCode='".$CatCode."'";
			//echo $sql;exit;
			$data = CDBCon::GetInstance()->GetRow($sql);
			return $data;
		}
		
		function check_summary($comp_id,$Year)
		{
			$sql="SELECT DISTINCT CatCode FROM marks WHERE comp_id='".$comp_id."'  AND Year='".$Year."' ";
			//echo $sql;exit;
			$data = CDBCon::GetInstance()->GetAll($sql);
			return $data;
		}
		
		function get_mi_category_name($mi_cate_code)
		{
			$sql="SELECT CatProsp FROM mi_caegory WHERE CatCode='".$mi_cate_code."'";
			//echo $sql;exit;
			$data = CDBCon::GetInstance()->GetRow($sql);
			return $data;
		} 
		
		function get_marks($Year,$comp_id,$CatCode)
		{
			$sql="SELECT sum(Marks)as total FROM marks WHERE Year='".$Year."' AND comp_id='".$comp_id."' AND CatCode='".$CatCode."'";
			$data = CDBCon::GetInstance()->GetRow($sql);
			return $data;
		}
	}
	
?>