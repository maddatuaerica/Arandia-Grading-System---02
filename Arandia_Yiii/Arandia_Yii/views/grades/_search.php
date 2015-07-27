<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GradesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="grades-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, '1st_grading') ?>

    <?= $form->field($model, '2nd_grading') ?>

    <?= $form->field($model, '3rd_grading') ?>

    <?= $form->field($model, '4th_grading') ?>

    <?= $form->field($model, 'Final_grading') ?>

    <?php // echo $form->field($model, 'Subject_code') ?>

    <?php // echo $form->field($model, 'Student_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
