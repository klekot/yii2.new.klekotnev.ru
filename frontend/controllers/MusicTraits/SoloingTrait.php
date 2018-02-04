<?php
namespace frontend\controllers\MusicTraits;

use common\models\PageContent;

trait SoloingTrait
{
    public function actionSoloing()
    {
        $title = 'Сольное творчество';
        $page = null;
        return $this->render('soloing', ['page' => $page, 'title' => $title]);
    }

    public function actionSoloingMusic()
    {
        $title = 'Музыка';
        $path = 'music/soloing-music';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('soloing', ['page' => $page, 'title' => $title]);
    }

    public function actionSoloingPhoto()
    {
        $title = 'Фото';
        $path = 'music/soloing-photo';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('soloing', ['page' => $page, 'title' => $title]);
    }

    public function actionSoloingVideo()
    {
        $title = 'Видео';
        $path = 'music/soloing-video';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('soloing', ['page' => $page, 'title' => $title]);
    }

    public function actionSoloingStory()
    {
        $title = 'История';
        $path = 'music/soloing-story';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('soloing', ['page' => $page, 'title' => $title]);
    }

    public function actionSoloingPeople()
    {
        $title = 'Участники';
        $path = 'music/soloing-people';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('soloing', ['page' => $page, 'title' => $title]);
    }
}