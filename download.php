<?php 
   
      
    $document = isset($_GET['publication_name'])?$_GET['publication_name']:'';
    $path 	  = isset($_GET['path_id'])?$_GET['path_id']:'';
	$cat_fol  = isset($_GET['cat_fol'])?$_GET['cat_fol']:'';
	$cat_id	  = isset($_GET['cat_id'])?$_GET['cat_id']:'';
	
	//$about_us = 5.$cat_id
	if($path == 1){
    	$library_path = 'upload_images/publication_Documents/';
    }
	elseif($path == 2)
	{
		$library_path ='upload_images/event_image/';
	}
	elseif($path == 3)
	{
		$library_path ='upload_images/News_images/';
	}
	elseif($path == 4)
	{
		$library_path ='upload_images/Credit_Union_Solution/';
	}
	elseif($path == 5)
	{
		$library_path ='upload_images/about_us_member_documents/'.$cat_fol.'/';
	}
	elseif($path == 6)
	{
		$library_path ='upload_images/audio/';
	}
	elseif($path == 7)
	{
		$library_path ='content/documents/';
	}
   // echo $library_path; 
//	echo $document; 
	//exit;
	
	$fp = fopen($library_path . $document, 'r');
   
    header('Content-Type: application/x-octetstream');
    header('Content-Disposition: attachment; filename="'.$document.'"');
    fpassthru($fp);
	?>