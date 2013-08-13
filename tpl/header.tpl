<?php
require_once('includes/config.php');
require_once('classes/db.class.php');
require_once('common/member.class.php');
require_once('common/publication.class.php');
require_once('common/news.class.php');
require_once('common/events.class.php');
require_once('common/cu_solutions.class.php');
$a =0;
$b =0;
?>
<html>
<head><meta http-equiv="Content-Type" content="text/html;charset=utf-8" /><meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link type="text/css" rel="stylesheet" media="All" href="css/style.css" />

<script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="java1.js" ></script>
 <SCRIPT language="JavaScript">
<!--
var browserName=navigator.appName; 
if (browserName=="Netscape")
{ 
 
}
else 
{ 
 if (browserName=="Microsoft Internet Explorer")
 {
  alert("Hi, You are using a browser, which is not supported by www.aaccu.asia Please use GOOGLE CHROME , MOZILA FIREFOX , OPERA , SAFARI or etc.");
  window.close();
 }
 else
  {
    
   }
}
//-->
</SCRIPT>  
<title>Association Of Asia Confederation Credit Union</title>
<link rel="shortcut icon" href="content/images/animated_favicon.gif" />

<style type="text/css">
<!--
#header .container #access #utilities .xoxo .top-banner-onlineReg .top-banner-onlineReg div {
	font-size: 18px;
}

#news_container .pagination ul li.inactive,
#news_container .pagination ul li.inactive:hover{
	background-color:#ededed;
	color:#bababa;
	border:1px solid #bababa;
	cursor: default;
}
#news_container .data ul li{
	list-style: none;
	font-family: verdana;
	margin: 5px 0 0 0;
	color: #000;
	font-size: 11px;
}

#news_container .pagination{
	width: 300px;
	height: 25px;
}
#news_container .pagination ul li{
	list-style: none;
	float: left;
	border: 1px solid #006699;
	padding: 2px 6px 2px 6px;
	margin: 0 3px 0 3px;
	font-family: arial;
	/*font-size: 3px;*/
	color: #006699;
	font-weight: bold;
	background-color: #f2f2f2;
	width:3px;
	height:5px;
}
#news_container .pagination ul li:hover{
	color: #fff;
	background-color: #006699;
	cursor: pointer;
}


#event_container .pagination ul li.inactive,
#event_container .pagination ul li.inactive:hover{
	background-color:#ededed;
	color:#bababa;
	border:1px solid #bababa;
	cursor: default;
}
#event_container .data ul li{
	list-style: none;
	font-family: verdana;
	margin: 5px 0 0 0;
	color: #000;
	font-size: 11px;
}

#event_container .pagination ul li{
	list-style: none;
	float: left;
	border: 1px solid #006699;
	padding: 2px 6px 2px 6px;
	margin: 0 3px 0 3px;
	font-family: arial;
	/*font-size: 3px;*/
	color: #006699;
	font-weight: bold;
	background-color: #f2f2f2;
	width:3px;
	height:5px;
}
#event_container .pagination ul li:hover{
	color: #fff;
	background-color: #006699;
	cursor: pointer;
}

/*----------------*/

#event_container .pagination ul li.inactive,
#event_container .pagination ul li.inactive:hover{
	background-color:#ededed;
	color:#bababa;
	border:1px solid #bababa;
	cursor: default;
}
#event_container .data ul li{
	list-style: none;
	font-family: verdana;
	margin: 5px 0 5px 0;
	color: #000;
	font-size: 11px;
}

#event_container .pagination{
	width: 300px;
	height: 25px;
}
#event_container .pagination ul li{
	list-style: none;
	float: left;
	border: 1px solid #006699;
	padding: 2px 6px 2px 6px;
	margin: 0 3px 0 3px;
	font-family: arial;
	font-size: 5px;
	color: #006699;
	font-weight: bold;
	background-color: #f2f2f2;
	width:3px;
	height:5px;
}
#event_container .pagination ul li:hover{
	color: #fff;
	background-color: #006699;
	cursor: pointer;
}

.go_button
{
background-color:#f2f2f2;border:1px solid #006699;color:#cc0000;padding:2px 6px 2px 6px;cursor:pointer;position:absolute;margin-top:-1px;
}
.total
{
float:right;font-family:arial;color:#999;
}

.data ul {
	margin-left:0;
}

.pagination ul{
	margin-left:0;
}



#testimonial_container .pagination ul li.inactive,
#testimonial_container .pagination ul li.inactive:hover{
	background-color:#ededed;
	color:#bababa;
	border:1px solid #bababa;
	cursor: default;
}
#testimonial_container .data ul li{
	list-style: none;
	margin: 5px 0 0 0;
	
}

#testimonial_container .pagination ul li{
	list-style: none;
	float: left;
	border: 1px solid #006699;
	padding: 2px 6px 2px 6px;
	margin: 0 3px 0 3px;
	background-color: #f2f2f2;
	width:3px;
	height:5px;
}
#testimonial_container .pagination ul li:hover{
	background-color: #006699;
	cursor: pointer;
}

/*----------------*/

#testimonial_container .pagination ul li.inactive,
#testimonial_container .pagination ul li.inactive:hover{
	background-color:#ededed;
	
	border:1px solid #bababa;
	cursor: default;
}
#testimonial_container .data ul li{
	list-style: none;
	
	margin: 5px 0 5px 0;
	
}

#testimonial_container .pagination{
	width: 300px;
	height: 25px;
}
#testimonial_container .pagination ul li{
	list-style: none;
	float: left;
	border: 1px solid #006699;
	padding: 2px 6px 2px 6px;
	margin: 0 3px 0 3px;
	background-color: #f2f2f2;
	width:3px;
	height:5px;
}
#testimonial_container .pagination ul li:hover{
	background-color: #006699;
	cursor: pointer;
}


#video_container .pagination ul li.inactive,
#video_container .pagination ul li.inactive:hover{
	background-color:#ededed;
	color:#bababa;
	border:1px solid #bababa;
	cursor: default;
}
#video_container .data ul li{
	list-style: none;
	font-family: verdana;
	margin: 5px 0 0 0;
	color: #000;
	font-size: 11px;
}

#video_container .pagination ul li{
	list-style: none;
	float: left;
	border: 1px solid #006699;
	padding: 2px 6px 2px 6px;
	margin: 0 3px 0 3px;
	font-family: arial;
	/*font-size: 3px;*/
	color: #006699;
	font-weight: bold;
	background-color: #f2f2f2;
	width:3px;
	height:5px;
}
#video_container .pagination ul li:hover{
	color: #fff;
	background-color: #006699;
	cursor: pointer;
}

/*----------------*/

#video_container .pagination ul li.inactive,
#video_container .pagination ul li.inactive:hover{
	background-color:#ededed;
	color:#bababa;
	border:1px solid #bababa;
	cursor: default;
}
#video_container .data ul li{
	list-style: none;
	font-family: verdana;
	margin: 5px 0 5px 0;
	color: #000;
	font-size: 11px;
}

#video_container .pagination{
	width: 300px;
	height: 25px;
}
#video_container .pagination ul li{
	list-style: none;
	float: left;
	border: 1px solid #006699;
	padding: 2px 6px 2px 6px;
	margin: 0 3px 0 3px;
	font-family: arial;
	font-size: 5px;
	color: #006699;
	font-weight: bold;
	background-color: #f2f2f2;
	width:3px;
	height:5px;
}
#videot_container .pagination ul li:hover{
	color: #fff;
	background-color: #006699;
	cursor: pointer;
}
-->
-->
</style>
</head>