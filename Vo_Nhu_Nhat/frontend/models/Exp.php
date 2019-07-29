<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "exp".
 *
 * @property int $id
 * @property int $user_id
 * @property string $exp_name
 * @property string $start_date
 * @property string $end_date
 * @property string $company
 * @property string $description
 *
 * @property User $user
 */
class Exp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'exp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'exp_name', 'start_date', 'company', 'description'], 'required'],
            [['user_id'], 'integer'],
            [['start_date', 'end_date'], 'safe'],
            [['exp_name', 'company', 'description'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'exp_name' => 'Exp Name',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'company' => 'Company',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
