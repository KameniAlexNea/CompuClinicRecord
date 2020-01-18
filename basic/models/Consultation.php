<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "consultation".
 *
 * @property int $code
 * @property string|null $etatPatient
 * @property string|null $dateConsultation
 * @property int|null $prix
 * @property int|null $code_medecin
 * @property int|null $code_patient
 */
class Consultation extends \app\models\CompuClinicRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'consultation';
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
}
