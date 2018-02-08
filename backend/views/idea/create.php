<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Idea */

$this->title = 'Create Idea';
$this->params['breadcrumbs'][] = ['label' => 'Ideas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="idea-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
