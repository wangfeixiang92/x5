<?php

namespace app\models;
use app\common\LogEverDayData;
use app\common\LogUserLogin;
use wsl\ip2location\Ip2Location;
use yii\base\Model;
/**
 * This is the model class for table "ld_user".
 *
 * @property integer $id
 * @property integer $registerNum
 * @property integer $loginNum
 * @property integer $index_pv
 * @property integer $index_ip
 * @property integer $date
 */


class EveryDayData extends Model
{
    public $id;
    public $registerNum;
    public $loginNum;
    public $index_pv;
    public $index_ip;
    public $submitWebNum;
    public $newWebNum;
    public $date;
    public $redisKey;
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        $this->redisKey  ='everyDateData'.date('ymd');
    }


    /*
   * 增加用户注册统计记录
   *
   * */
    public function addRegisterLog(){
        $redis = \Yii::$app->redis;
        $redis->hincrby(  $this->redisKey ,'registerNum',1);
        $redis->hincrby(  $this->redisKey ,'loginNum',1);
        $redis->expire(  $this->redisKey ,36*60*60);
    }

    /*
     * 增加用户登录统计记录
     *
     * */
    public function addLoginLog(){
        $redis = \Yii::$app->redis;
        $redis->hincrby(  $this->redisKey ,'loginNum',1);
        $redis->expire(  $this->redisKey ,36*60*60);
    }

    /*
     * 增加发布网站模板的数量
     *
     * */
    public function addSubmitWebNum(){
        $redis = \Yii::$app->redis;
        $redis->hincrby(  $this->redisKey ,'submitWebNum',1);
        $redis->expire(  $this->redisKey ,36*60*60);
    }

    /*
     * 增加新上线网站模板的数量
     *
     * */
    public function addNewWebNum(){
        $redis = \Yii::$app->redis;
        $redis->hincrby(  $this->redisKey ,'newWebNum',1);
        $redis->expire(  $this->redisKey ,36*60*60);
    }


}
