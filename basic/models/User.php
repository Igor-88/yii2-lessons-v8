<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $surname
 * @property string $name
 * @property string $password
 * @property string $salt
 * @property string $access_token
 * @property string $create_date
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'surname', 'name', 'password', 'salt'], 'required'],
            [['create_date'], 'safe'],
            [['username'], 'string', 'max' => 128],
            [['surname', 'name'], 'string', 'max' => 45],
            [['password', 'salt', 'access_token'], 'string', 'max' => 255],
            [['username'], 'unique'],
            [['access_token'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Логин',
            'surname' => 'Фамилия',
            'name' => 'Имя',
            'password' => 'Пароль',
            'salt' => 'Соль',
            'access_token' => 'Ключ авторизации',
            'create_date' => 'Дата создания',
        ];
    }
}
