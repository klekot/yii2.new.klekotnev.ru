<?php
namespace frontend\controllers;


use yii\console\Controller;

class NowherelandController extends Controller
{
    public function actionHistory()
    {
        return $this->render('history');
    }

    public function actionMaps()
    {
        return $this->render('maps');
    }

    public function actionLanguages()
    {
        return $this->render('languages');
    }

    public function actionFolklore()
    {
        return $this->render('folklore');
    }
}