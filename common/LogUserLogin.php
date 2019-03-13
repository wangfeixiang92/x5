<?php

namespace app\common;

use Yii;

/**
 * This is the model class for table "ld_user".
 *
 * @property integer $id
 * @property integer $uid
 * @property string $loginTime
 * @property string $logoutTime
 * @property string $client
 * @property string $ip
 * @property integer $address
 */

class LogUserLogin extends \yii\db\ActiveRecord
{
    public static function getDb()
    {
        return Yii::$app->itbook_log;
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'userLogin';
    }

}
