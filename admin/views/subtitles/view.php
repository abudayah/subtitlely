<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Subtitles */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Subtitles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subtitles-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'hash_id',
            'movie_id',
            'language',
            'source_url:url',
            'season',
            'episode',
            'votes_up',
            'votes_down',
            'downloads',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
