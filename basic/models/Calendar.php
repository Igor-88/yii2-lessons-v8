<?php

namespace app\models;

use app\models\query\CalendarQuery;
use Yii;
use yii\db\ActiveQuery;

/**
 * This is the model class for table "calendar".
 *
 * @property int $id
 * @property string $text
 * @property int $creator
 * @property string $date_event
 *
 * @property User $author
 */
class Calendar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName(): string
    {
        return 'calendar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            [['text', 'creator'], 'required'],
            [['text'], 'string'],
            [['creator'], 'integer'],
            [['date_event'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels(): array
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'creator' => 'Creator',
            'date_event' => 'Date Event',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\CalendarQuery the active query used by this AR class.
     */
    public static function find(): CalendarQuery
    {
        return new \app\models\query\CalendarQuery(__CLASS__);
    }

    /**
     * @return ActiveQuery
     */
    public function getAuthor(): ActiveQuery
    {
        return $this->hasOne(User::class. ['id' => 'creator']);
    }
}
