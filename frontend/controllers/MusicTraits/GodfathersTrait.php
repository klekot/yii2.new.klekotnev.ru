<?php
namespace frontend\controllers\MusicTraits;

use common\models\PageContent;

trait GodfathersTrait
{
    public function actionGodfathers()
    {
        $title = 'Крёстные Отцы';
        $page = null;
        return $this->render('anything', ['page' => $page, 'title' => $title]);
    }

    public function actionGodfathersMusic()
    {
        $title = 'Музыка';
        $path = 'music/anything-music';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('anything', ['page' => $page, 'title' => $title]);
    }

    public function actionGodfathersPhoto()
    {
        $title = 'Фото';
        $path = 'music/anything-photo';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('anything', ['page' => $page, 'title' => $title]);
    }

    public function actionGodfathersVideo()
    {
        $title = 'Видео';
        $path = 'music/anything-video';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('anything', ['page' => $page, 'title' => $title]);
    }

    public function actionGodfathersStory()
    {
        $title = 'История';
        $path = 'music/anything-story';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('anything', ['page' => $page, 'title' => $title]);
    }

    public function actionGodfathersPeople()
    {
        $title = 'Участники';
        $path = 'music/anything-people';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('anything', ['page' => $page, 'title' => $title]);
    }
}