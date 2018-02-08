<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CompositionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="composition-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'music_id') ?>

    <?= $form->field($model, 'text_id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'creation_date') ?>

    <?php // echo $form->field($model, 'notation_file_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
