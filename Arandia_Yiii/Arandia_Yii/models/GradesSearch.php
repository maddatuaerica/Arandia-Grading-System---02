<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Grades;

/**
 * GradesSearch represents the model behind the search form about `app\models\Grades`.
 */
class GradesSearch extends Grades
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['1st_grading', '2nd_grading', '3rd_grading', '4th_grading'], 'number'],
            [['Final_grading', 'Subject_code', 'Student_id'], 'safe'],
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
        $query = Grades::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            '1st_grading' => $this->1st_grading,
            '2nd_grading' => $this->2nd_grading,
            '3rd_grading' => $this->3rd_grading,
            '4th_grading' => $this->4th_grading,
            'Final_grading' => $this->Final_grading,
        ]);

        $query->andFilterWhere(['like', 'Subject_code', $this->Subject_code])
            ->andFilterWhere(['like', 'Student_id', $this->Student_id]);

        return $dataProvider;
    }
}
