<?php

namespace app\controllers;

class PageController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionEduc()
    {
        return $this->render('educ');
    }

    public function actionFamily()
    {
        return $this->render('family');
    }

 	 public function actionPersonalinfo()
    {
        return $this->render('personalinfo');
    }



}
