<?php

/* @var $this yii\web\View */

$commonTitle = ['svetlo', 'CBETLO'];

echo $this->render('_music', ['commonTitle' => $commonTitle, 'title' => $title, 'page' => $page]);