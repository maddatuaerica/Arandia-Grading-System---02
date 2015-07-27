<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Subject */

$this->title = 'Update Subject: ' . ' ' . $model->Subject_code;
$this->params['breadcrumbs'][] = ['label' => 'Subjects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Subject_code, 'url' => ['view', 'id' => $model->Subject_code]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="subject-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
