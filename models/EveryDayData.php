<?php

namespace app\models;
use app\common\DbEverDayDataLog;
use app\common\DbUserLoginLog;
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
    public $date;



    /*
   * 增加用户注册统计记录
   *
   * */
    public function addRegisterLog(){
        $redisKey='everyDateData'.date('ymd');
        $redis = \Yii::$app->redis;
        $redis->hincrby($redisKey,'registerNum',1);
        $redis->hincrby($redisKey,'loginNum',1);
        $redis->expire($redisKey,36*60*60);
    }

    /*
     * 增加用户登录统计记录
     *
     * */
    public function addLoginLog(){
        $redisKey='everyDateData'.date('ymd');
        $redis = \Yii::$app->redis;
        $redis->hincrby($redisKey,'loginNum',1);
        $redis->expire($redisKey,36*60*60);
    }


}
