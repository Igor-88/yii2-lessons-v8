<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reviews".
 *
 * @property int $id
 * @property int $product_id
 * @property string $text
 */
class Reviews extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reviews';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'text'], 'required'],
            [['product_id'], 'integer'],
            [['text'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'text' => 'Text',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\ReviewsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\ReviewsQuery(get_called_class());
    }
}
