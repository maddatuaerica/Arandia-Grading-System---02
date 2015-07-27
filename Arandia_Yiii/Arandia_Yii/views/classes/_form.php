<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Classes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="classes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Class_id')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'Section')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'Subject_Code')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'Student_id')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'Teacher_id')->textInput(['maxlength' => 10]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
