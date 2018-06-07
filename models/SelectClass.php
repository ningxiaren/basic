<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%select_class}}".
 *
 * @property integer $id
 * @property string $class_name
 * @property string $user_name
 * @property string $school_rank
 */
class SelectClass extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%select_class}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_name', 'user_name'], 'required'],
            [['class_name', 'user_name'], 'string', 'max' => 20],
            [['school_rank'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '序号',
            'class_name' => '课程名',
            'user_name' => '用户名',
            'school_rank' => '教学年级',
        ];
    }
}
