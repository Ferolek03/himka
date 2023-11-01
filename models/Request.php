<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "request".
 *
 * @property int $id
 * @property int $id_user
 * @property int $id_vid
 * @property string $description
 * @property string $fio
 * @property string $date
 * @property string $price
 *
 * @property Vid $idV
 * @property User $user
 */
class Request extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'request';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'id_vid', 'description', 'fio', 'price'], 'required'],
            [['id_user', 'id_vid'], 'integer'],
            [['date'], 'safe'],
            [['description', 'fio', 'price'], 'string', 'max' => 255],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['id_user' => 'id']],
            [['id_vid'], 'exist', 'skipOnError' => true, 'targetClass' => Vid::class, 'targetAttribute' => ['id_vid' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'id_vid' => 'Id Vid',
            'description' => 'Description',
            'fio' => 'Fio',
            'date' => 'Date',
            'price' => 'Price',
        ];
    }

    /**
     * Gets query for [[IdV]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdV()
    {
        return $this->hasOne(Vid::class, ['id' => 'id_vid']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'id_user']);
    }
}
