<?php
namespace frontend\controllers\MusicTraits;

trait AnythingTrait
{
    public function actionAnything()
    {
        $title = 'Разное';
        $page = null;
        return $this->render('anything', ['page' => $page, 'title' => $title]);
    }

    public function actionAnythingMusic()
    {
        $title = 'Музыка';
        $path = 'music/anything-music';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';
        
        return $this->render('anything', ['page' => $page, 'title' => $title]);
    }

    public function actionAnythingPhoto()
    {
        $title = 'Фото';
        $path = 'music/anything-photo';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('anything', ['page' => $page, 'title' => $title]);
    }

    public function actionAnythingVideo()
    {
        $title = 'Видео';
        $path = 'music/anything-video';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('anything', ['page' => $page, 'title' => $title]);
    }

    public function actionAnythingStory()
    {
        $title = 'История';
        $path = 'music/anything-story';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('anything', ['page' => $page, 'title' => $title]);
    }

    public function actionAnythingPeople()
    {
        $title = 'Участники';
        $path = 'music/anything-people';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('anything', ['page' => $page, 'title' => $title]);
    }
}