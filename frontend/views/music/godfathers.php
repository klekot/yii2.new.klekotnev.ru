<?php

/* @var $this yii\web\View */

$commonTitle = ['godfathers', 'Крёстные Отцы'];

echo $this->render('_music', ['commonTitle' => $commonTitle, 'title' => $title, 'page' => $page]);