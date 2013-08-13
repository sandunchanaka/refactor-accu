<?php

//namespace library\Zend\View\Helper;


require_once "Zend/View/Helper/Interface.php";

class Zend_View_Helper_BreadCrumb implements Zend_View_Helper_Interface {

	public $view;
	
	public function breadCrumb($values)
	{
		echo '<ul class="breadcrumb">';
			foreach ($values['history'] as $value) {
				echo '<li><a class="breadcrumb" data-url="' . $value['url'] . '" href="#">' . $value['title'] . '</a> <span class="divider">/</span></li>';
			}
    		echo '<li class="active">' . $values['active'] . '</li>';
		echo '</ul>';
		$javascript=<<<EOF
<script type="text/javascript">
$(document).ready(function(e) {
	$(".breadcrumb").click(function (e) {
		History.pushState(null, "Loading...", $(this).attr('data-url'));
		//$('#content').html('').load($(this).attr('data-url'));
	});
});
</script>
EOF;
		echo $javascript;

	}
	
	/* (non-PHPdoc)
	 * @see Zend_View_Helper_Interface::setView()
	 */
	public function setView(Zend_View_Interface $view) {
		$this->view = $view;
	}

	/* (non-PHPdoc)
	 * @see Zend_View_Helper_Interface::direct()
	 */
	 public function direct() {
		// TODO Auto-generated method stub
	 }


}

?>