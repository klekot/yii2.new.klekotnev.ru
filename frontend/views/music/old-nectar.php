<?php

/* @var $this yii\web\View */

$commonTitle = ['old-nectar', 'Старый Нектар'];

echo $this->render('_music', ['commonTitle' => $commonTitle, 'title' => $title, 'page' => $page]);