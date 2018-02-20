<?php

class DefaultController extends RController
{
	public function actionIndex()
	{
		$this->render('index');
	}
	public function actionCalendar()
	{
		$this->render('calendar');
	}
	public function actionEvents()
	{
		$this->render('events');
	}
}