<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Idea */

$this->title = 'Update Idea: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Ideas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="idea-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
