<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    <link href="/css/index.css" rel="stylesheet">

    <!-- HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 -->
    <!-- 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Respond.js 不起作用 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header id="header">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">ITbook</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">ITbook</iT></a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">首页</a></li>
                    <li><a href="#about">网站模板</a></li>
                    <li><a href="#contact">素材插件</a></li>
                    <li><a href="#contact">工具类库</a></li>
                    <li><a href="#contact">IT社区</a></li>
                    <li><a href="#contact">关于我们</a></li>
                </ul>
                <div class="pull-right">
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="搜索...">
                        </div>
                        <button type="submit" class="btn btn-default">搜索</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#">登录</a></li>
                        <li><a href="#">注册</a></li>
                    </ul>
                </div>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</header>
<section id="banner" class="container">
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="http://img1.dowebok.com/banner/1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="http://img1.dowebok.com/banner/1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="http://img1.dowebok.com/banner/1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="http://img1.dowebok.com/banner/1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="http://img1.dowebok.com/banner/1.jpg" alt=""></div>
            </div>
            <!-- 如果需要分页器 -->
            <div class="swiper-pagination"></div>

            <!-- 如果需要导航按钮 -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- 如果需要滚动条 -->
<!--            <div class="swiper-scrollbar"></div>-->
        </div>

    </div>
</section>
<section id="submit-navber" class="container top20per">
    <ol class="breadcrumb">
        <li><a href="#">首页</a></li>
        <li class="active">发布</li>
        <label class="label label-danger pull-right"><i class="glyphicon glyphicon-exclamation-sign"></i>公告：3月8日-3月31日发布，IT币奖励是平时10倍！！！</>
    </ol>
    <div class="row">
        <div class="col-md-4">
             <h5>发布网站模板</h5>
            <p>发布完整，可运行的网站前端页面代码（html，js,css 等），包括PC端，移动端（例如：公司官网，个人博客等的html代码）</p>
            <a href="" class="center-block">前往发布>>></a>
        </div>
        <div class="col-md-4">
            <h5>发布素材插件</h5>
            <p>发布完整，可运行，无错误的html,js,css 插件代码，包括PC端，移动端（例如：个人写的加载框，css3特效，js小活动的代码）</p>
            <a href="" class="center-block">前往发布>>></a>
        </div>
        <div class="col-md-4">
            <h5>发布工具类库</h5>
            <p>发布程序员常用的工具类库，（例如最新版本的编辑器，各种编程语言的手册等）</p>
            <br>
            <a href="" class="center-block">前往发布>>></a>
        </div>
    </div>
</section>
<section class="container top20per good-container">
    <ul class="list-inline template-index-nav">
        <li class="active">网站模板</li>
        <li><a href="">PC模板</a></li>
        <li><a href="">移动模板</a></li>
        <li><a href="">商务</a></li>
        <li><a href="">简洁</a></li>
        <li><a href="">自适应</a></li>
        <li class="pull-right look-more"><a >查看更多>>></a></li>
    </ul>
    <div class="row goods-list">
        <div class="col-lg-3 bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">东方不败</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 left4per bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">2018-11-11</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 left4per bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">2018-11-11</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 left4per bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">2018-11-11</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">东方不败</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 left4per bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">2018-11-11</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 left4per bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">2018-11-11</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 left4per bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">2018-11-11</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container top20per good-container">
    <ul class="list-inline template-index-nav">
        <li class="active">网站模板</li>
        <li><a href="">PC模板</a></li>
        <li><a href="">移动模板</a></li>
        <li><a href="">商务</a></li>
        <li><a href="">简洁</a></li>
        <li><a href="">自适应</a></li>
        <li class="pull-right look-more"><a >查看更多>>></a></li>
    </ul>
    <div class="row goods-list">
        <div class="col-lg-3 bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">东方不败</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 left4per bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">2018-11-11</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 left4per bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">2018-11-11</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 left4per bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">2018-11-11</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">东方不败</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 left4per bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">2018-11-11</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 left4per bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">2018-11-11</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 left4per bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">2018-11-11</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container top20per good-container">
    <ul class="list-inline template-index-nav">
        <li class="active">网站模板</li>
        <li><a href="">PC模板</a></li>
        <li><a href="">移动模板</a></li>
        <li><a href="">商务</a></li>
        <li><a href="">简洁</a></li>
        <li><a href="">自适应</a></li>
        <li class="pull-right look-more"><a >查看更多>>></a></li>
    </ul>
    <div class="row goods-list">
        <div class="col-lg-3 bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">东方不败</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 left4per bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">2018-11-11</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 left4per bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">2018-11-11</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 left4per bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">2018-11-11</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">东方不败</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 left4per bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">2018-11-11</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 left4per bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">2018-11-11</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 left4per bottom20per top10per">
            <a href="http://www.dowebok.com/2110.html" title="圆形动态时钟"><img src="/web/index/img/2110s.png" alt="圆形动态时钟"></a>
            <h5><a href="http://www.dowebok.com/2110.html" title="圆形动态时钟">圆形动态时钟</a></h5>
            <div class="good-info">
                <time title="日期" class="pull-left">2018-11-11</time>
                <div class="pull-right">
                    <span class="view"><span title="点击">点击(2,940)</span> <span title="下载">下载(87)</span></span>
                </div>
            </div>
        </div>
    </div>
</section>
<footer id="footer" class="footer">
    <div class="row footer-bottom">
        <ul class="list-inline text-center">
         <li>© CopyRight 2019 itbook.com </li>
        </ul>
    </div>
</footer>


<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
<!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
<script>
    var mySwiper = new Swiper ('.swiper-container', {
        direction: 'horizontal', // 横向
        loop: true, // 循环模式选项
        // 如果需要分页器
        pagination: {
            el: '.swiper-pagination',
            clickable :true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '">' + (index + 1) + '</span>';
            },
        },
        autoplay: {
            delay: 3000,
            stopOnLastSlide: false,
            disableOnInteraction: true,
        },

        // 如果需要前进后退按钮
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // 如果需要滚动条
        // scrollbar: {
        //     el: '.swiper-scrollbar',
        // },
    })
</script>
</body>
</html>