<?php

namespace app\models;

use Yii;

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
}
