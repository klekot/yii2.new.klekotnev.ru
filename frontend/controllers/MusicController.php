<?php
namespace frontend\controllers;

use frontend\controllers\MusicTraits\PrehistoryTrait;
use frontend\controllers\MusicTraits\GodfathersTrait;
use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class MusicController extends Controller
{
    use PrehistoryTrait;
    use GodfathersTrait;

    public function actionIndex()
    {
        return $this->render('index');
    }
}