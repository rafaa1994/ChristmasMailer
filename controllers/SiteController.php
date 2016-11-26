<?php

namespace app\controllers;

use app\models\Draw;
use Yii;
use yii\web\Controller;

class SiteController extends Controller
{

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
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
     * Draw mailers
     *
     * @return string
     */
    public function actionDraw()
    {
        $draw = new Draw();
        if ($draw->draw()) {
            Yii::$app->session->setFlash('success', 'Draw is done.');
        } else {
            Yii::$app->session->setFlash('danger', 'Draw is fail.');
        }
        return $this->redirect(['index']);
    }

}
