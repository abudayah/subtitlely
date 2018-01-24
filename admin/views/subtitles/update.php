<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Subtitles */

$this->title = 'Update Subtitles: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Subtitles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="subtitles-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
