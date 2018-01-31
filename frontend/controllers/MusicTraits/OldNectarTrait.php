<?php
namespace frontend\controllers\MusicTraits;

trait OldNectarTrait
{
    public function actionOldNectar()
    {
        $title = 'Старый Нектар';
        $page = null;
        return $this->render('old-nectar', ['page' => $page, 'title' => $title]);
    }

    public function actionOldNectarMusic()
    {
        $title = 'Музыка';
        $path = 'music/old-nectar-music';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('old-nectar', ['page' => $page, 'title' => $title]);
    }

    public function actionOldNectarPhoto()
    {
        $title = 'Фото';
        $path = 'music/old-nectar-photo';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('old-nectar', ['page' => $page, 'title' => $title]);
    }

    public function actionOldNectarVideo()
    {
        $title = 'Видео';
        $path = 'music/old-nectar-video';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('old-nectar', ['page' => $page, 'title' => $title]);
    }

    public function actionOldNectarStory()
    {
        $title = 'История';
        $path = 'music/old-nectar-story';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('old-nectar', ['page' => $page, 'title' => $title]);
    }

    public function actionOldNectarPeople()
    {
        $title = 'Участники';
        $path = 'music/old-nectar-people';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('old-nectar', ['page' => $page, 'title' => $title]);
    }
}