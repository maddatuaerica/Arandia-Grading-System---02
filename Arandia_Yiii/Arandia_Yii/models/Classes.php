<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "classes".
 *
 * @property string $Class_id
 * @property string $Section
 * @property string $Subject_Code
 * @property string $Student_id
 * @property string $Teacher_id
 *
 * @property Subject $subjectCode
 * @property Student $student
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
            [['Class_id', 'Section', 'Subject_Code', 'Student_id', 'Teacher_id'], 'required'],
            [['Class_id', 'Student_id', 'Teacher_id'], 'string', 'max' => 10],
            [['Section'], 'string', 'max' => 45],
            [['Subject_Code'], 'string', 'max' => 20]
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
            'Subject_Code' => 'Subject  Code',
            'Student_id' => 'Student ID',
            'Teacher_id' => 'Teacher ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjectCode()
    {
        return $this->hasOne(Subject::className(), ['Subject_code' => 'Subject_Code']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['Student_id' => 'Student_id']);
    }
}
