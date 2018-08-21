<?php
/**
 * Created by PhpStorm.
 * User: Игорь-64
 * Date: 21.08.2018
 * Time: 19:37
 */

namespace app\objects;


use app\models\Access;
use app\models\Note;

class CheckNoteAccess
{
    /**
     * Уровень доступа к заметке
     *
     * @param Note $model
     *
     * @return int
     */
    public function execute(Note $model): int
    {
        $authorId = (int)$model->creator;
        $userID = (int)\Yii::$app->user->id;
        if ($authorId == $userID) {
            return Access::LEVEL_EDIT;
        }

        $accessNote = Access::find()
            ->forNote($model)
            ->forUserId($userID)
            ->one();

        if ($accessNote) {
            return Access::LEVEL_VIEW;
        }

        return Access::LEVEL_DENIED;
    }
}