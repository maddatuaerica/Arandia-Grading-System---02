<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teacher".
 *
 * @property string $Teacher_id
 * @property string $Teacher_lname
 * @property string $Teacher_fname
 * @property string $Teacher_mname
 * @property string $Teacher_email
 * @property string $Teacher_addr
 * @property string $Teacher_cont
 * @property string $Teacher_stat
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
            [['Teacher_id', 'Teacher_lname', 'Teacher_fname', 'Teacher_mname', 'Teacher_email', 'Teacher_addr', 'Teacher_cont', 'Teacher_stat'], 'required'],
            [['Teacher_id', 'Teacher_stat'], 'string', 'max' => 10],
            [['Teacher_lname', 'Teacher_fname', 'Teacher_mname', 'Teacher_email'], 'string', 'max' => 45],
            [['Teacher_addr'], 'string', 'max' => 100],
            [['Teacher_cont'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Teacher_id' => 'Teacher ID',
            'Teacher_lname' => 'Teacher Lname',
            'Teacher_fname' => 'Teacher Fname',
            'Teacher_mname' => 'Teacher Mname',
            'Teacher_email' => 'Teacher Email',
            'Teacher_addr' => 'Teacher Addr',
            'Teacher_cont' => 'Teacher Cont',
            'Teacher_stat' => 'Teacher Stat',
        ];
    }
}
