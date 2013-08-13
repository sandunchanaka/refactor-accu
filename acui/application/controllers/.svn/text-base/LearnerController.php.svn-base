<?php

require_once "models/Learner.php";
require_once "models/Course.php";
require_once "models/Facilitator.php";
require_once "models/CourseStudent.php";
require_once "models/UserFile.php";
require_once "models/StudentFacilitator.php";
require_once "models/User.php";
require_once "models/StudentModule.php";
require_once "models/Module.php";

class LearnerController extends Zend_Controller_Action
{

 public function init()
    {
        $this->_helper->layout()->disableLayout();
    }

    public function indexAction()
    {
        // action body
    }

    public function listAction()
    {
    	$l_adp = new Learner();
    	$l_sel = $l_adp->select();
    	$l_sel->setIntegrityCheck(false);
    	$l_sel->from(array('u' => 'user'), array('u.*'));
    	$l_sel->joinLeft(array('cs' => 'course_student'), 'u.id = cs.user_id', array('course_id' => new Zend_Db_Expr('CONCAT_WS(",", cs.course_id)')));
    	$l_sel->joinLeft(array('c' => 'course'), 'c.id = cs.course_id', array('course_name' => new Zend_Db_Expr('CONCAT_WS(",", c.name)')));
    	$l_sel->joinLeft(array('sf' => 'student_facilitator'), 'sf.student_id = u.id', array());
    	$l_sel->joinLeft(array('uf' => 'user'), 'sf.facilitator_id = uf.id', array('facilitator_name' => 'uf.name'));
    	$l_sel->where("u.user_type_id = ?", USER_TYPE_LEARNER);
    	$list = $l_adp->fetchAll($l_sel);
    	
    	$this->view->assign('learners', $list);
    	
    }
    
    public function addAction()
    {
    	$history = array(
    			array('url' => '/index/dashboard', 'title' => 'Home')
    	
    	);
    	$active  = "Add Learner";
    	
    	$values = array('history' => $history, 'active' => $active);
    	
    	$this->view->assign('breadcrumb', $values);
    }
    
    public function setcourseAction()
    {
    	$this->_helper->viewRenderer->setNoRender(true);
    	 
    	$course_id = $this->getRequest()->getParam('course_id', null);
    	$user_id = $this->getRequest()->getParam('user_id', null);
    	$facilitator_id = $this->getRequest()->getParam('facilitator_id', null);
    	 
    	$cf_adp = new CourseStudent();
    	$cf_sel = $cf_adp->select();
    	 
    	$cf_sel->where("user_id = ?", $user_id);
    	 
    	$cf = $cf_adp->fetchRow($cf_sel);
    	 
    	if (!is_null($cf)) $cf->delete();
    	 
    	$data = array('course_id' => $course_id, 'user_id' => $user_id);
    	$cf_adp->insert($data);
    	
    	$sf_adp = new StudentFacilitator();
    	$sf_sel = $sf_adp->select();
    	
    	$sf_sel->where("student_id = ?", $user_id);
    	$sf = $sf_adp->fetchRow($sf_sel);
    	
    	if (!is_null($sf)) $sf->delete();
    	
    	$data = array('facilitator_id' => $facilitator_id, 'student_id' => $user_id);
    	$sf_adp->insert($data);
    	
    	
    	$json = array();
    	
    	echo Zend_Json::encode($json);
    
    }
    
    public function setstatusAction()
    {
    	$this->_helper->viewRenderer->setNoRender(true);
    	
    	$user_id = $this->getRequest()->getParam('user_id', null);
    	$status  = $this->getRequest()->getParam('status', null);
    	
    	$u_adp = new User();
    	$u_sel = $u_adp->select();
    	$u_sel->where("id = ?", $user_id);

    	$u = $u_adp->fetchRow($u_sel);
    	
    	$u->status = $status;
    	$u->save();
    	
    	$json = array();
    	
    	echo Zend_JSon::encode($json);
    	
    }
    
