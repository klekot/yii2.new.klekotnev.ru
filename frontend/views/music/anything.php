<?php

/* @var $this yii\web\View */

$commonTitle = ['anything', 'Разное'];

echo $this->render('_music', ['commonTitle' => $commonTitle, 'title' => $title, 'page' => $page]);
