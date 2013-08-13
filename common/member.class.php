<?php

class Member
{
	public $member_id 					= NULL;
	public $member_name					= NULL;
	public $date						= NULL;
	public $member_type_id				= NULL;
	public $member_staff_id				= NULL;
	
		
	//constructor
	private function __construct()
	{
		
	}
	
	
	
	//get category records
	function Getmember($member_type_id)
	{
		$sql = "SELECT m.member_id,m.member_name,m.member_abbrevation,m.member_sign,m.url,m.email,m.street1,m.street2,m.city,m.province,m.postal_code,m.phone_no,m.Address,c.country_name,c.country_flag FROM member m inner join country c on m.country_id=c.country_id where member_type_id ='".$member_type_id."' ORDER BY c.country_name ASC";
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
	function Getmember_new($member_type_id,$country_id)
	{
		$sql = "SELECT * FROM member where member_type_id ='".$member_type_id."' && country_id='".$country_id."'";
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
	//get member type Discription
	function getMemberTypeDiscription()
	{
		$sql = "SELECT * FROM member_type_description";
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	//get member Details 
	function GetmemberDetais($member_id)
	{
		//$sql = "SELECT m.* c.* FROM member m ,contry c WHERE member_id='".$member_id."'";
		$sql ="SELECT m.* ,c.* FROM member m inner join country c on m.country_id=c.country_id where member_id ='".$member_id."'";
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	
	}
	//get member Staff Details
	function GetMemberStaff($member_staff_id)
	{
		$sql = "SELECT * FROM member_staff WHERE member_id='".$member_staff_id."' ORDER BY possion ASC";
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
	function MemberCount($member_type)
	{
		$sql = "SELECT Count(member_id) as total FROM member where member_type_id='".$member_type."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	function GetCountryProfile($country_id)
	{
		$sql = "SELECT * FROM country_profile WHERE country_id='".$country_id."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	/*function GetMemberDetails() 
	{
		$sql = "SELECT * FROM member_staff WHERE member_id='".$member_staff_id."'  ORDER BY possion";
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}*/
	
	function GetMemberTypes() 
	{
		$sql = "SELECT member_type_name,member_type_id FROM member_type_description";
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
	function GetAllPublicationTypes()
	{
		$sql = "SELECT pub_cat_name,publication_cat_id FROM publication_catagary";
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
	function MembertypeName($member_type_id)
	{
		$sql = "SELECT member_type_name FROM member_type_description where member_type_id='".$member_type_id."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	function getmemebrCollection($memberType)
	{
		$sql = "SELECT member_name,member_id FROM member where member_type_id='".$member_type_id."'";
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
	function getmemebrTypeId($memberid)
	{
		$sql = "SELECT member_type_id FROM member where member_id='".$memberid."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	function Getmember_country($member_type_id)
	{
		$sql="SELECT DISTINCT country_id FROM member WHERE member_type_id ='".$member_type_id."'";
		$data =CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
	function GetCountry_name($m_country_id)
	{
		$sql = "select * from  country where country_id ='".$m_country_id."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	function GetContactPerson($m_member_id)
	{
		$sql = "select * from contactperson where member_id ='".$m_member_id."'";
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
	function GetRegulator($m_member_id)
	{
		$sql = "select * from regulator where member_id ='".$m_member_id."'";
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
		
	function CountContactPerson($m_member_id)
	{
		$sql = "select count(contact_person_id) as totalcontact from contactperson where member_id ='".$m_member_id."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	function CountRegulator($m_member_id)
	{
		$sql = "select count(regulator_id) as totalreg from regulator where member_id ='".$m_member_id."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	function CountStaffmember($m_member_id)
	{
		$sql = "select count(member_staff_id) as totalstaffmem from member_staff where member_id ='".$m_member_id."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	function GetBoardOfDirectors($type)
	{
	//select * from about_us Where type ='".$type."' Order By position ASC
		$sql = "select a.*,c.country_name from about_us as a,country as c Where type ='".$type."' and c.country_id =a.country Order By position ASC";
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
	function GetStaff($type)
	{
	//select * from about_us Where type ='".$type."' Order By position ASC
		$sql = "select * from about_us Where type ='".$type."' Order By position ASC";
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
	function GetProjectStaff($type)
	{
		$sql = "select a.*,c.country_name from about_us as a,country as c Where type ='".$type."' and c.country_id =a.country Order By country_name ASC";
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