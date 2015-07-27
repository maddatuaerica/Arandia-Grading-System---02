<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Student;

/**
 * StudentSearch represents the model behind the search form about `app\models\Student`.
 */
class StudentSearch extends Student
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Student_id', 'Student_lname', 'Student_fname', 'Student_mname', 'Student_email', 'Student_addr', 'Student_cont'], 'safe'],
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
        $query = Student::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'Student_id', $this->Student_id])
            ->andFilterWhere(['like', 'Student_lname', $this->Student_lname])
            ->andFilterWhere(['like', 'Student_fname', $this->Student_fname])
            ->andFilterWhere(['like', 'Student_mname', $this->Student_mname])
            ->andFilterWhere(['like', 'Student_email', $this->Student_email])
            ->andFilterWhere(['like', 'Student_addr', $this->Student_addr])
            ->andFilterWhere(['like', 'Student_cont', $this->Student_cont]);

        return $dataProvider;
    }
}
