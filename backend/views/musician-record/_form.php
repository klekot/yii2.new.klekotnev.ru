<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MusicianRecord */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="musician-record-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'musician_id')->textInput() ?>

    <?= $form->field($model, 'record_id')->textInput() ?>

    <?= $form->field($model, 'instrument_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
