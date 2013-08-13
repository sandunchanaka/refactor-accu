<?php
	$mode=isset($_GET['mode'])?$_GET['mode']:'';
	require_once('../includes/config.php');
	require_once('../common/logging.class.php');	
	require_once(CLASS_PATH.'db.class.php');
	
	$user=isset($_POST['txt_UserName'])?$_POST['txt_UserName']:'';
	$pass=isset($_POST['txt_Password'])?$_POST['txt_Password']:'';
	$page=isset($_POST['hdn_page'])?$_POST['hdn_page']:'';
	$doctype =isset($_POST['doc_type'])?$_POST['doc_type']:'';
	
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
		
		
		case'logindoc':
			
			$result=check_log::check($user,$pass);
			
			if($result==true)
			{
				$_SESSION['user_id']=$result['user_id'];
				$_SESSION['name']	 =$result['user_first_name']." ".$result['user_last_name'];
				$_SESSION['level_id']=$result['user_level_id'];
				echo "<script type=\"text/javascript\" >document.location.replace('../about_us_member_doc_folder.php?doctype=$doctype');</script>"; 
			}
			elseif($result==false)
			{
				echo "<script type=\"text/javascript\" >document.location.replace('$page?error=1');</script>";
			}
			
		break;
		
		
		case 'logout':
			session_destroy();
			session_unset();
			echo "<script type=\"text/javascript\" >document.location.replace('../member-login.php');</script>";				
		break;
		
		
		case 'culogin':
			
			$cuuser=isset($_POST['txt_UserName'])?$_POST['txt_UserName']:'';
			$cupass=isset($_POST['txt_Password'])?$_POST['txt_Password']:'';
			$cupage=isset($_POST['hdn_page'])?$_POST['hdn_page']:'';
			$documentname =isset($_POST['hdn_document'])?$_POST['hdn_document']:'';
			
			$result=check_log::cuuserchk($cuuser,$cupass);
			
			if($result==true)
			{
				$_SESSION['CUUSERID']=$result['user_name'];
				$_SESSION['CUUSERNAME']	 =$result['user_first_name']." ".$result['user_last_name'];
				$_SESSION['CUUSERLEVEL']=$result['user_level_id'];
				//echo 'Successfuly Download<a href =.../cu_solutions.php>Back To Home Page</a>'; 
				echo "<script type=\"text/javascript\" >document.location.replace('../download-cu-solutions.php?path_id=4&publication_name=".$documentname."');</script>"; 
				
					/*$fp = fopen('../upload_images/Credit_Union_Solution/' . $documentname, 'r');
   
    				header('Content-Type: application/x-octetstream');
    				header('Content-Disposition: attachment; filename="'.$documentname.'"');
    				fpassthru($fp);
				*/
				
				header('Location: ../cu-solutions.php');
            }
			elseif($result==false)
			{
				session_destroy();
				session_unset();
				echo "<script type=\"text/javascript\" >document.location.replace('../cu-solutions.php?msg=error');</script>";
			}
		break;
		
		case 'culogout':
			session_destroy();
			session_unset();
			echo "<script type=\"text/javascript\" >document.location.replace('../cu-solutions.php');</script>";				
		break;
		
	}
?>
