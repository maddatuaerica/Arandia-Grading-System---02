<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Classes;

/**
 * ClassesSearch represents the model behind the search form about `app\models\Classes`.
 */
class ClassesSearch extends Classes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Class_id', 'Section', 'Subject_Code', 'Student_id', 'Teacher_id'], 'safe'],
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
        $query = Classes::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'Class_id', $this->Class_id])
            ->andFilterWhere(['like', 'Section', $this->Section])
            ->andFilterWhere(['like', 'Subject_Code', $this->Subject_Code])
            ->andFilterWhere(['like', 'Student_id', $this->Student_id])
            ->andFilterWhere(['like', 'Teacher_id', $this->Teacher_id]);

        return $dataProvider;
    }
}
