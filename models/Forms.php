<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "forms".
 *
 * @property int $id
 * @property string $full_name
 * @property string $phone
 * @property string $ip
 * @property string $user_agent
 * @property string $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 */
class Forms extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'forms';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['full_name', 'phone', 'ip', 'user_agent'], 'required'],
            [['user_agent'], 'string'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['full_name', 'phone', 'ktoken', 'publisher_id'], 'string', 'max' => 255],
            [['ip'], 'string', 'max' => 128],
            [['provider_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'full_name' => 'Full Name',
            'phone' => 'Phone',
            'ip' => 'Ip',
            'user_agent' => 'User Agent',
            'ktoken' => 'Ktoken',
            'provider_id' => 'Provider ID',
            'publisher_id' => 'Publisher ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }
}
