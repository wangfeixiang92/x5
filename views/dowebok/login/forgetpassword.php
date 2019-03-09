<?php
use yii\helpers\Html;
 ?>

<div class="main">
	<div class="contact" style="padding: 20px; background-color: #fff;">
		<form id="wp_login_form" action="<?= Yii::$app->urlManager->createUrl(['login/forget-password'])?>"  method="post" class="form">
			<div class="form-head">
				<h2>忘记密码</h2>
				<p><a href="<?= Yii::$app->urlManager->createUrl(['login/index'])?>">前往登录</a></p>
			</div>
			<?php if(isset($error)):?>
            <p style="text-align: center;color: red">
                <?= $error?>
            </p>
            <?php endif;?>
			<div class="form-body">
				<p id="result" class="err-msg"></p>
                <div class="ui-input">
                    <input type="text" name="email" id="userEmail" placeholder="邮箱" value="<?= $model->email?$model->email:'';?>">
                    <input type="button" class="get-code-button" value="获取验证码" >
                </div>
                <div class="ui-input">
                    <input type="code" name="code" placeholder="请输入验证码" value="<?= $model->code?$model->code:'';?>">
                </div>
				<div class="ui-input">
					<input type="password" name="password" placeholder="密码" value="<?= $model->password?$model->password:'';?>">
				</div>
                <div class="ui-input">
                    <input type="password" name="rpassword" placeholder="确认密码"  value="<?= $model->rpassword?$model->rpassword:'';?>">
                </div>
                <input type="hidden" name='<?=Yii::$app->request->csrfParam?>' value="<?=Yii::$app->request->csrfToken?>"/>
				<button style="background-color: #21B384;" id="submitbtn" class="ui-button ui-button--primary">注册</button>
                <p style="text-align: center;"><input type="checkbox" class="check" checked="">同意<a class="modalLink" href="http://x5.com/?r=site/agreement" data-toggle="tooltip" data-html="true" data-placement="top" title="" style="color:#337ab7">《注册声明》《版权声明》</a></p>
			</div>
		</form>
	</div>
</div>
<script src="<?= \app\common\CommonHelper::getAssetUrl('/web/login/js/mailCompletion.js')?>"></script>
    <script>
        //初始化自动邮箱补全插件
        var mail = new hcMailCompletion('userEmail');
        mail.run();

            $('.get-code-button').click(function () {
               var userEmail = $('input[name="email"]').val();
               if(!userEmail){
                   alert('请输入邮箱地址');
                   return false;
               }
                $(this).css('background-color','#999');
                $(this).attr('disabled', true);
                var left_time = 60;
                var tt = window.setInterval(function(){
                    left_time = left_time - 1;
                    if (left_time <= 0) {
                        window.clearInterval(tt);
                        $('.get-code-button').val('获取验证码');
                        $('.get-code-button').css('background-color','#21B384');
                        $('.get-code-button').removeAttr('disabled');
                    }else {
                        $('.get-code-button').val('（' + left_time + '）秒后重新发送');
                    }
                }, 1000);
                $.ajax({
                    type: "POST",
                    url:  "/?r=login/get-email-code",
                    data: {
                        _csrf:$('meta[name="csrf-token"]').attr("content"),
                        userEmail:userEmail,
                        scene:'forgetpassword'
                    },
                    success: function(data){
                        var data =JSON.parse(data);
                        alert(data.msg);
                        return false;
                    }
                });
                return false;

            });
    </script>

