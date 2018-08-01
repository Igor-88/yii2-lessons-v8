<?php

use app\models\Product;
use yii\widgets\ActiveForm;

/* @var $model Product */

?>
<h1>Hello!!!</h1>

<?php $form = ActiveForm::begin([
    'method' => 'get',
    'options' => [
        'data foo' => 777,
    ]
]);?>
    <?=$form->field($model, 'name');?>
    <?=$form->field($model, 'count')->label('Set some count');?>
    <?=\yii\helpers\Html::submitButton('submit');?>
<?php ActiveForm::end()?>