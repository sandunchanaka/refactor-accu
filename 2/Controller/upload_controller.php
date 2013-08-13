<?php
	require_once('../classes/fileupload-class.php');
		
	class File_upload{
	
	///////////////////////
		function Image_upload($id,$path,$path_tumb,$file,$file_name,$page,$file_p)
		{
 			//echo $file;
			$my_uploader = new uploader('en'); 	
			$my_uploader->max_filesize(90000);
			$my_uploader->max_image_size(800, 800);
			$my_uploader->upload($file_name, 'image/gif|image/jpeg|image/pjpeg|image/x-png', '');
			$my_uploader->save_file($path, 2);
			echo $my_uploader->error;
			if ($my_uploader->error) {
				print("<p><p><div align=center><font size=2 face=Verdana, Arial, Helvetica, sans-serif>".$my_uploader->error . "<br><br>Transaction Aborted<p>Try again with less size of images<p>Press Browser's BACK Button to go back\n");
				//echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../".$page."?msg=17&id=".$id."');</script>";	
				
			} 
			else {
				if ($file_p != ""){
					unlink($path.$file_p);
					unlink($path_tumb.$file_p);									
				}
				$fimg0 = $my_uploader->file['name'];
						//set thumbnails
						$thumbsize = 75;
						$imgfile = $path.$fimg0;			
						list($width, $height) = getimagesize($imgfile);
						$imgratio=$width/$height;
						if ($imgratio>1){
							$newwidth = $thumbsize;
							$newheight = $thumbsize/$imgratio;}
						else{
							$newheight = $thumbsize;
							$newwidth = $thumbsize*$imgratio;}
						$thumb = ImageCreateTrueColor($newwidth,$newheight);
						echo $my_uploader->file['type']; 
						if($my_uploader->file['type'] == 'image/gif'){
							$source = imagecreatefromgif($imgfile);
						}
						elseif($my_uploader->file['type'] == 'image/jpeg')
						{
							$source = imagecreatefromjpeg($imgfile);
						}
						elseif($my_uploader->file['type'] == 'image/pjpeg')
						{
							$source = imagecreatefromjpeg($imgfile);
						}
						elseif($my_uploader->file['type'] == 'image/x-png') 
						{
							$source = imagecreatefrompng($imgfile);
						}
						elseif($my_uploader->file['type'] == 'image/png') 
						{
							$source = imagecreatefrompng($imgfile);
						}
						else{
						$source = imagecreatefromjpeg($imgfile); }
						imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
						imagejpeg($thumb,$path_tumb.$fimg0,100);
						//end thumbnails							
						$rteData = $fimg0;
						echo $source;
						
					}
					return $rteData;
		}
		
			
			
		function RemoveUpImages($path,$file_p,$path_tumb)
		{
			unlink($path.$file_p);
			unlink($path_tumb.$file_p);	
		}
		
		function RemoveUpFiles($path,$file_p)
		{
			unlink($path.$file_p);
		}
			
			
			

	// /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			
		function RemoveImage($path,$path_thumb,$image_name)
		{
			unlink($path.$image_name);
			unlink($path_thumb.$image_name);
		}
		
		

	function Attach_File_upload($file_path,$file_name,$page,$file_p)
	  {
	    
	   $my_uploader = new uploader('en');  
	   //$my_uploader->max_filesize(90000);
	   //$my_uploader->max_image_size(800, 800);
	   $my_uploader->upload($file_name, '', '');
	   $my_uploader->save_file($file_path, 2);
	   //echo $my_uploader->error; exit;
	   if ($my_uploader->error)
	   {
	     //print("<p><p><div align=center><font size=2 face=Verdana, Arial, Helvetica, sans-serif>".$my_uploader->error . "<br><br>Transaction Aborted<p>Try again with less size of images<p>Press Browser's BACK Button to go back\n");
    	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../".$page."?msg=17);</script>"; 
	    exit;
	   } 
	   else {
		   if ($file_p != ""){
				//echo $file_path.$file_p;exit;
		   		unlink($file_path.$file_p);        
			}
			  $fname = $my_uploader->file['name'];
			  $ftype = $my_uploader->file['type'];
			  
			  $rteData = $fname;
		   }
    
    
    	return $rteData;
  }
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	
}


?>