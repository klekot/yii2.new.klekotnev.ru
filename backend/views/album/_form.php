<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use yii\helpers\ArrayHelper;
use kartik\file\FileInput;
use yii\helpers\Url;

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

    <?= FileInput::widget([
        'name' => 'input-ru[]',
        'language' => 'ru',
        'options' => ['multiple' => true],
        'pluginOptions' => ['previewFileType' => 'any', 'uploadUrl' => Url::to(['/site/files-upload']),]
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
