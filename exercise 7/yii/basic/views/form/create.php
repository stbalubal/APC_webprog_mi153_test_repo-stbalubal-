<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Form */

$this->title = 'Create Form';
$this->params['breadcrumbs'][] = ['label' => 'users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('form', [
        'model' => $model,
    ]) ?>

</div>
