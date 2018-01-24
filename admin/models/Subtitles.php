<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subtitles".
 *
 * @property int $id
 * @property string $hash_id
 * @property int $movie_id
 * @property string $language ISO 639-1
 * @property string $source_url
 * @property int $season
 * @property int $episode
 * @property int $votes_up
 * @property int $votes_down
 * @property int $downloads
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Movies $movie
 */
class Subtitles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subtitles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hash_id', 'movie_id', 'language', 'source_url', 'created_at'], 'required'],
            [['movie_id', 'season', 'episode', 'votes_up', 'votes_down', 'downloads', 'created_at', 'updated_at'], 'integer'],
            [['hash_id', 'source_url'], 'string', 'max' => 255],
            [['language'], 'string', 'max' => 2],
            [['hash_id'], 'unique'],
            [['movie_id'], 'exist', 'skipOnError' => true, 'targetClass' => Movies::className(), 'targetAttribute' => ['movie_id' => 'id']],
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
            'movie_id' => 'Movie ID',
            'language' => 'Language',
            'source_url' => 'Source Url',
            'season' => 'Season',
            'episode' => 'Episode',
            'votes_up' => 'Votes Up',
            'votes_down' => 'Votes Down',
            'downloads' => 'Downloads',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMovie()
    {
        return $this->hasOne(Movies::className(), ['id' => 'movie_id']);
    }

    /**
     * @inheritdoc
     * @return SubtitlesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SubtitlesQuery(get_called_class());
    }
}
