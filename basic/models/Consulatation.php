<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "consulatation".
 *
 * @property int $code
 * @property string|null $etatPatient
 * @property string|null $dateConsultation
 * @property int|null $prix
 * @property int|null $code_medecin
 * @property int|null $code_patient
 */
class Consulatation extends CompuClinicRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'consulatation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code'], 'required'],
            [['code', 'prix', 'code_medecin', 'code_patient'], 'integer'],
            [['dateConsultation'], 'safe'],
            [['etatPatient'], 'string', 'max' => 20],
            [['code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'code' => 'Code',
            'etatPatient' => 'Etat Patient',
            'dateConsultation' => 'Date Consultation',
            'prix' => 'Prix',
            'code_medecin' => 'Code Medecin',
            'code_patient' => 'Code Patient',
        ];
    }

    /**
     * {@inheritdoc}
     * @return ConsulatationQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ConsulatationQuery(get_called_class());
    }
}
