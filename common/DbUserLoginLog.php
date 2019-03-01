<?php

namespace app\common;

use Yii;

/**
 * This is the model class for table "ld_user".
 *
 * @property integer $id
 * @property integer $uid
 * @property string $loginTime
 * @property string $loginOutTime
 * @property string $client
 * @property string $ip
 * @property integer $address
 */

class DbUserLoginLog extends \yii\db\ActiveRecord
{
    public static function getDb()
    {
        return Yii::$app->db;
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'userLoginLog';
    }

}
