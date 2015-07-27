<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Teacher;

/**
 * TeacherSearch represents the model behind the search form about `app\models\Teacher`.
 */
class TeacherSearch extends Teacher
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Teacher_id', 'Teacher_lname', 'Teacher_fname', 'Teacher_mname', 'Teacher_email', 'Teacher_addr', 'Teacher_cont', 'Teacher_stat'], 'safe'],
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
        $query = Teacher::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'Teacher_id', $this->Teacher_id])
            ->andFilterWhere(['like', 'Teacher_lname', $this->Teacher_lname])
            ->andFilterWhere(['like', 'Teacher_fname', $this->Teacher_fname])
            ->andFilterWhere(['like', 'Teacher_mname', $this->Teacher_mname])
            ->andFilterWhere(['like', 'Teacher_email', $this->Teacher_email])
            ->andFilterWhere(['like', 'Teacher_addr', $this->Teacher_addr])
            ->andFilterWhere(['like', 'Teacher_cont', $this->Teacher_cont])
            ->andFilterWhere(['like', 'Teacher_stat', $this->Teacher_stat]);

        return $dataProvider;
    }
}
