<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property string $Student_id
 * @property string $Student_fname
 * @property string $Student_lname
 * @property string $Student_mname
 * @property string $Student_email
 * @property string $Student_addr
 * @property string $Student_cont
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Student_id', 'Student_fname', 'Student_lname', 'Student_mname', 'Student_email', 'Student_addr', 'Student_cont'], 'required'],
            [['Student_id', 'Student_fname', 'Student_lname', 'Student_mname', 'Student_email', 'Student_addr', 'Student_cont'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Student_id' => 'Student ID',
            'Student_fname' => 'Student Fname',
            'Student_lname' => 'Student Lname',
            'Student_mname' => 'Student Mname',
            'Student_email' => 'Student Email',
            'Student_addr' => 'Student Addr',
            'Student_cont' => 'Student Cont',
        ];
    }
}
