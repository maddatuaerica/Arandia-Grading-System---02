<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subject".
 *
 * @property string $Subject_Code
 * @property string $Subject_desc
 * @property string $Teacher_id
 *
 * @property Teacher $subjectCode
 */
class subject extends \yii\db\ActiveRecord
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
            [['Subject_Code', 'Subject_desc', 'Teacher_id'], 'required'],
            [['Subject_Code', 'Subject_desc', 'Teacher_id'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Subject_Code' => 'Subject  Code',
            'Subject_desc' => 'Subject Desc',
            'Teacher_id' => 'Teacher ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjectCode()
    {
        return $this->hasOne(Teacher::className(), ['Teacher_id' => 'Subject_Code']);
    }
}
