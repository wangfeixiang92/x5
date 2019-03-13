<?php

namespace app\controllers;

use app\models\MailForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    public $layout='index';
    public function init()
    {
        $seo['title'] ='jQuery插件库-收集最全最新最好的jQuery插件';
        $seo['keywords'] ='jQuery,jQuery特效,jQuery ui,jQuery插件,jQuery 教程,css3,网页特效,JS特效';
        $seo['description'] ='本站致力于收集jQuery插件和提供各种jQuery特效的详细使用方法,在线预览，jQuery插件下载及教程';
        Yii::$app->view->params['seo']=$seo;
        parent::init(); // TODO: Change the autogenerated stub
    }

    /**
     * {@inheritdoc}
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
     *
     *
     *
     * */

    public function actionMaterial()
    {

        return $this->render('material');
    }

    public function actionDetail()
    {
        return $this->render('detail');
    }

    /**
     *  协议
     *
     * */
    public function actionAgreement()
    {
        return $this->render('agreement');
    }




    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }



    public function actionPhpinfo(){
        echo phpinfo();die;
    }
}
