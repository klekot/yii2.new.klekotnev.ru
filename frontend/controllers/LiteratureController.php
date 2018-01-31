<?php
namespace frontend\controllers;


use yii\web\Controller;

class LiteratureController extends Controller
{
    public function actionProse()
    {
        return $this->render('prose');
    }

    public function actionPoetry()
    {
        return $this->render('poetry');
    }

    public function actionLyrics()
    {
        return $this->render('lyrics');
    }

    public function actionDrama()
    {
        return $this->render('drama');
    }
}