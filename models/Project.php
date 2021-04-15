<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "project".
 *
 * @property int $id_projek
 * @property string|null $nama_projek
 * @property string|null $kod_projek
 * @property string|null $created_date
 * @property string|null $created_by
 * @property string|null $updated_date
 * @property string|null $updated_by
 */
class Project extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_projek'], 'required'],
            [['id_projek'], 'integer'],
            [['created_date', 'updated_date'], 'safe'],
            [['nama_projek', 'kod_projek', 'created_by', 'updated_by'], 'string', 'max' => 255],
            [['id_projek'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_projek' => 'Id Projek',
            'nama_projek' => 'Nama Projek',
            'kod_projek' => 'Kod Projek',
            'created_date' => 'Created Date',
            'created_by' => 'Created By',
            'updated_date' => 'Updated Date',
            'updated_by' => 'Updated By',
        ];
    }
}
