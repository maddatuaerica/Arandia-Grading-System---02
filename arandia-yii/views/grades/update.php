<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Grades */

$this->title = 'Update Grades: ' . ' ' . $model->Student_id;
$this->params['breadcrumbs'][] = ['label' => 'Grades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Student_id, 'url' => ['view', 'id' => $model->Student_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="grades-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
