<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Forms;

/**
 * FormsSearch represents the model behind the search form of `app\models\Forms`.
 */
class FormsSearch extends Forms
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['phone', 'ip', 'user_agent', 'created_at', 'updated_at', 'deleted_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
	    if (isset($params['FormsSearch']['startDate']) && isset($params['FormsSearch']['endDate']))
	    {
		    $startDate = $params['FormsSearch']['startDate'];
		    $endDate   = $params['FormsSearch']['endDate'];
	    }else{
		    $startDate = date('Y-m-01',strtotime('NOW -1 month'));
		    $endDate   = date('Y-m-d',strtotime('NOW'));
	    }
	    
        $query = Forms::find();
		
	    $query->where(['between', 'CONVERT(created_at, DATE)', $startDate, $endDate]);
	    
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
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ]);

        $query
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'ip', $this->ip])
            ->andFilterWhere(['like', 'user_agent', $this->user_agent]);
		
        return $dataProvider;
    }
}
