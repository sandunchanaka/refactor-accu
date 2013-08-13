<?php

class Events
{
	public $event_id 					= NULL;
	public $event_name					= NULL;
	public $event_starting_date			= NULL;
	
	
	public $m_registered_date  			= NULL;
	public $m_invitor_id  				= NULL;
	public $m_query 					= NULL;
	
	var $result = array();
	//constructor
	/*private function __construct()
	{
		
	}
	*/
	
	function Events(){
	
	}
	
	
		
	//get events records
	function GetEvents($start,$per_page)
	{
		$sql = "SELECT event_id,event_name,event_starting_date FROM event where event_home =1 ORDER BY event_starting_date ASC LIMIT $start, $per_page";		
		/*$result = mysql_query($sql);
		
		$data = array();
		$i = 0;
		
		while( $row = mysql_fetch_array($result) ){
			$data[$i]['event_id'] = $row['event_id'];
			$data[$i]['event_name'] = $row['event_name'];
			$data[$i]['event_starting_date'] = $row['event_starting_date'];			
		}*/
		//$data = CDBCon::GetInstance()->GetAll($sql);
		//$data = mysql_query($sql);		
		//return $data;
		$data = $this->query($sql);
		return $data;
	}
	
	// function Get All events
	function GetOneEvents($event_id)
	{
		$sql = "SELECT * FROM event WHERE event_id = '".$event_id."'";
		$data = CDBCon::GetInstance()->GetRow($sql);
		return $data;
	}
	
	function Get_More_Events($sql)
	{
		$data = CDBCon::GetInstance()->GetAll($sql);
		return $data;
	}
	
	
	
	
	// Get All Event 
	function GetAll($m_query)
	{
		$data = CDBCon::GetInstance()->GetAll($m_query);		
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
	
	function getEventCount($per_page){
		/*$query_pag_num = "SELECT COUNT(*) AS count FROM event";
		$result_pag_num = mysql_query($query_pag_num);
		$row = mysql_fetch_array($result_pag_num);
		$count = $row['count'];*/
		//return ceil($count / $per_page); 
		return 3;
	}
	
	function query( $s='', $rows=false, $organize=true ) {		
		$i = 0;
		//if (!$q=mysql_query($s)) return false;
		if ($rows!==false) $rows = intval($rows);
		$q=mysql_query($s);
		$type = $organize ? MYSQL_NUM : MYSQL_ASSOC;
		$i = 0;
		//while (($rows===false || $count<$rows) && $line = mysql_fetch_array($q,$type) ) {	
		while ( $line = mysql_fetch_array($q,$type) ) {			
			if ($organize) {				
				foreach ($line as $field_id => $value) {
					$table = mysql_field_table($q, $field_id);
					if ($table==='') $table=0;
					$field = mysql_field_name($q,$field_id);
					$this->result['rows'][$i][$field]=$value;
				}
			} else {
				$this->result[$i] = $line;
			}
			++$this->count;
			$i++;
		}
		print_r($this->result);exit;
		$this->result['row'] = $this->result['rows'][0];
		$this->result['num_rows'] = $this->count;
		//if (!mysql_free_result($q)) return false;
		return $this->result;
	}
	
}
?>