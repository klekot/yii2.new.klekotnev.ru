<?php
namespace frontend\controllers\MusicTraits;

trait PrehistoryTrait
{
    public function actionPrehistory()
    {
        $title = 'Предыстория';
        $page = null;
        return $this->render('prehistory', ['page' => $page, 'title' => $title]);
    }

    public function actionPrehistoryMusic()
    {
        $title = 'Музыка';
        $page = $this->render('prehistory/music');
        return $this->render('prehistory', ['page' => $page, 'title' => $title]);
    }

    public function actionPrehistoryPhoto()
    {
        $title = 'Фото';
        $page = $this->render('prehistory/photo');
        return $this->render('prehistory', ['page' => $page, 'title' => $title]);
    }

    public function actionPrehistoryVideo()
    {
        $title = 'Видео';
        $page = $this->render('prehistory/video');
        return $this->render('prehistory', ['page' => $page, 'title' => $title]);
    }

    public function actionPrehistoryStory()
    {
        $title = 'История';
        $page = $this->render('prehistory/story');
        return $this->render('prehistory', ['page' => $page, 'title' => $title]);
    }

    public function actionPrehistoryPeople()
    {
        $title = 'Участники';
        $page = $this->render('prehistory/people');
        return $this->render('prehistory', ['page' => $page, 'title' => $title]);
    }
}