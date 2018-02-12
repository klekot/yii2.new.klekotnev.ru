<?php
namespace frontend\controllers\MusicTraits;

use common\models\PageContent;

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
        $path = 'music/godfathers-music';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('godfathers', ['page' => $page, 'title' => $title]);
    }

    public function actionGodfathersPhoto()
    {
        $title = 'Фото';
        $path = 'music/godfathers-photo';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('godfathers', ['page' => $page, 'title' => $title]);
    }

    public function actionGodfathersVideo()
    {
        $title = 'Видео';
        $path = 'music/godfathers-video';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('godfathers', ['page' => $page, 'title' => $title]);
    }

    public function actionGodfathersStory()
    {
        $title = 'История';
        $path = 'music/godfathers-story';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('godfathers', ['page' => $page, 'title' => $title]);
    }

    public function actionGodfathersPeople()
    {
        $title = 'Участники';
        $path = 'music/godfathers-people';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('godfathers', ['page' => $page, 'title' => $title]);
    }
}