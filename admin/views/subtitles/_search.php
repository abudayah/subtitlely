<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SubtitlesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subtitles-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'hash_id') ?>

    <?= $form->field($model, 'movie_id') ?>

    <?= $form->field($model, 'language') ?>

    <?= $form->field($model, 'source_url') ?>

    <?php // echo $form->field($model, 'season') ?>

    <?php // echo $form->field($model, 'episode') ?>

    <?php // echo $form->field($model, 'votes_up') ?>

    <?php // echo $form->field($model, 'votes_down') ?>

    <?php // echo $form->field($model, 'downloads') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
