<?php
namespace frontend\controllers\MusicTraits;

trait GodfathersTrait
{
    public function actionGodfathers()
    {
        $title = 'Крёстные Отцы';
        $page = null;
        return $this->render('godfathers', ['page' => $page, 'title' => $title]);
    }

    public function actionGodfathersMusic()
    {
        $title = 'Музыка';
        $page = $this->render('godfathers/music');
        return $this->render('godfathers', ['page' => $page, 'title' => $title]);
    }

    public function actionGodfathersPhoto()
    {
        $title = 'Фото';
        $page = $this->render('godfathers/photo');
        return $this->render('godfathers', ['page' => $page, 'title' => $title]);
    }

    public function actionGodfathersVideo()
    {
        $title = 'Видео';
        $page = $this->render('godfathers/video');
        return $this->render('godfathers', ['page' => $page, 'title' => $title]);
    }

    public function actionGodfathersStory()
    {
        $title = 'История';
        $page = $this->render('godfathers/story');
        return $this->render('godfathers', ['page' => $page, 'title' => $title]);
    }

    public function actionGodfathersPeople()
    {
        $title = 'Участники';
        $page = $this->render('godfathers/people');
        return $this->render('godfathers', ['page' => $page, 'title' => $title]);
    }
}