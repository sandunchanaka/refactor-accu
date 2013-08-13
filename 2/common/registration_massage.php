<?php 
$msg	=	isset( $_GET['msg'] )?$_GET['msg']:'';
$msg	=	isset( $_POST['msg'])?$_POST['msg']:$msg;

$display_msg = '';

switch($msg)
{
	
	case '1':
	$display_msg = "please select an event name.";
	break;
	
	case '2':
	$display_msg = "successfully added event name.";
	break;
	
	case '3':
	$display_msg = "error insert event name.";
	break;
		
	case '4':
	$display_msg = "data pass error";
	break;

	case '5':
	$display_msg = "your personal information inserted successfuly";
	break;

	case '6':
	$display_msg = "cannot insert personal information,please try again";
	break;	
	
	case '7':
	$display_msg = "registration fee tick success ";
	break;

	case '8':
	$display_msg = "error tick registration fee ";
	break;	
	
	case '9':
	$display_msg = "your payment information successfuly insert";
	break;	
	
	case '10':
	$display_msg = "cannot enter your payment information";
	break;

	case '11':
	$display_msg = "lodging information successfuly enter";
	break;	
	
	case '12':
	$display_msg = "error insert lodging information";
	break;

	case '13':
	$display_msg = "Travel Information Enter successful";
	break;	
	
	case '14':
	$display_msg = "Cannot Enter Travel Information";
	break;	
	
}
echo $display_msg;
?>