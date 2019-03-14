<?php

namespace app\controllers;

use app\models\MailForm;
use app\models\WebSource;
use Yii;
use yii\base\ErrorException;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\HttpException;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class WebController extends CommonController
{
    public $layout='web-detail';

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
     *  详情页
     * */

    public function actionDetail(){
        $model = new WebSource();
        $model->load(Yii::$app->request->get('id'), '');
        $checkRes = $model->validate();
        if (!$checkRes) {
            throw new HttpException(404);
        }
        return $this->render('detail');
    }




}
