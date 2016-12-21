<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Form */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-users">

    <?php $users = ActiveForm::begin(); ?>

    <?= $users->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $users->field($model, 'nickname')->textInput(['maxlength' => true]) ?>

    <?= $users->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $users->field($model, 'home')->textInput(['maxlength' => true]) ?>

    <?= $users->field($model, 'gender')->textInput(['maxlength' => true]) ?>

    <?= $users->field($model, 'number')->textInput(['maxlength' => true]) ?>

    <?= $users->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <div class="users-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
