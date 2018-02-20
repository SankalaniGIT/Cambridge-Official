<?php

class IndexController extends RController {

	public $defaultAction = 'index';

	public function actionIndex() {
		

		$this->render(Yii::app()->getModule('message')->viewPath . '/index');
	}

}
