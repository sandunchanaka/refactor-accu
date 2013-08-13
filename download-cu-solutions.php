<?php 
session_start();
$document = isset($_GET['publication_name'])?$_GET['publication_name']:'';
//echo $document; exit;
   if($_SESSION["CUUSERID"] !=""){
      
    $path 	  = isset($_GET['path_id'])?$_GET['path_id']:'';
	$cat_fol  = isset($_GET['cat_fol'])?$_GET['cat_fol']:'';
	$cat_id	  = isset($_GET['cat_id'])?$_GET['cat_id']:'';
	
	//$about_us = 5.$cat_id
	
		$library_path ='upload_images/Credit_Union_Solution/';
		
   // echo $library_path; 
//	echo $document; 
	//exit;
	
	$fp = fopen($library_path . $document, 'r');
   
    header('Content-Type: application/x-octetstream');
    header('Content-Disposition: attachment; filename="'.$document.'"');
    fpassthru($fp);
	//header('Location: cu-solutions.php');
   }else{
	 echo "<script type=\"text/javascript\" >document.location.replace('solution-login.php?path_id=4&pub_name=".$document."');</script>";
	 //header('Location: solution-login.php?path_id=4&pub_name="'.$document.'"');  
	   
   }
?>