<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\RecordType */

$this->title = 'Create Record Type';
$this->params['breadcrumbs'][] = ['label' => 'Record Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="record-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
