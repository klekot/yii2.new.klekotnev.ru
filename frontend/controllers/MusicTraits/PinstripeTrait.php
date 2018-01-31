<?php
namespace frontend\controllers\MusicTraits;

trait PinstripeTrait
{
    public function actionPinstripe()
    {
        $title = 'PINSTRIPE';
        $page = null;
        return $this->render('pinstripe', ['page' => $page, 'title' => $title]);
    }

    public function actionPinstripeMusic()
    {
        $title = 'Музыка';
        $path = 'music/pinstripe-music';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('pinstripe', ['page' => $page, 'title' => $title]);
    }

    public function actionPinstripePhoto()
    {
        $title = 'Фото';
        $path = 'music/pinstripe-photo';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('pinstripe', ['page' => $page, 'title' => $title]);
    }

    public function actionPinstripeVideo()
    {
        $title = 'Видео';
        $path = 'music/pinstripe-video';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('pinstripe', ['page' => $page, 'title' => $title]);
    }

    public function actionPinstripeStory()
    {
        $title = 'История';
        $path = 'music/pinstripe-story';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('pinstripe', ['page' => $page, 'title' => $title]);
    }

    public function actionPinstripePeople()
    {
        $title = 'Участники';
        $path = 'music/pinstripe-people';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('pinstripe', ['page' => $page, 'title' => $title]);
    }
}