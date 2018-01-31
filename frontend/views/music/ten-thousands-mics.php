<?php

/* @var $this yii\web\View */

$commonTitle = ['ten-thousands-mics', '10000 Микрофонов'];

echo $this->render('_music', ['commonTitle' => $commonTitle, 'title' => $title, 'page' => $page]);