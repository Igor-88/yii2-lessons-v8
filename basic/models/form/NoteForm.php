<?php
/**
 * Created by PhpStorm.
 * User: Игорь-64
 * Date: 30.08.2018
 * Time: 17:38
 */

namespace app\models\form;

use app\models\Note;
use yii\helpers\BaseArrayHelper;

class NoteForm extends Note
{
    /**
     * @var int[]
     */
    public $grantedTo = [];

    public function rules(): array
    {
        return BaseArrayHelper::merge([
            ['grantedTo', 'safe'],
        ], parent::rules());
    }


}