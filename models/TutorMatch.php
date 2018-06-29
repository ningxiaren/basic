<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tutor_match}}".
 *
 * @property integer $id
 * @property string $teacher_name
 * @property string $teacher_phone
 * @property string $parent_name
 * @property string $parent_phone
 */
class TutorMatch extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tutor_match}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['teacher_name', 'teacher_phone', 'parent_name', 'parent_phone'], 'required'],
            [['teacher_name', 'teacher_phone', 'parent_name', 'parent_phone'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '序号',
            'teacher_name' => '教师姓名',
            'teacher_phone' => '教师手机',
            'parent_name' => '家长姓名',
            'parent_phone' => '家长手机',
        ];
    }
    
}
