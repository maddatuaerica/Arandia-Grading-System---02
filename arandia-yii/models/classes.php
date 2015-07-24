<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "classes".
 *
 * @property string $Class_id
 * @property string $Section
 * @property string $Subject_code
 * @property string $Student_id
 * @property string $Teacher_id
 *
 * @property Teacher $class
 */
class Classes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'classes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Class_id', 'Section', 'Subject_code', 'Student_id', 'Teacher_id'], 'required'],
            [['Class_id'], 'string', 'max' => 50],
            [['Section', 'Subject_code', 'Student_id', 'Teacher_id'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Class_id' => 'Class ID',
            'Section' => 'Section',
            'Subject_code' => 'Subject Code',
            'Student_id' => 'Student ID',
            'Teacher_id' => 'Teacher ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClass()
    {
        return $this->hasOne(Teacher::className(), ['Teacher_id' => 'Class_id']);
    }
}
