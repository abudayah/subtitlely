<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "movies".
 *
 * @property int $id
 * @property string $hash_id
 * @property string $title
 * @property string $image_url
 * @property string $genre
 * @property double $imdb_rating
 * @property string $mpaa
 * @property int $release_date
 * @property int $total_subtitles
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Subtitles[] $subtitles
 */
class Movies extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'movies';
    }
    
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'genre', 'imdb_rating', 'mpaa', 'release_date'], 'required'],
            [['imdb_rating'], 'number'],
            [['release_date', 'total_subtitles', 'created_at', 'updated_at'], 'integer'],
            [['hash_id', 'title', 'image_url', 'genre', 'mpaa'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'hash_id' => 'Hash ID',
            'title' => 'Title',
            'image_url' => 'Image Url',
            'genre' => 'Genre',
            'imdb_rating' => 'Imdb Rating',
            'mpaa' => 'Mpaa',
            'release_date' => 'Release Date',
            'total_subtitles' => 'Total Subtitles',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubtitles()
    {
        return $this->hasMany(Subtitles::className(), ['movie_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return MoviesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MoviesQuery(get_called_class());
    }
}
