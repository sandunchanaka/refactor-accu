<?php
class Gallary
{
	public $m_image_id = NULL;
	public $m_image_name = NULL;
	public $m_image_cat = NULL;
	public $m_alt_text = NULL;
	
	//constructor
	private function __construct()
	{
		
	}

	//select image cat
	function Getcatagery()
	{
		$sql = "SELECT distinct catagary FROM image_gallary ORDER BY catagary";
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
	
	function  image_galary()
	{
		$sql="SELECT * FROM image_gallary WHERE min(gallery_id)";
	}
	
	
	function Insert_Gallery($m_image_name,$m_image_cat,$m_alt_text)
	{
		$sqlInsert = "INSERT INTO image_gallary VALUES (NULL,'".$m_image_name."','".$m_image_cat."','".$m_alt_text."')";
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
	
	//select Images for catagary
	function SelectImageCatagary()
	{
		$sql = "SELECT min(catagary) as mxcat FROM image_gallary";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	//update Categary
	function Update_Categary($m_olt_cat,$m_image_cat)
	{
		$sqlupdate = "UPDATE image_gallary SET catagary='".$m_image_cat."' where catagary='".$m_olt_cat."'";
		//cho $sqlInsert; exit;

		if (CDBCon::GetInstance()->Execute($sqlupdate) === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}
	}
	
	// Select  Image gallery by cat
	function GetImagegallery($cat)
	{   
		$sql = "SELECT * FROM image_gallary WHERE catagary='".$cat."'";
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
	function GetRamdamImage($cat)
	{   
		$sql = "SELECT image_name as ramdamimage FROM image_gallary WHERE catagary='".$cat."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		//echo $sql;
		return $data;
	}
	
	function GetImageCount($cat)
	{   
		$sql = "SELECT COUNT(image_id) as imagecount FROM image_gallary WHERE catagary='".$cat."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		//echo $sql;
		return $data;
	}
	
	//select Image from image Id
	function GetImage($m_image_id)
	{
		$sql = "SELECT * FROM image_gallary WHERE image_id='".m_image_id."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	

	//database connection
	function DBConnect()
	{
		$this->m_db = CDBCon::GetInstance();
	}

}
?>