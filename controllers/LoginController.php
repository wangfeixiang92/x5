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

class LoginController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
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
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        $this->layout = false;
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionRegister()
    {
        $this->layout = false;
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        if(Yii::$app->request->isPost){
            $model = new LoginForm();
            $model->scenario='register';
            $model->load(Yii::$app->request->post(),'');
            $checkRes = $model->validate();
            if(!$checkRes){
                return $this->render('register', [
                    'error' => reset( $model->getErrors())[0],
                    'model'=>$model
                ]);
            }
            $model->register();
        }
        return $this->render('register',[
                    'model'=>$model
                ]);
    }




    /**
     *
     *
     *
     * */

    public function actionMaterial()
    {
        $this->layout = false;

        return $this->render('material');
    }

    public function actionDetail()
    {
        $this->layout = false;
        return $this->render('detail');
    }

    /**
     *  协议
     *
     * */
    public function actionAgreement()
    {
        $this->layout = false;
        return $this->render('agreement');
    }



    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
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

    /**
     *  获取邮箱验证码
     *
     * @param $userEmail
     * @return json
     * */
    public  function actionGetEmailCode(){
        $model = new MailForm();
        if(!Yii::$app->request->isAjax || !Yii::$app->request->isPost){
            return json_encode(['status' => 0,'msg'=>'请求方式非法']);
        }
        $model->load(Yii::$app->request->post(),'');
        $checkRes = $model->validate();
        if(!$checkRes){
            return json_encode(['status' => 0,'msg'=>reset( $model->getErrors())[0]]);
        }
        if(!$model->checkEmailLimit()){
            return json_encode(['status' => 0,'msg'=>'今日邮件发送数已经达到最大']);
        }
        $res = $model->sendMailCode();
        if(!$res){
            return json_encode(['status' => 0,'msg'=>'邮箱验证码发送失败']);
        }
        return json_encode(['status' => 1,'msg'=>'验证码发送成功，有效时间'.(Yii::$app->params['emailConfig']['expire']/60).'分钟']);
    }



    public function actionPhpinfo(){
        echo phpinfo();die;
    }
}
