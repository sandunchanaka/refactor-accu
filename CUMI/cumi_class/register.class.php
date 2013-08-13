<?php 
	
	class register
	{
	
	
		public $reg_id			=	NULL;
		public $country_name	=	NULL;
		public $district		=	NULL;
		public $name			=	NULL;
		public $cus_name		=	NULL;
		public $address			=	NULL;
		public $city			=	NULL;
		public $country			=	NULL;
		public $reg_no			=	NULL;
		public $phone_no		=	NULL;
		public $fax				=	NULL;
		public $email			=	NULL;
		public $operation_area	=	NULL;
		public $employee_male	=	NULL;
		public $employee_female	=	NULL;
		public $establish		=	NULL;
		public $service_type	=	NULL;
		public $share_amount	=	NULL;
		public $deposit			=	NULL;
		public $savings			=	NULL;
		public $loan			=	NULL;
		public $reserve			=	NULL;
		public $assest			=	NULL;
		public $user			=   NULL;
		public $pass			=   NULL;
		
		
		function org_data($country_name,$district,$name,$cus_name,$address,$city,$country,$reg_no,$phone_no,$fax,$email,$user,$pass/*,$operation_area,$employee_male,$employee_female,$establish,$service_type,$share_amount,$deposit,$savings,$loan,$reserve,$assest*/)
		{
			$query	=	"INSERT INTO cumi_register_data VALUES(NULL,'".$country_name."','".$district."','".$name."','".$cus_name."','".$address."','".$city."','".$country."','".$reg_no."','".$phone_no."','".$fax."','".$email."','".$user."','".md5($pass)."')";	
			/*,'".$operation_area."','".$employee_male."','".$employee_female."','".$establish."','".$service_type."','".$share_amount."','".$deposit."','".$savings."','".$loan."','".$reserve."','".$assest."'*/
			//echo $query;exit;
			if (CDBCon::GetInstance()->Execute($query) === false) 
			{ 
				return false;
			}
			else
			{
				return true;
			}
		}
		
		function check_available($reg_no)
  		{
   			$sql="SELECT * FROM cumi_register_data WHERE reg_no='".$reg_no."'";
   			//echo $sql;exit;
   			$data = CDBCon::GetInstance()->GetRow($sql);
   			return $data; 
  		}
  
	}
?>