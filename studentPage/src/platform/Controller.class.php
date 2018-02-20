<?php
class Controller
{
	public function Controller($viewParam)
	{
		$isSubmit = false;

		foreach ($_POST as $key=>$value){
			if(isset($_POST[$key]))	{
				$isSubmit = true;
				break;
			}
		}
		if($isSubmit){
			$this->onSubmitAction($viewParam);
		}
		else{
			$this->formLoding($viewParam);
		}
	}
	public function formLoding(&$viewParam){}
	public function  onSubmitAction(&$viewParam){}
}
?>