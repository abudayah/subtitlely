<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MoviesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movies-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'hash_id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'image_url') ?>

    <?= $form->field($model, 'genre') ?>

    <?php // echo $form->field($model, 'imdb_rating') ?>

    <?php // echo $form->field($model, 'mpaa') ?>

    <?php // echo $form->field($model, 'release_date') ?>

    <?php // echo $form->field($model, 'total_subtitles') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
