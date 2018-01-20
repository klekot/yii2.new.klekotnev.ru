<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\Pjax;
$commonTitle = ['godfathers', 'Крёстные Отцы'];
$this->title = $title;
?>

<?php
$links = [
    'Музыка'    => 'music',
    'Фото'      => 'photo',
    'Видео'     => 'video',
    'История'   => 'story',
    'Участники' => 'people'
];
?>

<?php Pjax::begin(); ?>
    <div class="module-title-container">
        <h2 class="module-title"><?php echo $title == $commonTitle[1] ? $title : $commonTitle[1] . ' / '. $title; ?></h2>
    </div>
    <div class="module-menu-container">
        <ul>
            <?php foreach ($links as $key => $link): ?>
                <li class="module-menu" id="<?php echo $link; ?>_page">
                    <?php echo Html::a($key, ['music/'. $commonTitle[0] .'-'.$link], ['class' => 'btn btn-lg btn-success']) ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="module-content-container">
        <?php echo $page; ?>
    </div>
<?php Pjax::end(); ?>