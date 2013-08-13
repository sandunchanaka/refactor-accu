<?php
	require_once('../includes/config.php');
	require_once(CLASS_PATH.'registration.class.php');	
	require_once(CLASS_PATH.'db.class.php');
	require_once('upload_controller.php');
	
	$mode	=	isset( $_GET['mode'] )?$_GET['mode']:'';
	$mode	=	isset( $_POST['mode'])?$_POST['mode']:$mode;
	$file_path					= "../upload_images/event_registration/";
	$file_path_thumb			= "../upload_images/event_registration/thumb/"; 
	
	
	switch ($mode)
	{
		case 'reg_01':
	
			$event_id	=	isset( $_POST['cmb_event_name'])?$_POST['cmb_event_name']:$event_id;
			$reg_id		=   isset($_POST['hdn_reg_id'])?$_POST['hdn_reg_id']:0;

			if($event_id == '')
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../registration_form_01.php?msg=1');</script>";	
			}
			else
			{
				if($reg_id != 0){
					$regResult = Registration :: Update_registration_formone($event_id,$reg_id);
				}else{
					$regResult = Registration :: Insert_registration($event_id);
				}
				
				$getreg_id = Registration :: Get_registration_id($event_id);
				$reg_id_r = $getreg_id['maxregId'];
				//echo $reg_id_r; exit;
				if($regResult==true)
				{
				 	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../registration_form_02.php?msg=2&reg_id=".$reg_id_r."');</script>";	
		
				}
				elseif($regResult==false)
				{
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../registration_form_01.php?msg=3&reg_id=".$reg_id_r."');</script>";
				}						
			}
			
		break;
		
		case 'reg_02':
			
			$reg_id					=	isset( $_POST['hdn_reg_id'])?$_POST['hdn_reg_id']:$reg_id;
			
			$name_of_participant	=	isset( $_POST['txt_name_of_participant'])?$_POST['txt_name_of_participant']:$name_of_participant;
			$gender					=	isset( $_POST['rdo_gender'])?$_POST['rdo_gender']:$gender;
			$name_of_member			=	isset( $_POST['cmb_name_of_member'])?$_POST['cmb_name_of_member']:$name_of_member;
			$organization_address	=	isset( $_POST['txa_org_address'])?$_POST['txa_org_address']:$organization_address;
			$country				=	isset( $_POST['cmb_country'])?$_POST['cmb_country']:$country;
			$work_phone				=	isset( $_POST['txt_phone'])?$_POST['txt_phone']:$work_phone;	
			$cell_phone				=	isset( $_POST['txt_cellphone'])?$_POST['txt_cellphone']:$cell_phone;
			$fax					=	isset( $_POST['txt_fax'])?$_POST['txt_fax']:$fax;
			$email					=	isset( $_POST['txt_email'])?$_POST['txt_email']:$email;
			$organization_web		=	isset( $_POST['txt_website'])?$_POST['txt_website']:$organization_web;	
			$passport_no			=	isset( $_POST['txt_passport'])?$_POST['txt_passport']:$passport_no;	
			$place_of_issue			=	isset( $_POST['txt_place_of_issue'])?$_POST['txt_place_of_issue']:$place_of_issue;
			$date_of_expiration		=	isset( $_POST['txt_exp_date'])?$_POST['txt_exp_date']:$date_of_expiration;	
			$nationality			=	isset( $_POST['txt_nationality'])?$_POST['txt_nationality']:$nationality;			
			$up_org_picture			=	isset( $_FILES['txt_up_poto'])?$_FILES['txt_up_poto']:$up_org_picture;
			$picture				=	isset( $_POST['hdn_up_poto'])?$_POST['hdn_up_poto']:$picture;
			$badge					=	isset( $_POST['txt_name_of_badge'])?$_POST['txt_name_of_badge']:$badge;	
			$org_file				=	isset( $_POST['hdn_org_file'])?$_POST['hdn_org_file']:$org_file;	
			$brief_desc				=	isset( $_POST['txa_brief_desc'])?$_POST['txa_brief_desc']:$brief_desc;
					
			$up_image_name			= 'txt_up_poto';
			$page					= "registration_form_02.php";
			$file_p					='';
			
			if($reg_id == '')
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../registration_form_02.php?msg=4');</script>";	
			}
			else
			{
				//Upload image file
				//$up_picture =isset($_FILES['txt_up_poto']['name']) && $_FILES['txt_up_poto']['name']!="" ? $_FILES['txt_up_poto']['name'] : $picture;
				//move_uploaded_file ($_FILES['txt_up_poto']['tmp_name'],$file_path.$_FILES['txt_up_poto']['name']);
				
				//Upload Filer Document
				//$up_org_file =isset($_FILES['up_org']['name']) && $_FILES['up_org']['name']!="" ? $_FILES['up_org']['name'] : $org_file;
				//move_uploaded_file ($_FILES['up_org']['tmp_name'],$file_path.$_FILES['up_org']['name']);
				
					if($_FILES['txt_up_poto']['name'] !=''){
						$up_picture = File_upload :: Image_upload('',$file_path,$file_path_thumb,$up_org_picture,$up_image_name,$page,$picture);
					}
					else {
						$up_picture =$picture;
					}
					if($_FILES['up_org']['name'] !=''){			
						$up_org_file = File_upload :: Attach_File_upload($file_path,'up_org',$page,$org_file);
					}
					else {
						$up_org_file = $org_file;
					}
															
				$regResult = Registration :: Insert_registration_form_two($reg_id,$name_of_participant,$gender,$name_of_member,$organization_address,$country,$work_phone,$cell_phone,$fax,$email,$organization_web,$passport_no,$place_of_issue,$date_of_expiration,$nationality,$up_picture,$badge,$up_org_file,$brief_desc);
				
				//echo $reg_id_r; exit;
				if($regResult==true)
				{
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../registration_form_03.php?msg=5&reg_id=".$reg_id."');</script>";	
		
				}
				elseif($regResult==false)
				{
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../registration_form_02.php?msg=6&reg_id=".$reg_id."');</script>";
				}						
			}
			
		break;
		
		case 'reg_03':
	
			$reg_id			=	isset( $_POST['hdn_reg_id'])?$_POST['hdn_reg_id']:$reg_id;
			
			$hrd			=	isset( $_POST['chk_hrd_01'])?$_POST['chk_hrd_01']:0;
			$youth			=	isset( $_POST['chk_youth_01'])?$_POST['chk_youth_01']:0;
			$women			=	isset( $_POST['chk_women_01'])?$_POST['chk_women_01']:0;
			if($hrd !=0){ 
			$quest1 = 1;
			}
			elseif($hrd !=0){
				$quest1 = 1;
			}
			else{
				$quest1 = 1;
			}
			$quest2			=	isset( $_POST['chk_02'])?$_POST['chk_02']:0;
			$quest3			=	isset( $_POST['chk_03'])?$_POST['chk_03']:0;
			$quest4			=	isset( $_POST['chk_04'])?$_POST['chk_04']:0;
			$quest5			=	isset( $_POST['chk_05'])?$_POST['chk_05']:0;
			$p1				=	isset( $_POST['chk_price_01'])?$_POST['chk_price_01']:0;	
			$p2				=	isset( $_POST['chk_price_02'])?$_POST['chk_price_02']:0;
			$p3				=	isset( $_POST['chk_price_03'])?$_POST['chk_price_03']:0;
			$p4				=	isset( $_POST['chk_price_04'])?$_POST['chk_price_04']:0;
			$p5				=	isset( $_POST['chk_price_05'])?$_POST['chk_price_05']:0;	
			$p6				=	isset( $_POST['chk_price_06'])?$_POST['chk_price_06']:0;	
			$p7				=	isset( $_POST['chk_price_07'])?$_POST['chk_price_07']:0;
			$p8				=	isset( $_POST['chk_price_08'])?$_POST['chk_price_08']:0;	
			$p9				=	isset( $_POST['chk_price_09'])?$_POST['chk_price_09']:0;			
			$p10			=	isset( $_POST['chk_price_10'])?$_POST['chk_price_10']:0;
			$p11			=	isset( $_POST['chk_price_11'])?$_POST['chk_price_11']:0;	
			$p12			=	isset( $_POST['chk_price_12'])?$_POST['chk_price_12']:0;
			$p13			=	isset( $_POST['chk_price_13'])?$_POST['chk_price_13']:0;
			$p14			=	isset( $_POST['chk_price_14'])?$_POST['chk_price_14']:0;
			$p15			=	isset( $_POST['chk_price_15'])?$_POST['chk_price_15']:0;	
			$p16			=	isset( $_POST['chk_price_16'])?$_POST['chk_price_16']:0;	
			$p17			=	isset( $_POST['chk_price_17'])?$_POST['chk_price_17']:0;
			$p18			=	isset( $_POST['chk_price_18'])?$_POST['chk_price_18']:0;	
			$p19			=	isset( $_POST['chk_price_19'])?$_POST['chk_price_19']:0;			
			$p20			=	isset( $_POST['chk_price_20'])?$_POST['chk_price_20']:0;
			
			
			if($reg_id == '')
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../registration_form_03.php?msg=4');</script>";	
			}
			else
			{
				$isExists_one = Registration::Get_registration_data_back_form_three($reg_id,1);
				
					if($isExists_one){
						$regResult = Registration :: update_registration_form_three($reg_id,$quest1,$p1,$p2,$p3,$p4);
					}
					else{
						$regResult = Registration :: Insert_registration_form_three($reg_id,$quest1,$p1,$p2,$p3,$p4);	
					}
					
					$isExists_two = Registration::Get_registration_data_back_form_three($reg_id,2);
					if($isExists_two){
						$regResult = Registration :: update_registration_form_three($reg_id,$quest2,$p5,$p6,$p7,$p8);
					}
					else {
						$regResult = Registration :: Insert_registration_form_three($reg_id,$quest2,$p5,$p6,$p7,$p8);
					}
					
					$isExists_three = Registration::Get_registration_data_back_form_three($reg_id,3);
					if($isExists_three){
						$regResult = Registration :: update_registration_form_three($reg_id,$quest3,$p9,$p10,$p11,$p12);
					}
					else{
						$regResult = Registration :: Insert_registration_form_three($reg_id,$quest3,$p9,$p10,$p11,$p12);
					}
					
					$isExists_four = Registration::Get_registration_data_back_form_three($reg_id,4);
					if($isExists_four){
						$regResult = Registration :: update_registration_form_three($reg_id,$quest4,$p13,$p14,$p15,$p16);
					}
					else{
						$regResult = Registration :: Insert_registration_form_three($reg_id,$quest4,$p13,$p14,$p15,$p16);
					}
					
					$isExists_five = Registration::Get_registration_data_back_form_three($reg_id,5);
					if($isExists_five){
						$regResult = Registration :: update_registration_form_three($reg_id,$quest5,$p17,$p18,$p19,$p20);
					}
					else{
						$regResult = Registration :: Insert_registration_form_three($reg_id,$quest5,$p17,$p18,$p19,$p20);
					}
						
				if($regResult==true)
				{
				 	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../registration_form_04.php?msg=7&reg_id=".$reg_id."');</script>";	
		
				}
				elseif($regResult==false)
				{
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../registration_form_03.php?msg=8&reg_id=".$reg_id."');</script>";
				}						
			}
			
		break;
		
		
		case 'reg_04':
	
			$reg_id			=	isset( $_POST['hdn_reg_id'])?$_POST['hdn_reg_id']:$reg_id;
			$quest6			=	isset( $_POST['chk_06'])?$_POST['chk_06']:0;
			$quest7			=	isset( $_POST['chk_07'])?$_POST['chk_07']:0;
			$quest8			=	isset( $_POST['chk_08'])?$_POST['chk_08']:0;
			
			$p1				=	isset( $_POST['txt_bank_draft'])?$_POST['txt_bank_draft']:0;	
			$p2				=	isset( $_POST['txt_bank_transfer'])?$_POST['txt_bank_transfer']:0;
			$p3				=	isset( $_POST['txt_payment_01'])?$_POST['txt_payment_01']:0;
			$p4				=	isset( $_POST['txt_payment_02'])?$_POST['txt_payment_02']:0;
					
			if($reg_id == '')
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../registration_form_04.php?msg=4');</script>";	
			}
			else
			{
				$isExists_six = Registration::Get_registration_data_back_form_three($reg_id,6);
				
					if($isExists_six){
						$regResult = Registration :: update_registration_form_three($reg_id,$quest6,$p1,0,0,0);
					}
					else{
						$regResult = Registration :: Insert_registration_form_three($reg_id,$quest6,$p1,0,0,0);	
					}
					
					$isExists_seven = Registration::Get_registration_data_back_form_three($reg_id,7);
					if($isExists_seven){
						$regResult = Registration :: update_registration_form_three($reg_id,$quest7,$p2,0,0,0);
					}
					else {
						$regResult = Registration :: Insert_registration_form_three($reg_id,$quest7,$p2,0,0,0);
					}
					
					$isExists_eight = Registration::Get_registration_data_back_form_three($reg_id,8);
					if($isExists_eight){
						$regResult = Registration :: update_registration_form_three($reg_id,$quest8,$p3,$p4,0,0);
					}
					else{
						$regResult = Registration :: Insert_registration_form_three($reg_id,$quest8,$p3,$p4,0,0);
					}
															
				if($regResult==true)
				{
				 	echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../registration_form_05.php?msg=9&reg_id=".$reg_id."');</script>";	
		
				}
				elseif($regResult==false)
				{
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../registration_form_04.php?msg=10&reg_id=".$reg_id."');</script>";
				}						
			}
			
		break;
		
		case 'reg_05':
			
			$reg_id					=	isset( $_POST['hdn_reg_id'])?$_POST['hdn_reg_id']:$reg_id;
			
			$room_type				='';
			$room_type_smpking		=	isset( $_POST['chk_room_01'])?$_POST['chk_room_01']:0;
			$room_type_nonsmpking	=	isset( $_POST['chk_room_02'])?$_POST['chk_room_02']:0;
			$chk_in_date			=	isset( $_POST['txt_chkin_date'])?$_POST['txt_chkin_date']:$chk_in_date;
			$chk_out_date			=	isset( $_POST['txt_chkout_date'])?$_POST['txt_chkout_date']:$chk_out_date;
			
			//echo "smk".$room_type_smpking;
			//echo "nonsmk".$room_type_nonsmpking;
			if($room_type_smpking ==1 && $room_type_nonsmpking == 2){
				$room_type =3;
			}
			elseif($room_type_nonsmpking == 2){
				$room_type =2;
			}
			elseif($room_type_smpking ==1){
				$room_type =1;
			}
			else{
				$room_type =0;
			}
			//echo $room_type; exit;
			if($reg_id == '')
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../registration_form_05.php?msg=4');</script>";	
			}
			else
			{
				$regResult = Registration :: updateresavation_type($reg_id,$room_type,$chk_in_date,$chk_out_date);
				
				//echo $reg_id_r; exit;
				if($regResult==true)
				{
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../registration_form_06.php?msg=11&reg_id=".$reg_id."');</script>";	
		
				}
				elseif($regResult==false)
				{
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../registration_form_05.php?msg=12&reg_id=".$reg_id."');</script>";
				}						
			}
			
		break;
		
		case 'reg_06':
			
			$reg_id					=	isset( $_POST['hdn_reg_id'])?$_POST['hdn_reg_id']:$reg_id;
			
			$a_airline		=	isset( $_POST['txt_airline'])?$_POST['txt_airline']:$a_airline;
			$a_flight_no	=	isset( $_POST['txt_flight_no'])?$_POST['txt_flight_no']:$a_flight_no;
			$a_city			=	isset( $_POST['txt_arrival_city'])?$_POST['txt_arrival_city']:$a_city;
			$a_airport		=	isset( $_POST['txt_arrival_airport'])?$_POST['txt_arrival_airport']:$a_airport;
			$a_date_time	=	isset( $_POST['txt_date_time'])?$_POST['txt_date_time']:$a_date_time;
			
			//echo $room_type; exit;
			if($reg_id == '')
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../registration_form_06.php?msg=4');</script>";	
			}
			else
			{
				$regResult = Registration :: updatetravel_information_arrival($reg_id,$a_airline,$a_flight_no,$a_city,$a_airport,$a_date_time);
				
				//echo $reg_id_r; exit;
				if($regResult==true)
				{
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../registration_form_07.php?msg=13&reg_id=".$reg_id."');</script>";	
		
				}
				elseif($regResult==false)
				{
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../registration_form_06.php?msg=14&reg_id=".$reg_id."');</script>";
				}						
			}
			
		break;
		
		case 'reg_07':
			
			$reg_id					=	isset( $_POST['hdn_reg_id'])?$_POST['hdn_reg_id']:$reg_id;
			
			$d_airline		=	isset( $_POST['txt_airline'])?$_POST['txt_airline']:$a_airline;
			$d_flight_no	=	isset( $_POST['txt_flight_no'])?$_POST['txt_flight_no']:$a_flight_no;
			$d_city			=	isset( $_POST['txt_arrival_city'])?$_POST['txt_arrival_city']:$a_city;
			$d_airport		=	isset( $_POST['txt_arrival_airport'])?$_POST['txt_arrival_airport']:$a_airport;
			$d_date_time	=	isset( $_POST['txt_date_time'])?$_POST['txt_date_time']:$a_date_time;
			
			//echo $room_type; exit;
			if($reg_id == '')
			{
				echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../registration_form_07.php?msg=4');</script>";	
			}
			else
			{
				$regResult = Registration :: updatetravel_information_departure($reg_id,$d_airline,$d_flight_no,$d_city,$d_airport,$d_date_time);
				
				//echo $reg_id_r; exit;
				if($regResult==true)
				{
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../reg_success.php?msg=13&reg_id=".$reg_id."');</script>";	
		
				}
				elseif($regResult==false)
				{
					echo "<script language=\"javascript\" type=\"text/javascript\">document.location.replace('../registration_form_07.php?msg=14&reg_id=".$reg_id."');</script>";
				}						
			}
			
		break;
		
		
		
	}
?>
