<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%teacher}}".
 *
 * @property integer $id
 * @property string $teacher_name
 * @property string $teacher_sex
 * @property integer $teacher_age
 * @property string $teacher_address
 */
$session=\yii::$app->session;
$username=$session->get('username');
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%teacher}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['teacher_phone', 'teacher_sex', 'teacher_age', 'teacher_address','teacher_name','teacher_education'], 'required','message'=>'{attribute}不能为空'],
            [['teacher_age'], 'integer','max'=>80,'min'=>15,'message'=>'{attribute}输入错误!'],
            [['teacher_phone'], 'string', 'max' => 11],
            [['teacher_sex'], 'string', 'max' => 5],
            [['teacher_address'], 'string', 'max' => 100],
            [['teacher_introduce'],'string','max'=>255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'teacher_phone' => '家教电话',
            'teacher_name'=>'家教姓名',
            'teacher_sex' => '家教性别',
            'teacher_age' => '家教年龄',
            'teacher_address' => '家教住址',
            'teacher_education' =>'身份类型',
            'teacher_introduce' =>'个人简介'
        ];
    }
    public function findSelectInfo($id)
    {
        $db=\yii::$app->db;
        $sql=<<<EOF
                select teacher_phone,teacher_name,teacher_education,teacher_sex,teacher_age,teacher_address,teacher_introduce from teacher
                where teacher_phone =$id;
EOF;
        $command=$db->createCommand($sql);
        $row=$command->queryOne();
        return $row;
    }


  

}
