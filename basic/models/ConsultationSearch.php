<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Consultation;

/**
 * ConsultationSearch represents the model behind the search form of `app\models\Consultation`.
 */
class ConsultationSearch extends Consultation
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'prix', 'code_medecin', 'code_patient'], 'integer'],
            [['etatPatient', 'dateConsultation'], 'safe'],
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
        $query = Consultation::find();

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
            'code' => $this->code,
            'dateConsultation' => $this->dateConsultation,
            'prix' => $this->prix,
            'code_medecin' => $this->code_medecin,
            'code_patient' => $this->code_patient,
        ]);

        $query->andFilterWhere(['like', 'etatPatient', $this->etatPatient]);

        return $dataProvider;
    }
}
