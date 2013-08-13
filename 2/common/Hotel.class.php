<?php
class news
{
	public $news_id 					= NULL;
	public $news_name					= NULL;
	public $date						= NULL;
	
	
	public $m_registered_date  			= NULL;
	public $m_invitor_id  				= NULL;
	public $m_query 					= NULL;
	
	//constructor
	private function __construct()
	{
		
	}
	
	
	
	//add new category
	/*function NewHotel($m_hotelName,$m_hotelNameCzech,$m_distination ,$m_officialcategory,$m_officialcategory_czech,$m_our_opinion,$m_our_opinion_czech,$m_shortdisc ,$m_shortdisc_czech,$m_overview,$m_overview_czech,$m_accommodation	,$m_accommodation_czech,$m_foodbasis,$m_foodbasis_czech,$m_maximumOcc,$m_pool,$m_poolczech, $m_main_image,$m_other_images,$m_page_title,$m_page_title_czech,$m_keywords,$m_keywords_czech)
	{
		$sqlInsert = "insert into hotel values ('',$m_hotelName,$m_hotelNameCzech,$m_distination ,$m_officialcategory,$m_officialcategory_czech,$m_our_opinion,$m_our_opinion_czech,$m_shortdisc ,$m_shortdisc_czech,$m_overview,$m_overview_czech,$m_accommodation	,$m_accommodation_czech,$m_foodbasis,$m_foodbasis_czech,$m_maximumOcc,$m_pool,$m_poolczech, $m_main_image,$m_other_images,$m_page_title,$m_page_title_czech,$m_keywords,$m_keywords_czech,'".date('Y-m-d')."')";		
		
		if (CDBCon::GetInstance()->Execute($sqlInsert) === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}
	}*/
	
	//get category records
	function GetNews()
	{
		$sql = "select news_id,news_name,date from news";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	//check existance
	function ExistsHotel($m_hotelName)
	{
		$sql = "select * from hotel where hotel_name='".$m_hotelName."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	//check existance
	function ExistsCategoryEdit($m_category, $m_category_id)
	{
		$sql = "select * from category where category_name='".$m_category."' and category_Id !=" . $m_category_id ;		
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	//Edit category
	
	function EditCategory($m_category,$m_description,$m_active,$m_category_id)
	{
			
		$sqleditCategory = "update category set category_name='".$m_category."', description='".$m_description."', active='".$m_active."' where category_id='".$m_category_id."'";
		
		//echo $sqleditCategory ;
		//exit;
		
		if (CDBCon::GetInstance()->Execute($sqleditCategory) === false) 
		{ 
			return false;
		}
		else
		{
			return true;
		}	
	}
	
	//get all category
	function GetAll($m_query)
	{
		$data = CDBCon::GetInstance()->GetAll($m_query);		
		return $data;
	}
	
	//delete category
	function DeleteCategory($m_category_id)
	{
		$sqlDelete = "delete from category where category_id='".$m_category_id."'";
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
	
	function test() {
		print('xxxx');
	}
	
}
?>