<?php

class Accu_Forum
{
	public $forum_cat_id				= NULL;
	public $cat_name					= NULL;
	public $add_date					= NULL;
	public $cat_desc					= NULL;
	public $update_Date					= NULL;	
	
	public $m_registered_date  			= NULL;
	public $m_invitor_id  				= NULL;
	public $m_query 					= NULL;
	
	//constructor
	private function __construct()
	{
		
	}
	
	
	
	//get category records
	function GetForum_Troic()
	{
		$sql = "select * FROM forum_catagary";
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}

	function GetForum_question($q_type)
	{
		$sql="SELECT * FROM forum_questions WHERE cat_id ='".$q_type."' AND status =1";
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
	function GetQuestion_name($qid)
	{
		$sql="SELECT question,question_desc FROM forum_questions WHERE question_id ='".$qid."' AND status =1";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	function GetForum_Posts($qid)
	{
		$sql="SELECT * FROM forum_posts WHERE question_id ='".$qid."' AND status=1 ORDER BY post_date ASC";
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
	function Add_new_post($post_title,$post_desc,$question_id,$post_date,$name,$country,$email){
		
		$sqlInsert = "INSERT INTO forum_posts VALUES(NULL,'".$post_title."','".$post_desc."','".$question_id."','".$post_date."','".$name."','".$country."','".$email."',0)";
		
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
	
	function Add_new_question($question,$short_desc,$details_desc,$cat_id,$add_date,$update_date,$name,$country,$email){
		
		$sqlInsert = "INSERT INTO forum_questions VALUES(NULL,'".$question."','".$short_desc."','".$details_desc."','".$cat_id."','".$add_date."','".$update_date."','".$name."','".$country."','".$email."',0)";
		
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
	
	function Member_registration($people_name,$country,$location,$email,$org,$position,$add_date,$update_date){
		
		$sqlInsert = "INSERT INTO forum_registration VALUES(NULL,'".$people_name."','".$country."','".$location."','".$email."','".$org."','".$position."','".$add_date."','".$update_date."')";
		
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
	
	
	//get Country records
	function GetCountry()
	{
		$sql = "select * from country ORDER BY country_name ASC";
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
	function GetCountryName($cid)
	{
		$sql = "select * from country Where country_id =".$cid;
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	// get Last Post 
	function getLastPost($qid)
	{
		$sql = "select * from forum_posts where question_id ='".$qid."' AND status=1 ORDER BY post_date DESC" ;
		$data = CDBCon::GetInstance()->GetRow($sql);
		//echo $sql; exit;
		return $data;		
	}
	
	function Count_post($qid)
	{
		$sql = "select count(post_id) as totpost from forum_posts where question_id ='".$qid."' AND status=1" ;
		$data = CDBCon::GetInstance()->GetRow($sql);
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