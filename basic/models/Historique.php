<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "historique".
 *
 * @property int $id
 * @property string|null $nomTable
 * @property string|null $valeurAv
 * @property string|null $valeurAp
 * @property int|null $isInsert
 * @property string|null $dateModification
 * @property string|null $typeDonnee
 * @property string|null $nomColonne
 */
class Historique extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'historique';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['valeurAv', 'valeurAp'], 'string'],
            [['isInsert'], 'integer'],
            [['dateModification'], 'safe'],
            [['nomTable', 'nomColonne'], 'string', 'max' => 50],
            [['typeDonnee'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomTable' => 'Nom Table',
            'valeurAv' => 'Valeur Av',
            'valeurAp' => 'Valeur Ap',
            'isInsert' => 'Is Insert',
            'dateModification' => 'Date Modification',
            'typeDonnee' => 'Type Donnee',
            'nomColonne' => 'Nom Colonne',
        ];
    }
}
