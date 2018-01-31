<?php
namespace frontend\controllers\MusicTraits;

trait TenThousandsMicsTrait
{
    public function actionTenThousandsMics()
    {
        $title = '10000 Микрофонов';
        $page = null;
        return $this->render('ten-thousands-mics', ['page' => $page, 'title' => $title]);
    }

    public function actionTenThousandsMicsMusic()
    {
        $title = 'Музыка';
        $path = 'music/ten-thousands-mics-music';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('ten-thousands-mics', ['page' => $page, 'title' => $title]);
    }

    public function actionTenThousandsMicsPhoto()
    {
        $title = 'Фото';
        $path = 'music/ten-thousands-mics-photo';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('ten-thousands-mics', ['page' => $page, 'title' => $title]);
    }

    public function actionTenThousandsMicsVideo()
    {
        $title = 'Видео';
        $path = 'music/ten-thousands-mics-video';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('ten-thousands-mics', ['page' => $page, 'title' => $title]);
    }

    public function actionTenThousandsMicsStory()
    {
        $title = 'История';
        $path = 'music/ten-thousands-mics-story';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('ten-thousands-mics', ['page' => $page, 'title' => $title]);
    }

    public function actionTenThousandsMicsPeople()
    {
        $title = 'Участники';
        $path = 'music/ten-thousands-mics-people';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('ten-thousands-mics', ['page' => $page, 'title' => $title]);
    }
}