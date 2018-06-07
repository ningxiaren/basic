<?php

namespace app\models;
use yii\helpers\ArrayHelper;

use Yii;

/**
 * This is the model class for table "{{%class_rank}}".
 *
 * @property integer $rank_id
 * @property string $rank_name
 * @property integer $rank_school
 */
class ClassRank extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%class_rank}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rank_id', 'rank_name'], 'required'],
            [['rank_id', 'rank_school'], 'integer'],
            [['rank_name'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rank_id' => '序号',
            'rank_name' => '教学等级',
            'rank_school' => '所属学校等级',
        ];
    }
}
