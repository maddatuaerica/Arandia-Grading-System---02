<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Teacher */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teacher-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Teacher_id')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'Teacher_lname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'Teacher_fname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'Teacher_mname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'Teacher_email')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'Teacher_addr')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'Teacher_cont')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'Teacher_stat')->textInput(['maxlength' => 10]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
