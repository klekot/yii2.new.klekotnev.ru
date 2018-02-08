<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Instrument */

$this->title = 'Create Instrument';
$this->params['breadcrumbs'][] = ['label' => 'Instruments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="instrument-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
