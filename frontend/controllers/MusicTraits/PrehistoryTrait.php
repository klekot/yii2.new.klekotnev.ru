<?php
namespace frontend\controllers\MusicTraits;

use common\models\PageContent;

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
        $path = 'music/prehistory-music';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('prehistory', ['page' => $page, 'title' => $title]);
    }

    public function actionPrehistoryPhoto()
    {
        $title = 'Фото';
        $path = 'music/prehistory-photo';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('prehistory', ['page' => $page, 'title' => $title]);
    }

    public function actionPrehistoryVideo()
    {
        $title = 'Видео';
        $path = 'music/prehistory-video';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('prehistory', ['page' => $page, 'title' => $title]);
    }

    public function actionPrehistoryStory()
    {
        $title = 'История';
        $path = 'music/prehistory-story';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('prehistory', ['page' => $page, 'title' => $title]);
    }

    public function actionPrehistoryPeople()
    {
        $title = 'Участники';
        $path = 'music/prehistory-people';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('prehistory', ['page' => $page, 'title' => $title]);
    }
}