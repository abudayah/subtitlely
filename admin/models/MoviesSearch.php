<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Movies;

/**
 * MoviesSearch represents the model behind the search form of `app\models\Movies`.
 */
class MoviesSearch extends Movies
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'release_date', 'total_subtitles', 'created_at', 'updated_at'], 'integer'],
            [['hash_id', 'title', 'image_url', 'genre', 'mpaa'], 'safe'],
            [['imdb_rating'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Movies::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'imdb_rating' => $this->imdb_rating,
            'release_date' => $this->release_date,
            'total_subtitles' => $this->total_subtitles,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'hash_id', $this->hash_id])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'image_url', $this->image_url])
            ->andFilterWhere(['like', 'genre', $this->genre])
            ->andFilterWhere(['like', 'mpaa', $this->mpaa]);

        return $dataProvider;
    }
}
