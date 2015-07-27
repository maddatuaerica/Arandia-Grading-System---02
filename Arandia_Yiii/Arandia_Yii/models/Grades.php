<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grades".
 *
 * @property string $1st_grading
 * @property string $2nd_grading
 * @property string $3rd_grading
 * @property string $4th_grading
 * @property string $Final_grading
 * @property string $Subject_code
 * @property string $Student_id
 */
class Grades extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'grades';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['1st_grading', '2nd_grading', '3rd_grading', '4th_grading', 'Final_grading', 'Subject_code', 'Student_id'], 'required'],
            [['1st_grading', '2nd_grading', '3rd_grading', '4th_grading'], 'number'],
            [['Final_grading'], 'safe'],
            [['Subject_code'], 'string', 'max' => 20],
            [['Student_id'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '1st_grading' => '1st Grading',
            '2nd_grading' => '2nd Grading',
            '3rd_grading' => '3rd Grading',
            '4th_grading' => '4th Grading',
            'Final_grading' => 'Final Grading',
            'Subject_code' => 'Subject Code',
            'Student_id' => 'Student ID',
        ];
    }
}
