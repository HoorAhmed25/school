<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ismailia".
 *
 * @property string $sch_code
 * @property string|null $sch_name
 * @property string|null $sch_gov
 * @property string $sch_type
 * @property string|null $sch_category
 * @property string|null $sch_category_code
 * @property string $sch_gov_code
 * @property string|null $clinic_code
 * @property string|null $clinic_name
 */
class School extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ismailia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sch_code'], 'required'],
            [['sch_code'], 'string', 'max' => 7],
            [['sch_name'], 'string', 'max' => 53],
            [['sch_gov'], 'string', 'max' => 11],
            [['sch_type'], 'string', 'max' => 50],
            [['sch_category'], 'string', 'max' => 11],
            [['sch_category_code'], 'string', 'max' => 11],
            [['sch_gov_code'], 'string', 'max' => 11],
            [['clinic_code'], 'string', 'max' => 11],
            [['clinic_name'], 'string', 'max' => 53],
            [['sch_code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sch_code' => 'Sch Code',
            'sch_name' => 'Sch Name',
            'sch_gov' => 'Sch Gov',
            'sch_type' => 'Sch Type',
            'sch_category' => 'Sch Category',
            'sch_category_code' => 'Sch Category Code',
            'sch_gov_code' => 'Sch Gov Code',
            'clinic_code' => 'Clininc Code',
            'clinic_name' => 'Clinic Name',   
        ];
    }
}
