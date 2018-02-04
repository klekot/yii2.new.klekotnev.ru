<?php
namespace frontend\controllers\MusicTraits;

use common\models\PageContent;

trait SvetloTrait
{
    public function actionSvetlo()
    {
        $title = 'CBETLO';
        $page = null;
        return $this->render('svetlo', ['page' => $page, 'title' => $title]);
    }

    public function actionSvetloMusic()
    {
        $title = 'Музыка';
        $path = 'music/svetlo-music';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('svetlo', ['page' => $page, 'title' => $title]);
    }

    public function actionSvetloPhoto()
    {
        $title = 'Фото';
        $path = 'music/svetlo-photo';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('svetlo', ['page' => $page, 'title' => $title]);
    }

    public function actionSvetloVideo()
    {
        $title = 'Видео';
        $path = 'music/svetlo-video';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('svetlo', ['page' => $page, 'title' => $title]);
    }

    public function actionSvetloStory()
    {
        $title = 'История';
        $path = 'music/svetlo-story';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('svetlo', ['page' => $page, 'title' => $title]);
    }

    public function actionSvetloPeople()
    {
        $title = 'Участники';
        $path = 'music/svetlo-people';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('svetlo', ['page' => $page, 'title' => $title]);
    }
}