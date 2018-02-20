<?php

class SiteController extends RController
{
	public $layout='//layouts/none';
	
	
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->layout = 'column2';	
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$headers="From: {$model->email}\r\nReply-To: {$model->email}";
				mail($model->email,$model->subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$user=User::model()->findAll();
		if($user==NULL)
		{
			$this->redirect('index.php?r=configurations/setup');
		}
		
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
			{
				$this->redirect(Yii::app()->user->returnUrl);
			}
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	public function actionSearch()
	{
		
		$this->layout='column2';
		
		
	
		$model=new Students;
		$criteria = new CDbCriteria;
		 $criteria->condition='first_name LIKE :match or middle_name LIKE :match or last_name LIKE :match';
		 $criteria->params = array(':match' => $_POST['char'].'%');
		  $criteria->order = 'first_name ASC';
		 $total = Students::model()->count($criteria);
		$pages = new CPagination($total);
        $pages->setPageSize(Yii::app()->params['listPerPage']);
        $pages->applyLimit($criteria);  // the trick is here!
		$posts = Students::model()->findAll($criteria);
		
		$emp=new Employees;
		$criteria_1 = new CDbCriteria;
		 $criteria_1->condition='first_name LIKE :match or middle_name LIKE :match or last_name LIKE :match';
		 $criteria_1->params = array(':match' => $_POST['char'].'%');
		 $criteria_1->order = 'first_name ASC';
		 $tot = Employees::model()->count($criteria_1);
		$pages_1 = new CPagination($total);
        $pages_1->setPageSize(Yii::app()->params['listPerPage']);
        $pages_1->applyLimit($criteria_1);  // the trick is here!
		$posts_1 = Employees::model()->findAll($criteria_1);
		
		 
		$this->render('search',array('model'=>$model,
		'list'=>$posts,
		'posts'=>$posts_1,
		'pages' => $pages,
		'item_count'=>$total,
		'page_size'=>10,)) ;
		
		//$stud = Students::model()->findAll('first_name LIKE '.$_POST['char']);
		//echo count($stud);
		//exit;
	//print_r($_POST);	
	}
}