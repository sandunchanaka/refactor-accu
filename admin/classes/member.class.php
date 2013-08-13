<?php
//require_once('../classes/fileupload-class.php');
class Member
{
	public $m_member_id = NULL;
	public $m_member_type_id = NULL;
	public $m_member_name  = NULL;
	public $m_member_abbrevation  = NULL;
	public $m_country_id  = NULL;
	public $m_member_sign = NULL;
	public $m_url  = NULL;
	public $m_email  = NULL;
	public $m_street1 = NULL;
	public $m_street2  = NULL;
	public $m_city = NULL;
	public $m_province  = NULL;
	public $m_postal_code  = NULL;
	public $m_phone_no = NULL;
	public $m_fax_no = NULL;
	public $m_registered_date=NULL;
	public $m_updated_date=NULL;
	public $m_active=NULL;
	
	public $m_member_staff_id=NULL;
	public $m_staff_title=NULL;
	public $m_staff_name=NULL;
	public $m_position_no=NULL;
	public $m_Position=NULL;
	
	public $m_title   = NULL;
	public $m_name    = NULL;
	
	
	//constructor
	private function __construct()
	{
		
	}
	
	
	//add new member basic details
	function New_member_basic(
	$m_member_type_id,$m_member_name,$m_member_abbrevation,$m_member_sign,$m_country_id,$m_url,$m_email,$m_registered_date,$m_active)
	{
	 $sqlInsert = "INSERT INTO member (member_id,member_type_id,member_name,member_abbrevation,member_sign,country_id,url,email,registered_date,active) VALUES (NULL,'".$m_member_type_id."','".$m_member_name."','".$m_member_abbrevation."','".$m_member_sign."','".$m_country_id."','".$m_url."','".$m_email."','".$m_registered_date."','".$m_active."')";

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
	
	//add new member contact details
	function New_member_contact($m_member_id,$m_street1,$m_street2,$m_city,$m_province,$m_postal_code,$m_phone_no,$m_fax_no,$m_updated_date)
	{
		$sqlInsert="UPDATE member SET street1='".$m_street1."',street2='".$m_street2."',city='".$m_city."',province='".$m_province."',postal_code='".$m_postal_code."',phone_no='".$m_phone_no."',fax_no='".$m_fax_no."',updated_date='".$m_updated_date."' WHERE  member_id='".$m_member_id."'";
		
		if (CDBCon::GetInstance()->Execute($sqlInsert) === false) 
		{ 
		  	return false; 
		}
		else
		{
		  	return true; 
		}		
	}
	
	// Add new Contact Person
	function New_contact_person($m_member_id,$m_title,$m_name,$post,$m_address,$m_telephone,$m_fax,$m_email,$m_url,$m_add_date)
	{
		$sqlInsert="Insert into contactperson values(NULL,'".$m_member_id."','".$m_title."','".$m_name."','".$post."','".$m_address."','".$m_telephone."','".$m_fax."','".$m_email."','".$m_url."','".$m_add_date."',NULL)";
		
		if (CDBCon::GetInstance()->Execute($sqlInsert) === false) 
		{ 
		  	return false; 
		}
		else
		{
		  	return true; 
		}		
	}
	
	// insert new Regluter details 
	function New_Regluter($m_member_id,$m_title,$m_reg_name,$m_desc,$m_address,$m_add_date)
	{
		$sqlInsert="Insert into regulator values(NULL,'".$m_member_id."','".$m_title."','".$m_reg_name."','".$m_desc."','".$m_address."','".$m_add_date."',NULL)";
		
		if (CDBCon::GetInstance()->Execute($sqlInsert) === false) 
		{ 
		  	return false; 
		}
		else
		{
		  	return true; 
		}		
	}
	
	
	//add new member staff details
	function member_staff($m_member_id,$m_staff_title,$m_staff_name,$m_position_no,$m_Position)
	{
		
		$sqlInsert="INSERT INTO member_staff(member_staff_id,member_id,title,name,board_of_directors,possion) VALUES (NULL,'".$m_member_id."','".$m_staff_title."','".$m_staff_name."','".$m_Position."','".$m_position_no."')";
		
		if(CDBCon::GetInstance()->Execute($sqlInsert)===false)
		{
			return false;
		}
		else
		{
			return true;
		}
		
		
	}

	//Update member
	function update_member_basic($m_member_id,$m_member_type_id,$m_member_name,$m_member_abbrevation,$m_member_sign,$m_country_id,$m_url,$m_email,$m_updated_date,$m_active)
	{
		$sqlupdate="UPDATE member SET member_type_id='".$m_member_type_id."',member_name='".$m_member_name."',member_abbrevation='".$m_member_abbrevation."',member_sign='".$m_member_sign."',country_id='".$m_country_id."',url='".$m_url."',email='".$m_email."',updated_date='".$m_updated_date."',active='".$m_active."' WHERE member_id='".$m_member_id."'";
		
		if(CDBCon::GetInstance()->Execute($sqlupdate)===false)
		{
			return false;
		}
		else
		{
			return true;
		}
	}
	
	
	
	//Update member contact
	function update_member_contact($m_member_id,$m_street1,$m_street2,$m_city,$m_province,$m_postal_code,$m_phone_no,$m_fax_no)
	{
		$sqlInsert="UPDATE member SET street1='".$m_street1."',street2='".$m_street2."',city='".$m_city."',province='".$m_province."',postal_code='".$m_postal_code."',phone_no='".$m_phone_no."',fax_no='".$m_fax_no."' WHERE  member_id='".$m_member_id."' ";
		
		if (CDBCon::GetInstance()->Execute($sqlInsert) === false) 
		{ 
		  	return false; 
		}
		else
		{
		  	return true; 
		}	
	}
	// update Contact Member details
	function Update_contact_person($m_contact_member_id,$m_title,$m_name,$post,$m_address,$m_telephone,$m_fax,$m_email,$m_url,$m_add_date)
	{
		$sqlInsert="Update contactperson set title='".$m_title."',contact_person ='".$m_name."',post = '".$post."',contact_address ='".$m_address."', telephone ='".$m_telephone."',fax ='".$m_fax."',email ='".$m_email."',url='".$m_url."',update_date='".$m_add_date."'  Where contact_person_id ='".$m_contact_member_id."'";
		
		if (CDBCon::GetInstance()->Execute($sqlInsert) === false) 
		{ 
		  	return false; 
		}
		else
		{
		  	return true; 
		}		
	}
	
	// Update Regulator Details
	function update_Regluter($m_reglutor_id,$m_title,$m_reg_name,$m_desc,$m_address,$m_add_date)
	{
		$sqlInsert="Update regulator set title ='".$m_title."',reg_name = '".$m_reg_name."',reg_desc='".$m_desc."',reg_address='".$m_address."',update_date='".$m_add_date."' where regulator_id = '".$m_reglutor_id."'";
		
		if (CDBCon::GetInstance()->Execute($sqlInsert) === false) 
		{ 
		  	return false; 
		}
		else
		{
		  	return true; 
		}		
	}
	
	
	//update staff members
	function update_member_staff($m_member_id,$m_staff_id,$m_staff_title,$m_staff_name,$m_position_no,$m_Position)
	{
		$sqlInsert = "UPDATE member_staff SET title='".$m_staff_title."',name='".$m_staff_name."',board_of_directors='".$m_Position."',possion='".$m_position_no."' WHERE member_id='".$m_member_id."' AND member_staff_id='".$m_staff_id."' ";
		if (CDBCon::GetInstance()->Execute($sqlInsert) === false) 
		{ 
		  	return false; 
		}
		else
		{
		  	return true; 
		}	
	}
	
	
	//get user records	
	function Get_member_id($name)
	{
		$sql ="SELECT * FROM member WHERE member_name='".$name."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	//Get member details
	function GetMember($m_member_id)
	{
		$sql = "SELECT * FROM member WHERE member_id='".$m_member_id."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	// get Member Contact Details  
	
	function getContactPerson($m_member_id)
	{
		$sql = "SELECT * FROM contactperson WHERE member_id='".$m_member_id."' ORDER BY contact_person ASC";
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	// Getmember id from Contact membetr
		function getmember_Id($m_contact_person)
		{
			$sql = "SELECT member_id FROM contactperson WHERE contact_person_id='".$m_contact_person."'";
			$data = CDBCon::GetInstance()->GetRow($sql);
			return $data;
		}
	//
	
	//getcontact person details 
	function GetContactPersondetails($m_contact_person)
	{
		$sql = "SELECT * FROM contactperson WHERE contact_person_id='".$m_contact_person."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	//get Regulator details
	function getRegulator($m_member_id)
	{
		$sql = "SELECT * FROM regulator WHERE member_id='".$m_member_id."' ORDER BY reg_name ASC";
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	//selectreg it
	function getregulatemem_Id($reg_id)
	{
			$sql = "SELECT member_id FROM regulator WHERE regulator_id='".$reg_id."'";
			$data = CDBCon::GetInstance()->GetRow($sql);
			return $data;
	}
	
	//slect regulator details 
	function GetRegulatordetails($reg_id)
	{
		$sql = "SELECT * FROM regulator WHERE regulator_id='".$reg_id."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	
	function Get_Staff_Member($m_member_id)
	{
		$sql = "SELECT * FROM member_staff WHERE member_id='".$m_member_id."' ORDER BY member_staff_id ASC";
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
	function Get_Staff_Member_details($m_member_staff_id)
	{
		$sql = "SELECT * FROM member_staff WHERE member_staff_id='".$m_member_staff_id."' ";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}	
	
	
	function GetUser($m_user_id)
	{
		$sql = "select * from users where user_id='".$m_user_id."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	//check existance
	function ExistsUser($m_email)
	{
		$sql = "select * from members where email='".$m_email."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	//Edit user
	function EditProfile($m_password,$m_first_name,$m_last_name,$m_active,$m_user_id)
	{
		$sqleditProfile = "update users set password='".$m_password."', first_name='".$m_first_name."', last_name='".$m_last_name."', active='".$m_active."' where user_id='".$m_user_id."'";
		if (CDBCon::GetInstance()->Execute($sqleditProfile) === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}	
	}
	
	//Edit Staff members
	
	//Add Contact people Details
	
	
	
	//get all users
	function GetAll($m_query)
	{///////////////////////////////////////////////////////////////////////////////////////////
		$data = CDBCon::GetInstance()->GetAll($m_query);
		return $data;
	}
	
	//delete user
	function DeleteMember($m_member_id)
	{
		//$sqlDelete = "DELETE FROM member AS m INNER JOIN member_staff AS ms WHERE m.member_id='".$m_member_id."' AND ms.member_id='".$m_member_id."'";
		
		
		$sqlDelete ="DELETE FROM member WHERE member_id='".$m_member_id."'";

		//echo $sqlDelete;exit;
		if (CDBCon::GetInstance()->Execute($sqlDelete) === false) 
		{ 
			return false;
		}
		else
		{
			$sqlDelete ="DELETE FROM member_staff WHERE member_id='".$m_member_id."'";

		//echo $sqlDelete;exit;
			if (CDBCon::GetInstance()->Execute($sqlDelete) === false) 
			{ 
				return false;
			}
			else
			{
				return true;
			}	
		
		}	
	}
	
	function Delete_Staff_Member($m_member_id,$m_member_staff_id)
	{
		$sqlDelete="DELETE  FROM member_staff WHERE member_staff_id='".$m_member_staff_id."'";
		if (CDBCon::GetInstance()->Execute($sqlDelete) === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}	
	}
	
		function Delete_contact_Person($m_contactPerson)
		{
			$sqlDelete="DELETE  FROM contactperson WHERE contact_person_id ='".$m_contactPerson."'";
			if (CDBCon::GetInstance()->Execute($sqlDelete) === false) 
			{ 
				return false;
			}
			else
			{
				return true;
			}	
	}
	
	function Delete_regulator($m_regid)
		{
			$sqlDelete="DELETE FROM regulator WHERE regulator_id ='".$m_regid."'";
			if (CDBCon::GetInstance()->Execute($sqlDelete) === false) 
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