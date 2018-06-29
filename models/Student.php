<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%student}}".
 *
 * @property integer $id
 * @property string $family_phone
 * @property string $family_name
 * @property string $student_education
 * @property string $student_sex
 * @property integer $student_age
 * @property string $family_address
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%student}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['family_phone', 'family_name', 'student_education', 'student_sex', 'student_age', 'family_address'], 'required'],
            [['student_age'], 'integer'],
            [['family_phone'], 'string', 'max' => 12],
            [['family_name', 'student_education'], 'string', 'max' => 20],
            [['student_sex'], 'string', 'max' => 5],
            [['family_address'], 'string', 'max' => 100],
            [['student_introduce'],'string','max'=>255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'family_phone' => '家长电话',
            'family_name' => '家长姓名',
            'student_education' => '学生教育',
            'student_sex' => '学生性别',
            'student_age' => '学生年龄',
            'family_address' => '家庭住址',
            'student_introduce'=>'学生简介'
        ];
    }
    
    //查询家长信息及其学生对应信息
     public function findSelectInfo($id)
    {
        $db=\yii::$app->db;
        $sql=<<<EOF
                select family_phone,family_name,student_education,student_sex,student_age,family_address,student_introduce from student
                where family_phone =$id;
EOF;
        $command=$db->createCommand($sql);
        $row=$command->queryOne();
        return $row;
    }
}
