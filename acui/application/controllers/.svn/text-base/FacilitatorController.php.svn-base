<?php

require_once "models/Facilitator.php";
require_once "models/Course.php";
require_once "models/CourseFacilitator.php";
require_once "models/CourseStudent.php";
require_once "models/UserFile.php";

class FacilitatorController extends Zend_Controller_Action
{	

    public function init()
    {
        $this->_helper->layout()->disableLayout();
    }

    public function indexAction()
    {
        
    }

    public function listAction()
    {
    	
    	$history = array(
    			array('url' => '/index/dashboard', 'title' => 'Home')
    	
    	);
    	$active  = "List Facilitator(s)";
    	
    	$values = array('history' => $history, 'active' => $active);
    	
    	$this->view->assign('breadcrumb', $values);
    	
    	$f_adp = new Facilitator();
    	$f_sel = $f_adp->select();
    	$f_sel->from(array('cf' => 'course_facilitator'), array('cf.*'));
    	$f_sel->setIntegrityCheck(false);
    	$f_sel->joinLeft(array('u' => 'user'), 'cf.user_id = u.id', array('id', 'name', 'email', 'status'));
    	$f_sel->joinLeft(array('c' => 'course'), 'c.id = cf.course_id', array('course_name' => new Zend_Db_Expr('GROUP_CONCAT(",",c.name)')));
    	$f_sel->where("u.user_type_id = ?", USER_TYPE_FACILITATOR);    	
    	$f_sel->group("u.id");
    	$list = $f_adp->fetchAll($f_sel);
    	
    	
    	$facilitators = array();
    	
    	foreach ($list as $item) {
    		$stdClass = new stdClass();
    		$stdClass->id = $item->id;
    		$stdClass->name = $item->name;
    		$stdClass->email = $item->email;
    		$stdClass->status = $item->status;
    		$stdClass->course = $item->course_name;
    		$stdClass->students = $this->getCourseStudents($item->course_id, $item->id);
    		
    		$facilitators[] = $stdClass;
    	}
    	
    	$this->view->assign('facilitators', $facilitators);
    	
    }
    
    private function getCourseStudents($course_id, $facilitator_id)
    {
    	$cs_adp = new CourseStudent();
    	$cs_sel = $cs_adp->select();
    	$cs_sel->from(array('cs' => 'course_student'), array('cs.*'));
    	$cs_sel->setIntegrityCheck(false);
    	$cs_sel->join(array('sf' => 'student_facilitator'), 'sf.student_id = cs.user_id', array());    	
    	$cs_sel->joinLeft(array('u' => 'user'), 'u.id = cs.user_id', array('name'));
    	$cs_sel->where("sf.facilitator_id = ?", $facilitator_id);
    	$css = $cs_adp->fetchAll($cs_sel);
    	
    	$students = array();
    	
    	foreach ($css as $cs) {
    		$students[] = $cs->name;	
    	}
    	
    	return $students;
    }
    
    public function addAction()
    {
    	$history = array(
    			array('url' => '/index/dashboard', 'title' => 'Home')
    			 
    	);
    	$active  = "Add Facilitator";
    	 
    	$values = array('history' => $history, 'active' => $active);
    	 
    	$this->view->assign('breadcrumb', $values);
    }
    
    public function setcourseAction()
    {
    	$this->_helper->viewRenderer->setNoRender(true);
    	
    	$course_id = $this->getRequest()->getParam('course_id', null);
    	$user_id = $this->getRequest()->getParam('user_id', null);
    	
    	$cf_adp = new CourseFacilitator();
    	$cf_sel = $cf_adp->select();
    	
    	$cf_sel->where("user_id = ?", $user_id);
    	
    	$cfs = $cf_adp->fetchAll($cf_sel);
    	
    	foreach ($cfs as $cf) {
    		$cf->delete();
    	}
    	
    	foreach ($course_id as $cid) {
    		$data = array('course_id' => $cid, 'user_id' => $user_id);
    		$cf_adp->insert($data);
    	}
    	
    	print_r($course_id);
    	
    	$json = array();
    	
    	echo json_encode($json);
    	    	
    }
    
    public function getpicAction()
    {
    	$id = $this->getRequest()->getParam('id', null);
    	
    	$uf_adp = new UserFile();
    	$uf_sel = $uf_adp->select();
    	$uf_sel->where("id = ?", $id);
    	
    	$uf = $uf_adp->fetchRow($uf_sel);
    	
    	$this->_helper->viewRenderer->setNoRender(true);
    	
    	echo $uf->file;
    	
    }
    
    public function uploadpicAction()
    {
    	$file = file_get_contents($_FILES['userPicture']['tmp_name']);
    	$name = $_FILES['userPicture']['name'];
    	
    	$params = $this->getRequest()->getParams();
    	
    	$data = array('user_id' => $params['user_id'], 'file_name' => $name, 'file' => $file);
    	
    	$uf_adp = new UserFile();
    	$uf_sel = $uf_adp->select();
    	$uf_sel->where("user_id = ?", $params['user_id']);
    	$uf = $uf_adp->fetchRow($uf_sel);
    	
    	if (!is_null($uf)) $uf->delete();
    	
    	$image_id = $uf_adp->insert($data);
    	
    	$json = array('image' => $image_id);
    	
    	$this->_helper->viewRenderer->setNoRender(true);
    	
    	echo Zend_Json::encode($json);
    }
    
