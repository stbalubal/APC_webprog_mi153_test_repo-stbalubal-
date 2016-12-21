<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FormSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-search">

    <?php $users = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $users->field($model, 'user_id') ?>

    <?= $users->field($model, 'name') ?>

    <?= $users->field($model, 'nickname') ?>

    <?= $users->field($model, 'email') ?>

    <?= $users->field($model, 'home') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'number') ?>

    <?php // echo $form->field($model, 'comment') ?>

    <div class="users-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
