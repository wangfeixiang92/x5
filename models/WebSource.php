<?php
/**
 *  邮件发送model
 *
 * */
namespace app\models;

use app\common\DbWebSource;
use Yii;
use yii\base\Model;
/**
 * LoginForm is the model behind the login form.
 *
 */



class WebSource extends Model
{
    public $id;
    public $uId;
    public $title;
    public $keyword;
    public $describe;
    public $manual;
    public $subjectId;
    public $oldUrl;
    public $coverUrl;
    public $soureUrl;
    public $browseNum;
    public $collectionNum;
    public $likeNum;
    public $shareNum;
    public $commentNum;
    public $downloadNum;
    public $price;
    public $registerTime;
    public $updateTime;
    public $status;
    public $isDelete;
    public $IE;
    public $isBoutique;
    public $isIndex;
    public $isIE;
    public $isFirefox;
    public $isChrome;
    public $isSafari;
    public $isResponseType;
    public $resources;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['manual','oldUrl'],'string'],
            ['resources', 'required', 'message' => '请选择文件'],
            ['resources', 'file', 'message' => '请选择文件'],
            ['resources', 'validateResources','message'=>'上传的文件不合规'],
            [['title'], 'string', 'min' => 5, 'max' => 255,'message' => '标题长度必须大于5个字符'],
            [['keyword'],'string', 'min' => 2,'max' => 255,'message' => '标签长度必须大于2个字符'],
            [['describe'],'string','max' => 255,'message' => '简介长度不能超过255个字符'],
            [['price'],'integer','max'=>1000,'message'=>'价格不能大于1000'],
            [['price'],'default', 'value' =>0],
            [['oldUrl'],'url', 'defaultScheme' => 'http','message'=>'官网地址不合法'],
            [['IE'],'in', 'range' => [6,7,8,9,10, 11],'message'=>'IE版本选择不合法']

        ];
    }

    /**
     * 验证文件
     * */
    public function validateResources($attribute, $params)
    {
        if (!$this->hasErrors()) {
            if(!in_array(trim($this->resources->type),['application/x-zip-compressed','application/x-rar-compressed']) || !in_array(trim($this->resources->extension),['zip', 'rar'])){
                $this->addError('上传的文件格式错误');
            }
            if($this->resources->size > 30*1024*1024){
                $this->addError('所上传文件的大小不得大于30M');
            }
            return true;
        }
    }


    public function addWebSource()
    {
        $source = new DbWebSource();
        $source->title = $this->title;
        $source->keyword = $this->keyword;
        $source->describe = $this->describe;
        $source->manual = $this->manual;
        $source->oldUrl = $this->oldUrl;
        $source->soureUrl=$this->soureUrl;
        $source->updateTime = time();
        $source->registerTime = date('Y-m-d H:i:s',time());
        $source->price = $this->price;
        $result = $source->save();
        if($result){
            (new EveryDayData())->addSubmitWebNum();
        }
        return $result;
    }


    /**
     * 上传文件
     * */
    public function upload()
    {
          $path =Yii::$app->params['upload']['web'].'/'.date('ymd',time()).'/';
        if ( !is_dir($path)) {
             mkdir($path, 0777, true);
            chmod($path, 0777);
        }
        if ($this->validate()) {
            //生成文件名
            $fileName =rand(100000, 999999). '.'.$this->resources->extension;
            $this->soureUrl =$path.$fileName;
            if(!$this->resources->saveAs($this->soureUrl)){
                return false;
            }
        } else {
            //上传失败记录日志
            Yii::info($this->errors, $this->resources, 'Upload');
            return false;
        }
        return   $this->soureUrl;
    }




}