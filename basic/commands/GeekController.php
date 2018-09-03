<?php
/**
 * Created by PhpStorm.
 * User: Игорь-64
 * Date: 03.09.2018
 * Time: 17:59
 */

namespace app\commands;


use app\models\Note;
use yii\console\Controller;
use yii\console\ExitCode;

class GeekController extends Controller
{
    public $mode = 'text';

    /**
     * @param array $ids
     * @return int
     */
    public function actionIndex(array $ids): int
    {
        $notes = Note::findAll(['id' => $ids]);
        foreach ($notes as $note) {
            if ($this->mode === 'ids') {
                echo $note->id;
            } else {
                echo $note->text;
            }

            echo \PHP_EOL;
        }

        return ExitCode::OK;
    }

    public function options($actionID): array
    {
        if ($actionID === 'index') {
            return [
                'mode',
            ];
        }

        return parent::options($actionID);
    }
}