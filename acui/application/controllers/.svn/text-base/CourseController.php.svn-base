<?php

require_once "models/Course.php";
require_once "models/Module.php";
require_once "models/ModuleExtra.php";
require_once "models/ModuleHandout.php";
require_once "models/ModuleExcercise.php";
require_once "models/Evaluation.php";
require_once "models/CourseEvaluation.php";
require_once "models/CourseFacilitator.php";
require_once "models/CourseStudent.php";
require_once "models/StudentModule.php";

class CourseController extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout()->disableLayout();
    }

    public function indexAction()
    {
        // action body
    }

    public function progressAction()
    {
    	
    	$this->view->assign('modules', array('module1', 'module2', 'module3'));
    }
    
    public function addAction()
    {
    	$history = array(
    				array('url' => '/index/dashboard', 'title' => 'Home')
    			
    			);
    	$active  = "Add Course";
    	
    	$values = array('history' => $history, 'active' => $active);
    	
    	$this->view->assign('breadcrumb', $values);
    } 
    
    public function deleteAction()
    {
    	$this->_helper->viewRenderer->setNoRender(true);
    	$course_id = $this->getRequest()->getParam('course_id', null);
    	
    	$c_adp = new Course();
    	$c_sel = $c_adp->select();
    	$c_sel->where("id = ?", $course_id);

    	$c = $c_adp->fetchRow($c_sel);
    	
    	if (!is_null($c)) {
    		$c->delete();
    	}
    	
    	$json  = array('course_id' => $course_id);
    	
    	echo Zend_Json::encode($json);
     	
    }
    
    public function execAction()
    {
    	$history = array(
    			array('url' => '/index/dashboard', 'title' => 'Home')
    			 
    	);
    	$active  = "Course Excercises";
    	 
    	$values = array('history' => $history, 'active' => $active);
    	 
    	$this->view->assign('breadcrumb', $values);
    	 
    	$session = new Zend_Session_Namespace("security");
    	$course_id = $session->course_id;
    	$student_id = $session->user_id;
    	 
    	$c_adp = new Course();
    	$c_sel = $c_adp->select();
    	$c_sel->where("id = ?", $course_id);
    	$c = $c_adp->fetchRow($c_sel);
    	 
    	$this->view->assign("course", $c);
    	 
    	$m_adp = new Module();
    	$m_sel = $m_adp->select();
    	$m_sel->where("course_id = ?", $course_id);
    	$ms = $m_adp->fetchAll($m_sel);
    	 
    	$modules = array();
    	 
    	foreach ($ms as $m) {
    	
    		$sm_adp = new StudentModule();
    		$sm_sel = $sm_adp->select();
    		$sm_sel->where("student_id = ?", $student_id);
    		$sm_sel->where("module_id = ?", $m->id);
    		$sm = $sm_adp->fetchRow($sm_sel);
    		
    		if (!is_null($sm) && $sm->active == 1) {
	    		
	    		$mh_adp = new ModuleExcercise();
	    		$mh_sel = $mh_adp->select();
	    		$mh_sel->where("module_id = ?", $m->id);
	    		$handouts = $mh_adp->fetchAll($mh_sel);
	    	
	    		$module['name'] = $m->module_name;
	    		$module['handouts'] = $handouts;
	    		$modules[] = $module;
    		}
    	}
    	 
    	$this->view->assign('modules', $modules);
    }
    
    public function learningmaterialAction()
    {
    	$history = array(
    			array('url' => '/index/dashboard', 'title' => 'Home')
    	
    	);
    	$active  = "Course Handouts";
    	
    	$values = array('history' => $history, 'active' => $active);
    	
    	$this->view->assign('breadcrumb', $values);
    	
    	$session = new Zend_Session_Namespace("security");
    	$course_id = $session->course_id;
    	$student_id = $session->user_id;
    	
    	$c_adp = new Course();
    	$c_sel = $c_adp->select();
    	$c_sel->where("id = ?", $course_id);
    	$c = $c_adp->fetchRow($c_sel);
    	
    	$this->view->assign("course", $c);
    	
    	$m_adp = new Module();
    	$m_sel = $m_adp->select();
    	$m_sel->where("course_id = ?", $course_id);
    	$ms = $m_adp->fetchAll($m_sel);
    	
    	$modules = array();
    	
    	foreach ($ms as $m) {
    		
    		$sm_adp = new StudentModule();
    		$sm_sel = $sm_adp->select();
    		$sm_sel->where("student_id = ?", $student_id);
    		$sm_sel->where("module_id = ?", $m->id);
    		$sm = $sm_adp->fetchRow($sm_sel);
    		
    		if (!is_null($sm) && $sm->active == 1) {
	    		$mh_adp = new ModuleHandout();
	    		$mh_sel = $mh_adp->select();
	    		$mh_sel->where("module_id = ?", $m->id);
	    		$handouts = $mh_adp->fetchAll($mh_sel);
	    		
	    		$module['name'] = $m->module_name;
	    		$module['handouts'] = $handouts;
	    		$modules[] = $module;
    		}
    	}
    	
    	$this->view->assign('modules', $modules);
    	
    }
    
    public function dlobjAction()
    {
    	
    }
    
    public function objectiveAction()
    {
    	$history = array(
    			array('url' => '/index/dashboard', 'title' => 'Home')
    			 
    	);
    	$active  = "Course Objective";
    	 
    	$values = array('history' => $history, 'active' => $active);
    	 
    	$this->view->assign('breadcrumb', $values);
    	
    	$session = new Zend_Session_Namespace("security");
    	$course_id = $session->course_id;
    	
    	$c_adp = new Course();
    	$c_sel = $c_adp->select();
    	$c_sel->where("id = ?", $course_id);
    	$c = $c_adp->fetchRow($c_sel);
    	
    	$this->view->assign("course", $c);
    	
    	$me_adp = new ModuleExtra();
    	$me_sel = $me_adp->select();
    	$me_sel->from(array('me' => 'module_extra'), array('me.module_id', 'me.overview', 'me.file_name'));
    	$me_sel->setIntegrityCheck(false);
    	$me_sel->joinLeft(array('sm' => 'student_module'), 'sm.module_id = me.module_id', array('sm.active'));
    	$me_sel->where("sm.student_id = ?", $session->user_id);
    	$me_sel->where("sm.active = 1");
    	$me_sel->group("me.module_id");
    	
    	$mes = $me_adp->fetchAll($me_sel);
    	
    	$this->view->assign('module_extra', $mes);
    	
    	
    	
    }
    
    public function add2Action()
    {
    	$course_id = $this->getRequest()->getParam('id', null);
    	if (is_null($course_id)) throw new Exception("course can not be null");
    	
    	$c_adp = new Course();
    	$c_sel = $c_adp->select();
    	$c_sel->where("id = ?", $course_id);
    	
    	$c = $c_adp->fetchRow($c_sel);
    	
    	if (is_null($c)) throw new Exception("course not found");
    	
    	$history = array(
    			array('url' => '/index/dashboard', 'title' => 'Home'),
    			array('url' => '/course/add', 'title' => 'Add Course')
    			);
    	$active  = $c->name;
    	
    	$values = array('history' => $history, 'active' => $active);
    	
    	$this->view->assign('breadcrumb', $values);
    	
    	$this->view->assign('number_of_modules', $c->modules);
    	$this->view->assign('course_id', $course_id);
    }

    public function listAction()
    {
    	$history = array(
    				array('url' => '/index/home', 'title' => 'Home')
    			);
    	$active  = "Course List";
    	
    	$values = array('history' => $history, 'active' => $active);
    	
    	$this->view->assign('breadcrumb', $values);
    	
    	$c_adp = new Course();
    	$c_sel = $c_adp->select();
    	$c_sel->from(array('c' => 'course'), array('c.*'));
    	$c_sel->setIntegrityCheck(false);
    	$c_sel->joinLeft(array('cf' => 'course_facilitator'), 'cf.course_id = c.id', array());
    	
    	$delete = true;
    	
    	$session = new Zend_Session_Namespace('security');
    	if ($session->group_id == USER_TYPE_FACILITATOR) {
    		$c_sel->where("cf.user_id = ?", $session->user_id);
    		$delete = false;
    	}
    	
    	
    	$c_sel->group("c.id");
    	$list = $c_adp->fetchAll($c_sel);
    	
    	$this->view->assign('courses', $list);
    	$this->view->assign('delete', $delete);
    	
    }
    
    public function evaluationAction()
    {    	
    	$ce_adp = new CourseEvaluation();
    	$ce_sel = $ce_adp->select();
    	
    	$ce_sel->where('course_id', 0);
    	$ce_sel->where('user_id', 0);

    	$ces = $ce_adp->fetchAll($ce_sel);
    	
    	if ($ces->count() > 0) {
    		//render evaluation already taken	
    	}
    	
    	$e_adp = new Evaluation();
    	$es = $e_adp->fetchAll();
    	
    	$this->view->assign('evaluation_items', $es);
    }
    
    public function evaluationsAction()
    {
    	 $ce_adp = new CourseEvaluation();
		 $ce_sel = $ce_adp->select();
		 $ce_sel->group(array("course_id", "user_id"));
		 
		 $ces = $ce_adp->fetchAll($ce_sel);
    	 
    	 $this->view->assign('evaluations', $ces);
    }
    
    public function viewevalAction()
    {
    	$eval_id = $this->getRequest()->getParam('id', null);
    	$course_id = $this->getRequest()->getParam('courseid', null);
    	$user_id = $this->getRequest()->getParam('userid', null);
    	
    	if (is_null($user_id) || is_null($course_id) ) throw new Exception("user id and/or course id not found");
    	
    	
    	$ce_adp = new CourseEvaluation();
    	$ce_sel = $ce_adp->select();
    	$ce_sel->setIntegrityCheck(false);
    	$ce_sel->from(array('ce' => 'course_evaluation'), array('*'));
    	$ce_sel->joinLeft(array('e' => 'evaluation'), 'e.id = ce.evaluation_id', array('e.criteria', 'e.type'));
    	$ce_sel->where("ce.course_id = ?", $course_id);
    	$ce_sel->where("ce.user_id = ?", $user_id);
    	
    	$ces = $ce_adp->fetchAll($ce_sel);
    	
    	$this->view->assign('ces', $ces);
    	
    	$history = array(
    			array('url' => '/index/dashboard', 'title' => 'Home'),
    			array('url' => '/course/add', 'title' => 'List Evaluations'),
    	);
    	$active  = "Evaluation";
    	
    	$values = array('history' => $history, 'active' => $active);
    	
    	$this->view->assign('breadcrumb', $values);
    	
    }
    
    public function saveAction()
    {
    	$this->_helper->viewRenderer->setNoRender(true);
    	
    	$params = $this->getRequest()->getParams();
    	$data = array('name' => $params['inputName'], 
    			'description' => $params['inputDescription'], 
    			'code' => $params['CourseCode'],
    			'modules' => $params['inputModules']);
    	
    	$course_adp = new Course();
    	
    	$course_id = 0;
    	$error = null;
    	
    	try {
    		$course_id = $course_adp->insert($data);
    	} catch (Exception $e) {
    		$error = $e->getMessage();	
    	}
    	
    	$output['course_id'] = $course_id;
    	
    	if (!is_null($error)) {
    		$output['error'] = $error;
    	}
    	
    	echo Zend_Json::encode($output);
    	
    }
    
    public function save2Action()
    {
    	$this->_helper->viewRenderer->setNoRender(true);
    	
    	$course_id = 0;
    	$error = null;
    	
    	$m_adp = new Module();
    	
    	$i = 1;
    	$error = null;
    	
    	$course_id = $this->getRequest()->getParam('course_id', null);
    	$modules = $this->getRequest()->getParam('inputName', null);
    	
    	foreach ($modules as $module) {
    		$data = array('course_id' => $course_id, 'sort' => $i, 'module_name' => $module);
    		try {
    			$m_adp->insert($data);
    		} catch (Exception $e) {
    			$error = $e->getMessage();
    		}
    		$i++;
    	} 
    	
    	
    	$output['course_id'] = $course_id;
    	 
    	if (!is_null($error)) {
    		$output['error'] = $error;
    	}
    	 
    	echo Zend_Json::encode($output);
    }
    
    public function add3Action()
    {
    	$course_id = $this->getRequest()->getParam("id", null);
    	if (is_null($course_id)) throw new Exception ("coure can not be null");
    	
    	
    	$m_adp = new Module();
    	$m_sel = $m_adp->select();
    	$m_sel->where("course_id = ?", $course_id);
		$m_sel->order("sort ASC");
		$ms = $m_adp->fetchAll($m_sel);
    	
    	$this->view->assign('modules', $ms);
    	$this->view->assign('course_id', $course_id);
    	
    	$c_adp = new Course();
    	$c_sel = $c_adp->select();
    	$c_sel->where("id = ?", $course_id);
    	 
    	$c = $c_adp->fetchRow($c_sel);
    	
    	$this->view->assign('course', $c);
    	
    	$history = array(
    			array('url' => '/index/dashboard', 'title' => 'Home'),
    			array('url' => '/course/add', 'title' => 'Add Course'),
    			array('url' => '/course/view/id/' . $course_id, 'title' => $c->name),
    	);
    	$active  = "Modules";
    	 
    	$values = array('history' => $history, 'active' => $active);
    	 
    	$this->view->assign('breadcrumb', $values);
    	
    }
    
    public function moduleconfigAction()
    {
    	$course_id = $this->getRequest()->getParam('course_id', null);
    	$module_id = $this->getRequest()->getParam('module_id', null);
    	
    	if (is_null($course_id) || is_null($module_id)) throw new Exception("module and course id can not be null");
    	
    	$this->view->assign('module_id', $module_id);
    	$this->view->assign('course_id', $course_id);
    	
    	
    	$c_adp = new Course();
    	$c_sel = $c_adp->select();
    	$c_sel->where("id = ?", $course_id);    	
    	
    	$c = $c_adp->fetchRow($c_sel);
    	 
    	$this->view->assign('course', $c);
    	
    	$m_adp = new Module();
    	$m_sel = $m_adp->select();
    	$m_sel->where("id = ?", $module_id);
    	
    	$m = $m_adp->fetchRow($m_sel);
    	
    	$this->view->assign('module', $m);
    	 
    	$history = array(
    			array('url' => '/index/dashboard', 'title' => 'Home'),
    			array('url' => '/course/add', 'title' => 'Add Course'),
    			array('url' => '/course/view/id/' . $course_id, 'title' => $c->name),
    			array('url' => '/course/add3/id/' . $course_id, 'title' => "Modules"),
    	);
    	$active  = $m->module_name;
    	
    	$values = array('history' => $history, 'active' => $active);
    	
    	$this->view->assign('breadcrumb', $values);
    	
    }
    
    public function modulesaveAction()
    {
    	$this->_helper->viewRenderer->setNoRender(true);
    	
    	$me_adp = new ModuleExtra();
    	
    	$module_id = $this->getRequest()->getParam('module_id', null);
    	$course_id = $this->getRequest()->getParam('course_id', null);
    	$module_description = $this->getRequest()->getParam('inputOverview', null);
    	
    	$module_filename = $_FILES['inputOverviewFile']['name'];
    	$module_mime = $_FILES['inputOverviewFile']['type'];
    	$module_file = file_get_contents($_FILES['inputOverviewFile']['tmp_name']);
    	 
    	
    	$data = array('module_id' => $module_id, 'overview' => $module_description, 
    			      'file_name' => $module_filename, 'mime_type' => $module_mime, 'file' => $module_file);
    	$me_adp->insert($data);
    	//echo $module_mime;
    	
    	//handouts loop
    	$number_of_handouts = $this->getRequest()->getParam("number_of_handouts", null);
    	$file_overview = $this->getRequest()->getParam('inputHandoutDescription');
    	$handout_names = $this->getRequest()->getParam('handoutName');
    	$mh_adp = new ModuleHandout();
    	
    	for ($i=0; $i< $number_of_handouts; $i++) {
    		$file_name = $_FILES['inputHandoutFile']['name'][$i];
    		$file_type = $_FILES['inputHandoutFile']['type'][$i];
    		$file_data = file_get_contents($_FILES['inputHandoutFile']['tmp_name'][$i]);
    		
    		$overview = $file_overview[$i];
    		$handout_name = $handout_names[$i];
    		
    		$data = array('module_id' => $module_id, 'sort' => ($i + 1), 'overview' => $overview, 
    						'name' => $handout_name , 'file_name' => $file_name, 'mime_type' => $file_type, 'file' => $file_data);
    		$mh_adp->insert($data);
    	}
    	
    	//excercise loop
    	$number_of_excercises = $this->getRequest()->getParam("number_of_excercises", null);
    	$file_overview = $this->getRequest()->getParam('inputExcerciseDescription');
    	$execercise_names = $this->getRequest()->getParam('exerciseName');
    	$me_adp = new ModuleExcercise();
    	 
    	for ($i=0; $i< $number_of_handouts; $i++) {
    		$file_name = $_FILES['inputExcerciseFile']['name'][$i];
    		$file_type = $_FILES['inputExcerciseFile']['type'][$i];
    		$file_data = file_get_contents($_FILES['inputExcerciseFile']['tmp_name'][$i]);
    	
    		$overview = $file_overview[$i];
    		$execercise_name = $execercise_names[$i];
    	
    		$data = array('module_id' => $module_id, 'sort' => ($i + 1), 'overview' => $overview,
    				'name' => $execercise_name, 'file_name' => $file_name, 'mime_type' => $file_type, 'file' => $file_data);
    		$me_adp->insert($data);
    	}
    	
    	$course_id = $this->getRequest()->getParam('course_id', null);
    	
    	if (is_null($course_id)) throw new Exception("course can not be null");
    	
    	$output = array('course_id' => $course_id);
    	
    	echo Zend_Json::encode($output);
    	
    }
    
    public function downloadAction()
    {
    	$type = $this->getRequest()->getParam('type', null);
    	
    	switch ($type) {
    		case 'mextra':
    			$module_id = $this->getRequest()->getParam('id', null);
    			$mx_adp = new ModuleExtra();
    			$mx_sel = $mx_adp->select();
    			$mx_sel->where("module_id = ?", $module_id);
    			$mx = $mx_adp->fetchRow($mx_sel);
    			
    			$this->getResponse()->setHeader("Content-Type", $mx->mime_type);
    			$this->getResponse()->setHeader("Content-Disposition", "attachment; filename=" . $mx->file_name);
    			
    			echo $mx->file;
    			
    			break;
    			
    		case 'excercise':
    			$exe_id = $this->getRequest()->getParam('id', null);
    			
    			$mx_adp = new ModuleExcercise();
    			$mx_sel = $mx_adp->select();
    			$mx_sel->where("id = ?", $exe_id);
    			$mx = $mx_adp->fetchRow($mx_sel);
    			 
    			$this->getResponse()->setHeader("Content-Type", $mx->mime_type);
    			$this->getResponse()->setHeader("Content-Disposition", "attachment; filename=" . $mx->file_name);
    			 
    			echo $mx->file;
    			
    			break;
    			
    		case 'handout':
    			
    			$exe_id = $this->getRequest()->getParam('id', null);
    			 
    			$mx_adp = new ModuleHandout();
    			$mx_sel = $mx_adp->select();
    			$mx_sel->where("id = ?", $exe_id);
    			$mx = $mx_adp->fetchRow($mx_sel);
    			
    			$this->getResponse()->setHeader("Content-Type", $mx->mime_type);
    			$this->getResponse()->setHeader("Content-Disposition", "attachment; filename=" . $mx->file_name);
    			
    			echo $mx->file;
    			
    			break;
    	}
    	
    	$this->_helper->viewRenderer->setNoRender(true);
     }
    
    public function moduleeditAction()
    {
    	$module_id = $this->getRequest()->getParam('id', null);
    	if (is_null($module_id)) throw new Exception("Module id can not be null");
    	 
    	$m_adp = new Module();
    	$m_sel = $m_adp->select();
    	$m_sel->where("id = ?", $module_id);
    	$m = $m_adp->fetchRow($m_sel);
    	 
    	$this->view->assign('module', $m);
    	 
    	$mx_adp = new ModuleExtra();
    	$mx_sel = $mx_adp->select();
    	 
    	$mx_sel->where("module_id = ?", $module_id);
    	$mx = $mx_adp->fetchRow($mx_sel);
    	 
    	$this->view->assign('mextra', $mx);
    	 
    	$me_adp = new ModuleExcercise();
    	$me_sel = $me_adp->select();
    	$me_sel->where("module_id = ?", $module_id);
    	$mes = $me_adp->fetchAll($me_sel);
    	 
    	$this->view->assign('module_exe', $mes);
    	 
    	 
    	$mh_adp = new ModuleHandout();
    	$mh_sel = $mh_adp->select();
    	$mh_sel->where("module_id = ?", $module_id);
    	$mhs = $mh_adp->fetchAll($mh_sel);
    	 
    	$this->view->assign('module_hand', $mhs);
    	
    	$this->view->assign('module', $m);
    	 
    	$c_adp = new Course();
    	$c_sel = $c_adp->select();
    	$c_sel->where("id = ?", $m->course_id);
    	$c = $c_adp->fetchRow($c_sel);
    	 
    	$history = array(
    			array('url' => '/index/dashboard', 'title' => 'Home'),
    			array('url' => '/course/add', 'title' => 'Edit Courses'),
    			array('url' => '/course/view/id/' . $c->id, 'title' => $c->name),
    			array('url' => '/course/add3/id/' . $c->id, 'title' => "Edit Module"),
    	);
    	$active  = $m->module_name;
    	
    	$values = array('history' => $history, 'active' => $active);
    	
    	$this->view->assign('breadcrumb', $values);
    }
     
    public function moduleviewAction()
    {
    	$module_id = $this->getRequest()->getParam('id', null);
    	if (is_null($module_id)) throw new Exception("Module id can not be null");
    	
    	$m_adp = new Module();
    	$m_sel = $m_adp->select();
    	$m_sel->where("id = ?", $module_id);
    	$m = $m_adp->fetchRow($m_sel);
    	
    	$this->view->assign('module', $m);
    	
    	$mx_adp = new ModuleExtra();
    	$mx_sel = $mx_adp->select();
    	
    	$mx_sel->where("module_id = ?", $module_id);
    	$mx = $mx_adp->fetchRow($mx_sel);
    	
    	$this->view->assign('mextra', $mx);
    	
    	$me_adp = new ModuleExcercise();
    	$me_sel = $me_adp->select();
    	$me_sel->where("module_id = ?", $module_id);
    	$mes = $me_adp->fetchAll($me_sel);
    	
    	$this->view->assign('module_exe', $mes);
    	
    	
    	$mh_adp = new ModuleHandout();
    	$mh_sel = $mh_adp->select();
    	$mh_sel->where("module_id = ?", $module_id);
    	$mhs = $mh_adp->fetchAll($mh_sel);
    	
    	$this->view->assign('module_hand', $mhs);

    	$this->view->assign('module', $m);
    	
    	$c_adp = new Course();
    	$c_sel = $c_adp->select();
    	$c_sel->where("id = ?", $m->course_id);
    	$c = $c_adp->fetchRow($c_sel);
    	
    	$history = array(
    			array('url' => '/index/dashboard', 'title' => 'Home'),
    			array('url' => '/course/list', 'title' => 'List Courses'),
    			array('url' => '/course/view/id/' . $c->id, 'title' => stripslashes($c->name)),
    			array('url' => '/course/add3/id/' . $c->id, 'title' => "Modules"),
    	);
    	$active  = $m->module_name;
    	 
    	$values = array('history' => $history, 'active' => $active);
    	 
    	$this->view->assign('breadcrumb', $values);
    	
    	$edit = true;
    	
    	$session = new Zend_Session_Namespace('security');
    	if ($session->group_id == USER_TYPE_FACILITATOR) {    		
    		$edit = false;
    	}
    	
    	$this->view->assign('edit', $edit);
    }
    
    public function editAction()
    {
    	$course_id = $this->getRequest()->getParam('id', null);
    	 
    	if (is_null($course_id)) throw new Exception("course can not be null");
    	 
    	$c_adp = new Course();
    	$c_sel = $c_adp->select();
    	$c_sel->where("id = ?", $course_id);
    	 
    	$course = $c_adp->fetchRow($c_sel);
    	 
    	if (is_null($course)) throw new Exception("course not found");
    	 
    	$this->view->assign('course', $course);
    	
    	$cf_adp = new CourseFacilitator();
    	$cf_sel = $cf_adp->select();
    	$cf_sel->from(array('cf' => 'course_facilitator'), array('user_id'));
    	$cf_sel->setIntegrityCheck(false);
    	$cf_sel->joinLeft(array('u' => 'user'), 'u.id = cf.user_id', array('u.name', 'u.email'));
    	$cfs = $cf_adp->fetchRow($cf_sel);
    	 
    	$this->view->assign('facilitator', $cfs);
    	 
    	$cs_adp = new CourseStudent();
    	$cs_sel = $cs_adp->select();
    	$cs_sel->from(array('cs' => 'course_student'), array('user_id'));
    	$cs_sel->setIntegrityCheck(false);
    	$cs_sel->joinLeft(array('u' => 'user'), 'u.id = cs.user_id', array('u.name', 'u.email'));
    	$css = $cf_adp->fetchAll($cs_sel);
    	
    	$this->view->assign('students', $css);
    	 
    	$m_adp = new Module();
    	$m_sel = $m_adp->select();
    	$m_sel->where("course_id = ?", $course_id);
    	 
    	$ms = $m_adp->fetchAll($m_sel);
    	$this->view->assign('modules', $ms);
    	 
    	$history = array(
    			array('url' => '/index/dashboard', 'title' => 'Home'),
    			array('url' => '/course/add', 'title' => 'Edit Course'),
    			 
    			 
    	);
    	$active  = $course->name;
    	
    	$values = array('history' => $history, 'active' => $active);
    	
    	$this->view->assign('breadcrumb', $values);
    }
    
    public function delmodfileAction()
    {
    	$this->_helper->viewRenderer->setNoRender(true);
    	
    	$params = $this->getRequest()->getParams();
    	
    	$me_adp = new ModuleExtra();
    	$me_sel = $me_adp->select();
    	$me_sel->where("module_id = ?", $params['module_id']);
    	
		$me = $me_adp->fetchRow($me_sel);

		$me->file_name = null; 
		$me->mime_type = null;
		$me->file = null;
		
		$error = null;
		try {
			$me->save();
		} catch (Exception $e) {
			$error = $e->getMessage();
		}
		
		$json = array();
		
		if (!is_null($error)) {
			$json['error'] = $error;
		}
		
		echo Zend_Json::encode($json);
    }
    
    public function delhandfileAction()
    {
    	$this->_helper->viewRenderer->setNoRender(true);
    	$params = $this->getRequest()->getParams();
    	
    	$me_adp = new ModuleHandout();
    	$me_sel = $me_adp->select();
    	$me_sel->where("id = ?", $params['file_id']);
    	 
    	$me = $me_adp->fetchRow($me_sel);
    	 
    	if (!is_null($me)) {
    		$me->file_name = null;
    		$me->mime_type = null;
    		$me->file = null;
    		$me->save();
    	}
    }
    
    public function delexefileAction()
    {
    	$this->_helper->viewRenderer->setNoRender(true);
    	$params = $this->getRequest()->getParams();
    	 
    	$me_adp = new ModuleExcercise();
    	$me_sel = $me_adp->select();
    	$me_sel->where("id = ?", $params['file_id']);
    	
    	$me = $me_adp->fetchRow($me_sel);
    	
    	if (!is_null($me)) {
    		$me->file_name = null;
    		$me->mime_type = null;
    		$me->file = null;
    		$me->save();
    	}
    }
    
    public function updateAction()
    {
    	$this->_helper->viewRenderer->setNoRender(true);
    	$params = $this->getRequest()->getParams();
    	
    	$c_adp = new Course();
    	$c_sel = $c_adp->select();
    	$c_sel->where("id = ?", $params['course_id']);
    	
    	$c = $c_adp->fetchRow($c_sel);
    	
    	$c->name = $params['name'];
    	$c->description = $params['objective'];
    	
    	$c->save();
    	
    }
    
    public function moduleupdateAction()
    {
    	$this->_helper->viewRenderer->setNoRender(true);
    	$params = $this->getRequest()->getParams();
    	
    	$m_adp = new Module();
    	$m_sel = $m_adp->select();
    	$m_sel->where("id = ?", $params['module_id']);
    	$m = $m_adp->fetchRow($m_sel);
    	
    	$m->module_name = $params['moduleName'];
    	$m->save();
    	
    	$mx_adp = new ModuleExtra();
    	$mx_sel = $mx_adp->select();
    	$mx_sel->where("module_id = ?", $params['module_id']);
    	$mx = $mx_adp->fetchRow($mx_sel);
    	
    	if (!is_null($mx)) {
    	
    		$mx->overview = $params['moduleOverview'];
    	
	    	if (isset($_FILES['moduleOverviewFile'])) {
	    		$mx->file_name = $_FILES['moduleOverviewFile']['name'];
	    		$mx->mime_type = $_FILES['moduleOverviewFile']['type'];
	    		$mx->file =  file_get_contents($_FILES['moduleOverviewFile']['tmp_name']);
	    	}
    	
    		$mx->save();
    	} else {
    		
    		$data = array(
    					'module_id' => $params['module_id'],
    					'overview' => $params['moduleOverview'],
    					'file_name' => $_FILES['moduleOverviewFile']['name'],
    				    'mime_type' => $_FILES['moduleOverviewFile']['type'],
    				    'file' => file_get_contents($_FILES['moduleOverviewFile']['tmp_name'])
    				);
    		$mx_adp->insert($data);
    		
    	}
    	
    	$me_adp = new ModuleExcercise();
    	$me_sel = $me_adp->select();
    	$me_sel->where("module_id = ?", $params['module_id']);
    	
    	$mes = $me_adp->fetchAll($me_sel);
    	$number_of_exes = 0;
    	foreach ($mes as $me) {
    		$me->overview = $params['excerciseOverview_' . $me->sort];
    		$me->name     = $params['excerciseName_' . $me->sort];
    		
    		if (isset($_FILES['exefile_' . $me->sort])) {
    			$me->file_name = $_FILES['exefile_' . $me->sort]['name'];
    			$me->mime_type = $_FILES['exefile_' . $me->sort]['type'];
    			$me->file = file_get_contents($_FILES['exefile_' . $me->sort]['tmp_name']);
    		}
    		
    		$me->save();    
    		$number_of_exes++;
    	}
    	
    	$new_exes = count($params['inputExcerciseDescription']);
    	$sort = $number_of_exes;
    	for ($i=0; $i < $new_exes; $i++) {
    	
    		$data = array('module_id' => $params['module_id'], "sort" => ($sort + 1 + $i),
    				'overview' => $params['inputExcerciseDescription'][$i], 
    				'name' => $params['exerciseName'][$i]);
    	
    		if (isset($_FILES['inputFileExcercise']['name'][$i])) {
    			$data['file_name'] = $_FILES['inputFileExcercise']['name'][$i];
    			$data['mime_type'] = $_FILES['inputFileExcercise']['type'][$i];
    			$data['file'] = file_get_contents($_FILES['inputFileExcercise']['tmp_name'][$i]);
    		}
    	
    		$me_adp->insert($data);
    	}
    	
    	$mh_adp = new ModuleHandout();
    	$mh_sel = $mh_adp->select();
    	$mh_sel->where("module_id = ?", $params['module_id']);
    	
    	$mhs = $mh_adp->fetchAll($mh_sel);
    	
    	$number_of_handouts = 0;
    	foreach ($mhs as $mh) {
    		$mh->overview = $params['handoutOverview_' . $mh->sort];
    		$mh->name     = $params['handoutName_' . $mh->sort];
    		
    		if (isset($_FILES['handoutfile_' . $mh->sort])) {
    			$mh->file_name = $_FILES['handoutfile_' . $mh->sort]['name'];
    			$mh->mime_type = $_FILES['handoutfile_' . $mh->sort]['type'];
    			$mh->file = file_get_contents($_FILES['handoutfile_' . $mh->sort]['tmp_name']);
    		}
    	
    		$mh->save();
    		$number_of_handouts++;
    	}
    	
    	$new_handouts = count($params['inputHandoutDescription']);
    	$sort = $number_of_handouts;
    	for ($i=0; $i < $new_handouts; $i++) {
    		
    		$data = array('module_id' => $params['module_id'], "sort" => ($sort + 1 + $i),
    						'overview' => $params['inputHandoutDescription'][$i],
    						'name' => $params['handoutName'][$i]);
    		
    		if (isset($_FILES['inputHandoutFile']['name'][$i])) {
    			$data['file_name'] = $_FILES['inputHandoutFile']['name'][$i];
    			$data['mime_type'] = $_FILES['inputHandoutFile']['type'][$i];
    			$data['file'] = file_get_contents($_FILES['inputHandoutFile']['tmp_name'][$i]);
    		}
    		
    		$mh_adp->insert($data);    		
    	}
    	
    	$json = array('course_id' => $m->course_id, 'module_id' => $m->id);
    	
    	echo Zend_Json::encode($json);
    }
    
    public function delhandnodeAction()
    {
    	$params = $this->getRequest()->getParams();
    	
    	$mh_adp = new ModuleHandout();
    	$mh_sel = $mh_adp->select();
    	$mh_sel->where("id = ?", $params['node_id']);
    	
    	$mh = $mh_adp->fetchRow($mh_sel);
    	
    	if (!is_null($mh)) {
    		$mh->delete();
    	}
    	
    	$json = array();
    	
    	echo Zend_Json::encode($json);
    
    	$this->_helper->viewRenderer->setNoRender(true);
    }
    
    public function delexenodeAction()
    {
    	$params = $this->getRequest()->getParams();
    	 
    	$mh_adp = new ModuleExcercise();
    	$mh_sel = $mh_adp->select();
    	$mh_sel->where("id = ?", $params['node_id']);
    	 
    	$mh = $mh_adp->fetchRow($mh_sel);
    	 
    	if (!is_null($mh)) {
    		$mh->delete();
    	}
    	 
    	$json = array();
    	 
    	echo Zend_Json::encode($json);
    	
    	$this->_helper->viewRenderer->setNoRender(true);
    }
    
    public function viewAction()
    {
    	$course_id = $this->getRequest()->getParam('id', null);
    	
    	if (is_null($course_id)) throw new Exception("course can not be null");
    	
    	$c_adp = new Course();
    	$c_sel = $c_adp->select();
    	$c_sel->where("id = ?", $course_id);
    	
    	$course = $c_adp->fetchRow($c_sel);
    	
    	if (is_null($course)) throw new Exception("course not found");
    	
    	$this->view->assign('course', $course);  

    	$cf_adp = new CourseFacilitator();
    	$cf_sel = $cf_adp->select();
    	$cf_sel->from(array('cf' => 'course_facilitator'), array('user_id'));
    	$cf_sel->setIntegrityCheck(false);
    	$cf_sel->joinLeft(array('u' => 'user'), 'u.id = cf.user_id', array('u.name', 'u.email'));
    	$cf_sel->where("cf.course_id = ?", $course_id);
    	$cfs = $cf_adp->fetchRow($cf_sel);
    	
    	$this->view->assign('facilitator', $cfs);
    	
    	$cs_adp = new CourseStudent();
    	$cs_sel = $cs_adp->select();
    	$cs_sel->from(array('cs' => 'course_student'), array('user_id'));
    	$cs_sel->setIntegrityCheck(false);
    	$cs_sel->joinLeft(array('u' => 'user'), 'u.id = cs.user_id', array('u.name', 'u.email'));
    	$cs_sel->where("cs.course_id = ?", $course_id);
    	$css = $cf_adp->fetchAll($cs_sel);
    	 
    	$this->view->assign('students', $css);
    	
    	$m_adp = new Module();
    	$m_sel = $m_adp->select();
    	$m_sel->where("course_id = ?", $course_id);
    	
    	$ms = $m_adp->fetchAll($m_sel);
    	$this->view->assign('modules', $ms);
    	
    	$history = array(
    			array('url' => '/index/dashboard', 'title' => 'Home'),
    			array('url' => '/course/list', 'title' => 'List Courses'),
    			
    			
    	);
    	$active  = $course->name;
    	 
    	$values = array('history' => $history, 'active' => $active);
    	 
    	$this->view->assign('breadcrumb', $values);
    	
    	$edit = true;
    	
    	$session = new Zend_Session_Namespace('security');
    	if ($session->group_id == USER_TYPE_FACILITATOR) {
    		$edit = false;
    	}
    	
    	$this->view->assign('edit', $edit);
    }
    
    public function addevalAction()
    {
    	$eval_type = array(
    						array('name' => 'Course Eval', 'id' => '1'), 
    						array('name' => 'Facilitator Eval', 'id' => '2'),
    						array('name' => 'Administrator Eval', 'id' => '3'));
    	$this->view->assign('etypes', $eval_type);
    	
    }
    
    public function evalitemaddedAction()
    {
    	
    }
    
    public function saveevaldefAction()
    {
    	$params = $this->getRequest()->getParams();
    	
    	$e_adp = new Evaluation();    	
    	$data = array('evaluation_type' => $params['eval_type_id'], 'group_id' => 1, 'criteria' => $params['evalcriteria'], 'type' => $params['feedbacktype']);
    	$e_adp->insert($data);
    	
    	$this->_helper->viewRenderer->setNoRender(true);
    }
    
    public function saveevalAction()
    {
    	$e_adp = new Evaluation();
    	$es = $e_adp->fetchAll();
    	
    	$session = new Zend_Session_Namespace("security");
    	$course_id = $session->course_id;
    	$user_id = $session->user_id;
    	
    	if (is_null($course_id) || is_null($user_id)) throw new Exception("course and user is null");
    	
    	$ce_adp = new CourseEvaluation();
    	
    	foreach ($es as $e) {
    		$data = array('course_id' => $course_id, 'user_id' => $user_id, 'evaluation_id' => $e->id);
    		
    		if ($e->type == 1) {
    			$data['value_int'] = $this->getRequest()->getParam('eval_' . $e->id);
    		} else {
    			$data['value_text'] = $this->getRequest()->getParam('eval_' . $e->id);
    		}
    		
    		$ce_adp->insert($data);
    		
    	}
    	
    	$this->_helper->viewRenderer->setNoRender(true);
    	
    }
    
    public function evaldoneAction()
    {
    	
    }
    
    public function studentsAction()
    {
 		$session = new Zend_Session_Namespace('security');

 		$cs_adp = new CourseStudent();
 		$cs_sel = $cs_adp->select();
 		$cs_sel->setIntegrityCheck(false);
 		$cs_sel->from(array('sf' => 'student_facilitator'), array());
 		$cs_sel->join(array('cs' => 'course_student'), 'cs.user_id = sf.student_id', array());
 		$cs_sel->join(array('c' => 'course'), 'c.id = cs.course_id', array('course_name' => 'c.name'));
 		$cs_sel->join(array('u' => 'user'), 'u.id = sf.student_id', array('u.id', 'student_name' => 'u.name'));
 		$cs_sel->where('sf.facilitator_id = ?', $session->user_id);
 		                   
 		$ss = $cs_adp->fetchAll($cs_sel);
 		
 		$this->view->assign('students', $ss);
 		
    }
}