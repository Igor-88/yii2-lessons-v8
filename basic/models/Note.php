<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveQuery;

/**
 * This is the model class for table "note".
 *
 * @property int $id
 * @property string $name Название
 * @property string $text Текст
 * @property int $user_id Автор
 * @property string $created_at Создано
 * @property string $updated_at Обновлено
 * @property int $views Просмотры
 *
 * @property ?User $user
 */
class Note extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'note';
    }

    //public function behaviors()
    //{
    //    return [
    //        'timestamp' => [
    //            'class' => TimestampBehavior::class,
    //            'createdAtAttribute' => 'created_at',
    //            'updatedAtAttribute' => 'updated_at',
    //        ],
    //    ];
    //}

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'text', 'user_id'], 'required'],
            [['text'], 'string'],
            [['user_id', 'views'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'text' => 'Текст',
            'user_id' => 'Автор',
            'created_at' => 'Создано',
            'updated_at' => 'Обновлено',
            'views' => 'Просмотры',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\NoteQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\NoteQuery(get_called_class());
    }

    /**
     * @return ActiveQuery
     */
    public function getUser(): ActiveQuery
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }
}
