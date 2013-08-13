<?php
class CUSolution
{
	public $m_Solution_id  			= NULL;
	public $m_solution_name			= NULL;
	public $m_solution_description	= NULL;
	public $m_solution_image		= NULL;
	public $m_query 				= NULL;
	public $m_add_date				= NULL;
	public $m_update_date			= NULL;
	public $m_link					= NULL;
	public $m_order					= NULL;
	
	//constructor
	private function __construct()
	{
		
	}
	
	//add new user
	function NewCUSolution($m_solution_name,$m_solution_description,$m_solution_image,$m_add_date,$m_link,$m_order)
	{
		$sqlInsert ="INSERT INTO cu_solutions(solution_name,description,image_file,add_date,link,ord) VALUES ('".$m_solution_name."','".$m_solution_description."','".$m_solution_image."','".$m_add_date."','".$m_link."','".$m_order."')";
		
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
	
	//get user records
	function GetCUSolution($m_Solution_id)
	{
		$sql = "select * from cu_solutions where solution_id='".$m_Solution_id."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	//check existance
	function ExistsCUSolution($m_solution_name)
	{
		$sql = "select * from cu_solutions where solution_name='".$m_solution_name."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	//Edit user
	function EditCUSolution($m_Solution_id,$m_solution_name,$m_solution_description,$m_solution_image,$m_update_date,$m_link,$m_order)
	{
			$sqlEditCUSolution = "UPDATE cu_solutions SET solution_name='".$m_solution_name."',description='".$m_solution_description."',image_file='".$m_solution_image."',update_date='".$m_update_date."',link ='".$m_link."',ord='".$m_order."'  WHERE solution_id='".$m_Solution_id."' ";
		//echo $sqlEditCUSolution; exit;
		
		if (CDBCon::GetInstance()->Execute($sqlEditCUSolution)=== false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}	
	}
	
	//get all users
	function GetAll($m_query)
	{
		$data = CDBCon::GetInstance()->GetAll($m_query);
		return $data;
	}
	
	//delete user
	function DeleteCUSolution($m_Solution_id)
	{
		$sqlDelete = "DELETE  FROM cu_solutions WHERE solution_id='".$m_Solution_id."'";
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
	
	function Deletefile($m_file_id)
	{
		$sqlDelete = "DELETE FROM upload_files WHERE file_id='".$m_file_id."'";
		if (CDBCon::GetInstance()->Execute($sqlDelete) === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}	
	}
	
	//select news details from Filr
	function GetNewsDetailsFromFile($file_id)
	{	
		$sql = "select * from upload_files where file_id='".$file_id."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	//pass Cu solution id
	function passCUSolutionid($m_solution_name)
	{
		$sql = "select solution_id from cu_solutions where solution_name='".$m_solution_name."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	
	function passCUSolutionDocuments($m_solution_id)
	{
		$sql = "SELECT * FROM upload_files where record_type ='c' and record_id ='".$m_solution_id."'";
		//echo $sql ;exit;
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
}
?>