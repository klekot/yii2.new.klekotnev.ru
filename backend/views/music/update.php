<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Music */

$this->title = 'Update Music: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Musics', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="music-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
