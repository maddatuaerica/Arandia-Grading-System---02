<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StudentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Student_id') ?>

    <?= $form->field($model, 'Student_lname') ?>

    <?= $form->field($model, 'Student_fname') ?>

    <?= $form->field($model, 'Student_mname') ?>

    <?= $form->field($model, 'Student_email') ?>

    <?php // echo $form->field($model, 'Student_addr') ?>

    <?php // echo $form->field($model, 'Student_cont') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
