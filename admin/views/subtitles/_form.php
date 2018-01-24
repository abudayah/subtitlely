<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Subtitles */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subtitles-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'hash_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'movie_id')->textInput() ?>

    <?= $form->field($model, 'language')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'source_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'season')->textInput() ?>

    <?= $form->field($model, 'episode')->textInput() ?>

    <?= $form->field($model, 'votes_up')->textInput() ?>

    <?= $form->field($model, 'votes_down')->textInput() ?>

    <?= $form->field($model, 'downloads')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
