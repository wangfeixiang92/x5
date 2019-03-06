<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="zh-CN">
<head>
    <?= Html::csrfMetaTags() ?>
    <meta charset="utf-8">
    <title><?= isset($this->params['title'])?$this->params['title']:'ITbook官网';?></title>
        <link rel="stylesheet" href="<?= \app\common\CommonHelper::getAssetUrl('/web/login/css/style.css')?>">
    <?php if(Yii::$app->controller->action->id== 'index'):?>
        <link rel="stylesheet" href="<?= \app\common\CommonHelper::getAssetUrl('/web/login/css/login.css')?>">
    <?php endif;?>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="<?= \app\common\CommonHelper::getAssetUrl('/web/login/js/html5shiv.js')?>"></script>
    <![endif]-->
    <script src="<?= \app\common\CommonHelper::getAssetUrl('/web/login/js/jquery.min.js')?>"></script>
    <script src="<?= \app\common\CommonHelper::getAssetUrl('/web/three/layer/layer.js')?>"></script>

    <style>
        .form{
            width: 80%;
        }
        .submit-label{
            text-decoration: underline;
            cursor: pointer;
            color: #C62F2F;
        }
        .layui-itbook .layui-layer-title{
            background:#323436;
            color:#fff;
            text-align: center;
            padding: 0 ;
            font-size: 15px;
        }
        .layui-itbook .layui-layer-btn0{
            background: #21B384;
        }
        .layui-itbook .layui-layer-content p{
            margin-left: 20px;
            margin-top: 20px;
            font-size: 15px;
        }

    </style>
</head>

<body>
<header class="hd">
    <h1><a href="<?=\yii\helpers\Url::to(['site/index'])?>" title="dowebok">ITbook</a></h1>
    <ul class="nav">
        <li><a href="<?=\yii\helpers\Url::to(['site/index'])?>" title="首页">首页</a></li>
        <li><a href="<?=\yii\helpers\Url::to(['site/material'])?>" title="代码">代码</a></li>
        <li><a href="<?=\yii\helpers\Url::to(['site/material'])?>" title="素材">素材</a></li>
        <li><a href="<?=\yii\helpers\Url::to(['site/material'])?>" title="模板">模板</a></li>
        <li><a href="<?=\yii\helpers\Url::to(['site/agreement'])?>" title="联系">联系</a></li>
    </ul>
    <div class="search">
        <form action="">
            <input class="key" type="text" value="输入关键词"> <input class="go" type="submit" value="搜索">
        </form>
        <a class="login" href="">登录</a> <a class="reg" href="">注册</a>
    </div>
</header>
<?php $this->beginBody() ?>
<?= $content ?>
<?php $this->endBody() ?>
<footer class="ft">
    <p>&copy; CopyRight 2019 itbook.com <a href="http://www.miitbeian.gov.cn/" target="_blank">粤ICP备14034220号-1</a></p>
</footer>
<script src="<?= \app\common\CommonHelper::getAssetUrl('/web/login/js/jquery.min.js')?>"></script>
<script src="<?= \app\common\CommonHelper::getAssetUrl('/web/login/js/swiper.min.js')?>"></script>
<div style="display:none">
    <script src="<?= \app\common\CommonHelper::getAssetUrl('/web/login/js/z_stat.php')?>"></script>
    <script src="<?= \app\common\CommonHelper::getAssetUrl('/web/login/js/hm.js')?>"></script>
</div>
</body>
</html>
<?php $this->endPage() ?>
