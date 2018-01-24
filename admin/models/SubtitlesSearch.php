<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Subtitles;

/**
 * SubtitlesSearch represents the model behind the search form of `app\models\Subtitles`.
 */
class SubtitlesSearch extends Subtitles
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'movie_id', 'season', 'episode', 'votes_up', 'votes_down', 'downloads', 'created_at', 'updated_at'], 'integer'],
            [['hash_id', 'language', 'source_url'], 'safe'],
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
        $query = Subtitles::find();

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
            'movie_id' => $this->movie_id,
            'season' => $this->season,
            'episode' => $this->episode,
            'votes_up' => $this->votes_up,
            'votes_down' => $this->votes_down,
            'downloads' => $this->downloads,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'hash_id', $this->hash_id])
            ->andFilterWhere(['like', 'language', $this->language])
            ->andFilterWhere(['like', 'source_url', $this->source_url]);

        return $dataProvider;
    }
}
