<style>
    .layui-itbook .layui-layer-btn0{
        background-color: #323436;
        border-color: #323436;
    }
</style>
<div class="container">
    <form class="form-horizontal submit-from" style="margin-bottom: 50px"  action="<?= Yii::$app->urlManager->createUrl(['login/register'])?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label  class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <h2 class="form-signin-heading submit-title">发布网站模板</h2>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <p class="submit-agreement">
                    <label class="submit-label " onclick="explain('submit')">发布说明</label>
                    <label class="submit-label" onclick="explain('reward')">奖励说明</label>
                    <label class="submit-label" onclick="explain('punishment')">惩罚说明</label>
                </p>
                <p class="center"><i class="fa fa-exclamation-circle"></i>提示：上传文件为zip或rar格式，请确保有演示文件，并能正常访问代码无错误！</p>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">标题</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="title" placeholder="请输入模板标题">
            </div>
        </div>
        <div class="form-group">
            <label  class="col-sm-2 control-label">简介</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="describe" placeholder="请输入模板的简介">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">标签</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="keyword" placeholder="插件关键字,请用逗号隔开。例如商城模板，商务模板，黑色大气。（写的越全越容易被用户找到下载哦！）">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">IE兼容</label>
            <div class="col-sm-4">
                <select name="" class="form-control" id="">
                    <option value="8">8</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                </select>
            </div>
            <label class="col-sm-2 control-label">价格</label>
            <div class="col-sm-4">
                <input type="text" class="form-control"  name="price" placeholder="下载所需IT币(用户下载您将获得对应IT币)" >
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">官网地址</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="oldUrl" placeholder="官网地址，没用可以不填">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">上传文件</label>
            <div class="col-sm-10">
                <input type="file" name="resources" accept="application/x-zip-compressed,application/x-rar-compressed">
                <p class="help-block">格式为 zip, rar 文件最大不能超过15mb</p>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">使用方法 </label>
            <div class="col-sm-10">
                <textarea name="manual" id="manual" cols="30" rows="10" class="form-control" placeholder="提供插件使用方法介绍等信息(奖励2倍以上IT币) "></textarea>
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default btn-block black" >提交</button>
            </div>
        </div>
    </form>
</div> <!-- /container -->
<script>

    $(document).ready(function(){ CKEDITOR.replace('manual')});



    //询问框
    function explain(label){
        if(label == 'submit') {
            var title='发布说明';
            var content = '<p>第1条：上传文件为zip或rar格式，请确保有演示文件，并能正常访问代码无错误</p><p>第2条：如果有插件官网地址，请填写，如果没有，可不填</p><p>第3条：如果非原创，请选择标记非原创。如果是原创请选择标记原创，原创内容会获得额外IT币奖励</p><p>第4条：我们鼓励原创，原创内容会获得额外IT币奖励</p>';
        }else if(label == 'reward'){
            var title='奖励说明';
            var content = '<p>第1条：奖励分为基础奖励和额外奖励。基础奖励实时发放，额外奖励审核通过后发放。</p><p>第2条：基础奖励为5IT币*用户奖励倍数（个人中心可查看自己的奖励倍数，基础为1，等级越高，奖励倍数越高）</p><p>第3条：额外奖励在审核通过后会发放到用户账号，到账会有邮件和消息提醒，注意查收。</p><p>第4条：每个插件的IT币收益归作者所有，但是存在最高收益，最高收益是插件单次IT币*100</p><p>第5条：原创插件，网站鼓励作者申请插件买断，买断的插件，我们会发放现金币，现金币则可以用来购买IT币，亦可以提现</p>';
        }else if(label == 'punishment'){
            var title='惩罚说明';
            var content = '<p>第1条：网站严厉打击套取基础奖励的行为。经审核发现，会扣取用户的奖励倍数（-0.1/每次）,当减为0后,用户发布任何插件或者参加任何活动将得不到奖励</p><p>第2条：网站严厉打击套取原创额外奖励的行为，非原创请勿标记原创，套取额外奖励，一经发现，会扣取用户的奖励倍数（-0.2/每次）,当减为0后,用户发布任何插件或者参加任何活动将得不到奖励。同时因为虚假原创引起的版权问题，由发布者个人承担</p><p>第3条：惩罚结果会通过邮件，个人中心消息等渠道发送给作者，如有疑惑，可联系客服申诉。</p>';
        }
        layer.open({
            type: 1,
            skin: 'layui-itbook', //样式类名
            shadeClose:false,
            title:title,
            area: ['500px', '500px'], //宽高
            content: content,
            btn:'我了解了',
            btnAlign: 'c'
        });
    }

</script>


