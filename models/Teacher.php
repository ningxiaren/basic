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
            [['teacher_name', 'teacher_sex', 'teacher_age', 'teacher_address'], 'required'],
            [['teacher_age'], 'integer'],
            [['teacher_name'], 'string', 'max' => 11],
            [['teacher_sex'], 'string', 'max' => 5],
            [['teacher_address'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'teacher_name' => '家教姓名',
            'teacher_sex' => '家教性别',
            'teacher_age' => '家教年龄',
            'teacher_address' => '家教住址',
        ];
    }
    
    //查询教师相关所有信息;
   /* public function findAllInfo()
    {
        $db=\Yii::$app->db;
        $sql=<<<EOF
                select teacher_name,teacher_sex,teacher_address,teacher_age,class_name,school_rank
                from teacher,select_class
                where teacher.teacher_name=select_class.usernmame
    }*/

  

}
