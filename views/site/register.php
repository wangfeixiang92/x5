<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<title>登录_dowebok</title>
<link rel="stylesheet" href="/web/login/css/style.css">
<style>
/* ui */
.ui-input { position: relative; padding: 15px 0; border-bottom: 1px solid #dfe6e5; font-size: 0; }
.ui-input input { width: 100%; height: 30px; border: 0; font-size: 14px; outline: none; }

.ui-button { height: 40px; border: 0; font-size: 14px; outline: none; cursor: pointer; }
.ui-button--primary { color: #fff; background-color: #a6aaad; }
.ui-button--success { color: #fff; background-color: #22d18e; }

/* page */
.form { width: 460px; margin: 0 auto; padding-top: 70px; }
.form .captcha { height: 30px; vertical-align: top; cursor: pointer; }
.form a { color: #7b7f81; }
.form a:hover { color: #666; }

.form-head { padding: 20px 0; text-align: center; }
.form-head h2 { font-size: 24px; font-weight: 400; }
.form-head p { margin-top: 12px; color: #7b7f81; }
.form-head p a { text-decoration: underline; }

.form-body { padding: 20px 40px; color: #222; }
.form-body .err-msg { text-align: center; color: #fc5c5c; }

.forget-password { margin-top: 10px; text-align: right; }
.form .narrow-input input { width: 290px; margin-right: 10px; }
.form .warn-msg { margin-bottom: 20px; }
.form .err-msg + .warn-msg { margin-top: 12px; }
.form .sms-button { display: inline-block; width: 80px; font-
	size: 14px; text-align: right; color: #22d18e; }
.form .sms-button:hover { color: #56e9b2; }
.form .form-notice { color: #22d18e; }
.form .ui-input.focus { border-bottom-color: #22d18e; }
.form .ui-button { width: 100%; margin: 40px 0; }
</style>
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
				<h2>登录</h2>
				<p>还没有账号？<a href="/register">立即注册</a></p>
			</div>
			<div class="form-body">
				<p id="result" class="err-msg"></p>
				<div class="ui-input">
					<input type="text" name="username" placeholder="用户名">
				</div>
                <div class="ui-input">
                    <input type="text" name="username" placeholder="邮箱">
                     <div class="btn btn-default">获取验证码</div>
                </div>
				<div class="ui-input">
					<input type="password" name="password" placeholder="密码">
				</div>
                <div class="ui-input">
                    <input type="password" name="password" placeholder="确认密码">
                </div>
				<button id="submitbtn" class="ui-button ui-button--primary">注册</button>
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
				console.log(msg);
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
</div>
</body>
</html>
