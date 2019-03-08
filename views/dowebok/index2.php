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
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ITbook</title>
    <link href="<?= \app\common\CommonHelper::getAssetUrl('/layui/css/layui.css')?>" rel="stylesheet">
    <link href="<?= \app\common\CommonHelper::getAssetUrl('/css/index.css')?>" rel="stylesheet">
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
        <div class="layui-header ">
            <a class="layui-logo" href="">
                <h1>ITbook</h1>
                <label>做最好用的程序员工具站！</label>
            </a>
            <!-- 头部区域（可配合layui已有的水平导航） -->
            <ul class="layui-nav layui-layout-left" lay-filter="">
                <li class="layui-nav-item layui-this"><a href="">首页</a></li>
                <li class="layui-nav-item "><a href="">模板</a></li>
                <li class="layui-nav-item"><a href="">插件</a></li>
                <li class="layui-nav-item">
                    <a href="javascript:;">解决方案</a>
                    <dl class="layui-nav-child"> <!-- 二级菜单 -->
                        <dd><a href="">移动模块</a></dd>
                        <dd><a href="">后台模版</a></dd>
                        <dd><a href="">电商平台</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item"><a href="">社区</a></li>
            </ul>
            <ul class="layui-nav layui-layout-right">
                <li class="layui-nav-item">
                    <a href="javascript:;">
                        <img src="http://t.cn/RCzsdCq" class="layui-nav-img">
                        贤心
                    </a>
                    <dl class="layui-nav-child">
                        <dd><a href="">基本资料</a></dd>
                        <dd><a href="">安全设置</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item"><a href="">退了</a></li>
            </ul>
        </div>
</div>
<div class="layui-container">
    <div class="layui-row">
        <div class="layui-col-md9">
            <div class="layui-carousel" id="banner">
                <div carousel-item>
                    <div><img src="http://img1.dowebok.com/banner/halloween-1.jpg" alt=""></div>
                    <div><img src="http://img1.dowebok.com/banner/halloween-1.jpg" alt=""></div>
                    <div><img src="http://img1.dowebok.com/banner/halloween-1.jpg" alt=""></div>
                    <div><img src="http://img1.dowebok.com/banner/halloween-1.jpg" alt=""></div>
                    <div><img src="http://img1.dowebok.com/banner/halloween-1.jpg" alt=""></div>
                </div>
            </div>
        </div>
        <div class="layui-col-md3 submit-window" >
            <div class="layui-carousel" id="banner2">
                <div carousel-item>
                    <div><img src="http://ubmcmm.baidustatic.com/media/v1/0f000Dlb05hAkNmSYHhQ50.png" alt=""></div>
                    <div><img src="http://ubmcmm.baidustatic.com/media/v1/0f000Dlb05hAkNmSYHhQ50.png" alt=""></div>
                    <div><img src="http://ubmcmm.baidustatic.com/media/v1/0f000Dlb05hAkNmSYHhQ50.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>


<script src="<?= \app\common\CommonHelper::getAssetUrl('/layui/layui.js')?>"></script>
<script>
    //由于模块都一次性加载，因此不用执行 layui.use() 来加载对应模块，直接使用即可：
    ;!function(){
        var layer = layui.layer
            ,form = layui.form;
        //layer.msg('Hello World');
    }();

    layui.use('carousel', function(){
        var carousel = layui.carousel;
        //建造实例
        carousel.render({
            elem: '#banner'
            ,width: '100%' //设置容器宽度
            ,arrow: 'always' //始终显示箭头
            //,anim: 'updown' //切换动画方式
        });
    });
    layui.use('carousel', function(){
        var carousel = layui.carousel;
        //建造实例
        carousel.render({
            elem: '#banner2'
            ,width: '100%' //设置容器宽度
            ,arrow: 'always' //始终显示箭头
            //,anim: 'updown' //切换动画方式
        });
    });
</script>
</body>
</html>