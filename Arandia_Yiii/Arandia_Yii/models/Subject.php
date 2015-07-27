<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subject".
 *
 * @property string $Subject_code
 * @property string $Subject_desc
 * @property integer $Teacher_id
 *
 * @property Classes[] $classes
 */
class Subject extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subject';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Subject_code', 'Subject_desc', 'Teacher_id'], 'required'],
            [['Teacher_id'], 'integer'],
            [['Subject_code'], 'string', 'max' => 20],
            [['Subject_desc'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Subject_code' => 'Subject Code',
            'Subject_desc' => 'Subject Desc',
            'Teacher_id' => 'Teacher ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClasses()
    {
        return $this->hasMany(Classes::className(), ['Subject_Code' => 'Subject_code']);
    }
}
