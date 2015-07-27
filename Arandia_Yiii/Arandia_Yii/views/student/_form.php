<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Student_id')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'Student_lname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'Student_fname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'Student_mname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'Student_email')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'Student_addr')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'Student_cont')->textInput(['maxlength' => 45]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