	public function viewAction()
    {
    	$session = new Zend_Session_Namespace("security");
    	if ($session->group_id == USER_TYPE_LEARNER) {
    		$this->_forward('profile', 'learner', null, null);
    		return false;
    	}
    	
    	$change_course = true;
    	$change_password = true;
    	$module_panel = false;
    	
    	if ($session->group_id == USER_TYPE_FACILITATOR) {
    		$change_course = false;
    		$change_password = false;
    		$module_panel = true;
    	}
    	
    	$user_id = $this->getRequest()->getParam('id', null);
    	
    	$f_adp = new Learner();
    	$f_sel = $f_adp->select();
    	$f_sel->where("id = ?", $user_id);
    	
    	$f = $f_adp->fetchRow($f_sel);
    	
    	$this->view->assign('learner', $f);
    	 
    	$c_adp = new Course();
    	$cs = $c_adp->fetchAll();
    	 
    	$this->view->assign('courses', $cs);
    	 
    	$cf_adp = new CourseStudent();
    	$cf_sel = $cf_adp->select();
    	$cf_sel->where("user_id = ?", $user_id);
    	 
    	$cf = $cf_adp->fetchRow($cf_sel);
    	 
    	$this->view->assign('cf', $cf);
    	
    	if (!is_null($cf)) {
    	
	    	$fa_adp = new Facilitator();
	    	$fa_sel = $fa_adp->select();
	    	$fa_sel->from(array('f' => 'user'), array('f.*'));
	    	$fa_sel->setIntegrityCheck(false);
	    	$fa_sel->joinLeft(array('cf' => 'course_facilitator'), 'cf.user_id = f.id', array());
	    	$fa_sel->where("cf.course_id = ?", $cf->course_id);
	    	$fa_sel->where("f.user_type_id = ?", USER_TYPE_FACILITATOR);
	    	
	    	$fas = $fa_adp->fetchAll($fa_sel);
	    	
	    	$this->view->assign('facilitators', $fas);
	    	
	    	$m_adp = new Module();
	    	$m_sel = $m_adp->select();
	    	$m_sel->from(array('m' => 'module'), array('m.id', 'm.course_id', 'm.module_name'));
	    	$m_sel->setIntegrityCheck(false);
	    	$m_sel->joinLeft(array('sm' => 'student_module'), 'sm.module_id = m.id AND sm.student_id = ' . $user_id, array('sm.active'));
	    	$m_sel->where("m.course_id = ?", $cf->course_id);	    	
	    	
	    	$ms = $m_adp->fetchAll($m_sel);
	    	
	    	$this->view->assign('modules', $ms);
	    	
    	}    	
    	$sf_adp = new StudentFacilitator();
    	$sf_sel = $sf_adp->select();
    	$sf_sel->where("student_id = ?", $user_id);
    	$sf = $sf_adp->fetchRow($sf_sel);
    	
    	$this->view->assign('lf', $sf);
    	
    	$uf_adp = new UserFile();
    	$uf_sel = $uf_adp->select();
    	$uf_sel->where("user_id = ?", $user_id);
    	
    	$uf = $uf_adp->fetchRow($uf_sel);
    	
    	$fileid = null;
    	
    	if (!is_null($uf)) {
    		$fileid = $uf->id;
    	}
    	
    	$this->view->assign('fileid', $fileid);
    	
    	$history = array(
    			array('url' => '/index/dashboard', 'title' => 'Home'),
    			array('url' => '/learner/list', 'title' => 'Learners')
    	
    	);
    	$active  = $f->name;
    	
    	$values = array('history' => $history, 'active' => $active);
    	
    	$this->view->assign('breadcrumb', $values);
    	 
    	$this->view->assign('change_password', $change_password);
    	$this->view->assign('change_course', $change_course);
    	$this->view->assign('module_panel', $module_panel);
    }
    
