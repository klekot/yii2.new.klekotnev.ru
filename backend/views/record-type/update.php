<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\RecordType */

$this->title = 'Update Record Type: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Record Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="record-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
