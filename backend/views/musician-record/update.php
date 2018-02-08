<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MusicianRecord */

$this->title = 'Update Musician Record: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Musician Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="musician-record-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
