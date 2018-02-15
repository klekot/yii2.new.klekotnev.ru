<?php
namespace backend\controllers;

use common\models\File;
use common\models\PageContent;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use yii\web\UploadedFile;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'files-upload'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionFilesUpload()
    {
        $model = new File();
        $uploads = Yii::$app->basePath . '/uploads/';
        Yii::$app->params['uploadPath'] = $uploads;
        if ($model->load(Yii::$app->request->post())) {
            $image = UploadedFile::getInstance($model, 'name');
            $parts = (explode(".", $image->name));
            $ext = end($parts);
            $model->name = time().$model->id.".{$ext}";
            $path = Yii::$app->params['uploadPath'] . $model->name;

            if($model->save()){
                $image->saveAs($path);

                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {

            return $this->render('create', [
                'model' => $model,

            ]);
        }
    }
}
