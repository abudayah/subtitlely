<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Movies]].
 *
 * @see Movies
 */
class MoviesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Movies[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Movies|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
