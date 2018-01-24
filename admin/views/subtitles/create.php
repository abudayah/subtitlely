<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Subtitles */

$this->title = 'Create Subtitles';
$this->params['breadcrumbs'][] = ['label' => 'Subtitles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subtitles-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
