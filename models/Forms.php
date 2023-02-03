<?php

namespace app\models;

use Yii;
use yii\helpers\Json;

/**
 * This is the model class for table "forms".
 *
 * @property int $id
 * @property string $phone
 * @property string $ip
 * @property string $user_agent
 * @property string $ktoken
 * @property string $external_click_id
 * @property string $provider_id
 * @property string $publisher_id
 * @property string $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 */
class Forms extends \yii\db\ActiveRecord
{
	public $startDate;
	public $endDate;
	
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
            [['phone', 'ip', 'user_agent'], 'required'],
            [['user_agent'], 'string'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
//            [['phone', 'ktoken', 'external_click_id', 'publisher_id'], 'string', 'max' => 255],
            [['ip'], 'string', 'max' => 128],
//            [['provider_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'phone' => 'Phone',
            'ip' => 'Ip',
            'user_agent' => 'User Agent',
            'ktoken' => 'Ktoken',
            'external_click_id' => 'External Click ID',
            'provider_id' => 'Provider ID',
            'publisher_id' => 'Publisher ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    public function informToKickads($ktoken)
    {
        if (!$ktoken || empty($ktoken))
            return;

        try {
            $url = Yii::$app->params['kickadsPostback']."?ktoken=".$ktoken;
            Yii::info('Notificando s2s a Kickads - Postback:'.$url, 's2s');

            $curl   = curl_init($url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($curl);

            if (!$result) {
                Yii::error('Error en notificacion s2s a Kickads: Empty result', 's2s');
                return NULL;
            }

            curl_close($curl);

            Yii::info('Response s2s a Kickads -:'.$result, 's2s');

        }catch (\Exception $exception ) {
            Yii::error('Error en notificacion s2s a Kickads - Error:'.$exception->getMessage(), 's2s');
        }
    }

    public function informToClient($data)
    {
        try {
            $url    = Yii::$app->params['clientPostback'];
            Yii::info('Notificando s2s a Cliente: '.$url, 's2s');

            $postData = [
                "firstname" => $data->post('name'),
                "phone" => $data->post('phone'),
                "medio" => "kickads",
                "oferta" => "pospagodobledatos",
            ];

            $options = array(
                CURLOPT_URL            => $url,
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_POST           => true,
                CURLOPT_POSTFIELDS     => http_build_query($postData),
                CURLOPT_RETURNTRANSFER => true
            );

            $curl = curl_init();
            curl_setopt_array($curl,$options);
            $result=curl_exec($curl);

            if (!$result) {
                Yii::error('Error en notificacion s2s a cliente: Empty result', 's2s');
                return NULL;
            }

            curl_close($curl);

            Yii::info('Response s2s a cliente -:'.$result, 's2s');

        }catch (\Exception $exception ) {
            \Yii::error('Error en notificacion s2s a Cliente - Error:'.$exception->getMessage(), 's2s');
        }
    }
}
