<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Album */
/* @var $form yii\widgets\ActiveForm */

$dataCategory = ArrayHelper::map(\common\models\File::find()->asArray()->all(), 'id', 'name');
?>

<div class="album-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'creation_date')->widget(DatePicker::className(), [
        'language' => 'ru',
        'dateFormat' => 'dd-MM-yyyy',
    ]) ?>

    <?= $form->field($model, 'cover_file_id')->dropDownList(
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