    public function viewAction()
    {
    	$user_id = $this->getRequest()->getParam('id', null);
    	
    	$f_adp = new Facilitator();
    	$f_sel = $f_adp->select();
    	$f_sel->where("id = ?", $user_id);
    	
    	$f = $f_adp->fetchRow($f_sel);
    	
    	$this->view->assign('facilitator', $f);
    	    	
    	
    	$c_adp = new Course();
    	$c_sel = $c_adp->select();
    	$c_sel->from(array('c' => 'course'), array('c.*'));
    	$c_sel->setIntegrityCheck(false);
    	$c_sel->joinLeft(array('cf' => 'course_facilitator'), 'cf.course_id = c.id', array('cf.course_id', 'cf.user_id'));    	
    	$c_sel->group("c.id");
	$cs = $c_adp->fetchAll($c_sel);
    	
    	$this->view->assign('courses', $cs);
    	
    	$cf_adp = new CourseFacilitator();
    	$cf_sel = $cf_adp->select();
    	$cf_sel->where("user_id = ?", $user_id);
    	
    	$cfs = $cf_adp->fetchAll($cf_sel);
    	
    	$cfs_array = array();
    	foreach ($cfs as $cf) {
    		$cfs_array[] = $cf->course_id;
    	}
    	
    	
    	$this->view->assign('cf', $cfs_array);
    	
    	if (!is_null($cf)) {
	    	$cs_adp = new CourseStudent();
	    	$cs_sel = $cs_adp->select();
	    	$cs_sel->from(array('cs' => 'course_student'), array('*'));
	    	$cs_sel->joinLeft(array('u' => 'user'), 'u.id = cs.user_id', array('u.name'));
	    	$cs_sel->where("course_id = ?", $cf->course_id);
	    	$cs_sel->setIntegrityCheck(false);
	    	
	    	$css = $cs_adp->fetchAll($cs_sel);
	    	$this->view->assign('students', $css);
    	}

    	$history = array(
    			array('url' => '/index/dashboard', 'title' => 'Home'),
    			array('url' => '/facilitator/list', 'title' => 'Facilitators')
    			 
    	);
    	$active  = $f->name;
    	 
    	$values = array('history' => $history, 'active' => $active);
    	 
    	$this->view->assign('breadcrumb', $values);
    	
    	$uf_adp = new UserFile();
    	$uf_sel = $uf_adp->select();
    	$uf_sel->where("user_id = ?", $user_id);
    	 
    	$uf = $uf_adp->fetchRow($uf_sel);
    	 
    	$fileid = null;
    	 
    	if (!is_null($uf)) {
    		$fileid = $uf->id;
    	}
    	 
    	$this->view->assign('fileid', $fileid);
    	 
    }
    
    public function editAction()
    {
    	
    	$params = $this->getRequest()->getParams();
    	
    	$fa_adp = new Facilitator();
    	$fa_sel = $fa_adp->select();
    	$fa_sel->where("id = ?", $params['id']);
    	$fa = $fa_adp->fetchRow($fa_sel);
    	 
    	$this->view->assign('f', $fa);
    	
    	$history = array(
    			array('url' => '/index/dashboard', 'title' => 'Home'),
    			array('url' => '/facilitator/list', 'title' => 'Facilitators')
    	
    	);
    	$active  = $fa->name;
    	
    	$values = array('history' => $history, 'active' => $active);
    	
    	$this->view->assign('breadcrumb', $values);
    	
    	
    }
    
    public function updateAction()
    {
    	$params = $this->getRequest()->getParams();
    	
    	$fa_adp = new Facilitator();
    	$fa_sel = $fa_adp->select();
    	$fa_sel->where("id = ?", $params['id']);
    	$fa = $fa_adp->fetchRow($fa_sel);
    	
    	$data = array('name' => $params['inputName'], 'email' => $params['inputEmail'],
    			'country' => $params['country'], 'organization' => $params['organization'],
    			'phone' => $params['phone'], 'phone2' => $params['phone2'],
    			'skype' => $params['skype'], 'facebook' => $params['facebook']);
    	
    	$fa->setFromArray($data);
    	$fa->save();
    	
    	$json = array('facilitator_id' => $params['id']);
    	
    	$this->_helper->viewRenderer->setNoRender(true);
    	
    	echo Zend_Json::encode($json);
    }
    
    public function changepassAction()
    {
    	$this->_helper->viewRenderer->setNoRender(true);
    	
    	$user_id = $this->getRequest()->getParam('id', null);
    	$password = $this->getRequest()->getParam("password", null);
    	
    	$f_adp = new Facilitator();
    	$f_sel = $f_adp->select();
    	$f_sel->where("id = ?", $user_id);
    	
    	$f = $f_adp->fetchRow($f_sel);
    	$f->password = new Zend_Db_Expr("PASSWORD('" . $password . "')");
    	$f->save();    	
    	
    	$json = array();
    	
    	echo Zend_Json::encode($json);
    }
    
    public function saveAction()
    {
    	$fa_adp = new Facilitator();
    	$params = $this->getRequest()->getParams();
    	
    	$data = array('name' => $params['inputName'], 'email' => $params['inputEmail'], 
    					'user_type_id' => USER_TYPE_FACILITATOR, 'password' => new Zend_Db_Expr("PASSWORD('" . $params['inputPassword'] . "')"),
    					'country' => $params['country'], 'organization' => $params['organization'], 
    					'phone' => $params['phone'], 'phone2' => $params['phone2'], 
    					'skype' => $params['skype'], 'facebook' => $params['facebook']);
    	
		$user_id = $fa_adp->insert($data);

		$output = array('facilitator_id' => $user_id);
		
		echo Zend_Json::encode($output);
		
		$this->_helper->viewRenderer->setNoRender(true);
    }

}

