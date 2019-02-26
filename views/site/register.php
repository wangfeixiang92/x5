<?php
use yii\helpers\Html;
use frontend\common\CommonHelper;
?>
<!doctype html>
<html lang="zh-CN">
<head>
    <?= Html::csrfMetaTags() ?>
<meta charset="utf-8">
<title>登录_dowebok</title>
<link rel="stylesheet" href="/web/login/css/style.css">
<!--[if lt IE 9]>
<script src="/web/login/js/html5shiv.js"></script>
<![endif]-->
<script src="/web/login/js/jquery.min.js"></script>
</head>

<body>
<header class="hd">
	<h1><a href="http://www.dowebok.com/" title="dowebok">dowebok</a></h1>
	<ul class="nav">
		<li><a href="http://www.dowebok.com/" title="首页">首页</a></li>
		<li><a href="http://www.dowebok.com/code" title="代码">代码</a></li>
		<li><a href="http://www.dowebok.com/material" title="素材">素材</a></li>
		<li><a href="http://www.dowebok.com/template" title="模板">模板</a></li>
		<li><a href="http://www.dowebok.com/contact" title="联系">联系</a></li>
	</ul>
	<div class="search">
		<form action="">
			<input class="key" type="text" value="输入关键词"> <input class="go" type="submit" value="搜索">
		</form>
		<a class="login" href="">登录</a> <a class="reg" href="">注册</a>
	</div>
</header>
<div class="main">
	<div class="contact" style="padding: 20px; background-color: #fff;">
		<form id="wp_login_form" action="" class="form">
			<div class="form-head">
				<h2>注册</h2>
				<p>已有账号？<a href="http://x5.com/?r=site/login">前往登录</a></p>
			</div>
			<div class="form-body">
				<p id="result" class="err-msg"></p>
				<div class="ui-input">
					<input type="text" name="username" placeholder="用户名">
				</div>
                <div class="ui-input">
                    <input type="text" name="email" placeholder="邮箱">
                    <input type="button" class="get-code-button" value="获取验证码">
                </div>
                <div class="ui-input">
                    <input type="code" name="code" placeholder="请输入验证码">
                </div>
				<div class="ui-input">
					<input type="password" name="password" placeholder="密码">
				</div>
                <div class="ui-input">
                    <input type="password" name="spassword" placeholder="确认密码">
                </div>
				<button id="submitbtn" class="ui-button ui-button--primary">注册</button>
                <p style="text-align: center;"><input type="checkbox" class="check" checked="">同意<a class="modalLink" href="http://x5.com/?r=site/agreement" data-toggle="tooltip" data-html="true" data-placement="top" title="" style="color:#337ab7">《注册声明》《版权声明》</a></p>
			</div>
		</form>
		<script type="text/javascript">					
		$("#submitbtn").click(function() {
		$('#result').html('<img src="img/loader.gif" class="loader" />').fadeIn();
		var input_data = $('#wp_login_form').serialize();
		$.ajax({
			type: "POST",
			url:  "http://www.dowebok.com/login",
			data: input_data,
			success: function(msg){
				$('.loader').remove();
				$('#result').html(msg);
			}
		});
		return false;

		});
		</script>
	</div>
	
</div>
<footer class="ft">
	<p>&copy; CopyRight 2016 dowebok.com <a href="http://www.miitbeian.gov.cn/" target="_blank">粤ICP备14034220号-1</a></p>
</footer>

<script src="/web/login/js/jquery.min.js"></script>
<script src="/web/login/js/swiper.min.js"></script>
<script src="/web/login/js/script.js"></script>

<div style="display:none">
<script src="/web/login/js/z_stat.php"></script>
<script src="/web/login/js/hm.js"></script>
    <script>
            $('.get-code-button').click(function () {
            //     $(this).css('background-color','#999');
            //     $(this).unbind('click');
            //     $(this).val('已发送');
            //     setTimeout(function () {
            //         $('.get-code-button').css('background-color','#21B384');
            //         $('.get-code-button').bind('click');
            //         $('.get-code-button').val('获取验证码');
            //     },500);
            // });
               var userEmail = $('input[name="email"]').val();
               // if(!userEmail){
               //     alert('请输入邮箱地址');
               //     return false;
               // }
                $.ajax({
                    type: "POST",
                    url:  "/?r=site/get-email-code",
                    data: {
                        _csrf:$('meta[name="csrf-token"]').attr("content"),
                        userEmail:userEmail,
                        scene:'register'
                    },
                    success: function(msg){

                    }
                });
                return false;

            });

    </script>
</div>
</body>
</html>
