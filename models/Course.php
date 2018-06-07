<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "course".
 *
 * @property integer $id
 * @property string $class_id
 * @property string $class_name
 * @property integer $rank_school
 */
class course extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'course';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_id', 'class_name', 'rank_school'], 'required'],
            [['rank_school'], 'integer'],
            [['class_id'], 'string', 'max' => 20],
            [['class_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'class_id' => '课程序号',
            'class_name' => '课程名',
            'rank_school' => '课程教学层次',
        ];
    }
}
