<?php

/* @var $this yii\web\View */

$commonTitle = ['pinstripe', 'PINSTRIPE'];

echo $this->render('_music', ['commonTitle' => $commonTitle, 'title' => $title, 'page' => $page]);