<?php
/**
 * Created by PhpStorm.
 * User: Игорь-64
 * Date: 05.09.2018
 * Time: 16:20
 */

namespace app\commands;

use app\models\UserLog;
use yii\console\Controller;
use yii\console\ExitCode;
use yii\helpers\Console;

class UserLogController extends Controller
{
    public $defaultAction = 'clean';

    /**
     * @return int
     * @throws \Throwable
     * @throws \yii\db\StaleObjectException
     */
    public function actionClean(): int
    {
        $total = UserLog::find()->count('id');

        Console::startProgress(0, $total);

        foreach (UserLog::find()->each() as $index => $model) {

            /** @var $model UserLog */
            $model->delete();
            Console::updateProgress($index+1, $total);
        }

        Console::endProgress();

        return ExitCode::OK;

    }
}