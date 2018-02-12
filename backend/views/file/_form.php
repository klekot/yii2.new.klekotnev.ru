<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\File */
/* @var $form yii\widgets\ActiveForm */

$dataCategory = ArrayHelper::map(\common\models\FileType::find()->asArray()->all(), 'id', 'name');
?>

<div class="file-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'path')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file_type_id')->dropDownList(
        $dataCategory,
        [
            'prompt'=>'-Choose a Category-',
            'id' => 'name'
        ]
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
