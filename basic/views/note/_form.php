<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\form\NoteForm */
/* @var $form yii\widgets\ActiveForm */

$items = \yii\helpers\BaseArrayHelper::map(\app\models\User::find()->all(), 'id', 'name');
?>

<div class="note-form">

    <?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

	<?= $form->field($model, 'grantedTo')->dropDownList($items, [
			'multiple' => true,
	]);?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
