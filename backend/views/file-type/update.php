<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FileType */

$this->title = 'Update File Type: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'File Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="file-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
