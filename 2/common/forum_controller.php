<?php
require_once('../includes/config.php');
require_once('../classes/db.class.php');
require_once('accu_online_forum.class.php');


$mode	=	isset( $_GET['mode'] )?$_GET['mode']:'';
$mode	=	isset( $_POST['mode'])?$_POST['mode']:$mode;



//$type 					= "N";

switch($mode)
{
	
	case 'add_question':
	
	$mem_name		 		   	 =	isset( $_POST['txt_name'])?$_POST['txt_name']:$mem_name;
	$country		    		 =	isset( $_POST['cmb_countryName'])?$_POST['cmb_countryName']:$country;
	//$location					 =	isset( $_POST['txt_location'])?$_POST['txt_location']:$location;
	$email						 =	isset( $_POST['txt_email'])?$_POST['txt_email']:$email;
	/*$organization				 =	isset( $_POST['txt_organization'])?$_POST['txt_organization']:$organization;
	$possion					 =	isset( $_POST['txt_possion'])?$_POST['txt_possion']:$possion;*/
	
	$question					 =	isset( $_POST['txt_title'])?$_POST['txt_title']:$question;
	$short_desc					 =	isset( $_POST['short_msg'])?$_POST['short_msg']:$short_desc;
	$details_desc				 =	isset( $_POST['question_msg'])?$_POST['question_msg']:$details_desc;
	$cat_id						 =	isset( $_POST['hdn_q_cat_id'])?$_POST['hdn_q_cat_id']:$cat_id;
	
	$added_date 	     	     =  date('Y-m-d');
	$updated_date 		 		 =  date('Y-m-d');
	
	
	
	if($question == '')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../accu_forum_question.php?cat=".$cat_id."&msg=2');</script>";	
	}
	else
	{
			$regResult = Accu_Forum :: Add_new_question($question,$short_desc,$details_desc,$cat_id,$added_date,$updated_date,$mem_name,$country,$email);
			
			if($regResult==true)
			{
			 	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../accu_forum_page.php?msg=4');</script>";	
	
			}
			elseif($regResult==false)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../accu_forum_question.php?cat=".$cat_id."&msg=5');</script>";
			}
		
	}
	break;
	
	case 'reg_mem':
	
	$mem_name		 		   	 =	isset( $_POST['txt_people'])?$_POST['txt_people']:$mem_name;
	$country		    		 =	isset( $_POST['cmb_countryName'])?$_POST['cmb_countryName']:$country;
	$location					 =	isset( $_POST['txt_location'])?$_POST['txt_location']:$location;
	$email						 =	isset( $_POST['txt_email'])?$_POST['txt_email']:$email;
	$organization				 =	isset( $_POST['txt_organization'])?$_POST['txt_organization']:$organization;
	$possion					 =	isset( $_POST['txt_possion'])?$_POST['txt_possion']:$possion;
	
	$added_date 	     	     =  date('Y-m-d');
	$updated_date 		 		 =  date('Y-m-d');
	
	
	
	if($mem_name == '')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../forum_registration.php?msg=1');</script>";	
	}
	else
	{
			$regResult = Accu_Forum :: Member_registration($mem_name,$country,$location,$email,$organization,$possion,$added_date,$updated_date);
			
			if($regResult==true)
			{
			 	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_question.php?msg=6');</script>";	
	
			}
			elseif($regResult==false)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../forum_registration.php?msg=7');</script>";
			}
		
	}
	break;
	
	break;
	
	case 'reg_mem_2':
	
	$mem_name		 		   	 =	isset( $_POST['txt_people'])?$_POST['txt_people']:$mem_name;
	$country		    		 =	isset( $_POST['cmb_countryName'])?$_POST['cmb_countryName']:$country;
	$location					 =	isset( $_POST['txt_location'])?$_POST['txt_location']:$location;
	$email						 =	isset( $_POST['txt_email'])?$_POST['txt_email']:$email;
	$organization				 =	isset( $_POST['txt_organization'])?$_POST['txt_organization']:$organization;
	$possion					 =	isset( $_POST['txt_possion'])?$_POST['txt_possion']:$possion;
	
	$added_date 	     	     =  date('Y-m-d');
	$updated_date 		 		 =  date('Y-m-d');
	
	
	
	if($mem_name == '')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../forum_registration2.php?msg=1');</script>";	
	}
	else
	{
			$regResult = Accu_Forum :: Member_registration($mem_name,$country,$location,$email,$organization,$possion,$added_date,$updated_date);
			
			if($regResult==true)
			{
			 	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../new_post.php?msg=6');</script>";	
	
			}
			elseif($regResult==false)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../forum_registration2.php?msg=7');</script>";
			}
		
	}
	break;
	
	case 'post':
	
	$name			=	isset( $_POST['txtname'])?$_POST['txtname']:$name;
	$country		=	isset( $_POST['cmb_countryName'])?$_POST['cmb_countryName']:$country;
	$email			=	isset( $_POST['txt_email'])?$_POST['txt_email']:$email;
	$post_title		=	isset( $_POST['txt_post_title'])?$_POST['txt_post_title']:$post_title;
	$question_id	=	isset( $_POST['hdnquestion'])?$_POST['hdnquestion']:$question_id;
	$post			=	isset( $_POST['post'])?$_POST['post']:$post;
	
	$added_date 	=  date('Y-m-d');
	$updated_date 	=  date('Y-m-d');
	
	
	//echo $question_id; exit;
	if($question_id == 0)
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../forum_post.php?msg=8&qid=".$question_id."');</script>";	
	}
	elseif($post_title == '')
	{
		echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../forum_post.php?msg=9&qid=".$question_id."');</script>";
	}
	else
	{
			
			$regResult = Accu_Forum :: Add_new_post($post_title,$post,$question_id,$added_date,$name,$country,$email);
			
			if($regResult==true)
			{
			 	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../forum_post.php?msg=10&qid=".$question_id."');</script>";
			}
			elseif($regResult==false)
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../forum_post.php?msg=11&qid=".$question_id."');</script>";
			}
		
	}
	break;
	
	
}	
?>