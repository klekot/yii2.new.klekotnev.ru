<?php

/* @var $this yii\web\View */

$commonTitle = ['prehistory', 'Предыстория'];

echo $this->render('_music', ['commonTitle' => $commonTitle, 'title' => $title, 'page' => $page]);
