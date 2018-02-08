<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Collective */

$this->title = 'Create Collective';
$this->params['breadcrumbs'][] = ['label' => 'Collectives', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="collective-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
