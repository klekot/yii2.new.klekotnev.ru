<?php
namespace frontend\controllers;


use frontend\controllers\MusicTraits\PrehistoryTrait;
use frontend\controllers\MusicTraits\GodfathersTrait;
use frontend\controllers\MusicTraits\OldNectarTrait;
use frontend\controllers\MusicTraits\SvetloTrait;
use frontend\controllers\MusicTraits\PinstripeTrait;
use frontend\controllers\MusicTraits\TenThousandsMicsTrait;
use frontend\controllers\MusicTraits\SoloingTrait;
use frontend\controllers\MusicTraits\NuagesComboTrait;
use frontend\controllers\MusicTraits\AnythingTrait;
use yii\web\Controller;

/**
 * Site controller
 */
class MusicController extends Controller
{
    use PrehistoryTrait;
    use GodfathersTrait;
    use OldNectarTrait;
    use SvetloTrait;
    use PinstripeTrait;
    use TenThousandsMicsTrait;
    use SoloingTrait;
    use NuagesComboTrait;
    use AnythingTrait;
}