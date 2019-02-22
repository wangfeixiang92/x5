<?php
/**
 *  邮件发送model
 *
 * */
namespace app\models;

use Yii;
use yii\base\Model;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/**
 * ContactForm is the model behind the contact form.
 */
class MailForm extends Model
{
    public  function sendMailCode(){


    }


    //发送邮件
    public function  sendMail(){
        // 实例化PHPMailer核心类
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            // 是否启用smtp的debug进行调试 开发环境建议开启 生产环境注释掉即可 默认关闭debug调试模式
            $mail->SMTPDebug = 1;                                 // Enable verbose debug output
            // 使用smtp鉴权方式发送邮件
            $mail->isSMTP();                                      // Set mailer to use SMTP
            // 链接qq域名邮箱的服务器地址
            $mail->Host = 'smtp.qq.com';  // Specify main and backup SMTP servers
            // smtp需要鉴权 这个必须是true
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            // smtp登录的账号 QQ邮箱即可
            $mail->Username = '2120371570@qq.com';                 // SMTP username
            // smtp登录的密码 使用生成的授权码
            $mail->Password = 'cdneaergrasfedha';                           // SMTP password
            // 设置使用ssl加密方式登录鉴权
            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
            // 设置ssl连接smtp服务器的远程服务器端口号
            $mail->Port = 465;                                    // TCP port to connect to
            // 设置发送的邮件的编码
            $mail->CharSet = 'UTF-8';

            //Recipients
            // 设置收件人邮箱地址
            $mail->setFrom('2120371570@qq.com', 'scount');
            // 设置收件人邮箱地址
            $mail->addAddress('2579552905@qq.com', 'Joe User');     // Add a recipient
            // 添加多个收件人 则多次调用方法即可
            $mail->addAddress('2579552905@qq.com');               // Name is optional

//            $mail->addReplyTo('info@example.com', 'Information');
//            $mail->addCC('cc@example.com');
//            $mail->addBCC('bcc@example.com');

            //Attachments
         //   $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // 为该邮件添加附件
           // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            //Content
            // 邮件正文是否为html编码 注意此处是一个方法
            $mail->isHTML(true);
            // Set email format to HTML
            // 添加该邮件的主题
            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            $status= $mail->send();
            var_dump($status);die;
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }

    }
}