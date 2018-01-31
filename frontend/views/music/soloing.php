<?php

/* @var $this yii\web\View */

$commonTitle = ['soloing', 'Сольное творчество'];

echo $this->render('_music', ['commonTitle' => $commonTitle, 'title' => $title, 'page' => $page]);