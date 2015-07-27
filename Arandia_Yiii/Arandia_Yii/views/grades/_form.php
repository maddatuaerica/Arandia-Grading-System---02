<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Grades */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="grades-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, '1st_grading')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, '2nd_grading')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, '3rd_grading')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, '4th_grading')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'Final_grading')->textInput() ?>

    <?= $form->field($model, 'Subject_code')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'Student_id')->textInput(['maxlength' => 15]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
