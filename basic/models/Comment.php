<?php
/**
 * Created by PhpStorm.
 * User: Игорь-64
 * Date: 28.07.2018
 * Time: 22:33
 */

namespace app\models;


use yii\base\Model;

class Comment extends Model
{
    public $id;
    public $text;
    public $adminComment;

    const SCENARIO_BACK_OFFICE = 'back office';
    const SCENARIO_FRONT = 'front';

    /*public function scenarios()
    {
        return [
            self::SCENARIO_FRONT => ['text'],
            self::SCENARIO_BACK_OFFICE => ['text', 'adminComment'],
        ];
    }*/

    public function rules()
    {
        return [
            ['text', 'string', 'length' => 4],
        ];
    }
}