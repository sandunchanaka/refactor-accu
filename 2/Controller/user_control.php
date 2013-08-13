<?php
	$mode=isset($_GET['mode'])?$_GET['mode']:'';
	require_once('../includes/config.php');
	require_once('../common/logging.class.php');	
	require_once(CLASS_PATH.'db.class.php');
	
	$user=isset($_POST['txt_UserName'])?$_POST['txt_UserName']:'';
	$pass=isset($_POST['txt_Password'])?$_POST['txt_Password']:'';
	$page=isset($_POST['hdn_page'])?$_POST['hdn_page']:'';
	
	switch ($mode)
	{
		case'login':
			
			$result=check_log::check($user,$pass);
			
			if($result==true)
			{
				$_SESSION['user_id']=$result['user_id'];
				$_SESSION['name']	 =$result['user_first_name']." ".$result['user_last_name'];
				$_SESSION['level_id']=$result['user_level_id'];
				echo "<script type=\"text/javascript\" >document.location.replace('../about_us_member_doc_main.php');</script>"; 
			}
			elseif($result==false)
			{
				echo "<script type=\"text/javascript\" >document.location.replace('$page?error=1');</script>";
			}
			
		break;
		
		case 'logout':
			session_destroy();
			session_unset();
			echo "<script type=\"text/javascript\" >document.location.replace('../about_us1.php');</script>";				
		break;
		
		
		case 'culogin':
			
			$cuuser=isset($_POST['txt_UserName'])?$_POST['txt_UserName']:'';
			$cupass=isset($_POST['txt_Password'])?$_POST['txt_Password']:'';
			$cupage=isset($_POST['hdn_page'])?$_POST['hdn_page']:'';
			
			$result=check_log::cuuserchk($cuuser,$cupass);
			
			if($result==true)
			{
				$_SESSION['cuuser_id']=$result['user_name'];
				$_SESSION['name']	 =$result['user_first_name']." ".$result['user_last_name'];
				$_SESSION['level_id']=$result['user_level_id'];
				/*echo 'Successfuly Download<a href =.../cu_solutions.php>Back To Home Page</a>'; 
				echo "<script type=\"text/javascript\" >document.location.replace('../download.php?path_id=4&publication_name=".$cupage."');</script>"; */
				
					$fp = fopen('../upload_images/Credit_Union_Solution/' . $cupage, 'r');
   
    				header('Content-Type: application/x-octetstream');
    				header('Content-Disposition: attachment; filename="'.$cupage.'"');
    				fpassthru($fp);
				
				//echo "Test".$_SESSION['cuuser_id'];
				echo "<script type=\"text/javascript\" >document.location.replace('../cu_solutions.php');</script>";
            }
			elseif($result==false)
			{
				echo "<script type=\"text/javascript\" >document.location.replace('../cu_solutions.php');</script>";
			}
		break;
	}
?>
