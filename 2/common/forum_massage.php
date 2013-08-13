<?php 
$msg	=	isset( $_GET['msg'] )?$_GET['msg']:'';
$msg	=	isset( $_POST['msg'])?$_POST['msg']:$msg;

$display_msg = '';

switch($msg)
{
	
	case '1':
	$display_msg = "Please enter a Memeber Name.";
	break;
	
	case '2':
	$display_msg = "Please enter Question.";
	break;
	
	case '3':
	$display_msg = "Please Select Catagary.";
	break;
		
	case '4':
	$display_msg = "successfully Enter.";
	break;

	case '5':
	$display_msg = "Cannot Insert New Question.";
	break;

	case '6':
	$display_msg = "Sucessfull.";
	break;	
	
	case '7':
	$display_msg = "Cannot Register.";
	break;

	case '8':
	$display_msg = "PLease select a Question.";
	break;	
	
	case '9':
	$display_msg = "Enter Post Title.";
	break;	
	
	case '10':
	$display_msg = "New Post Sucessfull.";
	break;

	case '11':
	$display_msg = "Cannot Enter new post";
	break;	
	
}
echo $display_msg;
?>