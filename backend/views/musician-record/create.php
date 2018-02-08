<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\MusicianRecord */

$this->title = 'Create Musician Record';
$this->params['breadcrumbs'][] = ['label' => 'Musician Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="musician-record-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
