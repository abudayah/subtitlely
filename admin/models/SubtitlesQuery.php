<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Subtitles]].
 *
 * @see Subtitles
 */
class SubtitlesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Subtitles[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Subtitles|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
