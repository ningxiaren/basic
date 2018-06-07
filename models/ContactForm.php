<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $username;
    public $password;
    public $i_password;
    public $worker;
    public $verifyCode;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            
             //让填充属性不为空
            [['username','password'],'required','message'=>'{attribute}不能为空'],
            // name, email, subject and body are required
            [['password','i_password'],'string','min'=>6,'max'=>16,'message'=>'{attribute}位数为6至16位'],
            //判断手机号格式
            ['username','match','pattern'=>'/^1[0-9]{10}$/','message'=>'{attribute}必须为1开头的11位纯数字'],
            //职业；
            [['worker'],'required','message'=>'{attribute}不能为空'],

            //判断密码一致性
            ['i_password','compare','compareAttribute'=>'password','message'=>'两次密码不一致'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => '验证码',
            'username'=>'手机号',
            'password'=>'密码',
            'i_password'=>'确认密码',
            'worker'=>'职业',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
   /* public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([$this->email => $this->name])
                ->setSubject($this->subject)
                ->setTextBody($this->body)
                ->send();

            return true;
        }
        return false;
    }*/
}
