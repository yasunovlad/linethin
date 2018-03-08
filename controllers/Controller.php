<?php 
include ROOT.'/models/mainModel.php';
class Controller
{
	public function mainAction()
	{
		$class__mainModel = new mainModel();
		require_once ROOT.'/views/index.php';
	}
}

?>