<?php

namespace app\models;

use app\common\DbEverDayDataLog;
use app\common\DbLevelName;
use app\common\DbUser;
use app\common\DbUserLoginLog;
use Codeception\Module\Db;
use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class LoginForm extends Model
{
    public $uId;
    public $userName;
    public $password;
    public $cName;
    public $phone;
    public $email;
    public $level;
    public $levelName;
    public $experience;
    public $ITmoney;
    public $money;
    public $isDelete;
    public $registerTime;
    public $updateTime;
    public $logoutTime;
    public $loginTime;
    public $isSystem;
    public $rememberMe = true;
    private $_user = false;
    public $code;
    public $rpassword;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            ['userName', 'filter', 'filter' => 'trim'],
            ['userName', 'required', 'message' => '用户名不可以为空', 'on' =>'register'],
            ['userName', 'string', 'min' => 2, 'max' => 30],
            ['userName', 'validateUserName','on' =>'register'],
            ['userName', 'validateBlackUserName','message'=>'账号异常，请联系客服'],
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required', 'message' => '邮箱不可以为空'],
            ['email', 'string', 'max' => 100],
            ['email', 'email','message'=>'请填写正确格式的邮箱'],
            ['email', 'validateEmail', 'on' =>'register'],
            ['email', 'validateBlackEmail','message'=>'账号异常，请联系客服'],
            ['password', 'required', 'message' => '密码不可以为空'],
            ['password', 'string', 'min' => 6, 'tooShort' => '密码至少填写6位'],
            ['password', 'validatePassword', 'on' =>'login'],
            ['code',  'string', 'length'=>4, 'notEqual' => '验证码不合法'],
            ['code', 'validateCode', 'on' =>'register'],
            ['rpassword', 'validaterPassword','message'=>'确认密码跟密码不一致', 'on' =>'register'],
            [['loginTime','updateTime'],'default','value'=>time()],
            ['registerTime','default','value'=>date('Y-m-d H:i:s',time())],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect username or password.');
            }
        }
    }


    /**
     *  验证确认密码
     *
     * @password
     * @rpassword
     * @return msg
     * */
    public function validateRpassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            if($this->password != $this->rpassword){
                $this->addError($attribute, '确认密码跟密码不一致.');
            }
        }
    }


    /**
     *  验证用户名
     *
     * @email
     * @return msg
     * */
    public function validateUserName($attribute, $params)
    {
        if (!$this->hasErrors()) {
            if(  User::findByUsername($this->userName)){
                $this->addError($attribute, '用户名已经存在.');
            }
        }
    }


    /**
     *  验证黑名单
     *
     * @email
     * @return msg
     * */
    public function validateBlackUserName($attribute, $params)
    {
        if (!$this->hasErrors()) {
            if(  User::findBlackByUsername($this->userName)){
                $this->addError($attribute, '账号异常，请联系客服.');
            }
        }
    }





    /**
     *  验证邮箱
     *
     * @email
     * @return msg
     * */
    public function validateEmail($attribute, $params)
    {
        if (!$this->hasErrors()) {
            if(User::findByEmail($this->email)){
                $this->addError($attribute, '邮箱已经被注册.');
            }
        }
    }

    /**
     *  验证黑名单邮箱
     *
     * @email
     * @return msg
     * */
    public function validateBlackEmail($attribute, $params)
    {
        if (!$this->hasErrors()) {
            if(User::findBlackByEmail($this->email)){
                $this->addError($attribute, '账号异常，请联系客服.');
            }
        }
    }


    /**
     *  验证邮箱验证码
     *
     * @email
     * @return msg
     * */
    public function validateCode($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $mail = new MailForm();
            $mail->userCode=$this->code;
            $mail->userEmail=$this->email;
            $mail->scene = $this->scenario;
            if(!$mail->checkEmailCode()){
                $this->addError($attribute, '验证码错误.');
            }
        }
    }




    /**
     * Logs in a user using the provided username and password.
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0);
        }
        return false;
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }


    /**
     *  注册用户
     *
     * @param $userName
     * @param $email
     * @param $password
     * @return true;
     * */

    public function register()
    {
        $user = new DbUser();
        $user->userName = $this->userName;
        $user->email = $this->email;
        $user->salt =Yii::$app->security->generateRandomString();
        $user->password = Yii::$app->security->generatePasswordHash($this->password.$user->salt);
        $user->updateTime = $this->updateTime;
        $user->registerTime = $this->registerTime;
        $user->loginTime = $this->loginTime;
        $user->level=1;
        $user->levelName=DbLevelName::findOne(['level'=>1,'isDelete'=>0])['levelName'];
        $result = $user->save();
        if($result){
            $this->uId =Yii::$app->db->getLastInsertID();
            //增加统计记录
            (new UserLoginLog())->addLog( $this->uId);
            (new EveryDayData())->addRegisterLog();
        }
        return $result;
    }






}


