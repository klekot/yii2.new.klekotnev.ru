<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap\ActiveForm;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Igor Klekotnev">
    <link rel="icon" href="../../favicon.ico">
    <title><?= Html::encode($this->title) ?></title>
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
<!--    --><?php
//    NavBar::begin([
//        'brandLabel' => Yii::$app->name,
//        'brandUrl' => Yii::$app->homeUrl,
//        'options' => [
//            'class' => 'navbar-inverse navbar-fixed-top',
//        ],
//    ]);
//    $menuItems = [
//        ['label' => 'Home', 'url' => ['/site/index']],
//        ['label' => 'About', 'url' => ['/site/about']],
//        ['label' => 'Contact', 'url' => ['/site/contact']],
//    ];
//    if (Yii::$app->user->isGuest) {
//        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
//        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
//    } else {
//        $menuItems[] = '<li>'
//            . Html::beginForm(['/site/logout'], 'post')
//            . Html::submitButton(
//                'Logout (' . Yii::$app->user->identity->username . ')',
//                ['class' => 'btn btn-link logout']
//            )
//            . Html::endForm()
//            . '</li>';
//    }
//    echo Nav::widget([
//        'options' => ['class' => 'navbar-nav navbar-right'],
//        'items' => $menuItems,
//    ]);
//    NavBar::end();
//    ?>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="header-banner">
            <h1><a href="<?php echo Yii::$app->homeUrl; ?>"><?php echo 'Полное Собрание Сочинений Игоря Клекотнева'; ?></a></h1>
        </div>

        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Навигация</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Музыка <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/music/prehistory">Предыстория</a></li>
                            <li><a href="/music/godfathers">Крёстные Отцы</a></li>
                            <li><a href="/music/old-nectar">Старый Нектар</a></li>
                            <li><a href="/music/svetlo">CBETLO</a></li>
                            <li><a href="/music/pinstripe">PINSTRIPE</a></li>
                            <li><a href="/music/ten-thousands-mics">10000 Микрофонов</a></li>
                            <li><a href="/music/soloing">Сольное творчество</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Раритеры</li>
                            <li><a href="/music/nuages-combo">Nuages Combo</a></li>
                            <li><a href="/music/anything">Разное</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Литература <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/literature/prose">Проза</a></li>
                            <li><a href="/literature/poetry">Поэзия</a></li>
                            <li><a href="/literature/lyrics">Тексты песен</a></li>
                            <li><a href="/literature/drama">Драматургия</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Нигдея <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/nowhereland/history">История</a></li>
                            <li><a href="/nowhereland/maps">Картография</a></li>
                            <li><a href="/nowhereland/languages">Языки</a></li>
                            <li><a href="/nowhereland/folklore">Фольклор</a></li>
                        </ul>
                    </li>
                    <li><a href="/contact">Контакты</a></li>
                    <!--<li><a href="/thanks">Спасибо</a></li>-->
                </ul>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 search">
                            <?php $form = ActiveForm::begin([
                                'action'  => ['/search'],
                                'method'  => 'get',
                                'options' => ['class' => 'form-inline'],
                            ]);?>
                            <div class="input-group">
                                <input id="search" name="search" required value="" type="text" class="form-control input-md" placeholder="Поиск по сайту ...">
                                <span class="input-group-btn" style="margin-right: 40px;">
                                    <?=Html::submitButton('Найти', ['class' => 'btn btn-default'])?>
                                </span>
                            </div><!-- /input-group -->
                            <?php ActiveForm::end();?>
                        </div><!-- /.col-lg-5 -->
                    </div><!-- /.row -->
                </div>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
        <!-- It's for restoring dropdown menu functionality after ajax requests -->
        <script src="../../js/bootstrap-dropdown-menu.js"></script>
    </div>
</div>

<!--<footer class="footer">-->
<!--    <div class="container">-->
<!--        <p class="text-muted">&copy Игорь Клекотнев, 2008 - --><?php //echo date("Y"); ?><!--</p>-->
<!--    </div>-->
<!--</footer>-->

<?php $this->endBody() ?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
<?php $this->endPage() ?>
