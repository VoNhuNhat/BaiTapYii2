<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Exp */

$this->title = 'Create Exp';
$this->params['breadcrumbs'][] = ['label' => 'Exps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
