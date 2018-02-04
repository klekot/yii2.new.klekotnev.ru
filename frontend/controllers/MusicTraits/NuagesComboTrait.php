<?php
namespace frontend\controllers\MusicTraits;

use common\models\PageContent;

trait NuagesComboTrait
{
    public function actionNuagesCombo()
    {
        $title = 'Nuages Combo';
        $page = null;
        return $this->render('nuages-combo', ['page' => $page, 'title' => $title]);
    }

    public function actionNuagesComboMusic()
    {
        $title = 'Музыка';
        $path = 'music/nuages-combo-music';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('nuages-combo', ['page' => $page, 'title' => $title]);
    }

    public function actionNuagesComboPhoto()
    {
        $title = 'Фото';
        $path = 'music/nuages-combo-photo';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('nuages-combo', ['page' => $page, 'title' => $title]);
    }

    public function actionNuagesComboVideo()
    {
        $title = 'Видео';
        $path = 'music/nuages-combo-video';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('nuages-combo', ['page' => $page, 'title' => $title]);
    }

    public function actionNuagesComboStory()
    {
        $title = 'История';
        $path = 'music/nuages-combo-story';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('nuages-combo', ['page' => $page, 'title' => $title]);
    }

    public function actionNuagesComboPeople()
    {
        $title = 'Участники';
        $path = 'music/nuages-combo-people';
        $pageContent = PageContent::find()->where(['path' => $path])->one();
        $page = $pageContent ? $pageContent->content : '';

        return $this->render('nuages-combo', ['page' => $page, 'title' => $title]);
    }
}