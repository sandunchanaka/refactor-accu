<?php
	
	class check_log
	{
		public $user_name =NULL;
		public $pass	  =NULL;
		function __construct()
		{
			
		}
		function check($user_name,$pass)
		{
			$sql = "SELECT * FROM user_level_data WHERE user_name='".$user_name."' AND pass='".md5($pass)."' AND user_level_id IN(1,2,3,4)";
			//echo $sql; exit;
			$data = CDBCon::GetInstance()->GetRow($sql);
			return $data;
		}
		
		function cuuserchk($user_name,$pass)
		{
			$sql = "SELECT * FROM user_level_data WHERE user_name='".$user_name."' AND pass='".md5($pass)."'";
			//echo $sql; exit;
			$data = CDBCon::GetInstance()->GetRow($sql);
			return $data;
		}
		
	}
?>