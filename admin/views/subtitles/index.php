<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\SubtitlesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Subtitles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subtitles-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Subtitles', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'hash_id',
            'movie_id',
            'language',
            'source_url:url',
            //'season',
            //'episode',
            //'votes_up',
            //'votes_down',
            //'downloads',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
