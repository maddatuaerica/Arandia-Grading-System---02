<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teacher".
 *
 * @property string $Teacher_id
 * @property string $Teacher_fname
 * @property string $Teacher_lname
 * @property string $Teacher_mname
 * @property string $Teacher_email
 * @property string $Teacher_addr
 * @property string $Teacher_cont
 * @property string $Teacher_stat
 *
 * @property Class $class
 * @property Subject $subject
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teacher';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Teacher_id', 'Teacher_fname', 'Teacher_lname', 'Teacher_mname', 'Teacher_email', 'Teacher_addr', 'Teacher_cont', 'Teacher_stat'], 'required'],
            [['Teacher_id', 'Teacher_fname', 'Teacher_lname', 'Teacher_mname', 'Teacher_email', 'Teacher_addr', 'Teacher_cont', 'Teacher_stat'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Teacher_id' => 'Teacher ID',
            'Teacher_fname' => 'Teacher Fname',
            'Teacher_lname' => 'Teacher Lname',
            'Teacher_mname' => 'Teacher Mname',
            'Teacher_email' => 'Teacher Email',
            'Teacher_addr' => 'Teacher Addr',
            'Teacher_cont' => 'Teacher Cont',
            'Teacher_stat' => 'Teacher Stat',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClass()
    {
        return $this->hasOne(Class::className(), ['Class_id' => 'Teacher_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubject()
    {
        return $this->hasOne(Subject::className(), ['Subject_Code' => 'Teacher_id']);
    }
}
