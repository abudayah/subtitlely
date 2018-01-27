<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Movies */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movies-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'genre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imdb_rating')->input(['min'=>1,'step'=>0.1]) ?>

    <?= $form->field($model, 'mpaa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'release_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