    public function unlockAction()
    {
    	$this->_helper->viewRenderer->setNoRender(true);
    	$params = $this->getRequest()->getParams();
    	
    	$m_adp = new Module();
    	$m_sel = $m_adp->select();
    	$m_sel->where("course_id = ?", $params['course_id']);
    	
    	$ms = $m_adp->fetchAll($m_sel);
    	
    	$modules = $params['module'];
    	
    	$sm_adp = new StudentModule();
    	    	
    	foreach ($ms as $module) {
    		if (isset($params['module_' . $module->id])) {
    			//set record
    			$sm_sel = $sm_adp->select();
    			$sm_sel->where("student_id = ?", $params['student_id']);
    			$sm_sel->where("module_id = ?", $module->id);
    			
    			$sm = $sm_adp->fetchRow($sm_sel);
    			
    			if (is_null($sm)) {
    				$data = array('student_id' => $params['student_id'], 
    						'module_id' => $module->id, 'active' => 1);
    				$sm_adp->insert($data);
    			} else {
    				if ($sm->active == 0) {
    					$sm->active = 1;
    					$sm->save();
    				}
    			}
    			
    		} else {
    			//unset record
    			
    			$sm_sel = $sm_adp->select();
    			$sm_sel->where("student_id = ?", $params['student_id']);
    			$sm_sel->where("module_id = ?", $module->id);
    			 
    			$sm = $sm_adp->fetchRow($sm_sel);
    			 
    			if (is_null($sm)) {
    				$data = array('student_id' => $params['student_id'],
    						'module_id' => $module->id, 'active' => 0);
    				$sm_adp->insert($data);
    			} else {
    				if ($sm->active == 1) {
    					$sm->active = 0;
    					$sm->save();
    				}
    			}
    			
    		}
    	}
        	
    	$json = array();
    	echo Zend_Json::encode($json);
    }
    
    public function profileAction()
    {
    	$session = new Zend_Session_Namespace("security");
    	$user_id = $session->user_id;
    	
    	$f_adp = new Learner();
    	$f_sel = $f_adp->select();
    	$f_sel->where("id = ?", $user_id);
    	 
    	$f = $f_adp->fetchRow($f_sel);
    	 
    	$this->view->assign('learner', $f);
    	
    	$uf_adp = new UserFile();
    	$uf_sel = $uf_adp->select();
    	$uf_sel->where("user_id = ?", $user_id);
    	 
    	$uf = $uf_adp->fetchRow($uf_sel);
    	 
    	$fileid = null;
    	 
    	if (!is_null($uf)) {
    		$fileid = $uf->id;
    	}
    	 
    	$this->view->assign('fileid', $fileid);
    	 
    	$history = array(
    			array('url' => '/index/dashboard', 'title' => 'Home'),
    			array('url' => '/learner/list', 'title' => 'Learner Profile')
    			 
    	);
    	$active  = $f->name;
    	 
    	$values = array('history' => $history, 'active' => $active);
    	 
    	$this->view->assign('breadcrumb', $values);
    }
    
    public function editAction()
    {
    	 
    	$params = $this->getRequest()->getParams();
    	 
    	$fa_adp = new Learner();
    	$fa_sel = $fa_adp->select();
    	$fa_sel->where("id = ?", $params['id']);
    	$fa = $fa_adp->fetchRow($fa_sel);
    
    	$this->view->assign('f', $fa);
    	 
    	$history = array(
    			array('url' => '/index/dashboard', 'title' => 'Home'),
    			array('url' => '/facilitator/list', 'title' => 'Learners')
    			 
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
    			'skype' => $params['skype'], 'facebook' => $params['facebook'], 'secondary_id' => $params['secondary_id']);
    	 
    	$fa->setFromArray($data);
    	$fa->save();
    	 
    	$json = array('facilitator_id' => $params['id']);
    	 
    	$this->_helper->viewRenderer->setNoRender(true);
    	 
    	echo Zend_Json::encode($json);
    }
    
    public function saveAction()
    {
    	$fa_adp = new Learner();
    	$params = $this->getRequest()->getParams();
    	
    	$data = array('name' => $params['inputName'], 'email' => $params['inputEmail'],
    			'user_type_id' => USER_TYPE_LEARNER, 'password' => new Zend_Db_Expr("PASSWORD('" . $params['inputPassword'] . "')"),
    			'country' => $params['country'], 'organization' => $params['organization'],
    			'phone' => $params['phone'], 'phone2' => $params['phone2'],
    			'skype' => $params['skype'], 'facebook' => $params['facebook'], 'secondary_id' => $params['secondary_id']);
    	
    	$user_id = $fa_adp->insert($data);

		$output = array('learner_id' => $user_id);
		
		echo Zend_Json::encode($output);
		
		$this->_helper->viewRenderer->setNoRender(true);
    }

}

