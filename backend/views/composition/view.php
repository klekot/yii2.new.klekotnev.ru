<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Composition */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Compositions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="composition-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'music_id',
            'text_id',
            'name',
            'creation_date',
            'notation_file_id',
        ],
    ]) ?>

</div>
