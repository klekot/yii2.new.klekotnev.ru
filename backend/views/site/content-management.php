<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

$form = ActiveForm::begin([
    'method' => 'post',
    'id' => 'page-content-form',
    'options' => ['class' => 'form-horizontal'],
]); ?>
<?php echo $form->field($page, 'id')->hiddenInput(['value' => $page->id])->label(false); ?>
<?php echo $form->field($page, 'path'); ?>
<?php echo $form->field($page, 'content')->widget(CKEditor::className(), [
    'options' => ['rows' => 6],
    'preset' => 'full'
]); ?>
<?php echo Html::submitButton('Сохранить', ['class' => 'btn btn-primary']); ?>
<?php ActiveForm::end(); ?>
