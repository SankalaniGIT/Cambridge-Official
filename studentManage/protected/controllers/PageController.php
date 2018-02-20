<?php

class PageController extends RController
{


    public function actionIndex()
    {
        $model=new User;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['User']))
        {
            //Generating The Salt and hasing the password
            $salt = $model->generateSalt();
            $_POST['User']['password'] = $model->hashPassword($_POST['User']['password'],$salt);
            $_POST['User']['salt'] = $salt;
            $model->attributes=$_POST['User'];
            if($model->save())
                $this->redirect(array('/rights'));
        }

        $this->render('create',array(
            'model'=>$model,
        ));
    }
}

