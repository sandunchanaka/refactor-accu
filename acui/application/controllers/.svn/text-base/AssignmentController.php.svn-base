<?php
require_once "models/ModuleExcerciseSubmission.php";
require_once "models/Module.php";
require_once "models/ModuleExcercise.php";

class AssignmentController extends Zend_Controller_Action
{

    public function init()
    {
        $this->_helper->layout()->disableLayout();
    }

    public function indexAction()
    {
        // action body
    }
    
    public function getexecAction()
    {
    	$module_id = $this->getRequest()->getParam('module_id');
    	
    	$me_adp = new ModuleExcercise();
    	$me_sel = $me_adp->select();
    	$me_sel->where("module_id = ?", $module_id);
    	
    	$mes = $me_adp->fetchAll($me_sel);
    	
    	$array = array();
    	
    	foreach ($mes as $me) {
    		$std = new stdClass();
    		$std->id = $me->id;
    		$std->name = $me->name;
    		
    		$array[] = $std;    		
    	}
    	
    	$json = array('items' => $array);
    	
    	echo Zend_Json::encode($json);
    	
    	$this->_helper->viewRenderer->setNoRender(true);
    }

    public function submitAction()
    {
    	$history = array(
    			array('url' => '/index/dashboard', 'title' => 'Home')
    			 
    	);
    	$active  = "Assingment Submission";
    	 
    	$values = array('history' => $history, 'active' => $active);
    	 
    	$this->view->assign('breadcrumb', $values);
    	 
    	$session = new Zend_Session_Namespace("security");
    	$user_id = $session->user_id;
    	$course_id = $session->course_id;
    	
    	$mes_adp = new ModuleExcerciseSubmission();
    	$mes_sel = $mes_adp->select();
    	$mes_sel->where("user_id = ?", $user_id);
    	
    	$mess = $mes_adp->fetchAll($mes_sel);
    	
    	$this->view->assign('assignments', $mess);
    	
    	$m_adp = new Module();
    	$m_sel = $m_adp->select();
    	$m_sel->where("course_id = ?", $course_id);
    	$ms = $m_adp->fetchAll($m_sel);
    	
    	$this->view->assign('modules', $ms);
    	
    }
    
    public function downloadAction()
    {
    	$this->_helper->viewRenderer->setNoRender(true);
    	
    	$id = $this->getRequest()->getParam('id', null);
    	
    	$mes_adp = new ModuleExcerciseSubmission();
    	$mes_sel = $mes_adp->select();
    	$mes_sel->where("id = ?", $id);
    	
    	$mes = $mes_adp->fetchRow($mes_sel);
    	
    	$this->getResponse()->setHeader("Content-Type", $mes->mime_type);
    	$this->getResponse()->setHeader("Content-Disposition", "attachment; filename=" . $mes->file_name);
    	 
    	echo $mes->file;
    	
    }
    
    public function sendfileAction()
    {
    	$this->_helper->viewRenderer->setNoRender(true);
    	
    	$params = $this->getRequest()->getParams();
    	$session = new Zend_Session_Namespace("security");

    	$data = array(
    			'module_id' => $params['module_id'], 
    			'module_excercise_id' => $params['module_excercise_id'], 
    			'user_id' => $session->user_id, 
    			'file_name' => $_FILES['inputFile']['name'], 
    			'mime_type' => $_FILES['inputFile']['type'], 
    			'file' => file_get_contents($_FILES['inputFile']['tmp_name']), 
    			'created_date' => new Zend_Db_Expr("NOW()")
    			);
    	
    	$mes_adp = new ModuleExcerciseSubmission();
    	$mes_adp->insert($data);
    	
    	$json = array();
    	
    	echo Zend_Json::encode($json);
    	
    }
    
    public function listAction()
    {
    	$mes_adp = new ModuleExcerciseSubmission();
    	$mes_sel = $mes_adp->select();
    	$mes_sel->setIntegrityCheck(false);
    	$mes_sel->from(array("mes" => "module_excercise_submission"), array('mes.*'));
    	$mes_sel->joinLeft(array('me' => 'module_excercise'), 'me.id = mes.module_excercise_id', array('me.name'));
    	$mes_sel->joinLeft(array('m' => 'module'), 'm.id = mes.module_id', array('module_name'));
    	$mes_sel->joinLeft(array('c' => 'course'), 'c.id = m.course_id', array('course_name' => 'c.name'));
    	$mes_sel->joinLeft(array('u' => 'user'), 'u.id = mes.user_id', array('student_name' => 'u.name'));
    	$mes_sel->join(array('sf' => 'student_facilitator'), 'sf.student_id = mes.user_id', array());
    	
    	$session = new Zend_Session_Namespace('security');
    	
    	if ($session->group_id == USER_TYPE_FACILITATOR) {
    		$mes_sel->where("sf.facilitator_id = ?", $session->user_id);
    	}
    	
    	$mes_sel->order("created_date DESC");

    	$mess = $mes_adp->fetchAll($mes_sel);
    	
    	$this->view->assign('mess', $mess);
    }
    
    public function progressAction()
    {
    	$mes_adp = new ModuleExcerciseSubmission();
    	$mes_sel = $mes_adp->select();
    	$mes_sel->setIntegrityCheck(false);
    	$mes_sel->from(array("mes" => "module_excercise_submission"), array('mes.*'));
    	$mes_sel->joinLeft(array('me' => 'module_excercise'), 'me.id = mes.module_excercise_id', array('me.name'));
    	$mes_sel->joinLeft(array('m' => 'module'), 'm.id = mes.module_id', array('module_name'));
    	$mes_sel->joinLeft(array('c' => 'course'), 'c.id = m.course_id', array('course_name' => 'c.name'));
    	$mes_sel->joinLeft(array('u' => 'user'), 'u.id = mes.user_id', array('student_name' => 'u.name'));
    	$mes_sel->order("created_date DESC");
    	
    	$mess = $mes_adp->fetchAll($mes_sel);
    	 
    	$this->view->assign('mess', $mess);
    }

}

