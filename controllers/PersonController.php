<?php

namespace app\controllers;

use app\models\MailForm;
use app\models\WebSource;
use Yii;
use yii\base\ErrorException;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\HttpException;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class PersonController extends CommonController
{
    public $layout='person';

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }





}
