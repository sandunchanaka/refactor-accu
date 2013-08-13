<?php
@session_start(); 

/* Database configuration */
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PWD','hemantha123');
define('DB_DB','photoshopdb');
define('DB_TYPE','mysql');

/*define doc root */
define('DOC_ROOT', 'C:/apache2triad/htdocs/projects/photoshop/backoffice/');
define('HTTP_ROOT', 'http://localhost/projects/photoshop/');
define('CLASS_PATH', DOC_ROOT.'classes/');
define('ADMIN_PATH', DOC_ROOT.'admin/');
define('ADMIN_MESSAGES', DOC_ROOT.'admin/messages/');
define('ADMIN_CLASS_PATH', DOC_ROOT.'admin/classes/');
define('CONTROLERS_PATH', DOC_ROOT.'controlers/');
define('ADMIN_CONTROLERS_PATH', DOC_ROOT.'admin/controlers/');
define('ADMIN_TPL_PATH', DOC_ROOT.'admin/tpl/');

/* ADODB configuration */
define("ADODB_DIR", DOC_ROOT.'libs/adodb/');
require_once(ADODB_DIR.'adodb.inc.php');
?>